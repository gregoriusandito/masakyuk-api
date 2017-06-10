<div class="container maxs">
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<h2>Input Satuan</h2>
			<hr />
		</div>
		<div class="col-md-12 col-xs-12">
			<?php echo form_open_multipart('welcome/tambah_satuan');?>
        <div class="form-group">
					<label for="satuan">Nama Satuan:</label>
					<input type="text" class="form-control" name="satuan">
				</div>
				<button type="submit" class="btn btn-default">Simpan</button>
			<?php echo form_close();?>
		</div>
	</div>
</div>
