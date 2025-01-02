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
                    $index = 0;
                    $no_of_columns = 1; // Number of columns

                    // Start the loop
                    while (have_posts()) : the_post();

                        // Open a new column at the beginning or after completing a row
                        if (0 === $index % $no_of_columns) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                        <?php } ?>

                        <!-- Content of a single post -->
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>

                        <?php
                        $index++;

                        // Close the column if the current index completes the row
                        if (0 !== $index && 0 === $index % $no_of_columns) { ?>
                            </div> <!-- col-lg4 col-md6 col-sm12 -->
                        <?php }

                    endwhile;

                    // Close any remaining open column after loop ends
                    if (0 !== $index % $no_of_columns) { ?>
                        </div> <!-- col-lg4 col-md6 col-sm12 -->
                    <?php } ?>
                </div> <!-- row end -->
            </div> <!-- container end -->
        <?php endif; // have_posts() ?>
    </main>
</div> <!-- primary end -->


<?php
get_footer();