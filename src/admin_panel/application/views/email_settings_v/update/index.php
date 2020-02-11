<!DOCTYPE html>
<html lang="en">

<head>

	<!-- HEAD -->
  <?php $this->load->view("includes/head");?>
	<!-- Head -->
	
</head>

<body id="page-top" class="sidebar-toggled">
<!-- Navbar-->
<?php $this->load->view("includes/navbar");?>
<!-- Navbar-->

  <div id="wrapper">
<!-- Sidebar Menü-->
    <?php $this->load->view("includes/sidebar");?>
<!-- Sidebar Menü-->

    <div id="content-wrapper">
<!-- Content-->
<?php $this->load->view("{$viewFolder}/{$subViewFolder}/content");?>
<!-- Content-->

     <!-- Footer-->
	<?php $this->load->view("includes/footer");?>
	<!-- Footer-->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

 <!-- script -->
<?php $this->load->view("includes/include_script");?>
<script src="<?php echo base_url(""); ?>/assets/js/bootstrap-colorpicker.js"></script>
 <!-- script -->

</body>

</html>
