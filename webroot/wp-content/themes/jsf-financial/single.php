<?php get_header(); ?>

<section class="resource-content">
    <img src="<?php bloginfo('template_directory'); ?>/img/tough-growth.jpg" alt="Hero image">
    <div class="main-post-content">
        <div id="post-<?php the_ID(); ?>" <?php post_class('post-article'); ?>>
            <h1><?php the_title(); ?></h1>
			<div class="description">
                <?php while ( have_posts() ) : the_post();?>
                <p class="authored-by">By <span><?php the_author_posts_link(); ?></span> on <?php the_time('j F'); ?> in <span><?php the_category(', '); ?></span></p>

				<?php the_content(); ?>

				<?php endwhile; // End of the loop. ?>
            </div>
            
            <div class="pager">
                <a class="prev" href="#">PREV</a>
                <a class="next" href="#">NEXT</a>
            </div>

        </div>
        <aside>
            <!-- <div class="about-author">
                <div class="short-info">
                    <p class="post-date">23 <span>November</span></p>
                    <img src="http://via.placeholder.com/50x50" alt="">
                </div>
                <div class="author-social">
                    <img src="http://via.placeholder.com/50x50" alt="facebook">
                    <img src="http://via.placeholder.com/50x50" alt="twitter">
                    <img src="http://via.placeholder.com/50x50" alt="linkedin">
                    <img src="http://via.placeholder.com/50x50" alt="pinterest">
                    <img src="http://via.placeholder.com/50x50" alt="google plus">
                </div>
                <div class="author-info">
                    <p class="about">About the author</p>
                    <p class="name">Sam Sekine</p>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales felis sed
                        porta porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales felis sed
                        porta porttitor.</p>
                </div>
            </div> -->
        </aside>
        <?php get_sidebar() ?>
    </div>
    <div class="resource-center-highlights">
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
                    <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                    <p><?php the_title(); ?></p>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read more</a>
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
    </div>
</section>

<?php get_footer(); ?>

