<?php
/* Template Name: Resource Center Repository page */

get_header();
?>

<section class="resource-content">
    <div class="hero" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/iStock_000004319094XLarge.jpg');">
        <div class="hero-caption">
            <h1>You want me to do what ?</h1>
            <p class="by">By <span class="author">Sam Sekine</span>on <span class="date">SEP 23</span> in <span
                        class="tag">Estate planning</span></p>
            <p>You trust a financial adviser to handle your money. But what about a missing child ?
                Or a marriage at the breaking point ? <br> In the course of their job, advisers hear all sorts of
                secrets from their clients.</p>
            <a href="#">Read more</a>
        </div>
    </div>
    <div class="main-post-content container">

        <div class="posts">
            <h2 class="title">What's trending</h2>
			<?php $the_custom_post_query = new WP_Query( array( 'post_type' => 'resource-centers', 'order'   => 'ASC', 'posts_per_page' => 3 ) ); ?>
			<?php if ( $the_custom_post_query->have_posts() ) : ?>

				<?php while ($the_custom_post_query -> have_posts()) : $the_custom_post_query -> the_post(); ?>

                    <!-- article -->
                    <div id="post-<?php the_ID(); ?>" <?php post_class('images'); ?>>
                        <div class="img-l">

							<?php the_post_thumbnail('archive-size'); // Fullsize image for the single post ?>
                            <p><span><?php the_time('j'); ?></span> <?php the_time('F'); ?></p>
                        </div>
                        <div class="img-r">
                            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ?><?php the_title(); ?></a></h2>
                            <p class="author">By <span class="by">Sam Sekine</span> in <span class="by">estate
                                    planning</span></p>
                            <span class="short-desc"><?php the_content(''); ?></span>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read more</a>
                        </div>
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
        <div class="posts-right">
			<?php get_sidebar(); ?>
        </div>
    </div>
    <section class="resource-center-highlights container">
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
    </section>

</section>
<?php get_footer(); ?>

