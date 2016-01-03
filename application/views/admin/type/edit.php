<div class="row">
	<div class="col-lg-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Create New</h3>
			</div>
			<?php
			$data = $data_jenis->row_array();
			?>
			<form action="<?php echo site_url('cjenis/update'); ?>" method="POST">
				<div class="box-body">
					<div class="form-group">
						<label for="namaJenis">Name</label>
						<input type="text" name="namajenis" class="form-control" placeholder="masukan jenis" value="<?php echo $data['nama_jenis'];?>">
						<input type="hidden" name="idjenis" class="form-control" value="<?php echo $data['id_jenis']; ?>">						
						<?php //echo form_error('namajenis');?>						
					</div>
				</div>
				<div class="box-footer">
					<button class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>