<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shaperk
 */

?>

<?php
		if ( is_singular() ) : ?>
		
		<!-- saasbox Blog Area-->
	<div class="saasbox--blog--area section-padding-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="post--like-post"><a href="#"><i class="lni-heart"></i></a><span>267 Like</span></div>
          <div class="col-12 col-sm-10 col-md-8">
            <?php the_content() ?>
            <!-- Post Tag & Share Button-->
			
            <div class="post-tag-share-button d-sm-flex align-items-center justify-content-between my-5">
              <!-- Post Tags-->
              <div class="post-tag pb-5">
				<?php the_tags( '<ul class="d-flex align-items-center pl-0"><li>', '</li><li>', '</li></ul>' ); ?>
                  <!-- <li><a href="#">business</a></li>
                  <li><a href="#">studio</a></li> -->
              </div>
			  
              <!-- Share Button-->
              <div class="share-button pb-5"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-pinterest"></i></a></div>
				
			</div>

			<div class="entry-meta">
				<?php
				shaperk_posted_on();
				shaperk_posted_by();
				?>
			</div><!-- .entry-meta -->
			<br>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
			
           
          </div>
        </div>
      </div>
    </div>
		
		<?php else : ?>

<div class="col-12 col-sm-6 col-lg-4">
	<div class="card blog-card border-0 no-boxshadow rounded-0"><a class="d-block mb-4" href="<?php the_permalink() ?>">

	<?php shaperk_post_thumbnail(); ?>
	</a>
		<div class="post-content">
			<a class="post-title d-block my-3" href="<?php the_permalink() ?>">
				<h4 class="h4"><?php the_title(); ?></h4>
			</a>
			<p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
		</div>
	</div>
</div>
			
<?php endif; ?>

