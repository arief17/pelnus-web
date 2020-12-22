      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
		<div class="section-header">
			<h1>KEPALA SEKOLAH</h1> 
			<div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Sambutan Kepala Sekolah</div>
            </div>
			<a class="btn btn-danger ml-4" href="http://localhost/smkpelnusserang/index.php/dashboard" target="_blank">Lihat Web</a>
        </div>
          <!-- isi -->

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>KEPALA SEKOLAH </h4> <?php echo $this->session->flashdata('message'); ?>
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
									<th>Nama Sambutan</th>
									<th>Jabatan</th>
									<th>Isi Sambutan</th>
									<th>Foto</th>
									<th>Tanggal</th>
								<th class="text-center" width="180px">Action</th>
								</tr>
							</thead>
							<tbody>	
									<?php foreach ($kepsek as $kep) : ?>
								<tr>
								<td>
									<div class="sort-handler text-center">
									<?php echo ++$start ?>
									</div>
								</td>
								<td>
									<?= $kep->nama_sambutan?>
								</td>
								<td>
									<?= $kep->jabatan?>
								</td>
								<td>
									<?= $kep->isi_sambutan?>
								</td>
								<td>
										<img alt="image" src="<?php echo base_url(); ?>assets/img/kepsek/<?php echo $kep->foto?>" width="35" data-toggle="tooltip" title="<?php echo $kep->foto?>">
								</td>
								<td>
								<?= $kep->tgl_update?>
								</td>
								<td class="text-center">
								<a href="#" data-toggle="modal" class="btn btn-warning btn-sm" data-target="#View<?php echo $kep->id_sambutan; ?>"><i class="fa fa-eye"></i></a> |
								<button href="#" data-toggle="modal" class="btn btn-success btn-sm" data-target="#Edit<?php echo $kep->id_sambutan; ?>"><i class="fa fa-pencil"></i></button> |
								<a href="#" data-toggle="modal" class="btn btn-danger btn-sm" data-target="#Hapus<?php echo $kep->id_sambutan; ?>"><i class="fa fa-trash"></i></a>
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
<!-- Modal view-->
<?php foreach($kepsek as $kep) : ?>
<div class="modal fade" id="View<?php echo $kep->id_sambutan; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title mt-3"><?php echo $kep->nama_sambutan?></h5>
		</button>
	</div>
      <div class="modal-body">
		  <img alt="image" src="<?php echo base_url(); ?>assets/img/prestasi/<?php echo $kep->foto?>" width="100%" height="190">
		<p><?php echo $kep->isi_sambutan?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	  </div>
	</div>
  </div>
</div>
<?php endforeach?>
<!-- Akhir Modal View -->

<!-- Modal Edit-->

<?php foreach($kepsek as $kep): ?>
<div class="modal fade" id="Edit<?php echo $kep->id_sambutan; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title">Form Edit Prestasi</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	  <form action="<?php echo base_url()?>kepsek/edit_kepsekweb" method="post" enctype="multipart/form-data">
      <div class="modal-body">
	  	<div class="form-group">
		  	<input type="hidden" name="id_sambutan" value="<?php echo $kep->id_sambutan?>">
			<label>Nama Sambutan</code></label>
			<input type="text" name="nama_sambutan" class="form-control form-control-sm" value="<?php echo $kep->nama_sambutan?>">
		</div>
		<div class="form-group">
			<label>Jabatan</code></label>
			<input type="text" name="jabatan" class="form-control form-control-sm" value="<?php echo $kep->jabatan?>">
			
		</div>
		<div class="form-group">
			<label>Isi Sambutan</code></label>
			<textarea type="text" name="isi_sambutan" class="form-control form-control-sm"><?php echo $kep->isi_sambutan?> </textarea>
		</div>
		<div class="form-group">
			<label>Foto</code></label>
			<input type="file" class="form-control form-control-sm" name="foto">
		</div>
		<img alt="image" src="<?php echo base_url(); ?>assets/img/kepsek/<?php echo $kep->foto?>" width="235" data-toggle="tooltip" title="<?php echo $kep->foto?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
	  </div>
</form>
	
  </div>
</div>
<?php endforeach ?>
<!-- Akhir Modal Edit -->
