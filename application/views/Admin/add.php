    <?php $this->load->view('master/head');?>
    <h1>Masukan Data</h1>
    <?php $i=0; foreach ($data[0] as $key => $value): ?>
    <?php if ($i==0): ?>
    <form method="POST" action="http://localhost/Hotel_Hebat/admin/callone?link=<?=$key?>&val=<?=$value?>&t=<?=$_GET['t']?>&v=<?=$_GET['v']?>" class="row">
    <?php else: ?>
      <div scope="col-6">
        <input type="text" name="<?=$key?>" placeholder="masukan <?=$key?>" class="form-control">
      </div>      
    <?php endif ?>
    <?php $i++;endforeach ?>
      <div scope="col-12">
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </form>
    <?php $this->load->view('master/foot');?>