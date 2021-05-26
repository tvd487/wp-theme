<?php get_header() ?>
<!-- Header-->

<!-- Features section-->
<div class="container px-5 my-5">
	<div class="row gx-5">
		<?php get_sidebar(); ?>
		<div class="col-lg-8">
			<div class="row gx-5">
				<?php
				$args      = [
					'posts_per_page' => 1,     // Số lượng bài
					'post__in'       => get_option( 'sticky_posts' )  // Lấy bài viết được đánh dấu sticky
				];
				$the_query = new WP_Query( $args ); // Gọi hàm WP_Query
				?>
                <div id="carouselExampleControls" class="carousel slide my-4" data-bs-ride="carousel">

                    <div class="carousel-inner">

						<?php if ( $the_query->have_posts() ) : ?>

							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                <div class="carousel-item <?php echo $the_query->current_post == 1 ? 'active' : ''  ?>">
									<?php the_post_thumbnail('blog-thumbnail',['class'=>'fuild-img']) ?>
                                    <div class="carousel-caption">
                                        <h3><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title() , 12 ) ?></a></h3>
                                    </div>
                                </div>

							<?php endwhile; ?>

						<?php endif; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
				<?php wp_reset_postdata() ?>
			</div>

			<?php
			$args = [
				'category_name' => 'hoc-duong',  // Slug của danh mục. Bạn có thể thêm danh mục nữa cách nhau bởi dấu , vd: 'xa-hoi,thoi-trang'
				'posts_per_page' => 6,        // Số lượng bài viết
			];

			$the_query = new WP_Query($args);
			?>

            <div class="card my-4">
                <h5 class="card-header">
                    Học đường
                </h5>
                <div class="card-body">
                    <div class="row">
						<?php if ( $the_query->have_posts() ) : ?>

							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

								<?php get_template_part( 'template-parts/content-home', get_post_format() ); ?>

							<?php endwhile; ?>

						<?php endif; ?>
                    </div>
                </div>
            </div>
			<?php wp_reset_postdata() ?>
		</div>
	</div>
</div>
</main>

<!-- Footer-->
<?php get_footer() ?>
