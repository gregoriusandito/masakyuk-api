<div class="container maxs">
	<div class="row">
		<div class="col-md-12 col-xs-12 sss">
			<div class="col-md-8 col-xs-8">
				<h1>Daftar Bahan</h1>
			</div>
			<div class="col-md-4 col-xs-4 text-right">
				<?php echo anchor('welcome/tambah_bahan', '<span class="btn btn-default">Tambah</span>');?>
			</div>
		</div>
		<div class="col-md-12 col-xs-12">
			<table class="table table-striped ">
				<thead>
				<tr>
					<th width="150">Nama Bahan</th>
					<th width="100">Aksi</th>
					</tr>
				</thead>
				<?php foreach($list_bahan as $k) {?>
					<tr>
						<td ><?php echo $k->nama_bahan?></td>
						<td>
							<p><?php echo anchor('welcome/edit_bahan/'.$k->id_bahan, '<span class="glyphicon glyphicon-edit"> Edit</span>');?> </P>
							<p onClick="return doconfirm();"><?php echo anchor('welcome/hapus_bahan/'.$k->id_bahan, '<span class="glyphicon glyphicon-remove"> Hapus</span>');?>

						</td>
					</tr>
				<?php }?>
			</table>
		</div>
    </div>
	</div>
</div>
