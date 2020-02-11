<div class="container-fluid">

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
<h6 class="text-center float-left"><?php echo $item->title;?> Kararını düzenliyorsunuz..</h6>
  </li>
</ol>
<div class="card-body">
    <div class="widget-body">
        <form action="<?php echo base_url("wheel/update/$item->id"); ?>" method="post">
   
         
<div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-archive"></i>&nbsp; Karar Adı</span>
            </div>
      <input class="form-control" placeholder="Karar Adı" name="title" value="<?php echo $item->title;  ?>">
      <?php if(isset($form_error)){ ?>
          <div class="input-group">
                    <small class="pull- input-form-error"> <?php echo form_error("title"); ?></small>
               </div>
     <?php } ?>		 
</div>
    
            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-swatchbook"></i>&nbsp;Çark Rengi</span>
            </div>
            <div class="example-content-widget">
            <input id="simple-color-picker" type="text" class="form-control" name="color" value="<?php echo $item->color; ?>"/>

</div>
<?php if(isset($form_error)){ ?>
          <div class="input-group">
                    <small class="pull- input-form-error"> <?php echo form_error("color"); ?></small>
               </div>
     <?php } ?>		 
</div>

    
            <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
            <a href="<?php echo base_url("wheel"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
        </form>
    </div><!-- .widget-body -->
</div><!-- .widget -->



</div>
<!-- /.container-fluid -->