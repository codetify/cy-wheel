<!DOCTYPE html>
<html lang="tr">
<head>
    <?php $this->load->view("includes/head"); ?>
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary sidebar-toggled">
<!--============= start main area -->

    <!-- APP NAVBAR ==========-->
    <?php $this->load->view("includes/navbar"); ?>
    <!--========== END app navbar -->
	  <div id="wrapper">

	<?php $this->load->view("includes/sidebar");?>

    <!-- APP MAIN ==========-->
    <div id="content-wrapper">
                <?php $this->load->view("{$viewFolder}/{$subViewFolder}/content"); ?>

        <!-- APP FOOTER -->
        <!-- /#app-footer -->
    </div>
	</div>
    <!--========== END app main -->
        <?php $this->load->view("includes/footer"); ?>

    <?php $this->load->view("includes/include_script"); ?>

</body>
</html>