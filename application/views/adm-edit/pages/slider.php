
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
		<div class="section-header">
            <h1></h1> <a class="btn btn-danger ml-auto" href="http://localhost/smkpelnusserang/index.php/web" target="_blank">Lihat Web</a>
        </div>
          <!-- isi -->

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>DATA SLIDER</h4>
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
                          <th>Judul Slider</th>
                          <th>Deskripsi Slider</th>
                          <th>Gambar</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
						<?php 
						$no = 1;
						foreach($slider as $isi)
						{
						?>
                        <tr>
                          <td>
                            <div class="sort-handler text-center">
								<?php echo $no++?>
                            </div>
                          </td>
                          <td>
							  <?php echo $isi->judul_slider?>
                          </td>
						  <td> <?php echo $isi->desk_slider?></td>
						  <td>
                            <img alt="image" src="<?php echo base_url('assets-admin/img/avatar/avatar-5.png')?>" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                          </td>
						  <td><a href="<?php echo $isi->id_slider?>" class="btn btn-success" data-toggle="modal" data-target="#myModal">Edit</a></td>
						</tr>
						<?php 
						}
						?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

	<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title">Form Edit Slider</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
      <div class="modal-body">
	  	<div class="form-group">
			<label>Judul Slider</code></label>
			<input type="text" class="form-control form-control-sm">
		</div>
		<div class="form-group">
			<label>Deskripsi Slider</code></label>
			<textarea type="text" class="form-control form-control-sm"> </textarea>
		</div>
		<div class="form-group">
			<label>Gambar</code></label>
			<input type="file" class="form-control form-control-sm">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
