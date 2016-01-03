<?php if(isset($pesan_error)) { ?>
<div class="row">
	<div class="col-lg-6">
		<div class="alert alert-danger">      
		<?php echo $pesan_error; ?>
		</div>
	</div>
</div>		
<?php } ?>
<div class="row">
	<div class="col-lg-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah jenis Mobl</h3>
			</div>
			<form id="formAddJenis">
				<div class="box-body">
					<div class="form-group">
						<label for="namaJenis">Nama Jenis</label>
						<input type="text" id="namajenis" name="namajenis" class="form-control" placeholder="masukan nama jenis">
						<?php echo form_error('namajenis');?>
					</div>
				</div>			
			</form>	
			<div class="box-footer">
				<button class="btn btn-primary j-save-jenis" data-url="<?php echo site_url('cjenis/save'); ?>" data-homeurl="<?php echo site_url('cjenis/index'); ?>">Simpan</button>
			</div>	

			
		</div>
	</div>
</div>