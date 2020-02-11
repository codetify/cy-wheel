 <div class="container-fluid">
    <div class="col-md-12">
        <h4 class="mb-4">
            Kullanıcı Rolleri Listesi
			<?php if(isAdmin()){?>
            <a href="<?php echo base_url("user_roles/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
			<?php } ?>
		</h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)) { ?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır.<?php if(isAdmin()) { ?>
					Eklemek için lütfen <a href="<?php echo base_url("user_roles/new_form"); ?>">tıklayınız</a><?php }?></p>
                </div>

            <?php } else { ?>

                <table class="table table-hover table-striped table-bordered content-container">
                    <thead>
                        <th class="order"><i class="fa fa-reorder"></i></th>
						 <?php if(isAllowedUpdateModule()&&isAllowedDeleteModule()) { ?>
                        <th class="w50">#id</th>
						 <?php } ?>
                        <th>Başlık</th>
						<?php if(isAllowedUpdateModule()) { ?>
                        <th>Durumu</th>
						<?php  } ?>
                        <?php  if(isAllowedWriteModule()||isAllowedUpdateModule()||isAllowedDeleteModule()) { ?>
						<th>İşlem</th>
						<?php  } ?>
                    </thead>
                    <tbody>

                        <?php foreach($items as $item) { ?>

                            <tr id="ord-<?php echo $item->id; ?>">
                                <td class="order"><i class="fa fa-reorder"></i></td>
								 <?php if(isAllowedUpdateModule()&&isAllowedDeleteModule()) { ?>
                                <td class="w50 text-center">#<?php echo $item->id; ?></td>
								 <?php } ?>
							   <td><?php echo $item->title; ?></td>
								<?php if(isAllowedWriteModule()) { ?>
                                <td>
						<p class="text-center custom-switch">
						<input
						data-url="<?php echo base_url("user_roles/isActiveSetter/$item->id"); ?>"
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
								<?php  if(isAllowedUpdateModule()||isAllowedDeleteModule()) { ?>
						
                                <td class="text-center w300">
								<?php if(isAllowedDeleteModule()) { ?>
                                    <a
                                        href="<?php echo base_url("user_roles/delete/$item->id"); ?>"
                                        class="btn btn-sm btn-danger btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </a>
								<?php  } ?>
								<?php  if(isAllowedUpdateModule()) { ?>
                                    <a href="<?php echo base_url("user_roles/update_form/$item->id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                                    <a href="<?php echo base_url("user_roles/permissions_form/$item->id"); ?>" class="btn btn-sm btn-dark btn-outline"><i class="fa fa-eye"></i> Yetki Tanımı</a>
									<?php  } ?>
									</td>
									<?php  } ?>
                            </tr>

                        <?php } ?>

                    </tbody>

                </table>

            <?php } ?>

        </div><!-- .widget -->
    </div><!-- END column -->
</div>