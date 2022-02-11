<?php $this->load->view('master/head');?>
    <div class="container">
    	<?php foreach ($data as $key => $kamar): ?>
		<div class="card mb-3">
		  <img src="<?=$kamar['Info_kamar']->img_room?>" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title"><?=$kamar['Info_kamar']->Nama_room?> - Rp. <?=$kamar['Info_kamar']->harga?></h5>
		    <p class="card-text">
		    	fasilitas :
		    </p>
		    <p>
		    	<div class="row">
		    	<?php if(!empty($kamar['F_kamar'])) :?>
		    		<?php foreach ($kamar['F_kamar'] as $key2 => $F): ?>
		    		<div class="col-md-3 mb-2">
						<div class="card">
						  <img src="<?=$F->img?>" class="card-img-top" alt="..." style='max-height: 200px;object-fit: cover;'>
						  <div class="card-body">
						    <h5 class="card-title"><?=$F->nama_fasilitas?></h5>
						  </div>
						</div>
		    		</div>

		    		<?php endforeach; ?>
		    	<?php endif;?>


		    	</div>
		    </p>

		    <a href="<?= base_url('/Tamu/booknow').'?id='.$kamar['Info_kamar']->id ?>" class="btn btn-primary">Booking Sekarang</a>

		  </div>
		</div>    		
    	<?php endforeach ?>


    </div>
	<?php $this->load->view('master/foot');?>