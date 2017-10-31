<?php /* Template Name: Team Page */ ?>
<?php get_header(); ?>
    <section class="team-hero">
        <div class="inner">
            <div class="left">
                <h1>The JSF people</h1>
                <p>Based on fast-paced, sunny Los Angeles, the JSF Financial team has a passion for helping our
                    clients achieve their financial goals. We focus on listening to what is important and provide
                    innovative wealth management and planning solutions - now and for the future.</p>
            </div>
            <div class="right">
                <img src="<?php bloginfo('template_directory'); ?>/img/team.jpg" alt="" style="height: 550px;">
            </div>
        </div>
    </section>
    <!-- Start Repeater -->
    <!-- <?php global $post; ?> -->
<?php if( have_rows('team_repeater')): // check for repeater fields ?>

    <section class="team-members">


		<?php while ( have_rows('team_repeater')) : the_row(); // loop through the repeater fields ?>

			<?php // set up post object and vars
			$post_object = get_sub_field('select_team_in_this_section');

			$team_add_sector = get_sub_field('team_add_sector');
			$team_sector_title = get_sub_field('team_sector_title');
			$team_sector_description = get_sub_field('team_sector_description');
			?>

			<?php if( $team_add_sector): ?>

                <div class="gray-box">
                    <div class="inner">
                        <h2><?php echo $team_sector_title ?></h2>
                        <p><?php echo $team_sector_description ?></p>
                    </div>
                </div>

			<?php endif; ?>



            <div class="team-management container">

				<?php foreach( $post_object as $post): // variable must be called $post (IMPORTANT) ?>
					<?php setup_postdata($post); ?>

                    <div class="team-member">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <div class="member-image">
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <p>
								<?php
								$terms = get_the_terms( $post->ID , 'teams_positions' );
								foreach ( $terms as $term ) {
									echo $term->name;
								}
								?>
                            </p>
                        </a>
                    </div>

				<?php endforeach; ?>

            </div>

			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>


		<?php endwhile; ?>

    </section>
    <!-- End Repeater -->
<?php endif; ?>

<?php get_footer(); ?>