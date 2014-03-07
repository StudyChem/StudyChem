<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="StudyChem | Short description about StudyChem">
    <meta name="author" content="Your name">
    <title>StudyChem</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assests/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="<?php echo base_url('assests/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="<?php echo base_url('assests/css/font-awesome.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assests/css/font-awesome-ie7.css'); ?> "rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="<?php echo base_url('assests/css/boot-business.css');?>" rel="stylesheet">
  </head>
  <body>
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="<?php echo site_url('home'); ?>" class="brand brand-bootbus">StudyChem</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="<?php echo site_url('home'); ?>"> Home </a>                    
                </li>
                <li class="dropdown">
                  <a href="#"> About </a>
                  
                </li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="<?php echo base_url();?>home/signup">Sign up</a></li>
                <li><a href="<?php echo base_url();?>home/login">Log in</a></li>
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
 <!--   <div class="slider">
        <div class="container-fluid">
          <div id="heroSlider" class="carousel slide">
            <div class="carousel-inner">
              <div class="active item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    
                    <div class="span5" align="center" style="width:970px; height:300px;">
                     <div align="center"> <img style="margin-left: 100px;" src="<?php echo base_url();?>assests/img/banner_image1.jpg" class="thumbnail"></div>
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span5" align="center" style="width:970px; height:300px;">
                     <div align="center"> <img style="margin-left: 100px;" src="<?php echo base_url();?>assests/img/banner_image5.jpg" class="thumbnail"></div>
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                   <div class="span5" align="center" style="width:970px; height:300px;">
                     <div align="center"> <img style="margin-left: 100px;" src="<?php echo base_url();?>assests/img/banner_image6.jpg" class="thumbnail"></div>
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                 <div class="span5" align="center" style="width:970px; height:300px;">
                     <div align="center"> <img style="margin-left: 100px;" src="<?php echo base_url();?>assests/img/banner_image7.jpg" class="thumbnail"></div>
                    </div>
                  </div>
              </div>
            </div>
            </div>
            <a class="left carousel-control" href="#heroSlider" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#heroSlider" data-slide="next">›</a>
          </div>
        </div>
      </div> -->
    <div class="container">
          <div class="page-header">
           <center> <h1>Learn Chemistry</h1></center>
          </div>
          <div class="page-header">
            <h2>Class 9 Topics</h1>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
               <a style="text-decoration:none" href="<?php echo base_url();?>class9/periodic_table"> <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/periodic_table.jpg" alt="product name">
                  <div class="widget-footer">
                    <h3>Periodic Table</h3>
                    <p>
                      Learning chemistry through Periodic Table.
                    </p>
                  </div>
                  
                </div> </a>
              </li>
             <li class="span3">
               <a style="text-decoration:none" href="<?php echo base_url();?>class9/periodic_table"> <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/Chemical-Reactions.jpg" alt="product name">
                  <div class="widget-footer">
                    <h3>Chemical Reactions</h3>
                    <p>
                      Carry Out Chemical Reactions
                    </p>
                  </div>
                  
                </div> </a>
              </li>
			 <li class="span3">
               <a style="text-decoration:none" href="<?php echo base_url();?>class9/mixture_compound"> <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/mixandcom.jpg" alt="product name">
                  <div class="widget-footer">
                    <h3>Mixture and Compound</h3>
                    <p>
                      Distinguish Between Mixture and Compound
                    </p>
                  </div>
                  
                </div> </a>
              </li> 
            </ul>
          </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
  </body>
</html>
