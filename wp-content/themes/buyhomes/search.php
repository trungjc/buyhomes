<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

 get_header(); ?>
<div class="home-sale">
	<section class="banner-sm" >
	<?php
	global $post;
	$categories = get_the_category(); //get all categories for this post
	?>
	  <?php echo do_shortcode('[wp_custom_image_category  size="full" term_id="'.$categories[0]->cat_ID.'" ]');  ?>
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
	<div class="container-sm clearfix help content-body single-body">
		<div class="col-md-8 col-xs-12 left-panel">
			<div class="page-detail">
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
				</div>
					
				<div class="block clearfix">
			        <h1 class="clearfix entry-title"><span class="title-black blue">
			        	<?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?>
			        </span></h1>
			    </div>
			<?php if ( have_posts() ) : ?>			
			<div class="list-item list-item-new">
			<div class="clearfix">		
			<?php
			// Start the loop.
				while ( have_posts() ) : the_post(); ?>	
  	
  		
			    <!-- the loop -->
			<div class="list-item-blog">
			<?php $product_thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ) ;
				$alt_text = get_post_meta($post->ID, '_wp_attachment_image_alt', true);


				?>			       	
			    <a style="background-image:url(<?php echo whispli_resize_image($product_thumbnail_src[0]); ?>)" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="img">
			    <img  style="display:none" src="<?php echo whispli_resize_image($product_thumbnail_src[0]); ?>" alt="<?php echo $alt_text ?>">
              
                </a>
			    <div class="body-text">
			         <h3 class="heading">
			         	<a  title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			         </h3>
			         <p><?php the_excerpt(); ?></p>
			    </div>
			</div>
			    			      
			    			      
			    			      
			    			      
			    			    <!-- end of the loop -->
			    <!-- pagination here -->
		
	
		<?php endwhile;?>
		</div></div>
			<?php
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<!--end content-bbody-->
	<div class="light-bg footer"></div>
	<div class="wave"></div>
</div>
<!--end home-sale-->
<?php get_footer(); ?>
