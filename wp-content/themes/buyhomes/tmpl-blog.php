<?php
/**
 * Template Name: Blog grid
 *
 * @package    WordPress
 * @subpackage Whispli
 * @since      Whispli 1.0
 */
?>
<?php get_header(); ?>
<div class="home-sale">
	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' );  ?>
	<section class="banner-sm" style="background-image: url(<?php echo $src[0]  ?>)">
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

	<section class="top-house ">
	     <?php if ( is_active_sidebar( 'top-widget' )  ) : ?>
	                <div id="top-widget" class="slider" role="complementary">
	                    <div class="container-sm">
	                    <?php dynamic_sidebar( 'top-widget'); ?>
	                    </div>
	                </div><!-- .sidebar .widget-area -->
	     <?php endif; ?>
	<?php  while ( have_posts() ) : the_post();?>
 	<?php $acf_fields = get_fields(); ?>
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
	<!--most-top-->

	<section class="container-sm clearfix help content-body">
    	<div class="col-md-8 col-xs-12 left-panel">
	   <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
	    <div class="block clearfix">
	        <?php the_title( '<h1 class="clearfix entry-title"><span class="title-black blue">', '</span></h1>' ); ?>
	          <?php if (!empty($acf_fields['the_title'])) {?>    
				<span class="title">
		            <a><?php $value = get_field( 'the_title');
		            echo $value;
		            ?> </a>
	        	</span>
	          <?php } ?>
	                   
	        <div class="clearfix col-xs-12 no-padding">
	            <div class="row">
	              <?php if (!empty($acf_fields['feature_post'])) {?>  
						<?php $i=0; foreach($acf_fields['feature_post'] as $post_hot) { ?>

						  <?php 
						    if ($i == 1) break;
						      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_hot['post']), 'large');                                       
						      $alt_text = get_post_meta(get_post_thumbnail_id($post_hot['post']) , '_wp_attachment_image_alt', true);
						      ?>
						    <div class="col-md-7 col-sm-12 current-news">  						    

							   <a href="<?php echo esc_url( get_permalink($post_hot['post']) ); ?>"  class="auto-size intro-img" style=" background-image: url(<?php echo $thumb[0] ?>);">
	                           		<img style="display:none" src="<?php echo $thumb[0] ?>" alt='<?php echo $alt_text ?>' />
	                        	</a>

						      <?php
						          $content_post = get_post($post_hot['post']);
						          $title = $content_post->post_title; ?>
						       	 <a class="heading" href="<?php echo esc_url( get_permalink($post_hot['post']) ); ?>"  title="<?php  echo  $title ; ?>">
						        <?php  echo  $title ; ?>
						        </a>
						     </div>     
							<?php  $i ++ ; ?>
						<?php }?>
	                       
	                        


	                <div class="col-md-5 col-sm-12 list-news no-padding-left">
	                    <div class="clearfix">
	                        <span class="title-black blue">XEM NHIỀU</span>
	                    </div>
	                    <ul>
	                    <?php $counter = 0; foreach($acf_fields['feature_post'] as $post_hot) {
	                    	if ($counter++ == 0) continue;
	                        $content_post = get_post($post_hot['post']);
	                        $title = $content_post->post_title; 
	                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_hot['post']), 'medium');                                       
					      $alt_text = get_post_meta(get_post_thumbnail_id($post_hot['post']) , '_wp_attachment_image_alt', true);
	                    ?>
	                      <li>  
	                      	<a href="<?php echo esc_url( get_permalink($post_hot['post']) ); ?>" >              
	                            <span class="display-table">
	                                <span class="display-table-cell vertical-middle">
	                                    <img  src="<?php echo $thumb[0] ?>" alt='<?php echo $alt_text ?>' />
	                                </span>
	                            	<span class="display-table-cell vertical-middle" ><?php echo $title; ?></span>

	                             </span>
	                      	</a>
	                      </li>
	                      <?php }?>
	                    </ul>
	                </div>
	             <?php }?>       
	            </div>
	        </div>
	    </div>
		<!--end block-->
<?php endwhile; ?>
<!--end home-sale-->
<?php 
$cat = get_field( 'category_view_post');
	
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $custom_args = array(
      'post_type' => 'post',
      'cat' => $cat,
      'posts_per_page' => 10,
      'paged' => $paged
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
  	<div class="list-item">
  		<div class="row">
			    <!-- the loop -->
			    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
			      <div class="col-md-3 col-sm-4 col-xs-12 item">
			       	
			       	<?php
						$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($custom_query->ID), 'medium');                                      
					    $alt_text = get_post_meta(get_post_thumbnail_id($custom_query->ID) , '_wp_attachment_image_alt', true);
			       	 ?>
			       	 <?php if(!empty($thumb[0])) { ?>
			       	 	<a  class="img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="background-image:url(<?php  echo $thumb[0] ?>)">
                        	<img  style="display:none" src="<?php echo $thumb[0] ?>" alt='<?php echo $alt_text ?>' />
                       </a>
			       	 <?php } else { ?>
			       	 <a class="no-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        	no image
                       </a>

			       	 <?php } ?>
			       	 
			         <h3 class="heading"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"  class="" ><?php the_title(); ?></a></h3>
			      </div>
			    <?php endwhile; ?>
			    <!-- end of the loop -->
			    <!-- pagination here -->
		</div>
	</div>
	    <?php
	      if (function_exists(custom_pagination)) {
	        custom_pagination($custom_query->max_num_pages,"",$paged);
	      }
	    ?>
		<?php wp_reset_postdata(); ?>
		
  <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>


<?php if (!empty($acf_fields['hot'])) {?> 
  	
	  	<div class="list-item  list-hot">
	  		<div class="list-title-tag list-hot-tag"><span>HOT</span></div>
	  		<div class="clearfix"> 
				<?php foreach($acf_fields['hot'] as $post_hot) { ?>
					<div class="list-item-blog clearfix">
				  	<?php 
				      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_hot['post']), 'large');                                       
				      $alt_text = get_post_meta(get_post_thumbnail_id($post_hot['post']) , '_wp_attachment_image_alt', true);
				      ?> 
					   <a href="<?php echo esc_url( get_permalink($post_hot['post']) ); ?>"  class="img" style=" background-image: url(<?php echo $thumb[0] ?>);">
			           		<img style="display:none" src="<?php echo $thumb[0] ?>" alt='<?php echo $alt_text ?>' />
			        	</a>

				      <?php
				          $content_post = get_post($post_hot['post']);
				          $title = $content_post->post_title;
				          $des = $content_post->post_excerpt;

				        ?>
			          <div class="body-text">
			          	<h3 class="heading">
			          		<a  href="<?php echo esc_url( get_permalink($post_hot['post']) ); ?>"  title="<?php  echo  $title ; ?>">
			        			<?php  echo  $title ; ?>
			        		</a>
			        	</h3>
			        	<div class="des"><?php echo $des; ?></div>
			          </div>
	       	 
	     		</div>   
			<?php  }  ?>
			</div>  
	     </div>   
	<?php }
	?>

	</div>
<!--end content-body-->
	
    <!--end col8-->
 		<?php get_sidebar(); ?>
	</section>
</div>

<?php
get_footer();
?>
