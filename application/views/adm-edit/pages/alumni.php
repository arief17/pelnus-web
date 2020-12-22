      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
		<div class="section-header">
			<h1>alumni</h1> 
			<div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Data Sekolah</a></div>
              <div class="breadcrumb-item">alumni</div>
            </div>
			<a class="btn btn-danger ml-4" href="http://localhost/smkpelnusserang/index.php/dashboard" target="_blank">Lihat Web</a>
        </div>
          <!-- isi -->

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>DATA alumni <a href="#" class="btn btn-primary ml-3" data-toggle="modal" data-target="#Tambah"> ++Tambah Foto</a></h4> <?php echo $this->session->flashdata('message'); ?>
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
									<th>Nama Alumni</th>
									<th>Status Bekreja</th>
									<th>Tempat Bekerja</th>
									<th>Kesan</th>
									<th>Foto</th>
									<th>Tanggal Update</th>
								<th class="text-center" width="180px">Action</th>
								</tr>
							</thead>
							<tbody>	
									<?php foreach ($alumni as $gr) : ?>
								<tr>
								<td>
									<div class="sort-handler text-center">
									<?php echo ++$start ?>
									</div>
								</td>
								<td>
									<?= $gr->nama_alumni?>
								</td>
								<td>
									<?= $gr->status_bekerja?>
								</td>
								<td>
									<?= $gr->tempat_bekerja?>
								</td>
								<td>
									<?= $gr->kesan?>
								</td>
								<td>
										<img alt="image" src="<?php echo base_url(); ?>assets/img/alumni/<?php echo $gr->foto?>" width="35" data-toggle="tooltip" title="<?php echo $gr->foto?>">
								</td>
								<td>
									<?= $gr->tgl_update?>
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
		<h5 class="modal-title">Form Tambah alumni</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php echo form_open_multipart('alumni/tambah_alumni'); ?>
      <div class="modal-body">
	  	<div class="form-group">
			<label>Nama alumni</code></label>
			<input type="text" name="nama_alumni" class="form-control form-control-sm" autocomplete="off">
		</div>
		<div class="form-group">
			<label>Mata Pelajaran</code></label>
			<textarea type="text" name="mapel" class="form-control form-control-sm"> </textarea>
		</div>
		<div class="form-group">
			<label>Foto</code></label>
			<input type="file" name="foto" class="form-control form-control-sm">
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
		<h5 class="modal-title mt-3"><?php echo $gr->$nama_alumni?></h5>
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

<?php foreach($alumni as $gr): ?>
<div class="modal fade" id="Edit<?php echo $gr->id_alumni; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title">Form Edit Prestasi</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
      <div class="modal-body">
		<form action="<?php echo base_url(). 'index.php/alumni/edit_alumniweb'; ?>" method="post">
	  	<input type="hidden" name="id_alumni" value="<?php echo $gr->id_alumni?>">
	  	<div class="form-group">
			<label>Nama alumni</code></label>
			<input type="text" class="form-control form-control-sm" name="nama_alumni" value="<?php echo $gr->nama_alumni;?>">
		</div>
		<div class="form-group">
			<label>Mata Pelajaran</code></label>
			<textarea type="text" class="form-control form-control-sm" name="mapel"><?php echo $gr->mapel;?> </textarea>
		</div>
		<div class="form-group">
			<label>Foto</code></label>
			<input type="file" class="form-control form-control-sm" name="foto">
		</div>
		<img alt="image" src="<?php echo base_url(); ?>assets/img/alumni/<?php echo $gr->foto?>" width="235" data-toggle="tooltip" title="<?php echo $gr->foto?>">
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
<?php foreach($alumni as $gr): ?>
<div class="modal fade" id="Hapus<?php echo $gr->id_alumni; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url().'index.php/alumni/hapus_alumni/'.$gr->id_alumni?>" method="post">		
				<div class="modal-body">
					<h6>Apakah Anda Yakin Untuk Menghapus Data ini dengan judul prestasi : <?php echo $gr->nama_alumni ?> ?</h6>
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
