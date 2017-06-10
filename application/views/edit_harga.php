<div class="container maxs">
<div class="row">
<div class="col-md-12 col-xs-12">
<h1>Edit Harga</h1>
<hr />
<?php foreach($harga as $k) {?>
<form action="<?php echo base_url().'welcome/edit_harga/'.$k->id_harga;?>" method="post">
	<table class="table table-borderless">
		<tr>
			<td>Resep</td>
			<td>
				<input type="hidden" name="id_harga" value="<?php echo $k->id_harga?>">
			<?php $js='id="id_bahan" name="id_bahan"'; echo form_dropdown('id_bahan', $list_bahan, $k->id_bahan, $js);?>
			</td>
		</tr>
    <tr>
			<td>Harga Per Satuan</td>
			<td><input type="text" name="harga_per_satuan" value="<?php echo $k->harga_per_satuan?>"></td>
		</tr>
		<tr>
			<td>Satuan</td>
			<td><?php $js='id="id_satuan" name="id_satuan"'; echo form_dropdown('id_satuan', $satuan, $k->id_satuan, $js);?></td>
		</tr>
		<tr>
			<td>Per</td>
			<td><input type="text" name="per" value="<?php echo $k->per?>"></td>
		</tr>
		<tr>		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
<?php } ?>
</div>
</div>
</div>
