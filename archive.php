<?php
/*
Template Name: Archives
*/
?>
<?php get_header() ?>
	<!-- Page Content -->
	<div class="container">

		<div class="row">

			<!-- Blog Entries Column -->
			<div class="col-md-8">

				<h1 class="my-2 mb-4 page-header">
					<?php the_title() ?>
				</h1>

				<form action="<?php bloginfo('url'); ?>/">
					<div class="input-group">
						<input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" placeholder="Search for...">
						<span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
					</div>
				</form>

				<div id="custom_html-4" class="widget_text card my-4 widget_custom_html">
					<h5 class="card-header">Theo tháng:</h5>
					<div class="card-body">
						<?php wp_get_archives('type=monthly'); ?>
					</div>
				</div>

				<div id="custom_html-4" class="widget_text card my-4 widget_custom_html">
					<h5 class="card-header">Theo chuyên mục:</h5>
					<div class="card-body">
						<?php wp_list_categories(); ?>
					</div>
				</div>

			</div>

			<?php get_sidebar() ?>

		</div>
		<!-- /.row -->

	</div>
	<!-- /.container -->
<?php get_footer() ?>
