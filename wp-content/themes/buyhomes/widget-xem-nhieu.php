<?php if( have_rows('mostview', $acfw) ): ?>
<span class="title-black">XEM NHIỀU</span>
 <div class="clearfix most-view">
    <div class="content blue-scroll" id="most-view">
<?php $i=0;  while ( have_rows('mostview', $acfw) ) : the_row(); ?>
  <?php
      $most_post = get_sub_field('popurlar-post', $acfw);  //get the id of post
      $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($most_post->ID), 'medium');
      $alt_text = get_post_meta(get_post_thumbnail_id($most_post->ID), '_wp_attachment_image_alt', true);
      ?>        
        <div class="list-view">
                <a title="view" href="<?php echo $most_post->guid ?>">
                    <span><img class="img-responsive mCS_img_loaded"  src="<?php echo $thumb[0]?>" alt="<?php echo $alt_text ?>"></span>
                    <span><?php echo $most_post->post_title ?></span>
                </a>
            </div>
                
<?php   $i++;  endwhile;     ?>
</div>
</div>
<?php  endif; ?>

