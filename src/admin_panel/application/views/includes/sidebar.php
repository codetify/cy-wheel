<!-- Sidebar -->
<?php $user = get_active_user(); ?>
	<?php $settings = get_settings(); ?>

    <ul class="sidebar navbar-nav toggled">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>">
           <img class="img rounded-circle" src="<?php echo get_picture("settings_v",$settings->logo, "150x100"); ?>" style=" height:40px; width:40px" alt=" <?php echo $settings->company_name;?>">
	  <span>&nbsp; <b><?php echo $settings->company_name;?></b></span></a>
      </li>	
	 <div class="dropdown-divider"></div>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-gear"></i>
          <span>AYARLAR</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <a class="dropdown-item" href="<?php echo base_url("users/update_form/$user->id");?>">Profilim</a>
      <?php if(isAdmin()) { ?>
		  <a class="dropdown-item" href="<?php echo base_url("settings");?>">Site Ayarları</a>
			<?php } ?>
		  <a class="dropdown-item" href="<?php echo base_url("users");?>">Kullanıcı Ayarları</a>
      <?php if(isAllowedViewModule("user_roles")) { ?>
		  <a class="dropdown-item" href="<?php echo base_url("user_roles"); ?>">Kullanıcı Rolü</a>
		  <?php } ?>
    
		  
        </div>
      </li>
	  
	            <div class="dropdown-divider"></div>
	 <?php if(isAllowedViewModule("wheel")) { ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("wheel");?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Karar Ekle</span></a>
      </li>
	  	  <?php } ?>
		  
		   <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url("logout");?>">
          <i class="fas fa-fw fa-close"></i>
          <span>Çıkış Yap</span></a>
      </li>
    </ul>