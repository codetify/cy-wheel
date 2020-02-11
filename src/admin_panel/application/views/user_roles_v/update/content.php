 <div class="container-fluid">
    <div class="col-md-12">
        <h4 class="mb-4">
            <?php echo "<b>$item->title</b> kaydını düzenliyorsunuz"; ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("user_roles/update/$item->id"); ?>" method="post" enctype="multipart/form-data">
                 
			<div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i>&nbsp;Kullanıcı Rolü</span>
                    </div>
                    <input type="text" name="title" class="form-control"  value="<?php echo isset($form_error) ? set_value("title") : $item->title ?>">
				 <?php if(isset($form_error)){ ?>
				          <div class="input-group">
                            <small class="pull- input-form-error"> <?php echo form_error("title"); ?></small>
                       </div>
					   <?php } ?>		 
				</div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("user_roles"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>