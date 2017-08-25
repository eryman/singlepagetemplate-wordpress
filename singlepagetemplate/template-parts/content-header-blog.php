<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo( 'title' ) ?></title>


    <!-- Icon Fonts -->    
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Favicon -->
    <!--link rel="shortcut icon" href="favicon.png" type="image/x-icon"-->
    <!--link rel="icon" href="favicon.png" type="image/x-icon"-->

    <?php wp_head(); ?>



  </head>

  <body data-spy="scroll" data-target=".navbar-fixed-top" style="background-image: url( '<?php echo( get_header_image() ); ?>' ); background-size: cover;">

      <nav class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-main-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="<?php echo get_site_url(); ?>"><i class="fa fa-user"></i> <?php bloginfo( 'title' ) ?></a>
          </div>
          <div id="navbar" class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
              <li class="hidden"><a href="#page-top"></a></li>
              <li><a href="<?php echo get_site_url() . '/#services'; ?>" class="page-scroll">Services</a></li>
              <li><a href="<?php echo get_site_url() . '/#about'; ?>" class="page-scroll">About</a></li>
              <li><a href="<?php echo get_site_url() . '/#contact'; ?>" class="page-scroll">Contact Us</a></li>
              <li><a href="<?php echo get_site_url() . '/#team'; ?>" class="page-scroll">Meet the Team</a></li>
              <li><a href="<?php echo get_site_url() . '/blog'; ?>" class="page-scroll">Blog</a></li>
            </ul>
          </div><!-- /.nav-collapse -->
        </div>
      </nav>

  <div class="container-fluid" id="main">
    
    <header class="jumbotron blog-head" id="page-top">
      <div class="jumbotron-inner container-fluid">
        <h1><?php bloginfo( 'title' ) ?></h1>
        <p><?php bloginfo( 'description' ) ?></p>
        <br>
      </div>
    </header>