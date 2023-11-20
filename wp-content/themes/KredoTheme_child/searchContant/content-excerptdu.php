<?php
/**
 * Template part for displaying posts with excerpts
 *
 * Used in Search Results and for Recent Posts in Front Page panels.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>
		<?php
		if ( is_front_page() && ! is_home() ) {

			// The excerpt is being displayed within a front page section, so it's a lower hierarchy than h2.
			// the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		} else {?>
			

            <a href='<?php the_permalink()?>'
                                class='catalog_card_album visible' onclick='preventSubmit(event)' style=' opacity: 0; animation: ani 1.5s forwards;'>
<div class='catalog_img1' style='background-image: url(<?php the_post_thumbnail_url('full'); ?>);
width: 100%;background-position: center -2px;
background-size: contain;background-repeat: no-repeat;transition: 0.2s linear'></div>
          <div class='card_album_cover'>
         <div class='cover'>
          <div><?php the_title()?></div>
           </div>
           <div class='card_album_cover_detail'>&ensp;Подробнее&ensp;</div>
 </div>
      </a>









            <?php
		}
		?>



