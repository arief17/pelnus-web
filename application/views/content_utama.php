
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
                <div class="col-7 alamat d-none d-lg-block">
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
        <a href="index.html" class="navbar-brand"><img src="<?php echo base_url()?>assets/img/logo.png" alt="logo" title="Logo"></a>
        <div class="judul-logo">
            <h3>SMK PELAYARAN NUSANTARA <br>KOTA SERANG</h3>
        </div>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="berita.html">Home</a>
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
                    <a class="nav-link" href="berita.html">PPDB Tahun 2021</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="berita.html">Galery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="berita.html">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>dashboard/contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <!-- End Navigation -->


    <!-- image Caraosel -->
    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="4500">
        <!-- carousel content -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url()?>assets/img/pelnus1.jpg" alt="" class="w-100" height="600px">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-8 bg-custom d-none d-lg-block py-1 px-0">
                                    <h2>Welcome To</h2>
                                    <div class="border-top border-primary w-50 mx-auto my-4"></div>
                                        <h3 class="pb-3">SMK PELAYARAN NUSANTARA - KOTA SERANG</h3>
                                        <a href="#" class="btn btn-primary btn-lg mr-2">DAFTAR SEKARANG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url()?>assets/img/pelnus3.jpg" alt="" class="w-100" height="600px">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start text-left">
                                <div class="col-7 bg-custom d-none d-lg-block py-4 px-0 pl-4">
                                        <h3 class="pb-2">MOTO SMK PELAYARAN NUSANTARA</h3>
                                        <p class="lead">" DISIPLIN ADALAH NAFAS DAN DETAK JANTUNGKU "</p>
                                        <a href="#" class="btn btn-primary btn-lg">daftar sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url()?>assets/img/pelnus4.jpg" alt="" class="w-100" height="600px">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start text-left">
                                <div class="col-7 bg-custom d-none d-lg-block py-3 px-0 pl-3">
                                        <h3 class="pb-3">Visi SMK pelayaran nusantara</h3>
                                        <p class="lead">" Pusat Pengembangan Sumber Daya Manusia yang Berkualitas, disiplin, tangguh dan bermartabat "</p>
                                        <a href="#" class="btn btn-primary btn-lg">Start Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url()?>assets/img/pelnus5.jpg" alt="" class="w-100" height="600px">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start text-left">
                                <div class="col-7 bg-custom d-none d-lg-block py-3 px-0 pl-3">
                                        <h3 class="pb-3">mari bergabung bersama kami</h3>
                                        <a href="#" class="btn btn-primary btn-lg">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Carousel content -->

        <!-- previus & Next Button -->
        <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="fa fa-chevron-left fa-2x"></span>
        </a>
        <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
            <span class="fa fa-chevron-right fa-2x"></span>
        </a>
        <!-- End previus & Next Button -->
    </div>

    <!-- End Image Caraousel -->
    
    <!-- program keahlian -->
    <div class="container">
        <div class="row my-3">
            <div class="col-md-6 my-4">
                <h4 class="my-3">PROFILE SMK PELAYARAN NUSANTARA - KOTA SERANG</h3>
                <iframe width="560" height="315" class="w-100" src="https://www.youtube.com/embed/KK7SCo62mbA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 my-4">
                <h4 class="my-4">Sambutan Kepala Sekolah</h4>
                <p>Assalamualaikum Wr. Wb. Puji syukur kami panjatkan kehadirat ALLAH SWT atas limpahan rahmat dan karunia-Nya sehingga SMK Pelayaran Nusantara Serang berhasil membangun website, Kehadiran Website SMK Pelayaran Nusantara Serang diharapkan dapat memudahkan penyampaian informasi secara terbuka kepada warga sekolah, alumni dan masyarakat serta instansi lain yang terkait. </p>
                <a href="<?php echo base_url()?>dashboard/sambutan_kepsek" class="btn btn-primary btn-md">Baca Selengkapnya..</a>
            </div>
        </div>
    </div>
    <!-- End program keahlian -->
	
	<!-- Main Page Haeding -->
    <div class="col-12 text-center mt-3">
        <h2 class="text-dark pt-4">PRESTASI TERBARU</h2>
        <div class="border-top border-primary w-25 mx-auto my-3"></div>
    </div>

