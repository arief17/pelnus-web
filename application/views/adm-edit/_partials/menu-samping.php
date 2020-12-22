
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <img src="<?php echo base_url('assets/img/logo.png')?>"><a href="index.html"> SMK PELNUS</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PL</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="active"><a class="nav-link" href="<?php echo base_url().'index.php/web/admin'?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Starter</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
                <ul class="dropdown-menu">
							<li><a class="nav-link" href="<?php echo base_url().'index.php/web/profile'?>">Profile</a></li>
							<li><a class="nav-link" href="<?php echo base_url().'index.php/web/slider'?>">Slider</a></li>
							<li><a class="nav-link" href="<?php echo base_url().'kepsek'?>">Sambutan Kepsek</a></li>
                  <li><a class="nav-link" href="layout-transparent.html">Data Sekolah</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Data Sekolah</span></a>
                <ul class="dropdown-menu">
									<li><a class="nav-link" href="<?php echo base_url().'web/prestasi'?>">Prestasi</a></li>
                  <li><a class="nav-link" href="<?php echo base_url().'berita'?>">Data Berita</a></li>
                  <li><a class="nav-link" href="<?php echo base_url().'guru'?>">Data Tendik</a></li>
                  <li><a class="nav-link" href="<?php echo base_url().'alumni'?>">Data Alumni</a></li>
                  <li><a class="nav-link" href="<?php echo base_url().'galery'?>">Galery</a></li>
                </ul>
              </li>
              <li class="menu-header">AUTH</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
                <ul class="dropdown-menu">
                  <li><a href="auth-forgot-password.html">Ganti Password</a></li>
                  <li><a href="auth-login.html">Tambah Users</a></li>
                </ul>
              </li>
              <li><a class="nav-link" href="http://localhost/smkpelnusserang/index.php/web/admin_login"><i class="fas fa-sign-out-alt"></i> <span>Log Out</span></a></li>
            </ul>

        </aside>
      </div>
