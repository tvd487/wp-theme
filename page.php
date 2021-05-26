<?php get_header() ?>
<!-- Header-->

<!-- Features section-->
<div class="container px-5 my-5">
	<div class="row gx-5">
		<div class="col-lg-12">
			<div class="row">
				<!-- CONTENT PARTS -->
				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content-page', get_post_format() ); ?>

					<?php endwhile; ?>

				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
</main>

<!-- Footer -->
<?php get_footer() ?>
