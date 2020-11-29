<?php
get_header();
?>
<section id="services" class="section-1 offers">
	<div class="row">

		<?php if ( have_posts() ) : ?>

			<header class="page-header container">
				<h1 class="page-title mb-5">
					<?php printf( esc_html__( 'Результаты поиска по запросу: %s', 'os' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h1>
			</header>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'search' );
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>		
	</div>
</section>
<?php
get_footer();
