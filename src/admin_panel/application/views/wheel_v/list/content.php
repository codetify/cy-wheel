 <div class="container-fluid">
    <div class="col-md-12">
	<ol class="breadcrumb">
          <li class="breadcrumb-item">
		  <h6 class="text-center ">Eklenen Karar Listesi</h6>
		  </li>
		  <li class="breadcrumb-item">
		  <a  class="btn btn-sm btn-info btn-outline remove-btn" 
		  href="<?php echo base_url("wheel/new_form"); ?>" class=""><i class="fa fa-pencil"></i> Yeni Karar Ekle</a>
          </li>
		  <li class="breadcrumb-item">
		  <a
		  href="<?php echo base_url(""); ?>"
          class="btn btn-sm btn-danger btn-outline remove-btn pull-right">
         <i class="fa fa-reply"></i> Geri
          </a>
		  </li>
    
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)) { ?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("wheel/new_form"); ?>">tıklayınız</a></p>
                </div>

            <?php } else { ?>
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered content-container text-center">
                    <thead>
                        <th>id</th>
						<th>Karar Adı</th>
                        <th>Çarkta Gösterilecek Rengi</th>
                        <th>Durumu</th>
						<th>İşlem</th>
                    </thead>
					<tfoot>
					<th>id</th>
						<th>Karar Adı</th>
                        <th>Çarkta Gösterilecek Rengi</th>
                        <th>Durumu</th>
						<th>İşlem</th>
					</tfoot>
                    <tbody class="sortable" data-url="<?php echo base_url("wheel/id"); ?>">

                        <?php foreach($items as $item) { ?>

                            <tr >
								 <td><?php echo ($item->id); ?></td>
							 
								 <td><?php echo ($item->title); ?></td>
                                 <td><?php echo ($item->color); ?></td>

                                <td class="w100">
								 <p class="text-center custom-switch">
									<input
                                        data-url="<?php echo base_url("wheel/isActive/$item->id"); ?>"
                                        class="isActive custom-control-input" 
										id="customSwitch<?php echo $item->id;?>"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                        <?php echo ($item->isActive) ? "checked" : ""; ?>
                                    />
									<label class="custom-control-label text-center" for="customSwitch<?php echo $item->id;?>">Sitede Görünsün Mü?</label>
											<p>
                                    
                                </td>
                                <td class="w200">
							
                                <button
                                        data-url="<?php echo base_url("wheel/delete/$item->id"); ?>"
                                        class="btn btn-sm btn-danger btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </button>
								   <a href="<?php echo base_url("wheel/update_form/$item->id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
							   </td>
                            </tr>
						<?php } ?>
                    </tbody>

                </table>
</div>
            <?php } ?>

        </div><!-- .widget -->
    </div><!-- END column -->
</div>