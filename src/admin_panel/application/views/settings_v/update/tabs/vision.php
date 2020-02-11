<div role="tabpanel" class="tab-pane fade" id="tab-4">
    <div class="row">
        <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Vizyon</label>
    <textarea class="form-control" name="vision"  id="exampleFormControlTextarea1" rows="5">
                                        <?php echo isset($form_error) ? set_value("vision") : $item->vision; ?>
	</textarea>
  </div>
    </div>
</div><!-- .tab-pane  -->