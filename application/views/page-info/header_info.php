<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMK Pelayaran Nusantara Kota Serang | Home</title>
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo.ico">
    
        <!-- boosttrap -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    
        <!-- style css -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    
        <!-- font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
        <!-- font awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
<body>
     <!-- Top Bar -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-7  d-none d-lg-block">
                    <p><a href="#">Alamat : JL. PELNUS NO. 7 KAMPUNG BARU BANGDES, Panancangan, Kec. Cipocok Jaya, Kota Serang Banten.</a></p>
                </div>
                <div class="col-5 contact d-none d-lg-block">
                    <i class="fa fa-phone"></i><a href="#"> (0254) 7931970</a>
                    <i class="fa fa-envelope"></i><a href="#"> smkpelnusserang@yahoo.co.id</a>
                    <i class="fa fa-phone"></i><a href="#"> 087871922271</a>
                </div>
        `   </div>
        </div>
    </div>
    <!-- End Top-bar -->

   <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="<?php echo base_url().'dashboard'?>" class="navbar-brand"><img src="<?php echo base_url()?>assets/img/logo.png" alt="logo" title="Logo"></a>
        <div class="judul-logo">
            <h3>SMK PELAYARAN NUSANTARA <br>KOTA SERANG</h3>
        </div>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
				<li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url().'dashboard'?>">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Visi dan Misi</a>
                      <a class="dropdown-item" href="#">Sejarah Sekolah</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Kategori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Data Guru</a>
                      <a class="dropdown-item" href="#">Data Tenaga Kependidikan</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      BKK
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Lowongan Kerja</a>
                      <a class="dropdown-item" href="#">Data Alumni</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PPDB Tahun 2021</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Galery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url().'dashboard/berita'?>">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url().'dashboard/contact'?>">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <!-- End Navigation -->
