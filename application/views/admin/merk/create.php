
<div class="row">
	<div class="col-lg-6">
		<div class="alert alert-danger"><p>Anda tidak bisa mengisi data Model jika data Merk kosong.</p></div>
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Create New</h3>
			</div>
			<form action="<?php echo site_url('cmerk/save'); ?>" method="POST">
				<div class="box-body">
					<div class="form-group">
						<label>Jenis</label>
						<select class="form-control" name="idjenis">
						<?php foreach($data_jenis->result_array() as $datajenis):?>
							<option value="<?php echo $datajenis['id_jenis'];?>"><?php echo $datajenis['nama_jenis'];?></option>
						<?php endforeach; ?>
						</select>
	                </div>					
					<div class="form-group">
						<label for="namamerk">Nama Merk</label>
						<input type="text" name="namamerk" class="form-control" placeholder="masukan nama merk">
						<?php echo form_error('namamerk');?>
					</div>	
				</div>
				<div class="box-footer">
					<button class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>