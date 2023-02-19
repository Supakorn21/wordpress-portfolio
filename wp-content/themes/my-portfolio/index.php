<?php get_header(); ?>
<section id="top">
  <div class="container">
    <div class="info">
      <div class="blue-square"></div>
      <h1>Joe Santos Garcia</h1>
      <p>Web Developer</p>
      <a href="#">Latest Works</a>
    </div>
    <div class="img">
      <div class="background-img">

      </div>
    </div>
  </div>
</section>
<section id="services-section">
  <div class="container">
    <div class="title">
      <div class="circle"></div>
      <h1>services</h1>
    </div>
    <div class="services-container">
      <?php
      $mypods = pods('service');
      $mypods->find("name ASC");
      ?>

      <?php while ($mypods->fetch()) : ?>
        <?php
        $name = $mypods->field('name');
        $content = $mypods->field('content');
        $permalink = $mypods->field('permalink');
        $icon_class = $mypods->field('icon_class');
        $border_color = $mypods->field('border_color');
        ?>
        <div class="box <?php echo $border_color ?>">
          <i class="<?php echo $icon_class ?>"></i>
          <h5><?php echo $name ?></h5>
          <p><?php echo $content ?></p>
        </div>
      <?php endwhile ?>

    </div>
  </div>
</section>
<section id="portfolio-section">
  <div class="container">
    <div class="title">
      <div class="square"></div>
      <h1>portfolio</h1>
    </div>
    <div class="portfolio-container">

      <?php
      $myPod = pods('project');
      $myPod->find("project_url ASC");

      for ($loopIndex = 0; $loopIndex < $myPod->total(); $loopIndex++) {
        $myPod->fetch();

        $name = $myPod->field('name');
        $content = $myPod->field('content');
        $project_url = $myPod->field('project_url');
        $github_url = $myPod->field('github_url');
        $tech_icon_1 = $myPod->field('tech_icon_1');
        $tech_icon_2 = $myPod->field('tech_icon_2');
        $tech_icon_3 = $myPod->field('tech_icon_3');
        $tech_icon_4 = $myPod->field('tech_icon_4');
        $youtube_url = $myPod->field('youtube_url');
        $type_of_project = $myPod->field('type_of_project');

      ?>
        <a href="portfoli/#" class="box image<?php echo $loopIndex + 1 ?>">
          <div class="image" style="background: url(' https://cdn.dribbble.com/users/107759/screenshots/3775823/angled-down-3.gif' ); height: 100%; width: 100%; background-size: cover ; background-position: center center ; background-repeat: no-repeat ;">
            <div class="hover-bg">
              <div class="title">
                <div class="text"><?php echo $type_of_project ?></div>
              </div>
            </div>
          </div>
        </a>
      <?php
      }
      ?>

    </div>
  </div>
</section>
<section id="experience-section">
  <div class="container">
    <div class="large-title">
      Experience
    </div>
    <div class="experience-container">
      <div class="large-icons">
        <div class="square">
          <div class="blue-box">
            Experience
          </div>
        </div>
        <div class="circle">
          <div class="white-box">
            AWARDS
          </div>
        </div>
        <div class="triangle">
          <div class="triangle-box">
            <div class="text">Work</div>
          </div>
        </div>
      </div>
      <div class="info">
        <?php
        $exPods = pods('experience');
        $exPods->find("start_end_date ASC");
        ?>
        <?php while ($exPods->fetch()) : ?>
          <?php
          $name = $exPods->field('name');
          $content = $exPods->field('content');
          $location = $exPods->field('location');
          $start_end_date = $exPods->field('start_end_date');
          ?>
          <div class="info-box">
            <h4><?php echo $name; ?> - <?php echo $location; ?></h4>
            <span class="date"><?php echo $start_end_date ?></span>
            <p><?php echo $content ?> </p>
          </div>
        <?php endwhile ?>
      </div>
    </div>
  </div>
</section>
<section id="blog-section">
  <div class="container">
    <div class="title">
      <h1>Blog</h1>
    </div>
    <div class="blog-container">
      <!-- start of post -->
      <a href="blog/#" class="post">
        <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
        <div class="details">
          <h4>Top 10 Javascript Frameworks</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="more">
          <div class="button">
            Read More
          </div>
        </div>
      </a>
      <!-- end of post -->
      <!-- start of post -->
      <a href="blog/#" class="post">
        <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
        <div class="details">
          <h4>Top 10 Javascript Frameworks</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="more">
          <div class="button">
            Read More
          </div>
        </div>
      </a>
      <!-- end of post -->
      <!-- start of post -->
      <a href="blog/#" class="post">
        <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
        <div class="details">
          <h4>Top 10 Javascript Frameworks</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="more">
          <div class="button">
            Read More
          </div>
        </div>
      </a>
      <!-- end of post -->
      <!-- start of post -->
      <a href="blog/#" class="post">
        <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
        <div class="details">
          <h4>Top 10 Javascript Frameworks</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="more">
          <div class="button">
            Read More
          </div>
        </div>
      </a>
      <!-- end of post -->
      <!-- start of post -->
      <a href="blog/#" class="post">
        <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
        <div class="details">
          <h4>Top 10 Javascript Frameworks</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="more">
          <div class="button">
            Read More
          </div>
        </div>
      </a>
      <!-- end of post -->
      <!-- start of post -->
      <a href="blog/#" class="post">
        <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
        <div class="details">
          <h4>Top 10 Javascript Frameworks</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="more">
          <div class="button">
            Read More
          </div>
        </div>
      </a>
      <!-- end of post -->
    </div>
  </div>
</section>
<section id="testimonials-section">
  <div class="container">
    <div class="title">
      <div class="square"></div>
      <h1>Testimonials</h1>
    </div>
    <div class="testimonials-container">
      <div class="test-sides test-left">
        <div class="person-img" style="background: url('https://d3iw72m71ie81c.cloudfront.net/male-30.jpg');">
          <div class="hover-bg">
            <div class="name">James</div>
          </div>
        </div>
      </div>
      <div class="test-center">
        <div class="header">
          <div class="user-img" style="background: url('https://d3iw72m71ie81c.cloudfront.net/8912fe22-7970-4e15-a3a1-abef9f2fb4b5')">

          </div>
          <div class="info">
            <h4>Jenny Benzino</h4>
            <span>CEO, Nike</span>
          </div>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="test-sides test-right">
        <div class="person-img" style="background: url('https://d3iw72m71ie81c.cloudfront.net/88b95197-fd1e-4e11-8793-2903a5cfd06e-10584053_10153749310922416_3125632463004974493_n.jpg')">
          <div class="hover-bg">
            <div class="name">Bryant</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>