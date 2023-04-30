 <footer>
     <div class="social-container">
         <?php
            $mypods = pods('footer');
            $mypods->find("name ASC");
            ?>

         <?php while ($mypods->fetch()) : ?>
         <?php
                $icon1 = $mypods->field('footer_icon_1');
                $icon2 = $mypods->field('footer_icon_2');
                $icon3 = $mypods->field('footer_icon_3');
                $icon4 = $mypods->field('footer_icon_4');
                $fullName = $mypods->field('full_name');
                $role = $mypods->field('your_role');
                $name = $mypods->field('name');
                $content = $mypods->field('content');
                $permalink = $mypods->field('permalink');

                ?>
         <?php
                if (isset($icon1)) {
                    echo "<a target='_blank' href='http://www.{$icon1}.com/'><i class='fab fa-{$icon1}'></i></a>";
                }
                if (isset($icon2)) {
                    echo "<a target='_blank' href='http://www.{$icon2}.com/'><i class='fab fa-{$icon2}'></i></a>";
                }
                if (isset($icon3)) {
                    echo "<a target='_blank' href='http://www.{$icon3}.com/'><i class='fab fa-{$icon3}'></i></a>";
                }
                if (isset($icon4)) {
                    echo "<a target='_blank' href='http://www.{$icon4}.com/'><i class='fab fa-{$icon4}'></i></a>";
                }
                ?>
     </div>
     <h5><?php echo $fullName ?></h5>
     <h6><?php echo $role ?></h6>
     <?php endwhile ?>

 </footer>

 <script type="module" src="<?php echo get_bloginfo("template_directory"); ?>/js/app.js"></script>

 <?php wp_footer(); ?>
 </body>

 </html>