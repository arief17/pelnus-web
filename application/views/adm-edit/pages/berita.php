      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
		<div class="section-header">
			<h1>BERITA</h1> 
			<div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Data Sekolah</a></div>
              <div class="breadcrumb-item">Berita</div>
            </div>
			<a class="btn btn-danger ml-4" href="http://localhost/smkpelnusserang/dashboard" target="_blank">Lihat Web</a>
        </div>
          <!-- isi -->

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>DATA BERITA <a href="#" class="btn btn-primary ml-3" data-toggle="modal" data-target="#Tambah"> ++Tambah Berita</a></h4> <?php echo $this->session->flashdata('message'); ?>
                  <div class="card-header-action">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped" id="sortable-table">
                      <thead>
							<tr>
								<th class="text-center">
								<i class="fas fa-th"></i>
								</th>
									<th>Judul Berita</th>
									<th>Deskripsi Berita</th>
									<th>Foto</th>
									<th>Tanggal</th>
									<th>Status</th>
									<th class="text-center" width="180px">Action</th>
							</tr>
							</thead>
							<tbody>	
									<?php foreach ($berita as $gr) : ?>
								<tr>
								<td>
									<div class="sort-handler text-center">
									<?php echo ++$start ?>
									</div>
								</td>
								<td>
									<?= $gr->judul_berita?>
								</td>
								<td>
									<?= $gr->desk_berita?>
								</td>
								<td>
										<img alt="image" src="<?php echo base_url(); ?>assets/img/berita/<?php echo $gr->foto?>" width="35" data-toggle="tooltip" title="<?php echo $gr->foto?>">
								</td>
								<td>
								<?= $gr->tgl_update?>
								</td>
								<td>
								<?= $gr->status_berita?>
								</td>
								<td class="text-center">
								<a href="#" data-toggle="modal" class="btn btn-warning btn-sm" data-target="#View"><i class="fa fa-eye"></i></a> |
								<button href="#" data-toggle="modal" class="btn btn-success btn-sm" data-target="#Edit"><i class="fa fa-pencil"></i></button> |
								<a href="#" data-toggle="modal" class="btn btn-danger btn-sm" data-target="#Hapus"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<?php endforeach?>
                      </tbody>
							</table>
							<?php echo $this->pagination->create_links();?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

	<!-- modal -->
<!-- Modal Tambah-->
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title">Form Tambah berita</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php echo form_open_multipart('berita/tambah_berita'); ?>
      <div class="modal-body">
	  	<div class="form-group">
			<label>Judul Berita</code></label>
			<input type="text" name="nama_berita" class="form-control form-control-sm" autocomplete="off">
		</div>
		<div class="form-group">
			<label>Deskripsi Berita</code></label>
			<textarea type="text" name="mapel" class="form-control form-control-sm" rows="4"> </textarea>
		</div>
		<div class="form-group">
			<label>Foto</code></label>
			<input type="file" name="foto" class="form-control form-control-sm">
		</div>
		<div class="form-group">
			<label>Status</code></label>
			<select class="form-control form-control-sm">
			<option>-- Status Berita --</option>
			<option>Publik</option>
			<option>Non Publik</option>
			</select>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
	  </div>
	  <?php  echo form_close(); ?>
    </div>
  </div>
</div>
<!-- Akhir Modal Tambah -->

<!-- Modal view-->
<div class="modal fade" id="View" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title mt-3"><?php echo $gr->$nama_berita?></h5>
		</button>
	</div>
      <div class="modal-body">
		<p><?php echo $prs->mapel?></p>
		<img alt="image" src="<?php echo base_url(); ?>assets/img/prestasi/<?php echo $gr->foto?>" width="100%" height="320">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	  </div>
    </div>
  </div>
</div>
<!-- Akhir Modal View -->

<!-- Modal Edit-->

<?php foreach($berita as $gr): ?>
<div class="modal fade" id="Edit<?php echo $gr->id_berita; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title">Form Edit Prestasi</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
      <div class="modal-body">
		<form action="<?php echo base_url(). 'index.php/berita/edit_beritaweb'; ?>" method="post">
	  	<input type="hidden" name="id_berita" value="<?php echo $gr->id_berita?>">
	  	<div class="form-group">
			<label>Nama berita</code></label>
			<input type="text" class="form-control form-control-sm" name="nama_berita" value="<?php echo $gr->nama_berita;?>">
		</div>
		<div class="form-group">
			<label>Mata Pelajaran</code></label>
			<textarea type="text" class="form-control form-control-sm" name="mapel"><?php echo $gr->mapel;?> </textarea>
		</div>
		<div class="form-group">
			<label>Foto</code></label>
			<input type="file" class="form-control form-control-sm" name="foto">
		</div>
		<img alt="image" src="<?php echo base_url(); ?>assets/img/berita/<?php echo $gr->foto?>" width="235" data-toggle="tooltip" title="<?php echo $gr->foto?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Data</button>
	  </div>
	  </form>	
	
    </div>
  </div>
</div>
<?php endforeach ?>
<!-- Akhir Modal Edit -->

<!-- Modal Hapus-->
<?php foreach($berita as $gr): ?>
<div class="modal fade" id="Hapus<?php echo $gr->id_berita; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url().'index.php/berita/hapus_berita/'.$gr->id_berita?>" method="post">		
				<div class="modal-body">
					<h6>Apakah Anda Yakin Untuk Menghapus Data ini dengan judul prestasi : <?php echo $gr->nama_berita ?> ?</h6>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-danger">Delete</button>
			</form>
			</div>
    </div>
  </div>
</div>
<?php endforeach?>
<!-- Akhir Modal Hapus -->
