<div role="tabpanel" class="tab-pane fade" id="tab-5">
<div class="col-md-12">
	 <div class="widget ">
					<header class="widget-header text-center">
						<h4 class="widget-title">Uyarı... </h4> <p>Sosyal Medya Adreslerinizin Kullanıcı Adını Yazmanız Yeterlidir.</p>						
					</header><!-- .panel-header -->
					<hr class="widget-separator">
					
				</div><!-- .panel -->

	</div>
    <div class="row">

        <div class="form-group col-md-12">
            <label>E-posta Adresiniz</label>
            <input class="form-control" placeholder="Şirketinize ait e-posta adresi"
                   name="email"
                   value="<?php echo isset($form_error) ? set_value("email") : $item->email; ?>">
            <?php if (isset($form_error)) { ?>
                <small
                    class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
            <?php } ?>
        </div>

    </div>
	
    <div class="row">

        <div class="form-group col-md-6">
            <label>Facebook</label>
            <input class="form-control" placeholder="Facebook Adresiniz (senseref67):"
                   name="facebook"
                   value="<?php echo isset($form_error) ? set_value("facebook") : $item->facebook; ?>">
        </div>

        <div class="form-group col-md-6">
            <label>Twitter</label>
            <input class="form-control" placeholder="Twitter Adresiniz (senseref67):"
                   name="twitter"
                   value="<?php echo isset($form_error) ? set_value("twitter") : $item->twitter; ?>">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Instagram</label>
            <input class="form-control" placeholder="Instagram Adresiniz (senseref67):"
                   name="instagram"
                   value="<?php echo isset($form_error) ? set_value("instagram") : $item->instagram; ?>">
        </div>

        <div class="form-group col-md-6">
            <label>Linkedin</label>
            <input class="form-control" placeholder="Linkedin Adresiniz (senseref67):"
                   name="linkedin"
                   value="<?php echo isset($form_error) ? set_value("linkedin") : $item->linkedin; ?>">
        </div>

    </div>



</div><!-- .tab-pane  -->