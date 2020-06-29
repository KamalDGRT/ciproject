<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User Login</title>

<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<?php echo link_tag('assests/css/sb-admin.css'); ?>

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <!---- Error Message ---->

<?php if ($this->session->flashdata('error')) { ?>
<p style="color:red; font-size:18px;" align="center"><?php echo $this->session->flashdata('error');?></p>

<?php } ?>  
        <div class="card-body">
<?php echo form_open('user/login');?>
            <div class="form-group">
              <div class="form-label-group">
<?php echo form_input(['name'=>'emailid','id'=>'emailid','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('emailid')]);?>
<?php echo form_label('Enter valid email id', 'emailid'); ?>
<?php echo form_error('emailid',"<div style='color:red'>","</div>");?>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
<?php echo form_password(['name'=>'password','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('password')]);?>
<?php echo form_label('Password', 'password'); ?>
<?php echo form_error('password',"<div style='color:red'>","</div>");?>
              </div>
            </div>
   
 <?php echo form_submit(['name'=>'login','value'=>'Login','class'=>'btn btn-primary btn-block']); ?>
<?php echo form_close(); ?>
          <div class="text-center">
<a class="d-block small mt-3" href="<?php echo site_url('user/Signup'); ?>">Register an Account</a>
 <a class="d-block small" href="<?php echo site_url('Home'); ?>">Back to Home page</a>

          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  </body>

</html>
