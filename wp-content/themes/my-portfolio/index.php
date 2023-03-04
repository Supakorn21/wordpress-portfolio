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
        $permalink = $myPod->field('permalink');
        $project_url = $myPod->field('project_url');
        $github_url = $myPod->field('github_url');
        $tech_icon_1 = $myPod->field('tech_icon_1');
        $tech_icon_2 = $myPod->field('tech_icon_2');
        $tech_icon_3 = $myPod->field('tech_icon_3');
        $tech_icon_4 = $myPod->field('tech_icon_4');
        $youtube_url = $myPod->field('youtube_url');
        $type_of_project = $myPod->field('type_of_project');

        $row = $myPod->row();
        $post_id = $row['ID'];
        if (!function_exists('get_post_featured_image')) {
          function get_post_featured_image($post_id, $size)
          {
            $return_array = [];
            $image_id = get_post_thumbnail_id($post_id);
            $image = wp_get_attachment_image_src($image_id, $size);
            $image_url = $image[0];
            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
            $image_post = get_post($image_id);
            $image_caption = $image_post->post_excerpt;
            $image_description = $image_post->post_content;
            $return_array['id'] = $image_id;
            $return_array['url'] = $image_url;
            $return_array['alt'] = $image_alt;
            $return_array['caption'] = $image_caption;
            $return_array['description'] = $image_description;
            return $return_array;
          }
        }
        $image_properties = get_post_featured_image($post_id, 'full');

      ?>
        <a href="<?php echo $permalink ?>" class="box image<?php echo $loopIndex + 1 ?>">
          <div class="image" style="background: url('<?php echo $image_properties['url']; ?>' ); height: 100%; width: 100%; background-size: cover ; background-position: center center ; background-repeat: no-repeat ;">
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
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <!-- start of post -->
          <a href="<?php the_permalink(); ?>" class="post post_<?php the_ID(); ?>">
            <div class="post-img" style="background: url('<?php the_post_thumbnail_url('medium'); ?>');"></div>
            <div class="details">
              <h4><?php the_title(); ?></h4>
              <p> <?php the_excerpt(); ?></p>


            </div>
            <div class="more">
              <div class="button">
                Read More
              </div>
            </div>
          </a>
          <!-- end of post -->
        <?php endwhile; ?>
      <?php else : ?>
        <div>
          <h1>Blogs Coming Soon</h1>
        </div>
      <?php endif; ?>


    </div>
  </div>
</section>
<section id="testimonials-section">
  <div class="container">
    <div class="title">
      <div class="square"></div>
      <h1>Testimonials</h1>
    </div>

    <div id="testimonials-app"></div>

  </div>
</section>
<?php get_footer(); ?>