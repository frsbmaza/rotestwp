<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Remote_Office
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- start header section -->
    <header>
        <div class="header_top">
            <div class="container d-flex align-items-center p-0">
                <div class="header_top_left align-self-center float-left">
                    <span class="header_top_info d-sm-inline"> <i class="fas fa-envelope"></i> <?php echo carbon_get_theme_option('email');?> </span>
                    <span class="header_top_info d-sm-inline"> <i class="fas fa-phone-alt"></i> <?php echo carbon_get_theme_option('phone_number');?> </span>
                </div>
                <div class="header_top_right float-right ml-auto">
                    <a href="#" class="btn gradient-btn plain-btn">
                        Price Calculator
                    </a>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container custom-padding">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/">
                        <span class="typed_wrap">
                            <span class="img_logo">
                                <img src="<?php echo carbon_get_theme_option('header_logo');?>" alt="">
                            </span>
                            <span class="typed"></span>
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="true" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/bars-1.0.png">
                        </span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarMenu">
                        <!-- <ul id="menu-header-menu" class="navbar-nav ml-auto">
                            <li class="active "><a href="#" aria-current="page">Home</a></li>
                            <li><a href="#">Solutions</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Stories</a></li>
                            <li><a href="#">Career</a></li>
                        </ul> -->
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'container'            => 'div',
									'container_class'      => 'navbar-collapse collapse',
									'container_id'         => 'navbarMenu',
									'menu_class'           => 'navbar-nav ml-auto',
									'menu_id'              => 'menu-header-menu',
								)
							);
						?>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- end header section -->