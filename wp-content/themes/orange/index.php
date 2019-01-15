<?php get_header(); ?>

<div id="container">
    <div class="wrapper">
        <div class="content">
            <main>
                <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>
                <section class="post">
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <?php the_excerpt(); ?>
                </section>
                <?php
                    endwhile;
                    endif;
                ?>
            </main>

            <?php get_sidebar(); ?>
        </div><!-- End div.content -->
    </div><!-- End div.wrapper -->
</div><!-- End div#container -->

<?php get_footer(); ?>