<div role="tabpanel" class="tab-pane in  active" id="tab-1">

    <div class="row">

        <div class="form-group col-md-12">
            <label>Şirketin ya da Sitenizin Adı</label>
            <input class="form-control" placeholder="Şirketin ya da Sitenizin adı"
                   name="company_name"
                   value="<?php echo isset($form_error) ? set_value("company_name") : $item->company_name; ?>">
            <?php if (isset($form_error)) { ?>
                <small
                    class="pull-right input-form-error"> <?php echo form_error("company_name"); ?></small>
            <?php } ?>
        </div>
	<div class="form-group col-md-12">
            <label>Slogan</label>
            <input class="form-control" placeholder="Şirketin ya da Sitenizin Sloganı"
                   name="slogan"
                   value="<?php echo isset($form_error) ? set_value("slogan") : $item->slogan; ?>">
            <?php if (isset($form_error)) { ?>
                <small
                    class="pull-right input-form-error"> <?php echo form_error("slogan"); ?></small>
            <?php } ?>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Telefon 1</label>
            <input class="form-control" placeholder="Telefon numaranız"
                   name="phone_1"
                   value="<?php echo isset($form_error) ? set_value("phone_1") : $item->phone_1; ?>">
            <?php if (isset($form_error)) { ?>
                <small
                    class="pull-right input-form-error"> <?php echo form_error("phone_1"); ?></small>
            <?php } ?>
        </div>

   <div class="form-group col-md-6">
            <label>Fax 1</label>
            <input class="form-control" placeholder="Fax numaranız"
                   name="fax_1"
                   value="<?php echo isset($form_error) ? set_value("fax_1") : $item->fax_1; ?>">
        </div>
    </div>


</div><!-- .tab-pane  -->