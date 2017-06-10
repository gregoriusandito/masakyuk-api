<div class="container maxs">
<div class="row">
<div class="col-md-12 col-xs-12">
<h1>Edit Cara Memasak</h1>
<hr />
<?php foreach($cara as $k) {?>
<form action="<?php echo base_url().'welcome/edit_cara_memasak/'.$k->id_cara_memasak.'/'.$this->uri->segment(4);?>" method="post">
	<table class="table table-borderless">
		<tr>
			<td>Cara Memasak</td>
			<td>
				<input type="hidden" name="id_cara_memasak" value="<?php echo $k->id_cara_memasak?>">
				<textarea rows="4" cols="50"name="cara"><?php echo $k->cara; ?></textarea>
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
