<div class="col-lg-6 col-12 col-md-4">
	<div class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h2 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">
                    <?php the_title(); ?>
                </h2>

			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail( 'post-thumbnail', ['class'=>'img-fluid', 'data-aos'=>'zoom-out-up', 'data-aos-delay'=>'800']); ?>
			</a>

			<p data-aos="zoom-out-up" data-aos-delay="800" class="text-white">
				<?php do_excerpt(get_the_excerpt(), 8); ?>
			</p>

		</article><!-- #post-<?php the_ID(); ?> -->
	</div>
</div>

