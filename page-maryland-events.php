<?php
/*
Template Name: Maryland Events Page
*/
get_header('maryland-events');
?>

<div id="primary" class="content-area events-page">
    <main id="main" class="site-main athena-page" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php #get_template_part('template-parts/content', 'page'); ?>
<!-- dump from content-page.php -->


<div class="row">

    <?php get_sidebar('left'); ?>

    <div class="col-sm-<?php echo athena_main_width(); ?>">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



            <div class="entry-content">



                    <header class="entry-header">
                        <img class="ore-events-OR-image" src="<?php echo get_site_url() . "/wp-content/plugins/our-revolution-events/images/OR-logo.png" ?>" >
                        <?php the_title('<h1 class="entry-title maryland-events-title">', '</h1>'); ?>

                    </header><!-- .entry-header -->




                <?php the_content(); ?>
                <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'athena'),
                    'after' => '</div>',
                ));
                ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <?php
                edit_post_link(
                        sprintf(
                                /* translators: %s: Name of current post */
                                esc_html__('Edit %s', 'athena'), the_title('<span class="screen-reader-text">"', '"</span>', false)
                        ), '<span class="edit-link">', '</span>'
                );
                ?>
            </footer><!-- .entry-footer -->



        </article><!-- #post-## -->
    </div>

    <?php get_sidebar(); ?>

</div>




<!-- end dump -->









            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->




</div><!-- #primary -->


<?php get_footer(); ?>
