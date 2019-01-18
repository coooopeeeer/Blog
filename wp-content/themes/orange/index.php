<?php get_header(); ?>

<div id="container">
    <div class="wrapper">
        <div class="content">
            <main>
                <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>
                <section class="post">
                    <?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
                    <div class="info">
                        <span class="date"><?php the_time('Y.m.j') ?></span>
                        <span class="category"><?php the_category(', ') ?></span>
                        <h2 class="title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <?php the_excerpt(); ?>
                    </div>
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