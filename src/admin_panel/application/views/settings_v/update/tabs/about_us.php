<div role="tabpanel" class="tab-pane fade" id="tab-2">
    <div class="row">
	<div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Hakkımızda</label>
    <textarea class="form-control" name="about_us" id="exampleFormControlTextarea1" rows="3">
                                        <?php echo isset($form_error) ? set_value("about_us") : $item->about_us; ?>
	</textarea>
  </div>
        
    </div>
</div><!-- .tab-pane  -->