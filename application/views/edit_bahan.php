<div class="container maxs">
<div class="row">
<div class="col-md-12 col-xs-12">
<h1>Edit Database Bahan</h1>
<hr />
<?php foreach($bahan as $k) {?>
<form action="<?php echo base_url().'welcome/edit_bahan/'.$k->id_bahan;?>" method="post">
	<table class="table table-borderless">
		<tr>
			<td>Bahan</td>
			<td>
				<input type="hidden" name="id_bahan" value="<?php echo $k->id_bahan?>">
				<input type="text" name="nama_bahan" value="<?php echo $k->nama_bahan?>">
			</td>
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
