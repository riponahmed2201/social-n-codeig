<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title><?php echo $title;?></title>

<!-- Bootstrap Core CSS -->
<link href=" <?php echo  base_url();?>assets/frontend/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo  base_url();?>assets/frontend/css/main.css" rel="stylesheet">
<link href="<?php echo  base_url();?>assets/frontend/fonts/flaticon.css" rel="stylesheet">
<link href="<?php echo  base_url();?>assets/frontend/css/style.css" rel="stylesheet">
<link href="<?php echo  base_url();?>assets/frontend/css/responsive.css" rel="stylesheet">

<!-- fontawesome  -->
<link href="<?php echo  base_url();?>assets/frontend/css/all.min.css" rel="stylesheet">

<!-- JavaScripts -->
<script src="<?php echo  base_url();?>assets/frontend/js/modernizr.js"></script>

<!-- Online Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- Wrap -->
<div id="wrap">

  <!-- header -->
  <header class="sticky">
    <div class="container">

      <!-- Logo -->
      <div class="logo"> <a href="<?php echo base_url();?>index.php/Welcome"><img class="img-responsive" src="<?php echo  base_url();?>assets/frontend/images/logo-dark.png" alt="" ></a> </div>
      <nav class="navbar ownmenu navbar-expand-lg" id="nav-resposive">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarNav" data-parent="#nav-resposive">
          <ul class="nav">
            <li class="active"> <a href="<?php echo base_url();?>index.php/Welcome">Home</a> </li>
            <li class="dropdown"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Pages</a>
              <ul class="dropdown-menu">
                <li> <a href="<?php echo base_url();?>index.php/Welcome">Home </a> </li>
                <li> <a href="<?php echo base_url();?>index.php/Welcome/about">About </a> </li>
                <li> <a href="pricing.html">Pricing </a> </li>
                <li> <a href="login-register.html">Login / Register </a> </li>
                <li> <a href="<?php echo base_url();?>index.php/Welcome/company">Companies</a> </li>
                <li> <a href="<?php echo base_url();?>index.php/Welcome/company_details">Companies Detail </a> </li>
                <li> <a href="professionals.html">Professional </a> </li>
                <li> <a href="professional-details.html">Professional Details </a> </li>
                <li> <a href="job-board.html">Job Board </a> </li>
                <li> <a href="job-board-details.html">Job Board Details</a> </li>
                <li class="sub-menu"> <a href="#.">2nd Level Menu </a>
                  <ul class="dropdown-menu sec-level">
                    <li> <a href="<?php echo base_url();?>index.php/Welcome/about">About </a> </li>
                    <li> <a href="pricing.html">Pricing </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li> <a href="<?php echo base_url();?>index.php/Welcome/company">Companies</a> </li>
            <li> <a href="pricing.html">Pricing </a> </li>
            <!-- Two Link Option -->
            <li class="dropdown"> <a href="professionals.html" class="dropdown-toggle" data-toggle="dropdown">Professionals</a>
              <div class="dropdown-menu two-option">
                <div class="row">
                  <ul class="col-sm-6">
                    <li> <a href="<?php echo base_url();?>index.php/Welcome">Home </a> </li>
                    <li> <a href="<?php echo base_url();?>index.php/Welcome/about">About </a> </li>
                    <li> <a href="services.html">Services </a> </li>
                    <li> <a href="<?php echo base_url();?>index.php/Welcome/company">Companies</a> </li>
                    <li> <a href="<?php echo base_url();?>index.php/Welcome/company_details">Companies Detail </a> </li>
                    <li> <a href="professionals.html">Professionals </a> </li>
                    <li> <a href="job-board.html">Job Board </a> </li>
                  </ul>
                  <ul class="col-sm-6">
                    <li> <a href="<?php echo base_url();?>index.php/Welcome">Home </a> </li>
                    <li> <a href="<?php echo base_url();?>index.php/Welcome/about">About </a> </li>
                    <li> <a href="services.html">Services </a> </li>
                    <li> <a href="<?php echo base_url();?>index.php/Welcome/company">Companies</a> </li>
                    <li> <a href="<?php echo base_url();?>index.php/Welcome/company_details">Companies Detail </a> </li>
                    <li> <a href="professionals.html">Professionals </a> </li>
                    <li> <a href="job-board.html">Job Board </a> </li>
                  </ul>
                </div>
              </div>
            </li>
            <li> <a href="<?php echo base_url();?>index.php/Welcome/contact"> Contact</a> </li>
          </ul>
        </div>

        <!-- Nav Right -->
        <div class="nav-right">
          <button class="social-toggler collapsed" type="button" data-toggle="collapse" data-target="#socialNav" aria-controls="socialNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="fa fa-share-alt"></span> </button>
          <div class="collapse navbar-collapse navbar-expand-lg" id="socialNav" data-parent="#nav-resposive">
            <div class="social_icons">
              <ul>
                <li><a href="#."><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                <li><a href="#."><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#."><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class="clearfix"></div>
  </header>

  <!-- Content -->

  <?php echo $maint_content;?>



  <!-- Footer -->
  <footer id="footer">
    <div class="footer-wrapper">

      <!-- Footer Top -->
      <div class="footer-top">
        <div class="footer-top-wrapper">
          <div class="container">
            <div class="row">
              <!-- About Block -->
              <div class="col-md-4">
                <div class="block block-companies">
                  <h3 class="block-title">Latest Companies</h3>
                  <div class="block-content">
                    <ul>
                      <li> <a href="#."> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-1.jpg" alt="" class="img-responsive"> Webicode</a></li>
                      <li> <a href="#."> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-2.jpg" alt="" class="img-responsive"> Webicode</a></li>
                      <li> <a href="#."> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-3.jpg" alt="" class="img-responsive"> Webicode</a></li>
                      <li> <a href="#."> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-4.jpg" alt="" class="img-responsive"> Webicode</a></li>
                      <li> <a href="#."> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-5.jpg" alt="" class="img-responsive"> Webicode</a></li>
                      <li> <a href="#."> <img src="<?php echo  base_url();?>assets/frontend/images/company-img-6.jpg" alt="" class="img-responsive"> Webicode</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Footer Links Block -->
              <div class="col-md-4">
                <div class="block block-links">
                  <h3 class="block-title"><span>Usefull Links</span></h3>
                  <div class="block-content">
                    <ul>
                      <li><a href="#.">Theme Features</a></li>
                      <li><a href="#.">Page Builder</a></li>
                      <li><a href="#.">Privacy Policy</a></li>
                      <li><a href="#.">Shop Rules</a></li>
                      <li><a href="#.">Services</a></li>
                      <li><a href="#.">Gallery Layout</a></li>
                      <li><a href="#.">Theme Features</a></li>
                      <li><a href="#.">Page Builder</a></li>
                      <li><a href="#.">Privacy Policy</a></li>
                      <li><a href="#.">Shop Rules</a></li>
                      <li><a href="#.">Services</a></li>
                      <li><a href="#.">Gallery Layout</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Twitter Widget Block -->
              <div class="col-md-4">
                <div class="block block-twitter-widget">
                  <h3 class="block-title"><span>Twitter Widget</span></h3>
                  <div class="block-content">
                    <div class="twitter-item">
                      <div class="twitter-content"> Looking for an awesome CREATIVE WordPress Theme? Esquise was updated and optimized to run even better. Find it here: <a href="https://webicode.com/" target="_blank">https://webicode.com/</a> </div>
                      <div class="twitter-context"> <i class="fa fa-twitter"></i><span class="twitter-date">01 day ago</span> </div>
                    </div>
                    <div class="twitter-item">
                      <div class="twitter-content"> It is a long established fact that a reader will be distracted by the readable . Find it here: <a href="https://webicode.com/" target="_blank">https://webicode.com/</a> </div>
                      <div class="twitter-context"> <i class="fa fa-twitter"></i><span class="twitter-date">02 days ago</span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div class="footer-bottom-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-6 copyright">
                <p>&copy; 2019 HTML5 Template. DESIGNED BY <a href="3"> ME</a></p>
              </div>
              <div class="col-md-6 social-links">
                <ul class="right">
                  <li><a href="https://www.youtube.com/watch?v=R7aCOI4DuA0" target="_blank"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#."><i class="fab fa-dribbble"></i></a></li>
                  <li><a href="#."><i class="fab fa-behance"></i></a></li>
                  <li><a href="#."><i class="fab fa-pinterest"></i></a></li>
                  <li><a href="#."><i class="fab fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer Bottom -->
    </div>
  </footer>
  <!-- End Footer -->
</div>
<script src="<?php echo  base_url();?>assets/frontend/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo  base_url();?>assets/frontend/js/bootstrap.min.js"></script>
<script src="<?php echo  base_url();?>assets/frontend/js/own-menu.js"></script>
<script src="<?php echo  base_url();?>assets/frontend/js/jquery.counterup.min.js"></script>
<script src="<?php echo  base_url();?>assets/frontend/js/owl.carousel.min.js"></script>
<script src="<?php echo  base_url();?>assets/frontend/js/main.js"></script>
</body>

<!-- Mirrored from demos.webicode.com/html/social-net/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jul 2019 19:36:04 GMT -->
</html>
