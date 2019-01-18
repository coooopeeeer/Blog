<?php get_header(); ?>

<div id="container">
    <div class="wrapper">
        <div class="content">
            <main>
                <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>
                <article>
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <?php the_content(); ?>
                </article>
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