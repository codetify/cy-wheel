<div role="tabpanel" class="tab-pane fade" id="tab-3">
    <div class="row">
	<div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Misyon</label>
    <textarea class="form-control" name="mission"  id="exampleFormControlTextarea1" rows="5">
                                        <?php echo isset($form_error) ? set_value("mission") : $item->mission; ?>
	</textarea>
  </div>       
	   
    </div>
</div><!-- .tab-pane  -->