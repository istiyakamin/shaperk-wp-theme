<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shaperk
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="breadcrumb--area white-bg-breadcrumb">
					<div class="container h-100">
						<div class="row h-100 align-items-center">
						<div class="col-12">
							<div class="breadcrumb-content">
							<h2 class="breadcrumb-title">Shaperk Blog</h2>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb justify-content-center">
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="/blog">Shaperk Blog</a></li>
								</ol>
							</nav>
							</div>
						</div>
						</div>
					</div>
					</div>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<!-- Breadcrumb Area-->
				<!-- Breadcrumb Area-->
				
				<?php
			endif; ?>

			<!-- Blog Area-->
			<div class="saasbox--blog--area blog-full section-padding-120">
				<div class="container">
					<div class="row g-5">
			<?php

			/* Start the Loop */
			
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
			//=========
			?> 

          
          
        </div>
        <!-- Pagination Area-->



        <div class="saasbox-pagination-area mt-5">
          <nav aria-label="Page navigation example">

		  <?php echo shaperk_pagination(); ?>
            <!-- <ul class="pagination justify-content-center">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">9</a></li>
            </ul> -->
          </nav>
        </div>
      </div>
    </div>
			<?php
			//=========



		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
