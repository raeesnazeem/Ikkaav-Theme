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
            if( have_posts() ){
                while( have_posts() ) : the_post();
                the_title();
                the_excerpt();
                endwhile;
            ?>
        <?php }
            ?>
    </main>
</div>

<?php
get_footer();