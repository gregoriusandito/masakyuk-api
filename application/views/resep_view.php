<div class="container maxs">
	<div class="row">
		<div class="col-md-12 col-xs-12 sss">
			<div class="col-md-8 col-xs-8">
				<h1>Daftar Resep</h1>
			</div>
			<div class="col-md-4 col-xs-4 text-right">
				<?php echo anchor('welcome/tambah_resep', '<span class="btn btn-default">Tambah</span>');?>
			</div>
		</div>

		<div class="col-md-12 col-xs-12">
			<table class="table table-striped ">
				<thead>
				<tr>
					<th>Judul</th>
					<th>Kategori</th>
					<th>Link YouTube</th>
					<th>Rekomendasi</th>
					<th>Aksi</th>
					</tr>
				</thead>
				<?php foreach($resep as $k) {?>
					<tr>
						<td ><?php echo $k->judul?></td>
						<td ><?php if($k->id_cat == 1){
							echo "Makanan Pembuka";
						} else if($k->id_cat == 2){
							echo "Makanan Utama";
						} else if($k->id_cat == 3){
							echo "Makanan Penutup";
						}?></td>
						<td><?php echo $k->link_youtube?></td>
						<td><?php if($k->rekomendasi == 0){
							echo "Belum";
						} else if($k->rekomendasi == 1){
							echo "Ya";
						} ?></td>
						<td>
							<p><?php echo anchor('welcome/edit_resep/'.$k->id_resep, '<span class="glyphicon glyphicon-edit"> Edit</span>');?> </P>
							<p><?php echo anchor('welcome/daftar_list_bahan_resep/'.$k->id_resep, '<span class="glyphicon glyphicon-edit"> Lihat Bahan</span>');?> </P>
							<p><?php echo anchor('welcome/daftar_cara_memasak/'.$k->id_resep, '<span class="glyphicon glyphicon-edit"> Lihat Cara Memasak</span>');?> </P>
							<p onClick="return doconfirm();"><?php echo anchor('welcome/hapus_resep/'.$k->id_resep, '<span class="glyphicon glyphicon-remove"> Hapus</span>');?>

						</td>
					</tr>
				<?php }?>
			</table>
		</div>
    </div>
	</div>
</div>
