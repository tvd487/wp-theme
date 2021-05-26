<!-- Title -->
<h1 class="mt-4"><?php the_title() ?></h1>

<!-- Author -->
<p class="lead">
    by
	<?php the_author_posts_link() ?>
    in
	<?php the_category( ' &nbsp;&#47;&nbsp; ' ) ?>
</p>

<hr>

<!-- Date/Time -->
<p>Posted on <?php echo get_the_date() ?></p>

<hr>

<!-- Preview Image -->
<?php the_post_thumbnail( 'post-large', [ 'class' => 'img-fluid rounded' ] ) ?>

<hr>

<!-- Post Content -->
<?php the_content() ?>
<?php the_tags(); ?>

<!-- Related Post -->
<?php echo mini_blog_related_post('Bài viết liên quan', 4) ?>
