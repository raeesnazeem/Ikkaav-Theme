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
<!--    <main id="main" class="site-main mt-5" role="main">

        <?php
/*
        if( is_home() && ! is_front_page() ){
            */?>
        <div class="container">
                <header class="mb-5">
                <h1 class="page-title">
                    <?php /*single_post_title(); */?>
                </h1>
            </header>

            <?php
/*        }

        */?>

        <?php
/*            if( have_posts() ){ */?>

                <div class="row">

                    <?php
/*                    $index = 0;
                    $number_of_columns = 3;

                    //start the loop
                    while( have_posts() ) : the_post();
                        if( 0 === $index % $number_of_columns ){ */?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <?php /*} */?>
                            <h3><?php /*the_title(); */?></h3>
                            <div><?php /*the_excerpt() ;*/?></div>

                    <?php
/*                    $index++;

                    if(0 != $index && 0 === $index % $number_of_columns){

                    }
                    endwhile; */?>
                </div> <?php /*}
            */?>
        </div>
    </main>-->
</div>

<?php
get_footer();