<?php

/**
 * Main Template file
 *
 * @package Ikkaav
 *
 */

get_header();

?>

<div id="primary" class="">
    <main id="main" class="site-main mt-5" role="main">

        <?php

        if( is_home() && ! is_front_page() ){
            ?>
        <div class="container">
                <header class="mb-5">
                <h1 class="page-title">
                    <?php single_post_title(); ?>
                </h1>
            </header>
        </div>
            <?php
        }

        ?>

        <?php
            if( have_posts() ){ ?>
                <div class="container">
                <?php
                while( have_posts() ) : the_post();
                the_title();
                echo "<br>";
                the_post_thumbnail();
                the_excerpt();

                endwhile;
         ?> </div> <?php }
            ?>
    </main>
</div>

<?php
get_footer();