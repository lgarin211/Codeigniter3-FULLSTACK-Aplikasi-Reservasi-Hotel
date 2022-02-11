<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL HEBAT</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('/dist/')?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url('/dist/')?>assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="<?=base_url('/dist/')?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?=base_url('/dist/')?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=base_url('/dist/')?>assets/css/app.css">
    <link rel="shortcut icon" href="<?=base_url('/dist/')?>assets/images/favicon.svg" type="image/x-icon">
  </head>
  <body>
    <div id="app">
      <div id="main" class="layout-horizontal">
        <header class="mb-5">
          <div class="header-top">
            <div class="container">
              <div class="logo">
                <h3>
                  <a href="/">
                    <!-- <img src="<?=base_url('/dist/')?>assets/images/logo/logo.png" alt="Logo" srcset=""> -->
                    Hotel Hebat 
                  </a>
                  <small>
                    <?php
                      if (!empty($_SESSION['user'])) {
                        echo $_SESSION['user']->level;
                      }
                    ?>
                  </small>
                </h3>
              </div>
              <div class="header-top-right">
                <!-- Burger button responsive -->
                <a href="#" class="burger-btn d-block d-xl-none">
                  <i class="bi bi-justify fs-3"></i>
                </a>
              </div>
            </div>
          </div>
          <nav class="main-navbar">
            <div class="container">
              <ul>
                <li class="menu-item  <?=base_url('/tamu/TipeKamar')?>">
                  <a href="<?=base_url('/')?>?req=Selamat Datang Di Hotel Kami" class='menu-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Fasilitas Hotel</span>
                  </a>
                </li>
                <?php if(!empty($_SESSION['user'])): ?>
                  <?php if ($_SESSION['user']->level=="tamu"): ?>
                  <li class="menu-item  <?=base_url('/tamu/TipeKamar')?> ">
                    <a href="<?=base_url('/tamu/TipeKamar')?>?req=Tipe Kamar Pilihanmu" class='menu-link'>
                      <i class="bi bi-puzzle"></i>
                      <span>Tipe Kamar</span>
                    </a>
                  </li>

                  <li class="menu-item  <?=base_url('/tamu/ref')?> ">
                    <a href="<?=base_url('/tamu/ref')?>?req=Booked" class="menu-link">
                      <i class="bi bi-cash"></i>
                      <span>Bookingan ku</span>
                    </a>
                  </li>
                  <?php endif ?>
                  <?php if ($_SESSION['user']->level=="resepsionis"): ?>
                  <li class="menu-item  <?=base_url('Reseptionis/DataTrack')?> ">
                    <a href="<?=base_url('Reseptionis/DataTrack')?>?req=Data Traking" class="menu-link">
                      <i class="bi bi-cash"></i>
                      <span>DataTrack</span>
                    </a>
                  </li>
                  <li class="menu-item  <?=base_url('Reseptionis/call')?> ">
                    <a href="<?=base_url('Reseptionis/call')?>?req=Filter Pencarian Data&t=pemesanan&v=filterbyname" class="menu-link">
                      <i class="bi bi-cash"></i>
                      <span>FilterData</span>
                    </a>
                  </li>
                  <?php endif ?>

                  <?php if ($_SESSION['user']->level=="admin"): ?>

                  <li class="menu-item  <?=base_url('admin/call?v=allcounter&t=users')?> ">
                    <a href="<?=base_url('admin/call?v=allcounter&t=users')?>&req=Data Traking" class="menu-link">
                      <i class="bi bi-cash"></i>
                      <span>Data User</span>
                    </a>
                  </li>

                  <li class="menu-item  <?=base_url('admin/call?v=allcounter&t=F_kamar')?> ">
                    <a href="<?=base_url('admin/call?v=allcounter&t=F_kamar')?>&req=Data Traking" class="menu-link">
                      <i class="bi bi-cash"></i>
                      <span>Data Fasilitas Kamar</span>
                    </a>
                  </li>

                  <li class="menu-item  <?=base_url('admin/call?v=allcounter&t=F_Hotel')?> ">
                    <a href="<?=base_url('admin/call?v=allcounter&t=F_Hotel')?>&req=Data Traking" class="menu-link">
                      <i class="bi bi-cash"></i>
                      <span>Data Fasilitas Hotel</span>
                    </a>
                  </li>

                  <li class="menu-item  <?=base_url('admin/call?v=allcounter&t=Tipe_room')?> ">
                    <a href="<?=base_url('admin/call?v=allcounter&t=Tipe_room')?>&req=Data Traking" class="menu-link">
                      <i class="bi bi-cash"></i>
                      <span>Data Tipe Kamar</span>
                    </a>
                  </li>
                  <?php endif ?>
                <li class="menu-item">
                  <a href="<?=base_url('/Auth/Logout?out=true')?>" class='menu-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Keluar</span>
                  </a>
                </li>  
                <?php else:?>
                <li class="menu-item  <?=base_url('/Auth/Login')?>">
                  <a href="<?=base_url('/Auth/Login')?>" class='menu-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Login</span>
                  </a>
                </li>
                <li class="menu-item  <?=base_url('/Auth/Register')?>">
                  <a href="<?=base_url('/Auth/Register')?>" class='menu-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Register</span>
                  </a>
                </li>
                <?php endif ?>
              </ul>
            </div>
          </nav>
        </header>
        <script>
            var as=document.getElementsByClassName('<?=$currentURL?>')[0].classList.toggle('btn btn-primary')
        </script>
        <div class="content-wrapper container">
          <div class="page-heading">
            <h3><?php
                    if (!empty($_GET['req'])) {
                        echo $_GET['req'];
                    }else {
                      if (empty($_SESSION['user'])) {
                        
                      }else{
                        echo $_SESSION['user']->Nama;
                      }
                    }
                    ?>
            </h3>
          </div>
          <div class="page-content">
            <section class="row">
             