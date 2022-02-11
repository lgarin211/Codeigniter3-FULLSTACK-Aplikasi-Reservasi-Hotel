<?php $this->load->view('master/head');?>
	<form method="POST" action="<?= base_url('/Auth/addusers') ?>">
		<input class="form-control" type="text" name="username" placeholder="Masukan Username">
		<input class="form-control" type="text" name="Nama" placeholder="Masukan Nama Lengkap Anda">
		<input class="form-control" type="text" name="Jenis_Kelamin" placeholder="Masukan Jenis Kelamin">
		<input class="form-control" type="date" name="tgllahir" placeholder="Masukan tgl Lahir">
		<input class="form-control" type="text" name="nowa" placeholder="Masukan Kontak Whatapp">
		<input class="form-control" type="password" name="password" placeholder="Masukan Kata Sandi">
		<button type="submit" class="btn btn-primary">register</button>
	</form>
<?php $this->load->view('master/foot');?>