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
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' );  ?>
<section class="banner" style="background-image: url(<?php echo $src[0]  ?>)">
  <?php $atl = get_post_meta(get_post_thumbnail_id($post->ID) , '_wp_attachment_image_alt', true);
    echo '<img style="display:none" src="'.$src[0].'" alt="'.$alt.'">';
  ?>
</section>

<div class="light-bg search"></div>
<div class="group-search blue-shadow">
    <span class="search-info">
        <span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ico_money.PNG" /></span>
        <span>TƯ VẤN NHANH</span><span class="font-bold"><?php echo get_option('tuvan')?></span>
    </span>
    <span class="search-control pull-right">
    <?php get_search_form() ?>
        
    </span>
</div>
<!--end banner-->

<?php  while ( have_posts() ) : the_post();?>
 <?php $acf_fields = get_fields(); ?>
<section class="top-house">
             <?php if ( is_active_sidebar( 'top-widget' )  ) : ?>
                        <div id="top-widget" class="slider" role="complementary">
                            <div class="container-sm">
                            <?php dynamic_sidebar( 'top-widget'); ?>
                            </div>
                        </div><!-- .sidebar .widget-area -->
             <?php endif; ?>
        <div class="most-sale">
            <div class="container-sm"> 
            <?php if (!empty($acf_fields['bdsbcl'])) {?>                    
                    <ul class="clearfix">
                       <?php $i=0; foreach($acf_fields['bdsbcl'] as $post_link) {?>
                      <li  class="<?php
                            if($i==0) echo'active'; else echo 'hidden-device hidden-sm hidden-xs'
                       ?>">                
                        <a  href="<?php echo $post_link['link'] ?>"> <?php echo $post_link['title'] ?></a>
                      </li>
                      <?php $i ++; }?>                  
                    </ul>
                <?php }?> 


                 <?php if (!empty($acf_fields['bdsbc'])) {?>    
                    <?php 
                      $field_name = "bdsbc";
                      $field = get_field_object($field_name);                 
                    ?>
                <div class="list-image clearfix" id="list-house">
                 <?php $i=0;
                  foreach($acf_fields['bdsbc'] as $post_new) { ?>
                    <div> 
                      <div class="box">
                      <?php   
                      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_new['bdsbc-post']), 'medium');                  
                      $alt_text = get_post_meta(get_post_thumbnail_id($post_new['bdsbc-post']) , '_wp_attachment_image_alt', true);
                      ?>

                       
                            
                             <?php if (!empty($thumb[0])) {?>   
                              <a href="<?php echo esc_url( get_permalink($post_new['bdsbc-post']) ); ?>" style="background-image: url(<?php echo $thumb[0] ?>)">
                              <img style="display:none" src="<?php echo $thumb[0] ?>" alt='<?php echo $alt_text ?>' /></a>
                             <?php } else { ?>
                              <a href="<?php echo esc_url( get_permalink($post_new['bdsbc-post']) ); ?>" class="no-image">
                                  no image
                                </a>
                            <?php } ?>   
                          

                            <div class="bg-white">
                                <hr />
                                <span>
                                      <?php  $content_post = get_post($post_new['bdsbc-post']);
                                              $title = $content_post->post_title;
                                              echo $title;
                                      ?>
                    
                                </span>
                            </div>

                        </div>
               
                    </div>
                <?php }?>
                
              </div>
        <?php }?>
          </div>
        </div>
        <!--most-sale-->
</section>

