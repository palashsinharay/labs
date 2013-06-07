<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="kitecon labs | Short description about company">
    <meta name="author" content="Your name">
    <title>kitecon labs | Give unique title of the page here</title>
    <!-- Bootstrap -->
    <link href="<?php echo site_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="<?php echo site_url('css/bootstrap-responsive.min.css')?>" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="<?php echo site_url('css/font-awesome.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('css/font-awesome-ie7.css')?>" rel="stylesheet">
    <!-- kitecon labs theme -->
    <link href="<?php echo site_url('css/boot-business.css')?>" rel="stylesheet">
  </head>
  <body>
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="index.html" class="brand brand-bootbus">Kitecon Labs</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li>
                  <a href="<?php echo site_url('index.php/home/index')?>">Home</a>
                  
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Know us<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="<?php echo site_url('index.php/home/product')?>">Creation</a></li>
                    <li><a href="<?php echo site_url('index.php/home/team')?>">Team</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo site_url('index.php/home/contactUs')?>">Get in touch</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
