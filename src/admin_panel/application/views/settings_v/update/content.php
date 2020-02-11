 <div class="container-fluid">
    <div class="card">
	<div class="card-header">
	<h4>
            <?php echo "<b>$item->company_name</b> kaydını düzenliyorsunuz"; ?>
        </h4>
		</div>
        
    </div><!-- END column -->
<div class="col-md-12">
<form action="<?php echo base_url("settings/update/$item->id"); ?>" method="post" enctype="multipart/form-data">
 <div class="card mt-3">
      <div class="card-header">

	  <ul class="nav nav-tabs card-header-tabs" role="tablist">
		<li role="presentation" class="nav-item active">
		<a href="#tab-1" class="nav-link active" aria-controls="tab-3" role="tab" data-toggle="tab">
		Site Bilgileri</a></li>
		<li role="presentation" class="nav-item">
		<a href="#tab-6" class="nav-link" aria-controls="tab-6" role="tab" data-toggle="tab">Adres Bilgisi</a></li>
         <li role="presentation" class="nav-item">
		 <a href="#tab-2" class="nav-link" aria-controls="tab-1" role="tab" data-toggle="tab">Hakkımızda</a></li>
         <li role="presentation" class="nav-item">
		 <a href="#tab-3" class="nav-link" aria-controls="tab-2" role="tab" data-toggle="tab">Misyon</a></li>
         <li role="presentation" class="nav-item">
		 <a href="#tab-4" class="nav-link" aria-controls="tab-3" role="tab" data-toggle="tab">Vizyon</a></li>
         <li role="presentation" class="nav-item">
		 <a href="#tab-5" class="nav-link" aria-controls="tab-4" role="tab" data-toggle="tab">Sosyal Medya</a></li>
         <li role="presentation" class="nav-item">
		 <a href="#tab-7" class="nav-link" aria-controls="tab-7" role="tab" data-toggle="tab">Logo</a></li>
		 <li role="presentation" class="nav-item">
		 <a href="#tab-8" class="nav-link" aria-controls="tab-7" role="tab" data-toggle="tab">Ana Sayfa</a></li>
    </ul>
	 

	  </div>
      <div class="card-body tab-content">
       <?php $this->load->view("$viewFolder/$subViewFolder/tabs/site_info"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/address"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/about_us"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/mission"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/vision"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/social_media"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/logo"); ?>
						
						<?php $this->load->view("$viewFolder/$subViewFolder/tabs/homepage"); ?>
      </div>
	  <div class="card-footer">
	  <button type="submit" class="btn btn-primary btn-md">Güncelle</button>
		<a href="<?php echo base_url("settings"); ?>" class="btn btn-md btn-danger">İptal</a>
	  </div>
    </div>
	
</form>
        
</div>