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
 
    <div class="container">
          <div class="page-header">
           <center> <h1>Learn Chemistry</h1></center>
          </div>
          <div class="page-header">
            <h2>General Topics</h1>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
               <a style="text-decoration:none" href="<?php echo base_url();?>general/molecule"> <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/molecule.jpg" alt="product name">
                  <div class="widget-footer">
                    <h3>Molecule Structure</h3>
                    <p>
                      View the structure of molecules
                    </p>
                  </div>
                  
                </div> </a>
              </li>
             <li class="span3">
               <a style="text-decoration:none" href="<?php echo base_url();?>general/eqn_balancer"> <div class="thumbnail">
                  <img style="height:185px;" src="<?php echo base_url();?>assests/img/balance.gif" alt="product name">
                  <div class="widget-footer">
                    <h3>Equation Balancer</h3>
                    <p>
                      Balance Chemical Reactions
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
