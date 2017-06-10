<div class="container maxs">
	<div class="row">
		<div class="col-md-12 col-xs-12 sss">
			<div class="col-md-8 col-xs-8">
				<h1>Daftar Satuan</h1>
			</div>
			<div class="col-md-4 col-xs-4 text-right">
				<?php echo anchor('welcome/tambah_satuan', '<span class="btn btn-default">Tambah</span>');?>
			</div>
		</div>

		<div class="col-md-12 col-xs-12">
			<table class="table table-striped ">
				<thead>
				<tr>
					<th width="150">Satuan</th>
					<th width="100">Aksi</th>
					</tr>
				</thead>
				<?php foreach($satuan as $k) {?>
					<tr>
						<td ><?php echo $k->satuan?></td>
						<td>
							<p><?php echo anchor('welcome/edit_satuan/'.$k->id_satuan, '<span class="glyphicon glyphicon-edit"> Edit</span>');?> </P>
							<p onClick="return doconfirm();"><?php echo anchor('welcome/hapus_satuan/'.$k->id_satuan, '<span class="glyphicon glyphicon-remove"> Hapus</span>');?>
						</td>
					</tr>
				<?php }?>
			</table>
		</div>
    </div>
	</div>
</div>
