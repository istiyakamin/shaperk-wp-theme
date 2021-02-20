<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Shaperk
 */

get_header();
?>

	<main id="primary" class="site-main">
		    <!-- Scroll Indicator-->
			<div id="scrollIndicator"></div>

				<div class="breadcrumb--area white-bg-breadcrumb">
					<div class="container h-100">
						<div class="row h-100 align-items-center">
						<div class="col-12">
							<div class="breadcrumb-content">
							<h1 class="breadcrumb-title"><?php the_title(); ?></h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb justify-content-center">
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item"><a href="/blog">Blog</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
								</ol>
							</nav>
							</div>
						</div>
						</div>
					</div>
				</div>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'shaperk' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'shaperk' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
