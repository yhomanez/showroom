<div class="row">
	<div class="col-lg-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Edit Model</h3>
			</div>
			<?php
			$data = $data_model->row_array();
			?>
			<form action="<?php echo site_url('cmodel/updates'); ?>" method="POST">
				<div class="box-body">
					<div class="form-group">
						<label>Select</label>
						<select class="form-control" name="idmerk">
						<?php foreach($data_merk->result_array() as $datamerk):?>
							<option value="<?php echo $datamerk['id_merk'];?>"><?php echo $datamerk['nama_merk'];?></option>
						<?php endforeach; ?>
						</select>
	                </div>	
					<div class="form-group">
						<label for="namaModel">Name</label>
						<input type="text" name="namamodel" class="form-control" placeholder="masukan nama model" value="<?php echo $data['nama_model'];?>">
						<input type="hidden" name="idmodel" class="form-control" value="<?php echo $data['id_model']; ?>">						
						<?php echo form_error('namajenis');?>						
					</div>
				</div>
				<div class="box-footer">
					<button class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Spesifikasi Mobil</h3>
			</div>
			<div class="box-body">
			<?php
			if($data_spesifikasi->num_rows > 0){
				$url = 'cmodel/update_spek';
			}else{
				$url = 'cmodel/save_spek';
			}

			$model = $data_model->row_array();

			if($data_spesifikasi->num_rows() > 0){
				$spek = $data_spesifikasi->row();
			}
			?>
				<form action="<?php echo site_url($url); ?>" method="POST">
					<?php $model_id = isset($spek->model_id) ? $spek->model_id : $model['id_model']; ?>
					<input type="hidden" name="idmodel" value="<?php echo $model_id; ?>">
					<div class="form-group">
						<label for="mesin">Mesin</label>
						<?php $mesin = isset($spek->mesin) ? $spek->mesin : ''; ?>						
						<input type="text" name="mesin" class="form-control" placeholder="mesin" value="<?php echo $mesin; ?>">						
					</div>
					<div class="form-group">
						<label for="mesin">Transmisi</label>
						<?php $transmisi = isset($spek->transmisi) ? $spek->transmisi : ''; ?>
						<input type="text" name="transmisi" class="form-control" placeholder="transmisi" value="<?php echo $transmisi; ?>">
					</div>
					<div class="form-group">
						<label for="mesin">Eksterior</label>
						<textarea name="eksterior" class="form-control" placeholder="eksterior"></textarea>
					</div>
					<div class="form-group">
						<label for="mesin">Interior</label>
						<textarea name="interior" class="form-control" placeholder="interior"></textarea>
					</div>
					<div class="form-group">
						<label for="mesin">Dimensi</label>
						<input type="text" name="dimensi" class="form-control" placeholder="dimensi">						
					</div>					
					<div class="form-group">
						<label for="mesin">Sasis (Ban, Velg)</label>
						<input type="text" name="sasis" class="form-control" placeholder="sasis">						
					</div>					
					<div class="form-group">
						<label for="mesin">Rem</label>
						<input type="text" name="rem" class="form-control" placeholder="rem">						
					</div>					
					<div class="form-group">
						<label for="mesin">Warna yang tersedia</label>
						<input type="text" name="warna" class="form-control" placeholder="warna">						
					</div>					
					<div class="form-group">
						<label for="mesin">Bahan Bakar</label>
						<input type="text" name="bahanbakar" class="form-control" placeholder="Bahan Bakar">						
					</div>					
					<div class="form-group">
						<label for="mesin">Penumpang (@orang)</label>
						<input type="text" name="penumpang" class="form-control" placeholder="penumpang">						
					</div>
					<div class="form-group">
						<label for="mesin">Daya Angkut (@kg)</label>
						<input type="text" name="daya_angkut" class="form-control" placeholder="Daya Angkut">						
					</div>
				</form>				
			</div>
			<div class="box-footer">
				<button class="btn btn-primary">Simpan Spesifikasi</button>
			</div>			
		</div>
	</div>	
</div>