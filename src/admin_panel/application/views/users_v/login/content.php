
<div class="container">
<div class="row justify-content-center">
<img src="<?php echo base_url("assets");?>/images/logo.png" width="200" class="my-4">
</div>
    <div class="card card-login mx-auto ">
    
      <div class="card-header">WHEEL SCRİPT - <b>LOGİN</b></div>
      <div class="card-body">
        <form action="<?php echo base_url("userop/do_login"); ?>" method="post">
        <div class="form-group">
                <input id="sign-in-email" type="email" class="form-control" placeholder="E-posta" name="user_email">
                <?php if(isset($form_error)){ ?>
                    <small class="pull-right input-form-error"> <?php echo form_error("user_email"); ?></small>
                <?php } ?>
            </div>

            <div class="form-group">
                <input id="sign-in-password" type="password" class="form-control" placeholder="Şifre" name="user_password">
                <?php if(isset($form_error)){ ?>
                    <small class="pull-right input-form-error"> <?php echo form_error("user_password"); ?></small>
                <?php } ?>
            </div>

            <button type="submit" class="btn btn-primary col-12">Giriş Yap</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url("sifremi-unuttum"); ?>">Şifremi Unuttum?</a>
        </div>
      </div>
    </div>
  </div>
