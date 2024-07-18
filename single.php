<?php get_header()?>


<?php if(have_posts()) : while(have_posts()) : the_post() ?>

<section class="hero">
      <div class="container">
        <div class="hero__grid">
             <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } 
                    ?>
          <div class="hero__content">
            <small>Trending News</small>
            <h1>
              <?php the_title()?>
            </h1>
          </div>
        </div>
      </div>
</section>
            


<section class="blog py--2">
      <div class="container">
        <div class="blog__story">
          <div class="blog__grid">
            <article>
              <h3>
                <?php the_title()?>
              </h3>
              <p>
                <?php the_content()?>
              </p>
              
            </article>

            <div class="blog__info">
              <ul>
                <li>Published: <span><?php the_date()?></span></li>
                <li>Author: <span><?php echo get_the_author_meta('first_name')?></span></li>
                <li>Category: <span><?php echo get_the_category()[0]->name?></span></li>
                <li>Tag:<span>Fashion, Hot, Fresh</span></li>
                <li>Time: <span><?php echo get_post_meta(get_the_ID(),'reading', true)?></span></li>
              </ul>
              <p>Share this Article</p>
              <ul class="icons d--flex">
                <li class="mr--1">
                  <a href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li class="mr--1">
                  <a href="#"><i class="fab fa-twitter-square"></i></a>
                </li>
                <li class="mr--1">
                  <a href="#"><i class="fab fa-instagram-square"></i></a>
                </li>
                <li class="mr--1">
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
</section>

<?php 
                endwhile;
            else: 
                echo "no post";
            endif;
            wp_reset_postdata();
              ?>






<section class="related py--5">
      <div class="container">
        <h2 class="block__header">More Related Articles</h2>
        <div class="related__grid">

        <?php 
                    $related = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'meta_key' => 'grouping',
                        'meta_value' => 'related'
                    ))
                ?>
                <?php if($related->have_posts()) : while($related->have_posts()) : $related->the_post() ?>
          <article class="card card--md related">
          <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail('', array(
                                'alt' => get_the_title()
                            ));
                        }
                    ?>
            <ul class="card__info">
              <li>
                <span class="date"><?php the_date()?></span>
                <span class="dot"></span>
                <span class="time"><?php echo get_post_meta(get_the_ID(),'reading', true)?></span>
              </li>
              <li>By:<?php echo get_the_author_meta('first_name')?></li>
            </ul>
            <h2>Lorem ipsum dolor sit amet, consectetur expedita deleniti</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ea
              est dolorem nam, quibusdam provident amet enim cum iusto, velit
              quidem facilis consequatur laborum blanditiis, atque ex eius
              dignissimos eaque! Eius temporibus quibusdam neque et veritatis
              sequi, id, tempore ad numquam cupiditate totam praesentium
              aspernatur.
            </p>
            <a href="#">Read More</a>
          </article>
          <?php 
                endwhile;
            else: 
                echo "no post";
            endif;
            wp_reset_postdata();
              ?>
        </div>
      </div>
</section>



<section class="subscribe">
      <div class="container">
        <div class="subscribe__wrapper">
          <h2>Subscribe to get more</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque,
            tempore magni voluptate quam illum id ad temporibus itaque fuga
            necessitatibus
          </p>

          <ul class="d--flex justify--center">
            <li class="mx--1">
              <a href="#" class="btn btn--light">Subscribe Now</a>
            </li>
            <li class="mx--1">
              <a href="#" class="btn btn--outline">Leader More</a>
            </li>
          </ul>
        </div>
      </div>
</section>




<?php get_footer()?>