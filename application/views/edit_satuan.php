<div class="container maxs">
<div class="row">
<div class="col-md-12 col-xs-12">
<h1>Edit Database Satuan</h1>
<hr />
<?php foreach($satuan as $k) {?>
<form action="<?php echo base_url().'welcome/edit_satuan/'.$k->id_satuan;?>" method="post">
	<table class="table table-borderless">
		<tr>
			<td>Satuan</td>
			<td>
				<input type="hidden" name="id_satuan" value="<?php echo $k->id_satuan?>">
				<input type="text" name="satuan" value="<?php echo $k->satuan?>">
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
