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
                <a href="index.html">
                  <!-- <img src="<?=base_url('/dist/')?>assets/images/logo/logo.png" alt="Logo" srcset=""> -->
                  Hotel Hebat
                </a>
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
              <li class="menu-item  ">
                <a href="index.html" class='menu-link'>
                  <i class="bi bi-grid-fill"></i>
                  <span>Utama</span>
                </a>
              </li>
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

              <li class="menu-item  <?=base_url('Reseptionis/DataTrack')?> ">
                <a href="<?=base_url('Reseptionis/DataTrack')?>?req=Booked" class="menu-link">
                  <i class="bi bi-cash"></i>
                  <span>Reseptionis/DataTrack</span>
                </a>
              </li>

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
             