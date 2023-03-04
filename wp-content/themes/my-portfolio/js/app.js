var menuBtn = document.getElementsByClassName("menu-btn");
var mobileMenu = document.getElementsByClassName("mobile-menu");
var clickedBtn = function () {
  mobileMenu[0].classList.toggle("active");
};

menuBtn[0].addEventListener("click", clickedBtn);

console.log(menuBtn[0]);

/*------------------ Testimonials----------------------- */

import { html, render } from "https://unpkg.com/lit-html?module";

let postData = [];
let postImages = [];
let findImageById = (id) => {
  let Image = postImages.filter((item) => item.id == id);

  return Image[0].image;
};

axios
  .get("/wp-json/wp/v2/testimonials")
  .then((response) => {
    let postIds = [];
    postData = response.data;
    // loop Over all posts get the id of each and push into array
    postData.map((item) => {
      return postIds.push(item.id);
    });

    let getImage0 = () => {
      return axios.get("/wp-json/wp/v2/media?parent=" + postIds[0]);
    };
    let getImage1 = () => {
      return axios.get("/wp-json/wp/v2/media?parent=" + postIds[1]);
    };
    let getImage2 = () => {
      return axios.get("/wp-json/wp/v2/media?parent=" + postIds[2]);
    };

    axios
      .all([getImage0(), getImage1(), getImage2()])
      .then(
        axios.spread((image0, image1, image2) => {
          return (
            postImages.push({
              id: postIds[0],
              image: image0.data[0].media_details.sizes.medium.source_url,
            }),
            postImages.push({
              id: postIds[1],
              image: image1.data[0].media_details.sizes.medium.source_url,
            }),
            postImages.push({
              id: postIds[2],
              image: image2.data[0].media_details.sizes.medium.source_url,
            }),
            initApp(response),
            console.log(postImages)
          );
        })
      )
      .catch((err) => {
        // handle error
        console.log(err);
      });
  })
  .catch((err) => {
    // handle error
    console.log(err);
  });

let initApp = (data) => {
  let testimonialsData = data.data;
  Array.prototype.swap = function (x, y) {
    let b = this[x];
    this[x] = this[y];
    this[y] = b;
    return this;
  };

  let clickedLeft = () => {
    postData.swap(1, 0);
    render(appTemplate(postData), document.getElementById("testimonials-app"));
  };
  let clickedRight = () => {
    postData.swap(1, 2);
    render(appTemplate(postData), document.getElementById("testimonials-app"));
  };

  let decodeEntities = (encodedString) => {
    let div = document.createElement("div");
    div.innerHTML = encodedString;
    return div.textContent;
  };

  const appTemplate = (data) => html` <div class="testimonials-container">
    <div class="test-sides test-left" @click=${(e) => clickedLeft()}>
      <div
        class="person-img"
        style="background: url('${findImageById(data[0].id)}');"
      >
        <div class="hover-bg">
          <div class="name">${data[0].f_name}</div>
        </div>
      </div>
    </div>
    <div class="test-center">
      <div class="header">
        <div
          class="user-img"
          style="background: url('${findImageById(data[1].id)}')"
        ></div>
        <div class="info">
          <h4>${data[1].title.rendered}</h4>
          <span>${data[1].user_title}</span>
        </div>
      </div>
      <p>${decodeEntities(data[1].content.rendered)}</p>
    </div>
    <div class="test-sides test-right" @click=${(e) => clickedRight()}>
      <div
        class="person-img"
        style="background: url('${findImageById(data[2].id)}')"
      >
        <div class="hover-bg">
          <div class="name">${data[2].f_name}</div>
        </div>
      </div>
    </div>
  </div>`;
  render(appTemplate(postData), document.getElementById("testimonials-app"));
};
