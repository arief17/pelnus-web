<?php 
$queryPrestasi = "SELECT * FROM prestasi";
$Prestasi = $this->db->query($queryPrestasi)->result_array();
?>

<div class="container py-3">
            <div class="row mt-3">
                <div class="col-md-9">
				<?php foreach($Prestasi as $pers) :?>
					<div class="row">
				<div class="col-md-5 my-3">
					<div class="img-prestasi">
					<img alt="image" src="<?php echo base_url(); ?>assets/img/prestasi/<?php echo $pers['gbr_prestasi']?>" width="100%" height="220">
					</div>
				</div>
				<div class="col-md-7 my-3">
					<div class="text-prestasi">
						<h4><?php echo $pers['nama_prestasi']?></h4><hr>
						<p><?= $pers['desk_prestasi']?></p>
						<div class="footer">
							<small class="text">Tanggal update :  <?= $pers['tgl_update']?></small>
						</div>
					</div>
				</div>
				</div>
				<?php endforeach ?>
				</div>
