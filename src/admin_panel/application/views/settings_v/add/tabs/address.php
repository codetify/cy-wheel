<div role="tabpanel" class="tab-pane fade" id="tab-6">

    <div class="row">
	<div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Adres Bilgileri</label>
    <textarea class="form-control" name="address"  id="exampleFormControlTextarea1" rows="5">
                                        <?php echo isset($form_error) ? set_value("address") : $item->address; ?>
	</textarea>
  </div>
       
    </div>

	</div>
</div><!-- .tab-pane  -->