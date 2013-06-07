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
                  <a href="#" data-toggle="dropdown">Home</a>
<!--                  <ul class="dropdown-menu">
                    <li class="nav-header">PRODUCTS</li>
                    <li><a href="product.html">Product1</a></li>
                    <li><a href="product.html">Product2</a></li>
                    <li><a href="product.html">Product3</a></li>
                    <li><a href="all_products.html">All products</a></li>             
                    <li class="divider"></li>
                    <li class="nav-header">SERVICES</li>
                    <li><a href="service.html">Service1</a></li>
                    <li><a href="service.html">Service2</a></li>
                    <li><a href="service.html">Service3</a></li>
                    <li><a href="all_services.html">All services</a></li>
                  </ul>                  -->
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Know us<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="our_works.html">Creation</a></li>
                    <li><a href="patnerships.html">Team</a></li>
<!--                    <li><a href="leadership.html">Leadership</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="blog.html">Blog</a></li>-->
                  </ul>
                </li>
<!--                <li><a href="faq.html">FAQ</a></li>-->
                <li><a href="contact_us.html">Get in touch</a></li>
<!--                <li><a href="signup.html">Sign up</a></li>
                <li><a href="signin.html">Sign in</a></li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
        <div class="container">
            <article>
            <div class="row">
            <div class="span12">
              <div class="page-header">
                <h3>Welcome to kitecon Labs <small>Ideas ! driven by sourcecode</small></h3>
              </div>
            </div>
<!--            <div class="span12 center-align">
              <img src="http://placehold.it/800x300" class="thumbnail product-snap">            
            </div>-->
          </div>
                <div class="row">
            <div class="span10 offset1">
              <p>
                In Kitecon Labs, we showcase the cool stuff we are developing and are in the process of bringing to market. Your feedback, as an early adopter, will help us discover new ideas and make them into real usable products. Enjoy. 
              </p>
                                                      
            </div>      
          </div>
        </article>
        </div>
        
      <!-- Start: slider -->
<!--      <div class="slider">
        <div class="container-fluid">
          <div id="heroSlider" class="carousel slide">
            <div class="carousel-inner">
              <div class="active item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR BUSINESS AND CORPORATE.</h1>
                      <p>
                        We are kitecon labs and we are awesome.We solve your technology problems by our awesome products.
                        We are kitecon labs and we are awesome.We solve your technology problems by our awesome products.
                      </p>
                      <h3>
                        <a href="product.html" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                        <img src="<?php echo site_url('img/placeholder.jpg')?>" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR NATURE OF WORK</h1>
                      <p>
                        We are kitecon labs and we design ultimate website applications.
                        We are kitecon labs and we design ultimate website applications.
                      </p>
                      <h3>
                        <a href="service.html" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                        <img src="<?php echo site_url('img/placeholder.jpg')?>" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR PRODUCT</h1>
                      <p>
                        Get excited about our products.We build awesome products in mobile.
                        We build awesome products in mobile.We build awesome products in mobile.
                      </p>
                      <h3>
                        <a href="#" class="btn btn-primary">Buy now</a>
                        <a href="product.html" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                        <img src="<?php echo site_url('img/placeholder.jpg') ?>" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR ANOTHER PRODUCT</h1>
                      <p>
                        Get excited about our products.We build awesome products in mobile.
                        We build awesome products in mobile.We build awesome products in mobile.
                      </p>
                      <h3>
                        <a href="#" class="btn btn-primary">Buy now</a>
                        <a href="product.html" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                        <img src="<?php echo site_url('img/placeholder.jpg')?>" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#heroSlider" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#heroSlider" data-slide="next">›</a>
          </div>
        </div>
      </div>-->
      <!-- End: slider -->
      <!-- Start: PRODUCT LIST -->
        <div class="container">
