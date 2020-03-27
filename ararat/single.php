       
       <?php get_header(); ?>
       
       <section class="article-page page">
            <section class="main-container">

            <?php if(have_posts()): ?>
                        <?php while(have_posts()):the_post();?>
                        <?php wpb_set_post_views(get_the_ID()); ?>
                        <?php  $post_id=get_the_ID(); ?>

                <article class="main" data-articleid="<?php get_the_ID(); ?>" data-slug="<?php the_title();?>"
                    data-mainimage="<?php the_post_thumbnail_url();?>"
                    data-author="" data-categoryname="سياسة" data-categoryid="4" data-parentname="" data-typeid="1"
                    data-analytics="true" data-pushstate="false">
                    <figure class="main-figure"
                        style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                        <h1><?php the_title();?></h1>
                    </figure>
                    <section class="article-container">

                        <section class="col-right">

                            <div class="mostread-component desktop">
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
                           
                        </section>
                        <section class="col-left">

                        <div class="author"> <a href="#">
                                    <figure class='author-placeholder'></figure>
                                    <div>
                                        <h3><?php the_author_posts_link(); ?></h3>
                                    </div>
                                </a> </div>
                            <div class="date"> <span>Posted: <?php the_date('F j, Y'); ?></span> <span> at <?php the_time('g:i a'); ?></span>
                               
                            </div> 
                                <div class="text">
                                    <div class="summary"></div>
                                 
                                    <p><?php the_content(); ?></p>
                                    





                       
                        <?php endwhile; ?>
                        <?php else : ?>
                        <p> Sorry , no posts found !</p>
                        <?php endif; ?>








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
                        </div>
                            <div class="outAdsInArticle"></div>
                            <div class="keywords"> 
                            <?php 
                            //  GET TAGS BY POST_ID
                            $tags = get_the_tags( $post_id);  ?>                        
                                <?php foreach($tags as $tag) :  ?>
                              
                                    <a class="btn btn-warning"
                                        href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>">
                                            <?php print_r($tag->name); ?>
                                    </a>   
                                <?php endforeach; ?>
                        </section>
                    </section>
                    <ul class="social">
                        <li> <a href="#"
                                target="_blank"
                                onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open(this.href,'sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"
                                class="facebook"><i class="fab fa-facebook-f"></i></a> </li>
                        <li> <a href="#"
                                onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open(this.href,'sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"
                                class="twitter"><i class="fab fa-twitter"></i></a> </li>
                        <li> <a class="mail"
                                href="#"><i
                                    class="fa fa-envelope"></i></a> </li>
                        <li class="mobile"> <a
                                href="#"
                                class="whatsapp"><i class="fab fa-whatsapp"></i></a> </li>
                    </ul> <a href="#"
                        data-articles='["1076151","1076457","105474","180492","1077721","1077713","1076134","150255","61511","76522"]'
                        class="next-article" data-pagination='2'></a>
                    <script data-cfasync="false"
                        src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script type="text/javascript" class="teads" async="true"
                        src="//a.teads.tv/page/107395/tag"></script>
                </article>
            </section>
        </section>

       
        <?php get_footer(); ?>