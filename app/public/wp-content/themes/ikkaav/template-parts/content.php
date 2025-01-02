<?php
/**
 * Content Template
 *
 * @package Ikkaav
 *
 */

?>


<!-- Content of a single post -->
<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid">
<h3><?php the_title(); ?></h3>
<p><?php the_excerpt(); ?></p>
</div>
