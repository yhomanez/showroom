<?php if($this->session->flashdata('pesan_error')):?>
  <div class="alert alert-danger">      
    <?php echo $this->session->flashdata('pesan_error')?>
  </div>
<?php else : ?>

<div class="row"><div class="col-lg-12">
	<button type="button" href="#" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#ModalAddMerk"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
</div></div>

<div class="box">
	<div class="box-header"><h3 class="box-title">Data Merk Mobil</h3></div>
	<div class="box-body">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Nama Merk</th><th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if($data_merk->num_rows() > 0):
		foreach ($data_merk->result_array() as $row):?>
			<tr>
				<td><?php echo $row['nama_merk']?></td>
				<td>
					<div class="btn-group">
						<a class="btn btn-xs btn-default" href="<?php echo site_url('cmerk/edit/'.$row['id_merk']);?>"><i class="fa fa-pencil"></i>&nbsp;edit</a>
						<a class="btn btn-xs btn-danger" href="<?php echo site_url('cmerk/delete/'.$row['id_merk']);?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i>&nbsp;hapus</a>
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

<div class="modal fade" id="ModalAddMerk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">×</span></button>
				<h4 class="modal-title">Tambah Merk</h4>
			</div>
			<form action="<?php echo site_url('cmerk/save'); ?>" method="POST">
			<div class="modal-body">	
				<div class="form-group">
					<label>Select</label>
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
		  	<div class="modal-footer">
		    	<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
		    	<button type="submit" class="btn btn-primary">Save</button>
		  	</div>
		  	</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<?php endif; ?>