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

axios.get("/wp-json/wp/v2/testimonials").then((response) => {
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

  axios.all([getImage0(), getImage1(), getImage2()]).then(
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
        })
      );
    })
  );

  console.log(postImages);
});