<!-- prestasi -->
<?php 
$queryPrestasi = "SELECT * FROM prestasi LIMIT 2";
$Prestasi = $this->db->query($queryPrestasi)->result_array();
?>
<div class="container">
	<div class="prestasi">
			<div class="row my-3">
				<?php foreach($Prestasi as $pers) :?>
				<div class="col-md-5 my-3">
					<div class="img-prestasi">
					<img alt="image" src="<?php echo base_url(); ?>assets/img/prestasi/<?php echo $pers['gbr_prestasi']?>" width="100%" height="220">
					</div>
				</div>
				<div class="col-md-7 my-3">
					<div class="text-prestasi">
						<h4><?php echo $pers['nama_prestasi']?></h4><hr>
						<p><?= substr($pers['desk_prestasi'], 0, 270).'.....'?><a href="#">Baca Selengkapnya</a></p>
						

						<div class="footer mb-0">
							<small class="text">Tanggal updated :  <?= $pers['tgl_update']?></small>
						</div>
					</div>
				</div>
				<?php endforeach ?>
				
				<div class="col-12 text-center mt-3">
					<a href="<?php echo base_url().'dashboard/prestasi_info'?>" class="btn btn-primary btn-lg mb-5">Lihat Prestasi Lainnya</a>
				</div>
			</div>
	</div>
    
	</div>
</div>
<!-- End prestasi -->

    <!-- start fixed background IMG -->
    <div class="fixed-background">
        <div class="row text-light py-3">
            <div class="col-12 text-center">
                <h1>PPDB TAHUN 2021 SUDAH DIBUKA!</h1>
                <h3 class="py-3">.Mari Bergabung Bersama Kami.</h3>
                <a href="#" class="btn btn-primary btn-lg mr-2">Daftar</a>
                <a href="#" class="btn btn-danger btn-lg ml-2">Panduan Pendafataran</a>
            </div>
        </div>
        <div class="fixed-wrap">
            <div class="fixed"></div>
        </div>
    </div>

    <!-- End Start Fixed -->

     <!-- kepala sekolah -->
     <div class="col-12 text-center mt-3 d-none d-md-block">
        <h1 class="text-dark pt-4">EKSTRA KURIKULER</h1>
        <div class="border-top border-primary w-25 mx-auto my-3"></div>
    </div>


<div class="container ekstrakurikuler d-none d-md-block">
    <div class="row mx-auto my-3 section-padding">
        <div class="col-md-3 single-testi">
            <div class="img-area">
                <img src="<?php echo base_url()?>assets/img/galery/pramuka.png" alt="...">
            </div>
            <div class="img-text my-2">
                <h5>PRAMUKA</h5>
            </div>
        </div>
        <div class="col-md-3">
            <div class="img-area">
                <img src="<?php echo base_url()?>assets/img/galery/paskibra.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="img-text my-2">
                <h5>PASKIBRAKA</h5>
            </div>
        </div>
        <div class="col-md-3">
            <div class="img-area">
                <img src="<?php echo base_url()?>assets/img/galery/merpati.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="img-text my-2">
                <h5>MERPATI PUTIH</h5>
            </div>
        </div>
        <div class="col-md-3">
            <div class="img-area">
                <img src="<?php echo base_url()?>assets/img/galery/6.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="img-text my-2">
                <h5>KELAUTAN</h5>
            </div>
        </div>
    </div>
</div>
<!-- End kepala sekolah -->

