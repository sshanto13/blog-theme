<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shantonu_blog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>

  <!-- Revolution css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/rs-plugin/css/settings.css" media="screen"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/rs-plugin/css/extralayer.css">
  
  <!-- Flat icon css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/flat-icon/flaticon.css">
  
  <!-- Font awesome -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/font-awesome/css/font-awesome.min.css">
  
  <!-- Owl Carosel css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/owl/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/owl/css/owl.theme.default.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/owl/css/owl.theme.css">
  
  <!-- mmenu -->
  <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/mmenu/css/jquery.mmenu.css" />
  
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">

  <!-- Custom Style css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hover.css">
 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script>window.html5 || document.write('<script src="js/<?php echo get_template_directory_uri(); ?>/vendor/html5shiv.js"><\/script>')
</script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main">   
<header  class="header-part">
  <div id="home">
    <!-- Fixed navbar -->
    <div class="navi navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header page-scroll">
          <a href="#menu">
            <button type="button" data-effect="st-effect-1" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </a>
          <a class="navbar-brand" href="index.html">Shantonu suman's blog site</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse pull-right hidden-xs">
          <ul class="nav navbar-nav navbar-right">
            <li ><a class="page-scroll" href="index.html">Home</a></li>
            <li> <a class="page-scroll" href="#">about us</a></li>
            <li> <a class="page-scroll" href="#">services</a></li>
            <li> <a class="page-scroll" href="#">product</a></li>
            <li> <a class="page-scroll" href="#">team</a></li>
            
          <li><a class="page-scroll" href="index.html">Contact</a></li>
          <!-- Search Block -->
          <li>
            <i class="search fa fa-search search-btn"></i>
            <div class="search-open" style="display:none;" >
              <div class="input-group animated fadeInDown" >
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                  <button class="btn-u" type="button">Go</button>
                </span>
              </div>
            </div>    
          </li>
          <!-- End Search Block -->
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div><!-- End of Nav -->
</div>
</header>

<!--   Start Blog with Sidebar   -->

  <section class="blog-header section-padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h1 class="section-title">Hi, This is Shantonu</h1>
        </div><!-- /.col-xs-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.blog-header -->