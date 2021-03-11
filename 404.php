<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Shaperk
 */

get_header();
?>

<!-- Error Area-->
<div class="saasbox-error-area section-padding-0-120">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-sm-10 col-md-9 col-lg-7"><img class="mb-5" src="https://shaperk.com/saas/dist/img/core-img/404.png" alt="404 Page found">
            <h5>Oops! Page not found</h5>
            <p>We couldn't find any results for your search. Try again.</p><a class="btn saasbox-btn mt-4" href="/">Back Home</a> <a class="btn saasbox-btn mt-4" href="/blog">See Blog</a>

			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'shaperk' ); ?></p>

					<?php
					get_search_form();

					
					?>
		
		</div>
		<?php // the_widget( 'WP_Widget_Recent_Posts' ); ?>
        </div>
      </div>
    </div>
    <div class="container">
	<div class="border-top"></div>

</div>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="page-content">
				

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php // esc_html_e( 'Most Used Categories', 'shaperk' ); ?></h2>
						<ul>
							<?php
							// wp_list_categories(
							// 	array(
							// 		'orderby'    => 'count',
							// 		'order'      => 'DESC',
							// 		'show_count' => 1,
							// 		'title_li'   => '',
							// 		'number'     => 10,
							// 	)
							// );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					// $shaperk_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'shaperk' ), convert_smilies( ':)' ) ) . '</p>';
					// the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$shaperk_archive_content" );

					// the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
