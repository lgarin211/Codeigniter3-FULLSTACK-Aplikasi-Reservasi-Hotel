<?php $this->load->view('master/head');?>
    <div class="container">
		<div class="card mb-3">
		  <img src="https://atpetsi.or.id/uploads/article/view/210507061237200228114324hotel.jpg" class="card-img-top" alt="..." style="max-height: 50vh;">
		  <div class="card-body">
			
		    <h5 class="card-title">List Bookingmu</h5>
		    <p class="card-text">
					Kode Booking Anda :
		    </p>
		    <p>
		    	<div class="row">
		    		<?php $data['book'] = array_reverse($data['book']);foreach($data['book'] as $key => $item):?>
		    		<div class="col-md-12 mb-2">
							<div class="card">
							  <img src="<?=$item->img_room?>" class="card-img-top" alt="<?=$item->img_room?>">
							  <div class="card-body">
							    <h5 class="card-title"><?=$item->Nama_room?> x <?=$item->jml_kamar?> Kamar </h5>
								<p>Nama Tamu = <?=$item->nama_tamu?></p>
							    <p>Tgl cekin = <?=$item->tgl_cekin?></p>
							    <p>Tgl cekout = <?=$item->tgl_cekout?></p>
							    <p>Total Harga = RP. <?=$item->Harga?></p>
							    <p>payby = <?=$item->PayBay?></p>
							    <p>Pembayaran = 
							    	<?php if($item->PayEND==0)
							    	{$pesan='belum di Bayar';}
							    	else
									{$pesan='sudah di bayar';}
							    	echo $pesan;
							    	?>
							    </p>
							    <p>
									<strong>
							    		CODEBooking = <?=$item->RefPB?>
									</strong>
							    </p>
								<?php if($item->PayEND==0):?>
									<a href="<?=base_url('/Reseptionis/payed?id=').$item->id_pesanan.'&f=PayEND&v=1'?>" class="btn btn-warning">Bayar</a>
								<?else:?>
									<?php if (date('Y-m-d')>=$item->tgl_cekin&&date('Y-m-d')<=$item->tgl_cekout) :?>
										<?php if ($item->Status_Kamar=="Cekin"): ?>
											<p class="text-primary">Telah Melakuakn CekIn Cekout Pada <?=$item->tgl_cekout?>
											</p>
										<?else:?>
											<a href="<?=base_url('/Reseptionis/payed?id=').$item->id_pesanan.'&f=Status_Kamar&v=Cekin'?>" class="btn btn-warning">Cek In</a>									
										<?php endif ?>
									<?elseif(date('Y-m-d')==$item->tgl_cekout):?>
									<a href="<?=base_url('/Reseptionis/payed?id=').$item->id_pesanan.'&f=Status_Kamar&v=CekOUT'?>" class="btn btn-warning">Cek Out</a>
									<?elseif(date('Y-m-d')>$item->tgl_cekout):?>
									<p class="text-danger">Tidak / Terlambak Cek Out</p>
									<?php endif;?>
							<?php endif;?>
							  </div>
							</div>
		    		</div>
		    		<?php endforeach?>

		    	</div>
		    </p>
			<hr>
			<p class="card-text">
				Masukan Code Booking :
                <form action="<?=base_url('/Reseptionis/DataTrack')?>" method="get">
                    <input type="text" name="ref" class="form-control">
                    <button type="submit" class="btn btn-primary col-md-12 mt-2">Cari</button>
                </form>
		    </p>
		  </div>
		</div>    		
    </div>
<?php $this->load->view('master/foot');?>
