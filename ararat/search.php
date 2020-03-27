<?php get_header(); ?>



<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );

?>





<div class="search-page page">
            <div class="header">
                <h1><?php echo $s; ?></h1>
            </div>
            <div class="banner">
                <div id="66616072-leaderboard_category" class="advertisement desktop"
                    data-adunit="/66616072/leaderboard_category" data-dimension="[[728, 90], [970, 250]]"></div>
                <div id="66616072-leaderboard_category_mobile" class="advertisement mobile"
                    data-adunit="/66616072/leaderboard_category_mobile" data-dimension="[[320, 50], [320, 100]]"></div>
            </div>
            <div class="main-container">
                <div class="ias-list">
                    
                  <?php   
                            if ( $the_query->have_posts() ) {
                            _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
                            while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            ?>
                        <article class="article-stream-1 ias-item orange style-2">
                            <div class="content"> <a
                                href="<?php the_permalink(); ?>">
                                <figure class="article-fig"
                                    style="background-image: url('<?php the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover">
                                </figure>
                                <h4 class="category"><?php the_category(', ');?></h4>
                                </a>
                                <div class="details"> <a
                                       href="<?php the_permalink(); ?>">
                                    <div class="author">
                                        <figure
                                            style="background-image: url('../wordpress/wp-content/uploads/2020/03/<?php echo get_the_author_meta( 'ID' ); ?>.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover">
                                        </figure>
                                        <h3><?php the_author_posts_link(); ?></h3>
                                    </div>
                                    <h2><?php the_title();?></h2>
                                </a> </a> </div>
                              </article>
                    
                         <?php
                            }
                        }else{
                    ?>
                            <h2 >Nothing Found</h2>
                            <div class="alert alert-info">
                            <h2>للاسف لا يوجد نتائج مطابقة لنص البحث !!!!!!</h2>
                            </div>
                    <?php } ?>
                                    
                   
                   
                   

                </div>
            </div>
            <div class="clear"></div>
        </div>
       






        



                    






    <?php get_footer(); ?>




    <style>
        .search-page .header{height: 240px; background: url('<?php  bloginfo('template_url') ?>/images/search-header-bg.jpg') no-repeat center; background-size: cover; position: relative}
 </style>