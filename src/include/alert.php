
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
 
</span>
        </button>
      </div>
      <div class="modal-body">
      <h1 class="alert_wheel text-danger text-center">...</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="resetpin();">Yeniden Başlat</button>
      
      </div>
    </div>
  </div>
</div>
<script>
    function resetpin()
{
  $('.alert_wheel').text("...");
resetWheel();

}
</script>