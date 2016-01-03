<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CAR$HOP</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-3.3.5/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>      
      <?php echo $this->load->view('layout/navbar.php');?>        
    </header>

    <div class="slider" style="position:relative;display:block;height:450px;overflow:hidden;margin:auto;padding:0;">
<!--         <div class="row">
        <div class="col-lg-12"> -->
          <?php echo $this->load->view('layout/slider.php');?>          
        <!-- </div>
      </div>       -->
    </div>

    <div class="container">      
      <div class="row">
        <div class="col-lg-12">
          <h3>Heyooo</h3>
        </div>
      </div>
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>assets/vendor/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap-3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>