<div role="tabpanel" class="tab-pane fade" id="tab-5">

    <div class="row">
 <div class="input-group mb-3 col-md-12">
				<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon3">E-Posta</span>
			</div>
  <input type="text" 
         name="email"
		class="form-control" id="basic-url" aria-describedby="basic-addon3" 
		value="<?php echo isset($form_error) ? set_value("email") : $item->email; ?>">

        </div>
       
    </div>
	
    <div class="row">

          <div class="input-group mb-3 col-md-6">
				<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon3">https://www.facebook.com/</span>
			</div>
  <input type="text" 
         name="facebook"
		class="form-control" id="basic-url" aria-describedby="basic-addon3" 
		value="<?php echo isset($form_error) ? set_value("facebook") : $item->facebook; ?>">

        </div>
          <div class="input-group mb-3 col-md-6">
				<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon3">https://www.twitter.com/</span>
			</div>
  <input type="text" 
         name="twitter"
		class="form-control" id="basic-url" aria-describedby="basic-addon3" 
		value="<?php echo isset($form_error) ? set_value("twitter") : $item->twitter; ?>">

        </div>
    </div>

    <div class="row">

        <div class="input-group mb-3 col-md-6">
				<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon3">https://www.instgram.com/</span>
			</div>
  <input type="text" 
         name="instagram"
		class="form-control" id="basic-url" aria-describedby="basic-addon3" 
		value="<?php echo isset($form_error) ? set_value("instagram") : $item->instagram; ?>">

        </div>

        <div class="input-group mb-3 col-md-6">
				<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon3">https://www.linkedin.com/</span>
			</div>
  <input type="text" 
         name="linkedin"
		class="form-control" id="basic-url" aria-describedby="basic-addon3" 
		value="<?php echo isset($form_error) ? set_value("linkedin") : $item->linkedin; ?>">

        </div>


    </div>



</div><!-- .tab-pane  -->