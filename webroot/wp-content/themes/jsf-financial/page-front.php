<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>

    <?php if( have_rows('repeater_field_name') ): ?>

        
        <div class="flex-container">
            <div class="flexslider">
                <ul class="slides">

        <?php while( have_rows('repeater_field_name') ): the_row(); 

            // vars
            $flex_image = get_sub_field('flex_image');
            $flex_caption = get_sub_field('flex_caption');
            $flex_button = get_sub_field('flex_button');

            ?>

            <li class="slide">

                <?php if( $link ): ?>
                    <a href="<?php echo $link; ?>">
                <?php endif; ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                <?php if( $link ): ?>
                    </a>
                <?php endif; ?>

                <?php echo $content; ?>

            </li>

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
            <section class="main-content">
                <div class="main-content-left">
                    <img src="http://dev.jsf.loc/wp-content/uploads/2017/10/Depositphotos_118614784_original.jpg" alt="">
                    <div class="post-info">
                        <h1 class="link">Our investment philosophy</h1>
                        <p>The investment management process folows multi step consultative approach designed to
                            develop customized investment strategies that incorporate our client's personal needs
                            and objectives</p>
                        <a class="learn" href="#">Learn more</a>
                    </div>
                </div>
                <div class="main-content-right">
                    <img src="http://dev.jsf.loc/wp-content/uploads/2017/10/Depositphotos_11629572_original.jpg" alt="">
                    <div class="post-info">
                        <div class="post-info">
                            <h1 class="link">Why holistic financial planning ?</h1>
                            <p>In creating financial plan, JSF wealth managers focus on both short-therm financial
                                needs and long-term goals, taking a global view of each client's financial life. Our
                                financial planners in Los Angeles want our clients to have the satisfaction that
                                comes knowing their financial life is in order.
                            </p>
                            <a class="learn" href="">Read more</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="resource-center-highlights">
                <div class="title">
                    <p>Resource center highlights</p>
                    <a href="#">view all</a>
                </div>
                <div class="highlighted-resources">
                    <div class="center-highlight">
                        <img src="http://dev.jsf.loc/wp-content/uploads/2017/10/fotolia_2818273.jpg" alt="">
                        <p>JSF wealth managers overview</p>
                        <a href="#">Read more</a>
                    </div>
                    <div class="center-highlight">
                        <img src="http://dev.jsf.loc/wp-content/uploads/2017/10/tough-growth.jpg" alt="">
                        <p>Focusing on both short-term financial needs and long term goals</p>
                        <a href="#">Read more</a>
                    </div>
                    <div class="center-highlight">
                        <img src="http://dev.jsf.loc/wp-content/uploads/2017/10/iStock_000004319094XLarge-1.jpg" alt="">
                        <p>Financial planners in Los Angeles</p>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </section>
            <section class="hero-bottom">
                <div class="hero-bottom-caption">
                    <h2>Will a weak U.S. dollar lead to a stronger nation?</h2>
                    <p class="date">8/17/2017</p>
                    <p class="caption">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    <button>Read more</button>
                </div>
            </section>
            <section class="footer-top">
                <div class="featured">
                    <span aria-hidden="true" class="icon_wallet"></span>
                    <a>Trust and extate planning</a>
                </div>
                <div class="featured">
                    <span aria-hidden="true" class="icon_wallet"></span>
                    <a>Retirement planning</a>
                </div>
                <div class="featured">
                    <span aria-hidden="true" class="icon_wallet"></span>
                    <a>Personal budgeting</a>
                </div>
                <div class="featured">
                    <span aria-hidden="true" class="icon_wallet"></span>
                    <a>Risk and task management</a>
                </div>
                <div class="featured">
                    <span aria-hidden="true" class="icon_wallet"></span>
                    <a>Investment management</a>
                </div>
                <div class="featured">
                    <span aria-hidden="true" class="icon_wallet"></span>
                    <a>Charitable contribution planning</a>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer(); ?>
