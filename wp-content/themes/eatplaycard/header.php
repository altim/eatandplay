<!DOCTYPE html>
<html lang="en" id="top">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <script>var homeUrl = '<?php echo home_url(); ?>'</script>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header>
        <div class="header-inner">
            <a href="<?php echo home_url(); ?>" class="logo"></a>

            <nav>
            	<?php

					 $args = array(
						 'theme_location'  => 'main',
						 'menu_class' => 'main-menu',
						 'container' => false
					 );

					 wp_nav_menu( $args );

				?>

                <ul class="social-menu">
                    <li><a href="#" class="btn_facebook"></a></li>
                    <li><a href="#" class="btn_twitter"></a></li>
                </ul>
            </nav>

            <a href="#" class="btn-mobile-menu"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile-menu.png" alt=""/></a>

        </div>
    </header>