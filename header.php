<?php /** Header @package avoriazchalets */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $excerpt; ?>">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo the_title(); ?></title>

    <link rel="stylesheet" href="https://use.typekit.net/vpi6fvi.css">
    <!--TYPEKIT INJECT-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.css" rel="stylesheet" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site-wrapper">
        <header>
            <div class="container">
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>" alt="Avoriaz Chalets Logo" title="Avoriaz Chalets Logo">
                        AVORIAZ <span>CHALETS</span>
                    </a>
                </div>

                <div class="nav nav__upper-section">
                    <?wp_nav_menu( array( 
						'theme_location' => 'upper-menu'
					) ); ?>
                </div>
                <div class="nav nav__lower-section">
                    <?wp_nav_menu( array( 
						'theme_location' => 'lower-menu'
					) ); ?>
                </div>
                <div class="book-now">
                    <a href="/contact">Book Now</a>
                </div>
                <div id="menu-toggle">
                    <!-- <div id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div id="cross">
                        <span></span>
                        <span></span>
                    </div> -->
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/mobnav.svg">
                </div>

            </div>
        </header>
        <!-- Mobile Menu Overlay -->
        <div id="mobileNav" class="overlay">
            <!-- Overlay content -->
            <div class="overlay-content">
                <?wp_nav_menu( array( 
						'theme_location' => 'mobile-menu'
					) ); ?>

                <div class="overlay-button"><a href="/contact">Book Now</a></div>
            </div>
        </div>


        <main>
            <?php if ( is_page_template( 'page-templates/home.php' ) ) {
			    get_template_part('template-parts/home-hero');
			} elseif ( is_singular( 'property' )) {
                get_template_part('template-parts/av-prop-hero');
                
			}  elseif ( is_singular( array('intproperty', 'holiday' ))) {
                get_template_part('template-parts/int-prop-hero');

            }  elseif ( is_singular('post')) {
                get_template_part('template-parts/news-hero');
                
			} else {
                get_template_part('template-parts/hero');
            }
            ?>