<div class="container maxs">
<div class="row">
<div class="col-md-12 col-xs-12">
<h1>Edit Resep</h1>
<hr />
<?php foreach($resep as $k) {?>
<form action="<?php echo base_url().'Welcome/edit_resep/';?>" method="post">
	<table class="table table-borderless">
		<tr>
			<td>Resep</td>
			<td>
				<input type="hidden" name="id_resep" value="<?php echo $k->id_resep?>">
				<input type="text" name="judul" value="<?php echo $k->judul?>">
			</td>
		</tr>
    <tr>
			<td>Link YouTube</td>
			<td><input type="text" name="link_youtube" value="<?php echo $k->link_youtube?>"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td><?php echo form_dropdown('id_cat', $kategori, $k->id_cat);?></td>
		</tr>
    <tr>
			<td>Rekomendasi (0 = Belum, 1 = Ya)</td>
			<td><input type="text" name="rekomendasi" value="<?php echo $k->rekomendasi?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
<?php } ?>
</div>
</div>
</div>
