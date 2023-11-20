<?php
 
get_header();

?>

<!-- <?php if (is_front_page()) { ?> -->
  <!-- если нахожусь на главной странице -->
<!-- <?php } ?>  -->

<?php
$args = array(
    'parent' => 0,
    'hide_empty' => 0,
    'exclude' => '14',
    // ID рубрики, которую нужно исключить
    'number' => '0',
    'orderby' => 'description',
    'order' => 'ASC',
    'pad_counts' => true
);
$catlist = get_terms('category', $args);
?>

<div class="catalog">
    <?php foreach ($catlist as $cat): ?>


        <a href="<?php echo get_term_link($cat->slug, 'category'); ?>" class="catalog_card_album">
            <div class="catalog_img2"
                style="background-image: url(<?php echo z_taxonomy_image_url($cat->term_id, ''); ?>);"></div>
            <div class="card_album_cover">
                <div class="cover">
                    <div class="card_title">
                        <?php echo $cat->name; ?>
                    </div>
                </div>
            </div>
        </a>

    <?php endforeach; ?>
</div>


<?php




?>






<?php

$SliderBlock = locate_template('SliderBlock.php');
load_template($SliderBlock);


$tem = locate_template('advantages_contacts.php');
load_template($tem);


get_footer();



?>