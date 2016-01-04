
<div class="row"><div class="col-lg-12">
	<button type="button" href="#" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#ModalAddModel"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
</div></div>

<div class="box">
	<div class="box-header"><h3 class="box-title">Data Model Mobil</h3></div>
	<div class="box-body">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Nama Model</th><th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if($data_model->num_rows() > 0):
		foreach ($data_model->result_array() as $row):?>
			<tr>
				<td><?php echo $row['nama_model']?></td>
				<td>
					<div class="btn-group">
						<a class="btn btn-xs btn-default" href="<?php echo site_url('cmodel/edit/'.$row['id_model']);?>"><i class="fa fa-pencil"></i>&nbsp;edit</a>
						<a class="btn btn-xs btn-danger" href="<?php echo site_url('cmodel/delete/'.$row['id_model']);?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i>&nbsp;hapus</a>
					</div>
				</td>
			</tr>
		<?php 
		endforeach;
		else:?>
			<tr>
				<td colspan="2">Data belum ada.</td>
			</tr>		
		<?php endif;?>
		</tbody>
	</table>
	</div>
</div>

<div class="modal fade" id="ModalAddModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">×</span></button>
				<h4 class="modal-title">Tambah model</h4>
			</div>
			<form id="#formAddModel">
			<div class="modal-body">	
				<div class="form-group">
					<label>Select</label>
					<select class="form-control" id="idmerk" name="idmerk">
					<?php foreach($data_merk->result_array() as $datamerk):?>
						<option value="<?php echo $datamerk['id_merk'];?>"><?php echo $datamerk['nama_merk'];?></option>
					<?php endforeach; ?>
					</select>
                </div>					
				<div class="form-group">
					<label for="namamodel">Nama model</label>
					<input type="text" id="namamodel" name="namamodel" class="form-control" placeholder="masukan nama model">
					<?php echo form_error('namamodel');?>
				</div>			
		  	</div>
		  	</form>
		  	<div class="modal-footer">
		    	<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
		    	<button type="submit" class="btn btn-primary j-save-model" data-url="<?php echo site_url('cmodel/save'); ?>" data-homeurl="<?php echo site_url('cmodel/index'); ?>">Save</button>
		  	</div>		  	
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
