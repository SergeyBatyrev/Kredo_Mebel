<?php


get_header(); ?>
<hr style="height: 1px" />
<div class="catalog">

    <?php if (have_posts()): ?>
        <span class="catalog_title">
            <?php
            /* translators: Search query. */
            printf(__('Search Results for: %s', 'twentyseventeen'), get_search_query());
            ?>
        </span>
    <?php else: ?>
        <span class="catalog_title">
            <?php _e('Nothing Found', 'twentyseventeen'); ?>
        </span>
    <?php endif; ?>

            <?php
            if (have_posts()):
                // Start the Loop.
                while (have_posts()):
                    the_post();

                    /**
                     * Run the loop for the search to output the results.
                     * If you want to overload this in a child theme then include a file
                     * called content-search.php and that will be used instead.
                     */
                    get_template_part('searchContant/content', 'excerpt');

                endwhile; // End the loop.
            
            else:
                ?>

                <h3>
                <?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen'); ?>
                </h3>
                <?php
                // get_search_form();
            endif;
            ?>


</div><!-- .catalog -->

<div class="streak"></div>

<?php

$SliderBlock = locate_template('SliderBlock.php');
load_template($SliderBlock);

get_footer();
?>