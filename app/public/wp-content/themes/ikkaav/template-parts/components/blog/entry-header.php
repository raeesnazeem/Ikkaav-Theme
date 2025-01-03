<?php
/**
 * Template for post  entry header
 *
 * @package ikkaav
 *
 */

$the_post_id = get_the_ID();
$has_post_thumbnail = has_post_thumbnail($the_post_id);
?>

<header class="entry-header">
    <?php
        if($has_post_thumbnail) {
            ?>
            <div class="entry-image mb-3">
                <a href="<?php echo esc_url(the_permalink()); ?>">
                    <?php
                        the_post_thumbnail('large', ['class' => 'img-fluid']);
                    ?>
                </a>
            </div>
            <?php
        }
    ?>
</header>
