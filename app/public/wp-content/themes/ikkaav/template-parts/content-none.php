<?php
/**
 * Content None Template
 *
 * @package Ikkaav
 *
 */
?>

<!-- If no Content -->

<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title">
            <?php esc_html_e('Nothing Found', 'ikkaav'); ?>
        </h1>
    </header>

    <div class="page-content">
        <?php
            if(is_home() && current_user_can('publish_posts')) {
                ?>
                <p>
                    <?php
                        printf(
                            wp_kses(
                                __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'ikkaav'),
                                [
                                    'a' => [
                                        'href' => []
                                    ]
                                ]
                            ),
                            esc_url(admin_url('post-new.php'))
                        );
                    ?>
                </p>
                <?php
            } elseif(is_search()) {
                ?>
                <p>
                    <?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'ikkaav'); ?>
                </p>
                <?php

            } elseif (is_search()) {
                ?>
                <p>
                    <?php esc_html_e('It seems we can\'t find what you\'re searching for. Please try with a different keyword.', 'ikkaav'); ?>
                </p>
                <?php
                get_search_form();
            }else {
                ?>
                <p>
                    <?php esc_html_e('It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'ikkaav'); ?>
                </p>
                <?php
                get_search_form();
            }

        ?>
    </div>
</section>
