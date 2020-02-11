<?php $user = get_active_user();
 $settings = get_settings(); ?>


  <nav class="navbar navbar-expand  navbar-dark bg-dark static-top" > 

    <a class="navbar-brand mr-1" href="<?php echo base_url(); ?>">WHEEL Panel </a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <h5 class="text-white"><?php echo $settings->slogan;?></h5>
	</div>
    <ul class="navbar-nav ml-auto ml-md-11">
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?php echo base_url("users/update_form/$user->id");?>">Profil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url("logout");?>" >Çıkış</a>
        </div>
      </li>
    </ul>

  </nav>