<!-- End Image Caraousel -->

        <!-- Main Page Haeding Tenaga Pendidik-->
        <div class="col-12 text-center mt-5">
            <h1 class="text-dark">Tenaga Pendidik</h1>
            <div class="border-top border-primary w-25 mx-auto my-3"></div>
        </div>
        
        <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4 pendidik">
                        <div class="img-area">
                            <img src="<?php echo base_url()?>assets/img/guru/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="img-text my-2">
                            <h5>Mustafa Muchtar, S.H</h5>
                            <p>Mengampu Pelajaran PPKn / Kepala Sekolah</p>
                        </div>
                    </div>
                    <div class="col-md-4 pendidik d-none d-md-block">
                        <div class="img-area">
                            <img src="<?php echo base_url()?>assets/img/guru/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="img-text my-2">
                            <h5>Agus Nurmalasari, S.Pd</h5>
                            <p>Mengampu Pelajaran PJOK</p>
                        </div>
                    </div>
                    <div class="col-md-4 pendidik d-none d-md-block">
                        <div class="img-area">
                            <img src="<?php echo base_url()?>assets/img/guru/3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="img-text my-2">
                            <h5>Kristina, S.Pdi</h5>
                            <p>Mengampu Pelajaran Inggris / Inggris Maritim</p>
                        </div>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 pendidik">
                        <div class="img-area">
                            <img src="<?php echo base_url()?>assets/img/guru/4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="img-text my-2">
                            <h5>Asep Saefudin, S.Pd</h5>
                            <p>Mengampu Pelajaran Simulasi Digital</p>
                        </div>
                    </div>
                    <div class="col-md-4 pendidik d-none d-md-block">
                        <div class="img-area">
                            <img src="<?php echo base_url()?>assets/img/guru/5.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="img-text my-2">
                            <h5>Ira Nurpialawati, S.Pd</h5>
                            <p>Mengampu Pelajaran Fisika Kimia</p>
                        </div>
                    </div>
                    <div class="col-md-4 pendidik d-none d-md-block">
                        <div class="img-area">
                            <img src="<?php echo base_url()?>assets/img/guru/6.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="img-text my-2">
                            <h5>Dudung Abdul Matin</h5>
                            <p>Mengampu Pelajaran Produktif / Kaprodi</p>
                        </div>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 pendidik">
                        <div class="img-area">
                            <img src="<?php echo base_url()?>assets/img/guru/7.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="img-text my-2">
                            <h5>Siti Nurhayati, S.Pd</h5>
                            <p>Mengampu Pelajaran Kewirausahaan</p>
                        </div>
                    </div>
                    <div class="col-md-4 pendidik d-none d-md-block">
                        <div class="img-area">
                            <img src="<?php echo base_url()?>assets/img/guru/8.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="img-text my-2">
                            <h5>Rika Veronika, S.Pd</h5>
                            <p>Mengampu Pelajaran Bahasa Indonesia</p>
                        </div>
                    </div>
                    <div class="col-md-4 pendidik d-none d-md-block">
                        <div class="img-area">
                            <img src="<?php echo base_url()?>assets/img/guru/9.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="img-text my-2">
                            <h5>Rain Mardiansaf, S.Sos</h5>
                            <p>Mengampu Pelajaran Produktif</p>
                        </div>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 pendidik">
                        <div class="img-area">
                            <img src="<?php echo base_url()?>assets/img/guru/10.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="img-text my-2">
                            <h5>Hilma Nia, S.Pd</h5>
                            <p>Mengampu Pelajaran Matematika</p>
                        </div>
                    </div>
                    <div class="col-md-4 pendidik d-none d-md-block">
                        <div class="img-area">
                            <img src="<?php echo base_url()?>assets/img/guru/11.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="img-text my-2">
                            <h5>Meidita Nur azizah, S.Pd</h5>
                            <p>Mengampu Pelajaran Matematika</p>
                        </div>
                    </div>
                    <div class="col-md-4 pendidik d-none d-md-block">
                        <div class="img-area">
                            <img src="<?php echo base_url()?>assets/img/guru/12.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="img-text my-2">
                            <h5>Novi Ningsih, S.Pd</h5>
                            <p>Mengampu Pelajaran PPKn</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    <!-- Tenaga Pendidik -->
    </div>
    <!-- End program keahlian -->
    
    <div class="col-12 text-center my-3">
        <a href="pages/guru.html" class="btn btn-primary btn-lg mb-5">Lihat semua guru</a>
    </div>


   <!-- alumni -->
    <div class="alumni">
        <div class="col-12 text-center my-3">
            <h1 class="text-dark">Profil Alumni</h1>
            <div class="border-top border-primary w-25 mx-auto my-3"></div>
        </div>
        <div class="container">
            <div class="row my-3">
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="<?php echo base_url()?>assets/img/galery/alumni2.jpg" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Ahmad Resa Kurniawan</h5>
                              <p>Bekerja di TNI AU</p>
                              <p class="card-text">Saya Bangga dengan SMK Pelayaran Nusantara, Lulus Langsung Kerja</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="<?php echo base_url()?>assets/img/galery/alumni1.jpg" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Nia Rahmawati</h5>
                              <p>Bekerja di Angkatan Kepolisan</p>
                              <p class="card-text">SMK Pelayaran Nusantara Menjadaikan saya seorang yang mampu berjuang dalam Kehidupan</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 text-center my-3">
            <a href="#" class="btn btn-primary btn-lg mb-5">Lihat semua alumni</a>
        </div>
    </div>
    <!-- akhir alumni -->

    <!-- galery -->
    
    <div class="galery">
        <div class="col-12 text-center my-4">
            <h1 class="text-dark">Galery / dokumentasi</h1>
            <div class="border-top border-primary w-25 mx-auto my-3"></div>
        </div>
        <div class="container">
            <div class="row my-3">
                <div class="card-deck">
                    <div class="card">
                    <img src="<?php echo base_url()?>assets/img/galery/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Kegiatan Kebersamaan pelatihan Berenang</p>
                    </div>
                    </div>
                    <div class="card">
                    <img src="<?php echo base_url()?>assets/img/galery/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Kegiatan Kebersamaan pelatihan Berenang</p>
                    </div>
                    </div>
                    <div class="card">
                    <img src="<?php echo base_url()?>assets/img/galery/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Kegiatan Kebersamaan pelatihan Berenang</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 text-center my-4">
            <a href="#" class="btn btn-primary btn-lg mb-5">Lihat semua Galery</a>
        </div>
    </div>  
    <!-- akhir galery -->

    <!-- berita -->
    <div class="berita">
        <div class="col-12 text-center my-3">
            <h1 class="text-dark">Berita terbaru</h1>
            <div class="border-top border-primary w-25 mx-auto my-3"></div>
        </div>
        <div class="container">
        <div class="row my-3">
            <div class="card-deck">
                <div class="card berita">
                    <a href="berita.html">
                        <img src="<?php echo base_url()?>assets/img/galery/15.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Covid-19 dan Masa Depan Pendidikan Taruna/i SMK Pelayaran Serang</h5>
                          <p class="card-text isi-berita">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                         
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div> 
                    </a>
                </div>
                <div class="card berita">
                <a href="berita.html">
                  <img src="<?php echo base_url()?>assets/img/galery/16.jpg" class="card-img-top" alt="...">
                  <div class="card-body py-4">
                    <h5 class="card-title">Virus Corona Tak Membatasi Belajar Taruna/I SMK Pelayaran Nusantara tahun 2020</h5>
                    <p class="card-tex isi-berita">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div> 
                </a>
                </div>
                <div class="card berita">
                <a href="berita.html">
                  <img src="<?php echo base_url()?>assets/img/galery/17.jpg" class="card-img-top" alt="...">
                  <div class="card-body py-4">
                    <h5 class="card-title">Bidang Menejemen Mutu SMK Pelayaran Nusantara Menjaga Kualitas Taruna/I Menjadi Generasi "DJITU"?</h5>
                    <p class="card-text isi-berita">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    
                  </div>
                    <div class="card-footer mb-10">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div> 
                </a>
                </div>
              </div>
            </div>
            <div class="card-deck">
                <div class="card berita">
                <a href="berita.html">
                  <img src="<?php echo base_url()?>assets/img/galery/19.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Model Akmil (Peraga SMK Pelnus Serang) 2020</h5>
                    <p class="card-text isi-berita">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>  
                </a>
                </div>
                <div class="card berita">
                <a href="berita.html">
                  <img src="<?php echo base_url()?>assets/img/galery/20.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Antara Corona dan Belajar, SMK Pelayaran Nusantara Kota Serang</h5>
                    <p class="card-text isi-berita">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
                </a>
                </div>
                <div class="card berita">
                <a href="berita.html">
                  <img src="<?php echo base_url()?>assets/img/galery/22.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Pengumuman Kelulusan SMK Pelayaran Nusantara Kota Serang</h5>
                    <p class="card-text isi-berita">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  
                </a>
                </div>
              </div>
            </div>
        </div>
        <div class="col-12 text-center my-4">
            <a href="#" class="btn btn-primary btn-lg mb-5">Lihat semua Berita</a>
        </div>
    </div>  
    <!-- akhir berita -->

     <!-- start fixed background IMG -->
     <div class="fixed-background">
        <div class="row text-light py-2 counter-dapodik">
            <div class="col-12 text-center">
                <h3>DATA POKOK SMK PELAYARAN NUSANTARA KOTA SERANG</h3>
                <div class="row py-3">
                    <div class="col-sm-4">
                        <h1>116</h1><span>Siswa</span>
                    </div>
                    <div class="col-sm-4">
                        <h1>14</h1><span>Guru</span>
                    </div>
                    <div class="col-sm-4">
                        <h1>9</h1><span>Tenaga Kependidikan</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-wrap">
            <div class="fixed"></div>
        </div>
    </div>

    <!-- End Start Fixed -->

    <!-- footer -->
    <section id="#contact">
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1180057958363!2d106.19618004990873!3d-6.114812361646213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41f5020f223dd7%3A0x58fe278450d9009f!2sSMK%20PELAYARAN%20NUSANTARA%20KOTA%20SERANG!5e0!3m2!1sid!2sid!4v1606361508321!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row my-3">
                    <div class="col-md-4 text-center">
                        <img src="<?php echo base_url()?>assets/img/logo.png" alt="" width="100px;">
                        <h5 class="my-1">SMK PELAYARAN NUSANTARA KOTA SERANG</h5>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-center my-1 contact-kami">Kontak Kami</h4>
                        <p>Jl. Panancangan, Kec. Cipocok Jaya, Kota Serang, Banten 42124</p>
                        <i class="fa fa-phone"> Telp  : (0254) 7931970, 081906261187</i>
                        <i class="fa fa-envelope"> Email   : smkpelnusserang@yahoo.co.id</i>
                    </div>
                    <div class="col-md-4 navigasi d-none d-md-block">
                        <h4 class="text-center my-1">Navigasi</h4>
                        <ul>
                            <li><a href="https://dapo.kemdikbud.go.id/sekolah/89A5E13361A9ADA8D514" target="_blank">Dapodik</a></li>
                            <li><a href="https://referensi.data.kemdikbud.go.id/nisn/index.php/Cindex/formcaribynama" target="_blank">Cek Nisn Siswa</a></li>
                            <li><a href="https://info.gtk.kemdikbud.go.id/" target="_blank">Info GTK</a></li>
                            <li><a href="https://siap-akm.pusmenjar.kemdikbud.go.id/login" target="_blank">AKM 2021</a></li>
                            <li><a href="https://ppdb21.smkpelnusserang.sch.id/" target="_blank">PPDB 2021</a></li>
                        </ul>
                    </div>
                </div><hr>
                <div class="col-12 text-center my-4">
                    <p>Generasi Gembel Coding&copy Copyright 2020 - smk pelayaran nusantara</p>
                </div>
            </div>
        </div>
        </section>
        <!-- akhir footer -->


    <div class="container my-2"></div>
    <!-- JS and JQUERY -->
    <script src="<?php echo base_url()?>assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
