<div class="content">
    <div class="col-md-12">
        <h4 class="mb-4">
            E-posta Listesi
			<?php if(isAllowedWriteModule()) { ?>			
            <a href="<?php echo base_url("emailsettings/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
			<?php } ?>
	   </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)) { ?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır.
					<?php if(isAllowedWriteModule()) { ?>			
					Eklemek için lütfen <a href="<?php echo base_url("emailsettings/new_form"); ?>">tıklayınız</a></p>
					<?php } ?>
			   </div>

            <?php } else { ?>
            <div class="table-responsive">

                <table class="table table-hover table-striped table-bordered content-container">
                    <thead>
                        <?php if(isAllowedUpdateModule()&&isAllowedDeleteModule()) { ?>
						<?php } ?>
                        <th>E-posta Başlık</th>
                        <th>Sunucu Adı</th>
                        <th>Protokol</th>
                        <th>Port</th>
                        <th>E-posta</th>
                        <th>Kimden</th>
                        <th>Kime</th>
                       <?php if(isAllowedUpdateModule()) { ?>
                        <th>Durumu</th>
						<?php } ?>
						<?php if(isAllowedUpdateModule()||isAllowedDeleteModule()) { ?>
						<th>İşlem</th>
						<?php } ?>
                    </thead>
                    <tbody>

                        <?php foreach($items as $item) { ?>

                            <tr>
								<?php if(isAllowedUpdateModule()&&isAllowedDeleteModule()) { ?>
								<?php } ?>
                                <td class="text-center"><?php echo $item->user_name; ?></td>
                                <td class="text-center"><?php echo $item->host; ?></td>
                                <td class="text-center"><?php echo $item->protocol; ?></td>
                                <td class="text-center"><?php echo $item->port; ?></td>
                                <td class="text-center"><?php echo $item->user; ?></td>
                                <td class="text-center"><?php echo $item->from; ?></td>
                                <td class="text-center"><?php echo $item->to; ?></td>
								<?php if(isAllowedUpdateModule()) { ?>
                                <td class="text-center w100">
<p class="text-center custom-switch">
						<input
                         data-url="<?php echo base_url("emailsettings/isActiveSetter/$item->id"); ?>"
                        class="isActive custom-control-input" 
						id="customSwitch<?php echo $item->id;?>"
						type="checkbox"
                         data-switchery
                         data-color="#10c469"
                        <?php echo ($item->isActive) ? "checked" : ""; ?>
                                    />
									<label class="custom-control-label text-center" for="customSwitch<?php echo $item->id;?>"></label>
						</p>                                   

                                </td>
								<?php } ?>
									<?php if(isAllowedUpdateModule()||isAllowedDeleteModule()) { ?>
                                <td class="text-center">
									<?php if(isAllowedDeleteModule()) { ?>
                                    <button
                                        data-url="<?php echo base_url("emailsettings/delete/$item->id"); ?>"
                                        class="btn btn-sm btn-danger btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> 
                                    </button>
									<?php } ?>
										<?php if(isAllowedUpdateModule()) { ?>
                                    <a href="<?php echo base_url("emailsettings/update_form/$item->id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i></a>
										<?php } ?>
								</td>
									<?php } ?>
                            </tr>

                        <?php } ?>

                    </tbody>

                </table>
</div>
            <?php } ?>

        </div><!-- .widget -->
    </div><!-- END column -->
</div>