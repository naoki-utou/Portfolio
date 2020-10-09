<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="禹藤直希のポートフォリオサイトです。">
    <!-- favicon -->
    <link rel="icon" href="favicon.ico">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    	<!-- header -->
    	<header class="header js_header">
    		<div class="header_inner">

                <!-- header_logo -->
    			<h1 class="header_logo">
    				<a class="header_logo_txt" href="<?php echo home_url(); ?>">My Portfolio</a>
    			</h1><!-- /.header_logo -->

    			<!-- header_toggle -->
    			<div class="header_toggle js_toggle is_sp">
                	<span class="header_toggle_icon"></span>
                	<span class="header_toggle_icon"></span>
                	<span class="header_toggle_icon"></span>
            	</div><!-- /.header_toggle -->

            	<!-- header_nav -->
            	<nav class="header_nav js_nav">
                    <?php
                        wp_nav_menu(
                            array(
                            'depth' => 1,
                            'theme_location' => 'global',
                            'container' => 'false',
                            'menu_class' => 'header_nav_list',
                            )
                        );
                    ?>
            	</nav><!-- /.header_nav -->
    		</div>
    	</header><!-- /.header --> 