 <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Çiftlik Panel</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <h4>Şifremi Unuttum ?</h4>
          <p>Şifrenizi mi unuttunuz ? E-Postanız ile Yenlieyin.</p>
        </div>
         <form action="<?php echo base_url("reset-password"); ?>" method="post">
            <div class="form-group">
                <input
                    type="email"
                    class="form-control"
                    placeholder="E-posta Adresi"
                    name="email"
                    value="<?php echo isset($form_error) ? set_value("email") : ""; ?>">

                <?php if(isset($form_error)){ ?>
                    <small class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
                <?php } ?>

            </div>
            <button class="btn btn-primary col-12">Şifremi Sıfırla</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url("login");?>">Login</a>
        </div>
      </div>
    </div>
  </div>