<section class="container-sm clearfix help">
    <div class="col-md-8 col-xs-12 left-panel">
            <?php if (!empty($acf_fields['cam-nang-dau-tu'])) {?>  

              <div class="block">   
                <?php $field_name = "cam-nang-dau-tu";
                $field = get_field_object($field_name); ?>
                 <span class="title-black"><?php echo $field['label'] ?></span>
                  <div class="clearfix list">
                
                    <ul class="blue-bullet row">
                       <?php foreach($acf_fields['cam-nang-dau-tu'] as $item) {
                        $content_post = get_post($item['post-cndt']);
                        $title = $content_post->post_title; ?>
                      <li  class="col-sm-6 camnang">                
                         <span><i aria-hidden="true" class="fa fa-circle"></i></span>
                        <a href="<?php echo esc_url( get_permalink($item['post-cndt']) ); ?>"> <?php echo $title; ?></a>
                      </li>
                      <?php }?>
                  
                    </ul>
                    </div>

                </div>
                <?php }?>   

              <?php if (!empty($acf_fields['du_an_hot'])) {?>   
               <div class="block news-second">
                <?php $field_name = "du_an_hot";
                $field = get_field_object($field_name); ?>
                <span class="title-black"><?php echo $field['label'] ?></span>           
                  <div class="row clearfix list">
                      <div class="col-sm-6">                       
                          <div class="box-img">
                              <?php $i=0; foreach($acf_fields['du_an_hot'] as $post_hot) { ?>
          
                                  <?php 
                                    if ($i == 1) break;
                                      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_hot['post-hot']), 'large');                                       
                                      $alt_text = get_post_meta(get_post_thumbnail_id($post_hot['post-hot']) , '_wp_attachment_image_alt', true);
                                      ?>

                                    <a href="<?php echo esc_url( get_permalink($post_hot['post-hot']) ); ?>"><img src="<?php echo $thumb[0] ?>" alt='<?php echo $alt_text ?>' />
                                    </a>
                   

                                      <?php
                                          $content_post = get_post($post_hot['post-hot']);
                                          $title = $content_post->post_title; ?>
                                       <span>
                                        <?php  echo  $title ; ?>
                                        </span>
     
                               <?php  $i ++ ; ?>

                     <?php }?>

                    </div>     
                  </div>
                  <div class="col-sm-6">
                    <ul class="blue-bullet">
                     <?php foreach($acf_fields['du_an_hot'] as $post_hot) {
                            $content_post = get_post($post_hot['post-hot']);
                            $title = $content_post->post_title; ?>
                          <li>                
                             <span><i aria-hidden="true" class="fa fa-circle"></i></span>
                            <a href="<?php echo esc_url( get_permalink($post_hot['post-hot']) ); ?>"> <?php echo $title; ?></a>
                          </li>
                          <?php }?>
                    
                  </ul>
                </div>
                </div>
            </div>
        <?php }?>


         <?php if (!empty($acf_fields['tin-tuc-thi-truong'])) {?>    
               <div class="block news-second">
                <?php $field_name = "tin-tuc-thi-truong";
                $field = get_field_object($field_name); ?>
                <span class="title-black"><?php echo $field['label'] ?></span>           
                  <div class="row clearfix list">
                      <div class="col-sm-6">                       
                          <div class="box-img">
                              <?php $i=0; foreach($acf_fields['tin-tuc-thi-truong'] as $post_new) { ?>
          
                                  <?php 
                                    if ($i == 1) break;
                                      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_new['post-new']), 'large'); 
                                      $alt_text = get_post_meta(get_post_thumbnail_id($post_new['post-new']) , '_wp_attachment_image_alt', true);
                                      ?>

                                    <a href="<?php echo esc_url( get_permalink($post_new['post-new']) ); ?>"><img src="<?php echo $thumb[0] ?>" alt='<?php echo $alt_text ?>' />
                                    </a>
                   

                                      <?php
                                          $content_post = get_post($post_new['post-new']);
                                          $title = $content_post->post_title; ?>
                                       <span>
                                        <?php  echo  $title ; ?>
                                        </span>
     
                               <?php  $i ++ ; ?>

                     <?php }?>

                    </div>     
                  </div>
                  <div class="col-sm-6">
                    <ul class="blue-bullet">
                     <?php foreach($acf_fields['tin-tuc-thi-truong'] as $post_new) {
                            $content_post = get_post($post_new['post-new']);
                            $title = $content_post->post_title; ?>
                          <li>                
                             <span><i aria-hidden="true" class="fa fa-circle"></i></span>
                            <a href="<?php echo esc_url( get_permalink($post_new['post-new']) ); ?>"> <?php echo $title; ?></a>
                          </li>
                          <?php }?>
                    
                  </ul>
                </div>
                </div>
            </div>
        <?php }?>

    </div>

<?php endwhile;?>
    <!--end col8-->
    <?php get_sidebar(); ?>
</section>
<?php
get_footer();
?>