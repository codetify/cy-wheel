<?php $permissions = json_decode($item->permissions); ?>

 <div class="container-fluid">
    <div class="col-md-12">
        <h4 class="mb-4">
            <?php echo "<b>$item->title</b> kaydının yetkilerini değiştiriyorsunuz"; ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("user_roles/update_permissions/$item->id"); ?>" method="post">

                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <th>Modül Adı</th>
                            <th>Görüntüleme</th>
                            <th>Ekleme</th>
                            <th>Düzenleme</th>
                            <th>Silme</th>
                        </thead>
                        <tbody>
                        <?php foreach (getControllerList() as $controllerName) { ?>
                                <tr>
                                    <td><?php echo $controllerName; ?></td>
                                    <td class="w50 text-center">
									
										<p class="text-center custom-switch">
						<input
                        class="isActive custom-control-input" 
						id="customSwitch-read-permissions[<?php echo $controllerName; ?>]"
						type="checkbox"
                         data-switchery
                         data-color="#10c469"
						 name="permissions[<?php echo $controllerName; ?>][read]"
                       <?php echo (isset($permissions->$controllerName) && isset($permissions->$controllerName->read)) ? "checked" : ""; ?>
                                    />
									<label class="custom-control-label text-center" for="customSwitch-read-permissions[<?php echo $controllerName; ?>]"></label>
						</p>
                                    </td>
                                    <td class="w50 text-center">
                                        		<p class="text-center custom-switch">
						<input
                        class="isActive custom-control-input" 
						id="customSwitch-write-permissions[<?php echo $controllerName; ?>]"
						type="checkbox"
                         data-switchery
                         data-color="#10c469"
						 name="permissions[<?php echo $controllerName; ?>][write]"
                       <?php echo (isset($permissions->$controllerName) && isset($permissions->$controllerName->write)) ? "checked" : ""; ?>
                                    />
									<label class="custom-control-label text-center" for="customSwitch-write-permissions[<?php echo $controllerName; ?>]"></label>
						</p>
                                    </td>
                                    <td class="w50 text-center">
                                                		<p class="text-center custom-switch">
						<input
                        class="isActive custom-control-input" 
						id="customSwitch-update-permissions[<?php echo $controllerName; ?>]"
						type="checkbox"
                         data-switchery
                         data-color="#10c469"
						 name="permissions[<?php echo $controllerName; ?>][update]"
                       <?php echo (isset($permissions->$controllerName) && isset($permissions->$controllerName->write)) ? "checked" : ""; ?>
                                    />
									<label class="custom-control-label text-center" for="customSwitch-update-permissions[<?php echo $controllerName; ?>]"></label>
						</p>
									   
                                    </td>
                                    <td class="w50 text-center">
                                                		<p class="text-center custom-switch">
						<input
                        class="isActive custom-control-input" 
						id="customSwitch-delete-permissions[<?php echo $controllerName; ?>]"
						type="checkbox"
                         data-switchery
                         data-color="#10c469"
						 name="permissions[<?php echo $controllerName; ?>][delete]"
                       <?php echo (isset($permissions->$controllerName) && isset($permissions->$controllerName->delete)) ? "checked" : ""; ?>
                                    />
									<label class="custom-control-label text-center" for="customSwitch-delete-permissions[<?php echo $controllerName; ?>]"></label>
						</p>
                                    </td>
                                </tr>
                        <?php } ?>

                        </tbody>
                    </table>

                    <hr>
					<div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-md btn-outline ">Güncelle</button>
				<a href="<?php echo base_url("user_roles"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
				</div>
			   </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>