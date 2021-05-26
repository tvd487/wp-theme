<!DOCTYPE html>
<html <?php language_attributes() ?>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<?php if ( is_home() ): ?>
        <meta name="description" content="<?php bloginfo( 'description' ) ?>"/>
	<?php elseif ( is_single() ): ?>
        <meta name="description" content="<?php echo get_field( 'seo_description' ); ?>"/>
        <meta name="keywords" content="<?php echo get_field( 'seo_keywords' ); ?>"/>
	<?php endif ?>
    <meta name="author" content=""/>
    <title>
		<?php if ( is_home() ): ?>
			<?php bloginfo( 'name' ) ?>
		<?php elseif ( is_single() ): ?>
			<?php echo get_field( 'seo_title' ); ?>
		<?php else: ?>
			<?php wp_title( '', true, '' ); ?>
		<?php endif ?>
    </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo get_template_directory_uri() ?>/css/styles.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri() ?>/css/custom.css" rel="stylesheet"/>
	<?php wp_head(); ?>
</head>
<body class="d-flex flex-column h-100">
<main class="flex-shrink-0">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="<?php echo home_url() ?>">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'header-menu', // Gọi menu đã đăng ký trong function
					'depth'          => 2,     // Cấu hình dropdown 2 cấp
					'container'      => false, // Thẻ div bọc menu
					'menu_class'     => 'navbar-nav ml-auto', // Class của nav bootstrap
					'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
					'walker'         => new WP_Bootstrap_Navwalker()
				) );
				?>
            </div>
        </div>
    </nav>

	<?php mini_blog_breadcrumbs() ?>
