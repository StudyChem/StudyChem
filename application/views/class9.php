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
           <center> <h1>Class 9 Topics</h1></center>
          </div>
          <div class="page-header">
           <h2><?php echo $title?></h1>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails"> 
            <?php if($periodic == 1) { ?>
              <li class="span3">
               <a style="text-decoration:none" href="<?php echo base_url();?>class9/periodic_table"> <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/periodic_table.jpg" alt="product name">
                  <div class="widget-footer1">
                    <h3>Periodic Table</h3>
                    <p>
                      Learning chemistry through Periodic Table.
                    </p>
                  </div>
                  
                </div> </a>
              </li>
              <?php } if($chemical == 1) {?>
             <li class="span3">
               <a style="text-decoration:none" href="<?php echo base_url();?>class9/chemical_reactions"> <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/Chemical-Reactions.jpg" alt="product name">
                  <div class="widget-footer1">
                    <h3>Chemical Reactions</h3>
                    <p>
                      Carry Out Chemical Reactions
                    </p>
                  </div>
                  
                </div> </a>
              </li>
              <?php } if($mixture==1) { ?>
			     <li class="span3">
               <a style="text-decoration:none" href="<?php echo base_url();?>class9/mixture_compound"> <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/mixandcom.jpg" alt="product name">
                  <div class="widget-footer1">
                    <h3>Mixture and Compound</h3>
                    <p>
                      Distinguish Between Mixture and Compound
                    </p>
                  </div>
                  
                </div> </a>
              </li> 
              <?php } if($melting == 1) { ?>
              <li class="span3">
               <a style="text-decoration:none" href="<?php echo base_url();?>class9/melting_point"> <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/melting.jpg" alt="product name">
                  <div class="widget-footer1">
                    <h3>Melting Point</h3>
                    <p>
                      To determine the melting point of ice.
                    </p>
                  </div>
                </div> </a>
              </li>  
            </ul>
            <?php }?>
            <ul class="thumbnails"> 
            <?php
              $student = $this -> session -> userdata('email');
              $this -> db -> where('student',$student);
              $data = $this -> db -> get('teacherClass');
              $data = $data -> row();
              $teacher = $data -> teacher;
              $this -> db -> where('teacher',$teacher);
              $topics = $this -> db -> get('topic');
              if($topics -> num_rows() >=1) { 
                foreach($topics -> result() as $row){
                if($row -> show == 1) {
                ?> 

                <li class="span3">
               <a style="text-decoration:none" href="<?php echo base_url();?>class9/topic/<?php echo $row->id;?>"> <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/melting.jpg" alt="product name">
                  <div class="widget-footer1">
                    <h3><?php echo $row -> topic;?></h3>
                    <p>
                     <?php echo $row -> topic;?>
                    </p>
                  </div>
                </div> </a>
              </li>
              <?php } } }?>
            </ul>

          </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
  </body>
</html>
