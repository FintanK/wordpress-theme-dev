<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> 
    <!--<![endif]-->
    <head>

        <!-- Basic Page Needs
      ================================================== -->

        <title><?php bloginfo('name'); ?></title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!-- META -->
        <?php wp_meta(); ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="<?php bloginfo('name'); ?>">

        <META NAME="geo.position" CONTENT="6.2661; 53.3428">
        <META NAME="geo.placename" CONTENT="Dublin">
        <META NAME="geo.region" CONTENT="IE">


        <!-- Open graph protocol -->
        <meta property="og:title" content="<?php bloginfo('name'); ?>"/>
        <meta property="og:type" content="article"/>
        <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
        <meta property="fb:admins" content="USER_ID"/>
        <meta property="og:description" content="<?php bloginfo('name'); ?>"/>
        <meta property="og:locale" content="en_GB" />
        <meta property="og:locale:alternate" content="fr_FR" />
        <meta property="og:locale:alternate" content="es_ES" />
        <meta property="og:site_name" content="IMDb" />

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!-- Favicons and Icons
        ================================================== -->
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>

        <script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>

        <!-- HTML5 and CSS3 Media Queries for older versions of IE 
        <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
    <body>


        <aside id="sidebar">
            <form method="get" id="searchform" action="/"> 
                <input type="text" value="<?php echo $search_text; ?>" name="s" id="search" placeholder ="Search.."/> 
                <input type="hidden" id="searchsubmit" /> 
            </form>
            <ul id="nav-menu">
                <?php
                $args = array(
                    'show_option_all' => '',
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'style' => 'list',
                    'show_count' => 0,
                    'hide_empty' => 1,
                    'use_desc_for_title' => 1,
                    'child_of' => 0,
                    'feed' => '',
                    'feed_type' => '',
                    'feed_image' => '',
                    'exclude' => '',
                    'exclude_tree' => '',
                    'include' => '',
                    'hierarchical' => 1,
                    'title_li' => null,
                    'show_option_none' => __('No categories'),
                    'number' => null,
                    'echo' => 1,
                    'depth' => 0,
                    'current_category' => 0,
                    'pad_counts' => 0,
                    'taxonomy' => 'category',
                    'walker' => null
                );
                wp_list_categories($args);
                ?> 


            </ul>
        </aside><!-- End Sidebar -->


        <div id = "page-wrapper">

            <header>
                <span class="nav-btn" id="mobile-nav-btn">
                    <span class="nav-btn-bar"></span>
                    <span class="nav-btn-bar"></span>
                    <span class="nav-btn-bar"></span>
                </span>
            </header> 

            <div class="container sixteen columns">

                <div class="six columns desktop-title">
                    <a href ="/"><img id ="logo" src = "<?php bloginfo('template_url'); ?>/images/logo.png"/><h1><?php bloginfo('name'); ?></h1></a>
                </div>
                <div id="site-control" class="ten columns">   
                    <form method="get" action="/"> 
                        <input type="text" value="<?php echo $search_text; ?>" name="s" placeholder ="Search.."/>
                    </form>
                </div>

                <nav id="nav" class="sixteen columns">
                    
                </nav>