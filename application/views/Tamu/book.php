<?php $this->load->view('master/head');?>
    <div class="container">
      <div class="card p-4">
        <form method="POST" action="<?=base_url('/Tamu/prosBook')?>" >
            <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4">
                      <p class="mb-1">tgl_cekin</p>
                      <input class="form-control" type="date" name="tgl_cekin" placeholder="tgl_cekin">
                    </div>
                    <div class="col-md-4">
                      <p class="mb-1">tgl_cekout</p>
                      <input class="form-control" type="date" name="tgl_cekout" placeholder="tgl_cekout">                    
                    </div>
                    <div class="col-md-4">
                      <p class="mb-1">jml_kamar</p>
                      <input class="form-control" type="number" name="jml_kamar" placeholder="jml_kamar">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <p class="mt-3">nama_pemesan</p>
                  <input class="form-control" type="text" name="nama_pemesan" placeholder="nama_pemesan" value="<?=$data['user']->Nama;?>" readonly>
                  <p class="mt-3">email</p>
                  <input class="form-control" type="email" name="email" placeholder="email">
                  <p class="mt-3">no_hp</p>
                  <input class="form-control" type="number" name="no_hp" placeholder="no_hp" value="<?=$data['user']->nowa;?>">
                  <p class="mt-3">nama_tamu</p>
                  <input class="form-control" type="text" name="nama_tamu" placeholder="nama_tamu">
                  <p class="mt-3">Pilih Kamar</p>
                  <select class="form-select" name="id_kamar">
                    <option value="<?=$data['kamar'][0]['Info_kamar']->id?>"><?=$data['kamar'][0]['Info_kamar']->Nama_room?></option> 
                    <?php foreach($data['alltipe'] as $key => $item):?>
                    <option value="<?=$item->id?>"><?=$item->Nama_room?></option>
                    <?php endforeach;?>
                  </select>

                  <p class="mt-3">Paybay</p>
                  <select class="form-select" name="PayBay">
                    <option>Bayar Di Tempat</option>
                    <option>Tranfer BANK</option>
                  </select>

                </div>
            </div>


          <button type="submit" class="btn btn-primary mt-2 col-md-12">Kirim</button>
        </form>
      </div>
    </div>
<?php $this->load->view('master/foot');?>