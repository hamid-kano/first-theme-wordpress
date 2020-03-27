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
                <div class="col-right desktop">
                
                    <div class="news">
                       
                       <?php 
                        $args = array(
                            'numberposts' => 10,
                            'category'     => 0
                          );
                           
                          $posts = get_posts( $args );
                         ?> 
                        <h2><a href="/الأخبار">الأخبار</a></h2>
                        <ul>
                           <?php $post= $posts[0]; ?>
                            <li> <a
                                    href="<?php the_permalink(); ?>">
                                    <span><?php the_time('d M Y');?></span>
                                    <h4><?php the_title();?></h4>
                                </a> </li>
                                <?php $post= $posts[1]; ?>
                                <li> <a
                                    href="<?php the_permalink(); ?>">
                                    <span><?php the_time('d M Y');?></span>
                                    <h4><?php the_title();?></h4>
                                </a> </li>
                                <?php $post= $posts[2]; ?>
                                <li> <a
                                    href="<?php the_permalink(); ?>">
                                    <span><?php the_time('d M Y');?></span>
                                    <h4><?php the_title();?></h4>
                                </a> </li>
                                <?php $post= $posts[3]; ?>
                                <li> <a
                                    href="<?php the_permalink(); ?>">
                                    <span><?php the_time('d M Y');?></span>
                                    <h4><?php the_title();?></h4>
                                </a> </li>
                        </ul>
                    </div>
                    <div class="mostread-component">
                        <h2><a href="/الأكثر-قراءة">الأكثر قراءة</a></h2>
                        <ul>



                        <?php 
                        $popularpost = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
                        while ( $popularpost->have_posts() ) : $popularpost->the_post();
                        ?>

                        <li> <a
                            href="<?php the_permalink(); ?>">
                            <figure
                                style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                            </figure>
                        </a> <a
                            href="<?php the_permalink(); ?>">
                            <h3><?php the_category(', ');?></h3>
                        </a> <a
                            href="<?php the_permalink(); ?>">
                            <h4>  <?php the_title();?> </h4>
                        </a>
                        </li>
                        <?php
                        endwhile;
                        ?>













                     </ul>
                    </div>
                </div>
                <div class="col-left">
               
                   
                    <div class="featured">
                        <?php 
                        
                        $args = array(
                            'numberposts' => 10
                          );
                           
                          $posts = get_posts( $args );
                         ?>
                        <?php $post= $posts[0]; ?>
                        <article class="article-1"> 
                            <a
                                href="<?php the_permalink(); ?>">
                                <figure
                                    style="background-image:url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                </figure>
                            </a> <a
                                href="<?php the_permalink(); ?>">
                                <div class="content">
                                    <h3><?php the_title();?>
                                    </h3>
                                    <h4><?php the_author_posts_link(); ?></h4>
                                </div>
                            </a> </article>
                            <?php $post= $posts[1]; ?>
                        <article class="article-1">  <a
                                href="<?php the_permalink(); ?>">
                                <figure
                                    style="background-image:url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                </figure>
                            </a> <a
                                href="<?php the_permalink(); ?>">
                                <div class="content">
                                    <h3><?php the_title();?>
                                    </h3>
                                    <h4><?php the_author_posts_link(); ?></h4>
                                </div>
                            </a> </article>
                            <?php $post= $posts[2]; ?>
                        
                            <article class="article-2 article separate">   <a
                                href="<?php the_permalink(); ?>">
                                <figure
                                    style="background-image:url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                </figure>
                            </a> <a
                                href="<?php the_permalink(); ?>">
                                <div class="content">
                                    
                                    <h4><?php the_author_posts_link(); ?></h4>
                                    <h3><?php the_title();?>
                                    </h3>
                                </div>
                            </a> </article>
                            <?php $post= $posts[3]; ?>
                        <article class="article-2 article separate">  <a
                                href="<?php the_permalink(); ?>">
                                <figure
                                    style="background-image:url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                </figure>
                            </a> <a
                                href="<?php the_permalink(); ?>">
                                <div class="content">
                                    
                                    <h4><?php the_author_posts_link(); ?></h4>
                                    <h3><?php the_title();?>
                                    </h3>
                                </div>
                            </a> </article>
                            <?php $post= $posts[4]; ?>
                        <article class="article-2 article separate">  <a
                                href="<?php the_permalink(); ?>">
                                <figure
                                    style="background-image:url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                </figure>
                            </a> <a
                                href="<?php the_permalink(); ?>">
                                <div class="content">
                                    
                                    <h4><?php the_author_posts_link(); ?></h4>
                                    <h3><?php the_title();?>
                                    </h3>
                                </div>
                            </a> </article>
                            <?php $post= $posts[5]; ?>
                        <div class="clear"></div>
                        <article class="article-2 article">  <a
                                href="<?php the_permalink(); ?>">
                                <figure
                                    style="background-image:url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                </figure>
                            </a> <a
                                href="<?php the_permalink(); ?>">
                                <div class="content">
                                    
                                    <h4><?php the_author_posts_link(); ?></h4>
                                    <h3><?php the_title();?>
                                    </h3>
                                </div>
                            </a> </article>
                            <?php $post= $posts[6]; ?>
                        <article class="article-2 article">  <a
                                href="<?php the_permalink(); ?>">
                                <figure
                                    style="background-image:url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                </figure>
                            </a> <a
                                href="<?php the_permalink(); ?>">
                                <div class="content">
                                    
                                    <h4><?php the_author_posts_link(); ?></h4>
                                    <h3><?php the_title();?>
                                    </h3>
                                </div>
                            </a> </article>
                            <?php $post= $posts[7]; ?>
                        <article class="article-2 article">  <a
                                href="<?php the_permalink(); ?>">
                                <figure
                                    style="background-image:url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                </figure>
                            </a> <a
                                href="<?php the_permalink(); ?>">
                                <div class="content">
                                    
                                    <h4><?php the_author_posts_link(); ?></h4>
                                    <h3><?php the_title();?>
                                    </h3>
                                </div>
                            </a> </article>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="opinions-component desktop">
                <div class="main-container">
                    <div class="col-right"> <a href="#" class="more">المزيد</a> <a href="/رأي"><img
                                src="https://s.raseef22.com/assets/images/opinions-bg.jpg" width="100%" /></a> </div>
                    <div class="col-left">
                      
                        <?php
                                $categories=get_categories();
                               
                                    $args=array(
                                    'showposts' => 3,
                                    'category__in' => array($categories[1]->term_id),
                                    'caller_get_posts'=>1
                                    );
                                    $posts=get_posts($args);
                                       
                      ?>

                                      <?php $post=$posts[0]; ?>
                                       <article> <a
                                       href="<?php the_permalink(); ?>">
                                       <figure class="article-fig"
                                       style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: center; background-size: cover">
                                       </figure>
                                       </a>
                                       <div class="content"> <a
                                       href="<?php the_permalink(); ?>">
                                       <h3><?php the_title();?></h3>
                                       <figure class="author"
                                       style="background-image: url('../wordpress/wp-content/uploads/2020/03/<?php echo get_the_author_meta( 'ID' ); ?>.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover">
                                        </figure>
                                        <h4><?php the_author_posts_link(); ?><span>-</span></h4> <span><?php the_time('d M Y');?></span>
                                       </a> </div>
                                       </article>


                                       <?php $post=$posts[1]; ?>
                                       <article> <a
                                       href="<?php the_permalink(); ?>">
                                       <figure class="article-fig"
                                       style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: center; background-size: cover">
                                       </figure>
                                       </a>
                                       <div class="content"> <a
                                       href="<?php the_permalink(); ?>">
                                       <h3><?php the_title();?></h3>
                                       <figure class="author"
                                       style="background-image: url('../wordpress/wp-content/uploads/2020/03/<?php echo get_the_author_meta( 'ID' ); ?>.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover">
                                        </figure>
                                        <h4><?php the_author_posts_link(); ?><span>-</span></h4> <span><?php the_time('d M Y');?></span>
                                       </a> </div>
                                       </article>



                                       <?php $post=$posts[2]; ?>
                                       <article> <a
                                       href="<?php the_permalink(); ?>">
                                       <figure class="article-fig"
                                       style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: center; background-size: cover">
                                       </figure>
                                       </a>
                                       <div class="content"> <a
                                       href="<?php the_permalink(); ?>">
                                       <h3><?php the_title();?></h3>
                                       <figure class="author"
                                       style="background-image: url('../wordpress/wp-content/uploads/2020/03/<?php echo get_the_author_meta( 'ID' ); ?>.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover">
                                        </figure>
                                        <h4><?php the_author_posts_link(); ?><span>-</span></h4> <span><?php the_time('d M Y');?></span>
                                       </a> </div>
                                       </article>


                    </div>
                </div>
            </div>
            <div class="news mobile">
                <h2><a href="/الأخبار">الأخبار</a></h2>
                <ul>
                           <?php $post= $posts[0]; ?>
                            <li> <a
                                    href="<?php the_permalink(); ?>">
                                    <span><?php the_time('d M Y');?></span>
                                    <h4><?php the_title();?></h4>
                                </a> </li>
                                <?php $post= $posts[1]; ?>
                                <li> <a
                                    href="<?php the_permalink(); ?>">
                                    <span><?php the_time('d M Y');?></span>
                                    <h4><?php the_title();?></h4>
                                </a> </li>
                                <?php $post= $posts[2]; ?>
                                <li> <a
                                    href="<?php the_permalink(); ?>">
                                    <span><?php the_time('d M Y');?></span>
                                    <h4><?php the_title();?></h4>
                                </a> </li>
                                <?php $post= $posts[3]; ?>
                                <li> <a
                                    href="<?php the_permalink(); ?>">
                                    <span><?php the_time('d M Y');?></span>
                                    <h4><?php the_title();?></h4>
                                </a> </li>
                        </ul>
            </div>
            <div class="mostread-component mobile">
                <h2><a href="/الأكثر-قراءة">الأكثر قراءة</a></h2>
                <ul>



                <?php 
                        $popularpost = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
                        while ( $popularpost->have_posts() ) : $popularpost->the_post();
                        ?>

                        <li> <a
                            href="<?php the_permalink(); ?>">
                            <figure
                                style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                            </figure>
                        </a> <a
                            href="<?php the_permalink(); ?>">
                            <h3><?php the_category(', ');?></h3>
                        </a> <a
                            href="<?php the_permalink(); ?>">
                            <h4>  <?php the_title();?> </h4>
                        </a>
                        </li>
                        <?php
                        endwhile;
                        ?>







                </ul>
            </div>
            <div class="main-container life">
                <div class="col-right desktop">
                    <div class="latest-news">
                        <div class="content">
                            <?php dynamic_sidebar('Recent Posts'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-left">



                               <?php
                                //for each category, show 5 posts
                              //  $cat_args=array(
                               // 'orderby' => 'name',
                              //  'order' => 'ASC'
                               // );
                               // $categories=get_categories($cat_args);
                               $categories=get_categories();
                                
                                for ($x = 0; $x <= count($categories); $x++) {
                                   // foreach($categories as $category) { 
                                    $args=array(
                                    'showposts' => 6,
                                    'category__in' => array($categories[$x]->term_id),
                                    'caller_get_posts'=>1
                                    );
                                    $posts=get_posts($args);
                                    if ($posts) {
                                    echo '<h2><a href="' . get_category_link( $categories[$x]->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $categories[$x]->name ) . '" ' . '>' . $categories[$x]->name.'</a> </h2> ';
                                      
                                      //  foreach($posts as $post) {
                                        ?>
                                         <?php 
                                         $post= $posts[0];
                                         setup_postdata($post);
                                         ?>
                                                 <article class="article-1">
                                                        <div class="content"> <a
                                                                href="<?php the_permalink() ?>">
                                                                <figure
                                                                    style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                                                </figure>
                                                            </a>
                                                            <div class="title"> <a
                                                                    href="<?php the_permalink() ?>">
                                                                    <h3><?php the_title(); ?></h3>
                                                                    <h4><?php the_author_posts_link(); ?><span>-</span></h4> <span><?php the_time('d M Y'); ?></span>
                                                                </a> </div>
                                                        </div>
                                                 </article>

                                         <?php 
                                         $post= $posts[1];
                                         setup_postdata($post);
                                         ?> 
                                                 <article class="article-2">
                                                        <div class="content"> <a
                                                                href="<?php the_permalink() ?>">
                                                                <figure
                                                                    style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                                                </figure>
                                                            </a>
                                                            <div class="title"> <a
                                                                    href="<?php the_permalink() ?>">
                                                                    <h3><?php the_title(); ?></h3>
                                                                    <h4><?php the_author_posts_link(); ?><span>-</span></h4> <span><?php the_time('d M Y'); ?></span>
                                                                </a> </div>
                                                        </div>
                                                 </article>

                                         <?php 
                                         $post= $posts[2];
                                         setup_postdata($post);
                                         ?> 

                                                 <article class="article-3">
                                                        <div class="content"> <a
                                                                href="<?php the_permalink() ?>">
                                                                <figure
                                                                    style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                                                </figure>
                                                            </a>
                                                            <div class="title"> <a
                                                                    href="<?php the_permalink() ?>">
                                                                    <h3><?php the_title(); ?></h3>
                                                                    <h4><?php the_author_posts_link(); ?><span>-</span></h4> <span><?php the_time('d M Y'); ?></span>
                                                                </a> </div>
                                                        </div>
                                                 </article>

                                         <?php 
                                         $post= $posts[3];
                                         setup_postdata($post);
                                         ?>

                                                 <article class="article-4 desktop">
                                                        <div class="content"> <a
                                                                href="<?php the_permalink() ?>">
                                                                <figure
                                                                    style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                                                </figure>
                                                            </a>
                                                            <div class="title"> <a
                                                                    href="<?php the_permalink() ?>">
                                                                    <h3><?php the_title(); ?></h3>
                                                                    <h4><?php the_author_posts_link(); ?><span>-</span></h4> <span><?php the_time('d M Y'); ?></span>
                                                                </a> </div>
                                                        </div>
                                                 </article>

                                         <?php 
                                         $post= $posts[4];
                                         setup_postdata($post);
                                         ?>

                                                 <article class="article-5">
                                                        <div class="content"> <a
                                                                href="<?php the_permalink() ?>">
                                                                <figure
                                                                    style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                                                </figure>
                                                            </a>
                                                            <div class="title"> <a
                                                                    href="<?php the_permalink() ?>">
                                                                    <h3><?php the_title(); ?></h3>
                                                                    <h4><?php the_author_posts_link(); ?><span>-</span></h4> <span><?php the_time('d M Y'); ?></span>
                                                                </a> </div>
                                                        </div>
                                                 </article>

                                         <?php 
                                         $post= $posts[5];
                                         setup_postdata($post);
                                         ?>

                                                 <article class="article-6">
                                                        <div class="content"> <a
                                                                href="<?php the_permalink() ?>">
                                                                <figure
                                                                    style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                                                </figure>
                                                            </a>
                                                            <div class="title"> <a
                                                                    href="<?php the_permalink() ?>">
                                                                    <h3><?php the_title(); ?></h3>
                                                                    <h4><?php the_author_posts_link(); ?><span>-</span></h4> <span><?php the_time('d M Y'); ?></span>
                                                                </a> </div>
                                                        </div>
                                                 </article>

                                         <?php 
                                         $post= $posts[3];
                                         setup_postdata($post);
                                         ?>

                                                 <article class="article-4 mobile">
                                                        <div class="content"> <a
                                                                href="<?php the_permalink() ?>">
                                                                <figure
                                                                    style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                                                </figure>
                                                            </a>
                                                            <div class="title"> <a
                                                                    href="<?php the_permalink() ?>">
                                                                    <h3><?php the_title(); ?></h3>
                                                                    <h4><?php the_author_posts_link(); ?><span>-</span></h4> <span><?php the_time('d M Y'); ?></span>
                                                                </a> </div>
                                                        </div>
                                                 </article>












                                        <?php
                                     //   } // foreach($posts
                                    } // if ($posts
                                    ?>
                                  //  } // foreach($categories
                                  <div class="clear"></div>
                                  <?php 
                                }
                                ?>    
                            <div class="clear"></div>






                </div>
            </div>
        </div>



        



                    
    <?php get_footer(); ?>




    <style>
.latest-news .content ul li span:before
   {content: ''; width: 18px; height: 18px; display: inline-block; background: url('<?php  bloginfo('template_url') ?>/images/clock.png') no-repeat center; background-size: contain; margin: 0 0 0 10px; position: relative; top: 4px}
 </style>