<!--          <div class="page-header">
            <h2>Our products</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
            <li class="span4">
                <div class="thumbnail">
                  <img src="<?php echo site_url('img/placeholder-360x200.jpg')?>" alt="product name">
                  <div class="caption">
                    <h3>Product name</h3>
                    <p>
                      Few attractive words about your product.Few attractive words about your product.
                      Few attractive words about your product.Few attractive words about your product.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>-->
          <div class="page-header">
            <h2>Our upcoming product</h2>
          </div>
          <div class="row-fluid offset2">
            <ul class="thumbnails">
              <li class="span7">
                <div class="thumbnail">
                  <img src="<?php echo site_url('img/chartjs.png')?>" alt="CVGraph">
                  <div class="caption">
                    <h3>CVGraph</h3>
                    <p>
                      For years, a resume was nothing more than a collection of personal data splashed over a white paper for your prospective employers to see – a brief overview of your qualifications and work experience. 
                      Useful, but quite boring, isn’t it? Especially now, in this digital age, where visualization is crucial for absorbing information. Data visualization is becoming a vital part of how we perceive information and in this ever-changing world, we are witnessing an increase usage of infographics as a way to visualize data.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <div class="row">
                      <p>
                      <a href="product.html" class="btn">Read more</a>
                      <a href="#" class="btn disabled">Try for free</a>&nbsp;
                      
                        <i class="icon-cogs"></i>In Development
                  
                    </p>
                    </div>
                
                    
                  </div>
                </div>
              </li>
<!--              <li class="span4">
                <div class="thumbnail">
                  <img src="<?php echo site_url('img/placeholder-360x200.jpg')?>" alt="product name">
                  <div class="caption">
                    <h3>Service title</h3>
                    <p>
                      Few attractive words about your service.Few attractive words about your service.
                      Few attractive words about your service.Few attractive words about your service.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img src="<?php echo site_url('img/placeholder-360x200.jpg')?>" alt="product name">
                  <div class="caption">
                    <h3>Service title</h3>
                    <p>
                      Few attractive words about your service.Few attractive words about your service.
                      Few attractive words about your service.Few attractive words about your service.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>-->
            </ul>
          </div>
        </div>
      <!-- End: PRODUCT LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
<!--          <div class="span2">
            <h4><i class="icon-star icon-white"></i> Products</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="product.html">Product1</a></li>
                <li><a href="product.html">Product2</a></li>
                <li><a href="product.html">Product3</a></li>
                <li><a href="all_products.html">All products</a></li>
              </ul>
            </nav>
            <h4><i class="icon-cogs icon-white"></i> Services</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="service.html">Service1</a></li>
                <li><a href="service.html">Service2</a></li>
                <li><a href="service.html">Service3</a></li>
                <li><a href="all_services.html">All services</a></li>              
              </ul>
            </nav>
          </div>-->
<!--          <div class="span2">
            <h4><i class="icon-beaker icon-white"></i> About</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="our_works.html">Our works</a></li>
                <li><a href="patnerships.html">Patnerships</a></li>
                <li><a href="leadership.html">Leadership</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="blog.html">Blog</a></li>
              <ul>
            </nav>          
          </div>-->
          <div class="span2">
            <h4><i class="icon-thumbs-up icon-white"></i> Support</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact_us.html">Contact us</a></li>            
              </ul>
            </nav>
            <h4><i class="icon-legal icon-white"></i> Legal</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="#">License</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Security</a></li>      
              </ul>
            </nav>            
          </div>
          <div class="span3">
            <h4>Get in touch</h4>
            <div class="social-icons-row">
              <a href="#"><i class="icon-twitter"></i></a>
              <a href="#"><i class="icon-facebook"></i></a>
              <a href="#"><i class="icon-linkedin"></i></a>                                         
            </div>
            <div class="social-icons-row">
              <a href="#"><i class="icon-google-plus"></i></a>              
              <a href="#"><i class="icon-github"></i></a>
              <a href="mailto:soundar.rathinasamy@gmail.com"><i class="icon-envelope"></i></a>        
            </div>
            <div class="social-icons-row">
              <i class="icon-phone icon-large phone-number"></i> +919750227877
            </div>
          </div>      
          <div class="span3 offset4">
            <h4>Get updated by email</h4>
            <form>
              <input type="text" name="email" placeholder="Email address">
              <input type="submit" class="btn btn-primary" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
      <hr class="footer-divider">
      <div class="container">
        <p>
          &copy; 2012-3000 kitecon labs, Inc. All Rights Reserved.
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="<?php echo site_url('js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo site_url('js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="j<?php echo site_url('js/boot-business.js')?>"></script>
  </body>
</html>
