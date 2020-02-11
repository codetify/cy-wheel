 <div class="container-fluid">
    <div class="col-md-12">
        <h4 class="mb-4">
            Kullanıcı Listesi
			<?php if(isAdmin()) { ?>
            <a href="<?php echo base_url("users/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>

						<?php	} ?>
	 </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)) { ?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır. <?php if(isAdmin()) { ?>Eklemek için lütfen <a href="<?php echo base_url("users/new_form"); ?>">tıklayınız</a><?php }?></p>
                </div>

            <?php } else { ?>

                <table class="table table-hover table-striped table-bordered content-container">
                    <thead>
						<?php if(isAdmin()) { ?>
                        <th class="w50">#id</th>
						<?php } ?>
                        <th>Kullanıcı Adı</th>
                        <th>Ad Soyad</th>
                        <th>E-posta</th>
						<?php if(isAllowedWriteModule()) { ?>
                        <th>Durumu</th>
						<?php  } ?>
                        <th>İşlem</th>
                    </thead>
                    <tbody class="text-center">

                        <?php foreach($items as $item) { ?>

                            <tr>
								<?php if(isAdmin()) { ?>
                                <td class="w50 text-center">#<?php echo $item->id; ?></td>
								<?php } ?>
                                <td><?php echo $item->user_name; ?></td>
                                <td><?php echo $item->full_name; ?></td>
                                <td class="text-center"><?php echo $item->email; ?></td>
								<?php if(isAllowedWriteModule()) { ?>
                               <td>
						<p class="text-center custom-switch">
						<input
						data-url="<?php echo base_url("users/isActiveSetter/$item->id"); ?>"
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
								<?php  } ?>
                                <td class="text-center w400">
								<?php if(isAllowedWriteModule()) { ?>
                                  	<a href="<?php echo base_url("users/delete/$item->id"); ?>"
                                        class="btn btn-sm btn-danger btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </a>
									<?php  } ?>
                                    <a href="<?php echo base_url("users/update_form/$item->id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                                    <a href="<?php echo base_url("users/update_password_form/$item->id"); ?>" class="btn btn-sm btn-purple btn-outline btn-secondary"><i class="fa fa-key"></i> Şifre Değiştir</a>
                               
							   </td>
                            </tr>

                        <?php } ?>

                    </tbody>

                </table>

            <?php } ?>

        </div><!-- .widget -->
    </div><!-- END column -->
</div>