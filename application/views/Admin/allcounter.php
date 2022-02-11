<?php $i=0;foreach ($data[0] as $key => $value){
	if ($i==0) {
		$primary=$key;
	}
	$i++;
}?>
<?php $this->load->view('master/head');?>
<div class="text-center">
	<a href="<?=base_url('/admin/callone?v=add&t='.$_GET['t']);?>" class="btn btn-primary">Tambah Data</a>
</div>
<div class="card table-responsive">
	<table class="table ">
	  <thead>
	   <tr>
	    <?php foreach ($data[0] as $key => $value): ?>
	      <th scope="col"><?=$key?></th>
	    <?php endforeach ?>
	      <th scope="col">aksi</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($data as $key => $value): ?>
	  		<?php $i=0;?>
	  		<tr>
	  		  	<?php foreach ($value as $key2 => $value2): ?>
	  		  		<?php if($i==0):?>
	  		  		<form method="POST" action="<?=base_url('/admin/update?link='.$key2.'&val='.$value2.'&t='.$_GET['t'])?>">
	  		  		<?php  $i++; endif;?>
	      			<th scope="col">
		      			<input type="text" name="<?=$key2?>" class="form-control" value="<?=$value2?>">
	      			</th>
	    		<?php endforeach ?>
		      <th scope="col">
		      	<button type="sub" class="btn btn-primary">update</button>
		      	<!-- | <a href="">ganti</a> -->
		      </th>
	    	</tr>
	    	</form>
	    <?php endforeach ?>
	  </tbody>
	</table>
</div>
<?php $this->load->view('master/foot');?>