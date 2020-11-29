<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<style>
        :root {
            --header-bg-color: #111111;
            --nav-item-color: #f5f5f5;
            --top-nav-item-color: #f5f5f5;
            --hero-bg-color: #040402;

            --section-1-bg-color: #040402;
            --section-2-bg-color: #040402;
            --section-3-bg-color: #040402;
            --section-4-bg-color: #040402;
            --section-5-bg-color: #040402;
            --section-6-bg-color: #040402;
            
            --footer-bg-color: #111111;
        }
    </style>
    <script src="//code-ya.jivosite.com/widget/Ms3NF7UtX7" async></script>
</head>

<body <?php body_class(); ?> class="theme-mode-dark">
<?php wp_body_open(); ?>

<!-- Header -->
<header id="header">

    <!-- Navbar -->
    <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
        <div class="container header">

            <!-- Navbar Brand-->
            <a class="navbar-brand" href="<?php echo get_home_url();?>">
                LETS<i class="leverage-2-0">kg</i>
                <!-- Custom Logo -->
                <!-- <img src="assets/images/logo.svg" alt="Leverage"> -->
            </a>

            <!-- Nav holder -->
            <div class="ml-auto"></div>

            <!-- Navbar Items -->
            <?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container' => false,
						'menu_class' => 'navbar-nav items d-flex',
					)
				);
			?>

            <!-- Navbar Icons -->
            <ul class="navbar-nav icons">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                        <i class="icon-magnifier"></i>
                    </a>
                </li>
                <li class="nav-item social">
                    <a href="tel:<?php echo esc_html(get_theme_mod('os_check_1_check')); ?>" class="nav-link">
                        <i class="icon-phone" style="font-size: 19px;"></i>
                    </a>
                </li>
                <li class="nav-item social">
                    <a href="<?php echo esc_html(get_theme_mod('os_check_2_check')); ?>" class="nav-link">
                        <i class="icon-social-instagram" style="font-size: 19px;"></i>
                    </a>
                </li>
                <li class="nav-item social">
                    <a href="<?php echo esc_html(get_theme_mod('os_check_4_check')); ?>" class="nav-link">
                        <i class="fa fa-telegram" style="font-size: 19px;"></i>
                    </a>
                </li>
                <li class="nav-item social">
                    <a href="<?php echo esc_html(get_theme_mod('os_check_3_check')); ?>" class="nav-link">
                        <i class="fa fa-whatsapp" style="font-size: 19px;"></i>
                    </a>
                </li>
            </ul>

            <!-- Navbar Toggle -->
            <ul class="navbar-nav toggle">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                        <i class="icon-menu m-0"></i>
                    </a>
                </li>
            </ul>

        </div>
    </nav>

</header>