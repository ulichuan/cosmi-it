<?php
/*
 * Template Name: The-Index
 */
 
// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );?>
 
<?php get_header();?>

<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/page/the-content', 'page' );


				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>


<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div id="panels_for_posts"><!-- area where shows the posts -->
		
				<section id="box_in_line" class="box_in_line">
					
					<?php 
						global $post;
						$args = array ( 'category' => 2, 'posts_per_page' => 3);
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :	setup_postdata($post);
 					?>
						<!-- Style Posts here -->
							<div id="article_list" class="the_articles">

								<div class="article_imag_thumbs"><a href="<?php the_permalink();?>">
								<?php if (has_post_thumbnail() ) { the_post_thumbnail( 'twentyseventeen-featured-image' ); } ?></a></div>

								<div class="article_title"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></div>
								
								<div class="article_description"><?php the_excerpt();?></div>

							</div><!-- #article_list -->
					
						<?php endforeach; 
						wp_reset_postdata();?>


				</section><!-- #box_in_line -->
		
			</div><!-- #panels_for_posts -->

			<!-- FINAL THE PANEL1 AND OPEN THE NEW PANEL2 -->

			<div id="panels_for_post"><!-- area where shows the posts -->
		
				<section id="box_in_line" class="box_in_cosmic">
					
					<?php 
						global $post;
						$args = array ( 'category' => 3, 'posts_per_page' => 1);
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :	setup_postdata($post);
 					?>
						<!-- Style Posts here -->
							<div id="article_list" class="the_cosmic_articles">

								<div class="cosmic_imag_thumbs"><a href="<?php the_permalink();?>">
								<?php if (has_post_thumbnail() ) { the_post_thumbnail( 'twentyseventeen-featured-image' ); } ?></a></div>

								<div class="article_title"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></div>
								
								<div class="article_description"><?php the_excerpt();?></div>

							</div><!-- #article_list -->
					
						<?php endforeach; 
						wp_reset_postdata();?>


				</section><!-- #box_in_line -->
		
			</div><!-- #panels_for_posts -->


		</main><!-- #main -->

	</div><!-- #primary -->
	
	
</div><!-- .wrap -->

<?php
get_footer();	