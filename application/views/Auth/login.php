<?php $this->load->view('master/head');?>
	<form method="POST" action="<?= base_url('/Auth/cekusers') ?>">
		<input class="form-control" type="text" name="username" placeholder="Masukan Username">
		<input class="form-control" type="password" name="password" placeholder="Masukan Kata Sandi">
		<button type="submit" class="btn btn-primary">Login</button>
	</form>
<?php $this->load->view('master/foot');?>