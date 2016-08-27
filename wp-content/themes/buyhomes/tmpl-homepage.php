<?php
/**
 * Template Name: Homepage
 *
 * @package    WordPress
 * @subpackage Whispli
 * @since      Whispli 1.0
 */
?>
<?php get_header(); ?>

<!--end banner-->
<section class="main" id="main"> 
  <div class="container"> 
    <div class="col-xs-12">
      <?php  while ( have_posts() ) : the_post();?>
        <?php $acf_fields = get_fields(); ?>
          <?php if (!empty($acf_fields['cam-nang-dau-tu'])) {?>     
              <?php 

              $field_name = "cam-nang-dau-tu";
              $field = get_field_object($field_name);

              echo '<b>' . $field['label'] . ':</b> ' ;
              ?>
            <section class="about-us-links">
                <ul>
                 <?php foreach($acf_fields['cam-nang-dau-tu'] as $box_intro) {
                  $content_post = get_post($box_intro['post-cndt']);
                  $title = $content_post->post_title;
                  echo "<li>". $title ."</li>";                  
                  ?>
                <?php }?>
                
              </ul>
            </section>
        <?php }?>

        <?php if (!empty($acf_fields['du_an_hot'])) {?>     
          <?php 

        $field_name = "du_an_hot";
        $field = get_field_object($field_name);

        echo '<b>' . $field['label'] . ':</b> ' ;
        ?>

            <section class="about-us-links">
                <ul>
                 <?php $i=0;
                  foreach($acf_fields['du_an_hot'] as $post_hot) {
                     echo "<li>";
                    if($i==0) {
                      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_hot['post-hot']), 'post'); 
                      $alt = get_post_meta($post_hot['post-hot'], '_wp_attachment_image_alt', true);
                      ?>
                      <?php
                      $img_id = get_post_thumbnail_id($post_hot['post-hot']); // This gets just the ID of the img
                      $image = wp_get_attachment_image_src($img_id, $optional_size); // Get URL of the image, and size can be set here too (same as with get_the_post_thumbnail, I think)
                      $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);


                      ?>

                    <a href="<?php echo esc_url( get_permalink($post_hot['post-hot']) ); ?>"><img src="<?php echo $thumb[0] ?>" alt='<?php echo $alt_text ?>' /></a>
              <?php      }
                  $content_post = get_post($post_hot['post-hot']);
                  $title = $content_post->post_title; ?>
               <a href="<?php echo esc_url( get_permalink($post_hot['post-hot']) ); ?>"><?php 
echo  $title ;
                ?></a></li>
                  
                  <?php 
                  $i ++ ;
                  ?>


                <?php }?>
                
              </ul>
            </section>
        <?php }?>


        <?php if (!empty($acf_fields['tin-tuc-thi-truong'])) {?>     
          <?php 

        $field_name = "tin-tuc-thi-truong";
        $field = get_field_object($field_name);

        echo '<b>' . $field['label'] . ':</b> ' ;
        ?>

            <section class="about-us-links">
                <ul>
                 <?php $i=0;
                  foreach($acf_fields['tin-tuc-thi-truong'] as $post_new) {
                     echo "<li>";
                    if($i==0) {
                      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_new['post-new']), 'post'); 
                      $alt = get_post_meta($post_new['post-new'], '_wp_attachment_image_alt', true);
                      ?>
                      <?php
                      $img_id = get_post_thumbnail_id($post_new['post-new']); // This gets just the ID of the img
                      $image = wp_get_attachment_image_src($img_id, $optional_size); // Get URL of the image, and size can be set here too (same as with get_the_post_thumbnail, I think)
                      $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);


                      ?>

                    <a href="<?php echo esc_url( get_permalink($post_new['post-new']) ); ?>"><img src="<?php echo $thumb[0] ?>" alt='<?php echo $alt_text ?>' /></a>
              <?php      }
                  $content_post = get_post($post_new['post-new']);
                  $title = $content_post->post_title; ?>
               <a href="<?php echo esc_url( get_permalink($post_new['post-new']) ); ?>"><?php 
echo  $title ;
                ?></a></li>
                  
                  <?php 
                  $i ++ ;
                  ?>


                <?php }?>
                
              </ul>
            </section>
        <?php }?>
      </div>
  </div>
</section>

<?php endwhile;?>
<?php
get_footer();
?>