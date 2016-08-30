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
			<?php
			// Start the loop.
				while ( have_posts() ) : the_post(); ?>
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
				</div>
			<?php 
				get_template_part( 'content', get_post_format() );


				// Previous/next post navigation.
				joints_related_posts_default() ;
			endwhile;
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

