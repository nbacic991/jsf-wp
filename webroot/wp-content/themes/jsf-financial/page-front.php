<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>

    <?php if( have_rows('flexslider-repeater') ): ?>

        
        <div class="flex-container">
            <div class="flexslider">
                <ul class="slides">

        <?php while( have_rows('flexslider-repeater') ): the_row(); 

            // vars
            $flex_image = get_sub_field('flex_image');
            $flex_caption = get_sub_field('flex_caption');
            $flex_button = get_sub_field('flex_button');

            ?>

            <li>
                <div class="flex-caption">
                    <p><?php echo $flex_caption; ?></p>
                    <button><?php echo $flex_button; ?></button>
                </div>
                <div class="flex-image">
                    <img src="<?php echo $flex_image['url']; ?>" alt="<?php echo $flex_image['alt'] ?>" />
                </div>
            </li>

        <?php endwhile; ?>

                </ul>
            </div>
        </div>

    <?php endif; ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php

                // vars
                $static_block_left_title = get_field('static_block_left_title');
                $static_block_left_description = get_field('static_block_left_description');
                $static_block_left_image = get_field('static_block_left_image');
                $static_block_left_button_text = get_field('static_block_left_button_text');
                $static_block_left_button_url = get_field('static_block_left_button_url');

                $static_block_right_title = get_field('static_block_right_title');
                $static_block_right_description = get_field('static_block_right_description');
                $static_block_right_image = get_field('static_block_right_image');
                $static_block_right_button_text = get_field('static_block_right_button_text');
                $static_block_right_button_url = get_field('static_block_right_button_url');

            ?>
            <section class="main-content">
                <div class="main-content-left">
                    <img src="<?php echo $static_block_left_image['url']; ?>" alt="<?php echo $static_block_left_image['alt'] ?>" />
                    <div class="post-info">
                        <h2 class="link"><a href="<?php echo $static_block_left_button_url; ?>"><?php echo $static_block_left_title; ?></a></h2>
                        <p><?php echo $static_block_left_description; ?></p>
                        <a class="learn" href="<?php echo $static_block_left_button_url; ?>"><?php echo $static_block_left_button_text; ?></a>
                    </div>
                </div>
                <div class="main-content-right">
                    <img src="<?php echo $static_block_right_image['url']; ?>" alt="<?php echo $static_block_right_image['alt'] ?>" />
                    <div class="post-info">
                        <h2 class="link"><a class="learn" href="<?php echo $static_block_right_button_url; ?>"><?php echo $static_block_right_title; ?></a></h2>
                        <p><?php echo $static_block_right_description; ?></p>
                        <a class="learn" href="<?php echo $static_block_right_button_url; ?>"><?php echo $static_block_right_button_text; ?></a>
                    </div>
                </div>
            </section>

            <section class="resource-center-highlights">
                <div class="title">
                    <p>Resource center highlights</p>
                    <a href="#">view all</a>
                </div>
                <div class="highlighted-resources">
                <?php $the_custom_post_query = new WP_Query( array( 'post_type' => 'resource-centers', 'order'   => 'ASC', 'posts_per_page' => 3, 'category_name' => 'highlights' ) ); ?>
                <?php if ( $the_custom_post_query->have_posts() ) : ?>
                <?php while ($the_custom_post_query -> have_posts()) : $the_custom_post_query -> the_post(); ?>

                    <!-- article -->
                        <div id="post-<?php the_ID(); ?>" <?php post_class('center-highlight'); ?>>
                            <!-- <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> -->
                            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                            <p><?php the_title(); ?></p>
                            <a class="link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read more</a>
                        </div>
                    <!-- /article -->

                <?php endwhile; 

                    wp_reset_postdata();
                
                else: ?>

                    <!-- article -->
                    <div>
                        <h2><?php _e( 'Sorry, there is no service at the moment.', 'html5blank' ); ?></h2>
                    </div>
                    <!-- /article -->

                <?php endif; ?>

                </div>
            </section>

            <?php $the_query = new WP_Query(  array( 'category_name' => 'front-page-promotion' ) ); ?>
                 
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <section class="hero-bottom" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat;
                    background-size: cover;">
                <!-- article -->
                <div  id="post-<?php the_ID(); ?>" <?php post_class( 'hero-bottom-caption' ); ?>>

                    <!-- post title -->
                    <h2>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <!-- /post title -->

                    <!-- post details -->
                    <p class="date"><?php the_time('j F Y'); ?></p>
                    <!-- /post details -->

                    <p class="caption"><?php echo the_content(''); ?></p>

                    <div class="link">
                        <a href="<?php echo get_permalink(); ?>">Read more</a>
                    </div>

                <!-- /article -->
                 
            </section>
                 
            <?php 
            endwhile;
            wp_reset_postdata();
            ?>


            <?php if( have_rows('company_features') ): ?>
                
            <section class="footer-top">

                <?php while( have_rows('company_features') ): the_row(); 

                    // vars
                    $feature_text = get_sub_field('feature_text');
                    $features_icon = get_sub_field('features_icon');

                    ?>

                    <div class="featured">
                        <span aria-hidden="true" class="footer-top-icon <?php echo $features_icon; ?>"></span>
                        <a><?php echo $feature_text; ?></a>
                    </div>

                <?php endwhile; ?>

            </section>

            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer(); ?>
