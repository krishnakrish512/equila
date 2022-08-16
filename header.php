<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Equila
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- <link rel="icon" type="image/png" id="favicon" href="img/favicon.png" /> -->
    <link rel="stylesheet" href="https://use.typekit.net/xsl0tht.css">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <div class="main-header">
            <div class="d-flex justify-space-between  ">
                <?php
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_url($custom_logo_id, 'full');
//                            var_dump($logo);
//                            exit();
                    } ?>
                <div class="site-logo wow fadeIn" data-wow-offset="0" data-wow-delay="0.6s">
                    <a href="<?= get_home_url(); ?>"> <img src="<?php echo $logo; ?>" width="177" height="70"
                            alt="" /></a>
                </div>
                <div class="main-navigation">
                    <div class="site-toggle"> <i>
                            <span></span>
                            <span></span>
                            <span></span>
                        </i> </div>
                    <div class="site-nav">
                        <div class="nav-close">Close <img
                                src="<?php echo get_template_directory_uri(); ?>/img/close-white.svg" alt=""> </div>
                        <div class="nav-wrapper">
                            <?php
			             wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
                    'menu_class'     => 'menu-list',
					'container'		 => 'ul'
				)
			);
			?>
                            <ul>

                                <li class="menu-item enquire-btn"> <a href="#">Enquire</a> </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
    </header>
    <?php $Header = get_field('header_settings','option');?>
    <!-- enquire form section starts here -->
    <div class="enquire-wrap">
        <div class="nav-close">Close <img src="<?php echo get_template_directory_uri(); ?>/img/close-dark.svg" alt="">
        </div>
        <h2>Enquire Now</h2>

        <?php 
                if(!empty($Header['enquiry_form'])):
                    echo do_shortcode('[gravityform id="'.$Header['enquiry_form'].'" title="false" description="false" ajax="true"]');

                endif;
                ?>
      
    </div>