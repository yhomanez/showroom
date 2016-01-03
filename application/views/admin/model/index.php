<div class="box">
	<a href="" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i>&nbsp;Tambah Jenis Mobil</a>
</div>

<div class="box">
	<div class="box-header"><h3 class="box-title">Data Jenis Mobil</h3></div>
	<div class="box-body">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Nama Jenis</th><th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if($data_jenis->num_rows() > 0):
		foreach ($data_jenis->result_array() as $row):?>
			<tr>
				<td><?php echo $row['nama_jenis']?></td>
				<td>
					<div class="btn-group">
						<a class="btn btn-xs btn-default" href="<?php echo site_url('cjenis/edit/'.$row['id_jenis']);?>"><i class="fa fa-pencil"></i>&nbsp;edit</a>
						<a class="btn btn-xs btn-danger" href="<?php echo site_url('cjenis/delete/'.$row['id_jenis']);?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i>&nbsp;hapus</a>
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