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
          <h1>Signup to Learn and Enjoy Chemistry</h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-gift"></i> Be a part of StudyChem</h4>
            <div class="widget-body">
              <div class="center-align">
                <form action="<?php echo base_url();?>home/register" method="post" class="form-horizontal form-signin-signup">
				  <input type="text" name="name" placeholder="Your full name. E.g. Rohan garg">
           <input type="text" name="class" placeholder="Your class (should be either '9' or '10')">
                  <input type="text" name="email" placeholder="Your valid email address.">
                  <input type="password" name="password" placeholder="Password">
                  <input type="password" name="password_confirmation" placeholder="Confirm your password ">
                  <?php if(isset($Invalid)){
          echo "<div class='alert alert-danger'>".$Invalid."</div>";
          }?>
          <?php if(validation_errors()!=""){
          echo "<div class='alert alert-danger'>".validation_errors()."</div>";
          } ?>
                  <div>

                    <input type="submit" value="Signup" class="btn btn-primary btn-large">
                  </div>
                </form>
                <h4><i class="icon-question-sign"></i> Already have an account?</h4>
                <a href="signin.html" class="btn btn-large bottom-space">Signin</a>
                <h4><i class="icon-thumbs-up"></i> Sign in with third party account</h4>
                <ul class="signin-with-list">
                  
                  <li>
                    <a class="btn-google">
                      <i class="icon-google-plus icon-large"></i>
                      Signin with Google
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End: MAIN CONTENT -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  </body>
</html>
