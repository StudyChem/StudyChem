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
          <h1>Login to Learn and Enjoy Chemistry</h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-lock"></i> Login to StudyChem</h4>
            <div class="widget-body">
              <div class="center-align">
                <form action="<?php echo base_url();?>home/signin" method="post" class="form-horizontal form-signin-signup">
                  <input type="text" name="username" id="username" placeholder="Email">
                  <input type="password" name="password" id="password" placeholder="Password">
                  <?php if(isset($Invalid)){
					echo "<div class='alert alert-danger'>".$Invalid."</div>";
					}?>
					<?php if(validation_errors()!=""){
					echo "<div class='alert alert-danger'>".validation_errors()."</div>";
					} ?>
                  <div class="remember-me">
                    <div class="pull-left">
                      <label class="checkbox">
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                    <div class="pull-right">
                      <a href="#">Forgot password?</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <input type="submit" value="login" class="btn btn-primary btn-large">
                </form>
                <h4><i class="icon-question-sign"></i> Don't have an account?</h4>
                <a href="<?php echo base_url();?>home/signup" class="btn btn-large bottom-space">Signup</a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  </body>
</html>
