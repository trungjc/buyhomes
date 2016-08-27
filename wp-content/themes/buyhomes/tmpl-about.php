<?php
/**
 * Template Name: template Giới Thiệu
 *
 * @package    WordPress
 * @subpackage Whispli
 * @since      Whispli 1.0
 */
?>
<?php get_header(); ?>

	<section id="primary" class="content-area container">
		<main id="main" class="site-main row" role="main">
			<div class="col-xs-12 ">
			
					<header class="page-header" >
						<?php 
					twentyfifteen_post_thumbnail();
				?>
						<div class="page-header-text">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>		
						
						</div>
					</header><!-- .page-header -->
					
		<?php

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

        <div id="parent-<?php the_ID(); ?>" class="parent-page">
			<div class="media">
				<a href="<?php the_permalink(); ?>"  class="pull-left">
					<?php echo get_the_post_thumbnail( $page->ID ); ?>
				</a>
				<div class="media-body">					
		            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		            <p><?php the_excerpt(); ?></p>
				</div>
			</div>


        </div>

    <?php endwhile; ?>

<?php endif; wp_reset_query(); ?>
	<div class="page-detail">
			<?php
			while ( have_posts() ) : the_post();

				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- <header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header>.entry-header -->

					<div class="entry-content">
						<?php
						the_content();

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'whispli' ),
							'after'  => '</div>',
						) );
						?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->
				<?php

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?></div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();?>