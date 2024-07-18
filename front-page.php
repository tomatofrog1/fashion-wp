<?php get_header()?>

<section class="latest ">
        <div class="container">
            <div class="latest__grid">
                 <?php 
                    $main = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'banner-main'
                    ))
                ?>
                <?php if($main->have_posts()) : while($main->have_posts()) : $main->the_post() ?>

                <div class="latest__main">
                    <article class="card card--md latest--md">
                    <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } 
                    ?>
                        <ul class="card__info">
                            <li>
                                <span class="date"><?php the_date()?></span>
                                <span class="dot"></span> 
                                <span class="time"><?php echo get_post_meta(get_the_ID(),'reading', true)?></span> 
                            </li>
                            <li>
                               By: <?php echo get_the_author_meta('first_name')?>
                            </li>
                        </ul>
                        <h2><?php the_title()?></h2>
                        <p>
                        <?php echo wp_trim_words(get_the_content(), 20)?>
                        </p>
                        <a href="<?php the_permalink()?>" class="read_more">Read More...</a>
                    </article>
                </div>

                <?php 
                endwhile;
            else: 
                echo "no post";
            endif;
            wp_reset_postdata();
              ?>



                

                <div class="latest__side">
                <?php 
                    $mainside = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'meta_key' => 'grouping',
                        'meta_value' => 'banner-mainside'
                    ))
                ?>
                <?php if($mainside->have_posts()) : while($mainside->have_posts()) : $mainside->the_post() ?>
                    <article class="card card--sm latest--sm">
                    <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } 
                    ?>
                        <ul class="card__info">
                            <li>
                                <span class="date"><?php the_date()?></span>
                                <span class="dot"></span> 
                                <span class="time"><?php echo get_post_meta(get_the_ID(),'reading', true)?></span> 
                            </li>
                            <li>
                                By: <?php echo get_the_author_meta('first_name')?>
                            </li>
                        </ul>
                        <h4><?php the_title()?></h4>
                        <p>
                        <?php echo wp_trim_words(get_the_content(), 20)?>
                        </p>
                        <a href="<?php the_permalink()?>" class="read_more">Read More...</a>
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
        </div>
</section>

<section class="trending py--10">
        <div class="container">
            <h2 class="block__header align--left">Hot Trending Arcticle</h2>

            <?php 
                    $trending = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'meta_key' => 'grouping',
                        'meta_value' => 'trending'
                    ))
                ?>
                <?php if($trending->have_posts()) : while($trending->have_posts()) : $trending->the_post() ?>
            <div class="trending__card card card--full">
                <ul class="card__info--full">
                    <li><small><?php echo get_the_category()[0]->name?></small></li>
                    <li><span><?php the_date()?></span>  <span>by: <?php echo get_the_author_meta('first_name')?></span></li>
                </ul>
                <h3><?php the_title()?></h3>
                <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail('', array(
                                'alt' => get_the_title()
                            ));
                        }
                    ?>
            </div>
            <?php 
                endwhile;
            else: 
                echo "no post";
            endif;
            wp_reset_postdata();
              ?>
        </div>
</section>

<section class="story py--5">
        <div class="container">
            <h2 class="block__header align--center">The Latest Stories</h2>

            <div class="story__grid">

            <?php 
                    $storya = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'storya'
                    ))
                ?>
                <?php if($storya->have_posts()) : while($storya->have_posts()) : $storya->the_post() ?>
                <article class="card card--xs story-a">
                <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } 
                    ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php the_date()?></span>
                            <span class="dot"></span> 
                            <span class="time"><?php echo get_post_meta(get_the_ID(),'reading', true)?></span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?>
                        </li>
                    </ul>
                    <h4><?php the_title()?></h4>
                    <a href="<?php the_permalink()?>" class="read_more">Read More...</a>
                </article>
                <?php 
                endwhile;
            else: 
                echo "no post";
            endif;
            wp_reset_postdata();
              ?>
              <?php 
                    $storyb = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'storyb'
                    ))
                ?>
                <?php if($storyb->have_posts()) : while($storyb->have_posts()) : $storyb->the_post() ?>
                <article class="card card--xs story-b">
                <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } 
                    ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php the_date()?></span>
                            <span class="dot"></span> 
                            <span class="time"><?php echo get_post_meta(get_the_ID(),'reading', true)?></span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?>
                        </li>
                    </ul>
                    <h4><?php the_title()?></h4>
                    <a href="<?php the_permalink()?>" class="read_more">Read More...</a>
                </article>
                <?php 
                endwhile;
            else: 
                echo "no post";
            endif;
            wp_reset_postdata();
              ?>
              <?php 
                    $storyc = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'storyc'
                    ))
                ?>
                <?php if($storyc->have_posts()) : while($storyc->have_posts()) : $storyc->the_post() ?>
                <article class="card card--xs story-c">
                <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } 
                    ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php the_date()?></span>
                            <span class="dot"></span> 
                            <span class="time"><?php echo get_post_meta(get_the_ID(),'reading', true)?></span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?>
                        </li>
                    </ul>
                    <h4><?php the_title()?></h4>
                    <a href="<?php the_permalink()?>" class="read_more">Read More...</a>
                </article>
                <?php 
                endwhile;
            else: 
                echo "no post";
            endif;
            wp_reset_postdata();
              ?>
              <?php 
                    $storyd = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'storyd'
                    ))
                ?>
                <?php if($storyd->have_posts()) : while($storyd->have_posts()) : $storyd->the_post() ?>
                <article class="card card--xs story-d">
                <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } 
                    ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php the_date()?></span>
                            <span class="dot"></span> 
                            <span class="time"><?php echo get_post_meta(get_the_ID(),'reading', true)?></span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?>
                        </li>
                    </ul>
                    <h4><?php the_title()?></h4>
                    <a href="<?php the_permalink()?>" class="read_more">Read More...</a>
                </article>
                <?php 
                endwhile;
            else: 
                echo "no post";
            endif;
            wp_reset_postdata();
              ?>
              <?php 
                    $storye = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'storye'
                    ))
                ?>
                <?php if($storye->have_posts()) : while($storye->have_posts()) : $storye->the_post() ?>
                <article class="card card--xs story-e">
                <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } 
                    ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php the_date()?></span>
                            <span class="dot"></span> 
                            <span class="time"><?php echo get_post_meta(get_the_ID(),'reading', true)?></span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?>
                        </li>
                    </ul>
                    <h4><?php the_title()?></h4>
                    <a href="<?php the_permalink()?>" class="read_more">Read More...</a>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, tempore magni voluptate quam illum id ad temporibus itaque fuga necessitatibus</p>

                <ul class="d--flex justify--center">
                    <li class="mx--1"><a href="#" class="btn btn--light">Subscribe Now</a></li>
                    <li class="mx--1"><a href="#" class="btn btn--outline">Leader More</a></li>
                </ul>
            </div>
        </div>
</section>


<?php get_footer()?>