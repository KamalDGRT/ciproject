<!DOCTYPE html>
<html lang="en">

<head>
<title>User Change Password</title>
<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>

  </head>

  <body id="page-top">

   <?php include APPPATH.'views/user/includes/header.php';?>

    <div id="wrapper">

      <!-- Sidebar -->
  <?php include APPPATH.'views/user/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('user/Dashboard'); ?>">User</a>
            </li>
            <li class="breadcrumb-item active">Change Password</li>
          </ol>

          <!-- Page Content -->
          <h1>Change Password</h1>
          <hr>
<!---- Success Message ---->
<?php if ($this->session->flashdata('success')) { ?>
<p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>
</div>
<?php } ?>

<!---- Error Message ---->
<?php if ($this->session->flashdata('error')) { ?>
<p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error');?></p>
<?php } ?> 



 <?php echo form_open('user/Change_password');?>

     <div class="form-group">     
    <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
<?php echo form_password(['name'=>'currentpassword','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('currentpassword')]);?>
<?php echo form_label('Current Password', 'currentpassword'); ?>
<?php echo form_error('currentpassword',"<div style='color:red'>","</div>");?>
                  </div>
                </div>
              </div>
            </div>

        <div class="form-group">     
    <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
<?php echo form_password(['name'=>'password','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('password')]);?>
<?php echo form_label('New Password', 'password'); ?>
<?php echo form_error('password',"<div style='color:red'>","</div>");?>
                  </div>
                </div>
              </div>
            </div>
      <div class="form-group">         
   <div class="form-row">             
                <div class="col-md-6">
                  <div class="form-label-group">
<?php echo form_password(['name'=>'confirmpassword','id'=>'confirmpassword','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('confirmpassword')]);?>
<?php echo form_label('Confirm Password', 'confirmpassword'); ?>
<?php echo form_error('confirmpassword',"<div style='color:red'>","</div>");?>
                  </div>
                </div>
              </div>
            </div>

      <div class="form-group">         
   <div class="form-row">             
                <div class="col-md-6">
 <?php echo form_submit(['name'=>'chnagepwd','value'=>'Change','class'=>'btn btn-primary btn-block']); ?>
</div>
</div>
</div>
 <?php echo form_close();?>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
     <?php include APPPATH.'views/user/includes/footer.php';?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js '); ?>"></script>

  </body>

</html>
