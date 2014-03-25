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
    
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
    <div class="slider">
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
      </div>
    <div class="container">
          <div class="page-header">
            <h2>Learn Chemistry</h2>
          </div>
          <div class="row-fluid">
            <ul style="margin-left: 250px" class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img style="height:185px" src="<?php base_url();?>assests/img/class10.jpg" alt="product name">
                  <div class="caption">
                    <h3>Class 9</h3>
                    <p>
                      
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <?php if($this -> session -> userdata('roleid') == 2) { ?>
                        <a href="<?php echo base_url()?>teacher/class9" class="btn">Read more</a>
                    <?php } else { ?>

                      <a href="<?php echo base_url()?>class9" class="btn">Read more</a>
                      <?php } ?>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img style="height: 185px" src="<?php base_url();?>assests/img/class9.jpg" alt="product name">
                  <div class="caption">
                    <h3>Class 10</h3>
                    <p>
                      
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
  </body>
</html>
