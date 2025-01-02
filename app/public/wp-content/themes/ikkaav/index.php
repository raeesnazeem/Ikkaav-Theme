<?php
/**
 * Main template file.
 *
 * @package Ikkaav
 *
 */

get_header();

?>
    <div id="primary">
        <main id="main" class="site-main mt-5">
            <?php if (have_posts()) : ?>
                <div class="container">
                    <?php if (is_home() && !is_front_page()) : ?>
                        <header class="mb-5">
                            <h1 class="page-title">
                                <?php single_post_title(); ?>
                            </h1>
                        </header>
                    <?php endif; // is_home() && !is_front_page() ?>

                    <div class="row">
                        <?php
                        $no_of_columns = 3; // Number of columns

                        // Start the loop
                        while (have_posts()) : the_post(); ?>
                            <div class="col-lg-<?php echo intval(12 / $no_of_columns); ?> col-md-6 col-sm-12 mb-4">
                                <?php get_template_part('template-parts/content'); ?>
                        <?php endwhile; ?>
                    </div> <!-- row end -->
                </div> <!-- container end -->
            <?php else :
                get_template_part('template-parts/content-none');
             endif; // have_posts() ?>
        </main>
    </div> <!-- primary end -->

<?php
get_footer();