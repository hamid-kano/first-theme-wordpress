<?php get_header(); ?>
<div class="homepage page">
        <ul class="featured-slider category carousel"
                data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "rtl": true, "dots": true, "autoplay": true, "autoplaySpeed": 5000}'>

                        <?php
                    $popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'AESC'  ) );
                        while ( $popularpost->have_posts() ) : $popularpost->the_post();
                        ?>

                    <li class="item"> <a
                        href="<?php the_permalink(); ?>"
                        style="background-image:  url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                        <h2> <?php the_title();?></h2>
                    </a> </li>
                        <?php
                        endwhile;
                        ?>

            </ul>
            <div class="main-container">

            </div>
        </div>



        



                    
    <?php get_footer(); ?>




    <style>
.latest-news .content ul li span:before
   {content: ''; width: 18px; height: 18px; display: inline-block; background: url('<?php  bloginfo('template_url') ?>/images/clock.png') no-repeat center; background-size: contain; margin: 0 0 0 10px; position: relative; top: 4px}
 </style>