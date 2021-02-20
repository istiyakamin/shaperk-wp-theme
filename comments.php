<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shaperk
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
 <!-- Comments Area-->
 <?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		$shaperk_comment_count = get_comments_number();
		?>
 <div class="comment_area mb-50 clearfix">
              <h4 class="mb-5"><?php echo $shaperk_comment_count ?> Comments</h4>
              <ol class="pl-0">
			  <?php
			wp_list_comments(
				array(
					'walker'      => new Custom_Walker_Comment(),
					'short_ping'  => true,
					'style'       => 'ol',
				)
			);
			?>
               
            <div class="contact-area">
              <h4 class="mb-5">Leave A Comment</h4>
              <form class="contact-from" action="#" method="post">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <input class="form-control mb-30" type="text" name="message-name" placeholder="Your Name">
                  </div>
                  <div class="col-12 col-lg-6">
                    <input class="form-control mb-30" type="email" name="message-email" placeholder="Your Email">
                  </div>
                  <div class="col-12">
                    <textarea class="form-control mb-30" name="message" placeholder="Type your comments..."></textarea>
                  </div>
                  <div class="col-12">
                    <button class="btn saasbox-btn" type="submit">Submit Comment</button>
                  </div>
                </div>
              </form>
            </div>


			<!-- ############## -->


		

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			
		</ol><!-- .comment-list -->

		<?php

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'shaperk' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

