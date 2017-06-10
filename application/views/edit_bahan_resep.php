<div class="container maxs">
<div class="row">
<div class="col-md-12 col-xs-12">
<h1>Edit Resep</h1>
<hr />
<?php foreach($bahan as $k) {?>
<form action="<?php echo base_url().'welcome/edit_bahan_resep/'.$k->id_bahan_utama.'/'.$this->uri->segment(4);?>" method="post">
	<table class="table table-borderless">
		<tr>
			<td>Resep</td>
			<td>
				<input type="hidden" name="id_bahan_utama" value="<?php echo $k->id_bahan_utama?>">
				<?php $js='id="id_bahan" name="id_bahan"'; echo form_dropdown('id_bahan', $list_bahan, $k->id_bahan, $js);?>
			</td>
		</tr>
    <tr>
			<td>Banyaknya</td>
			<td><input type="text" name="banyaknya" value="<?php echo $k->banyaknya?>"></td>
		</tr>
		<tr>
			<td>Satuan</td>
			<td><?php $js='id="id_satuan" name="id_satuan"'; echo form_dropdown('id_satuan', $satuan, $k->id_satuan, $js);?></td>
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
