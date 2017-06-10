<div class="container maxs">
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<h2>Input Cara Memasak</h2>
			<hr />
		</div>
		<div class="col-md-12 col-xs-12">
			<?php echo form_open_multipart('welcome/tambah_cara_memasak/'.$this->uri->segment(3));?>
        <div class="form-group">
					<label for="cara">Cara Memasak:</label>
					<input type="text" class="form-control" name="cara">
				</div>
        <div class="form-group">
					<label for="cara_2">Cara Memasak (2):</label>
					<input type="text" class="form-control" name="cara_2">
				</div>
        <div class="form-group">
					<label for="cara">Cara Memasak (3):</label>
					<input type="text" class="form-control" name="cara_3">
				</div>

				<button type="submit" class="btn btn-default">Simpan</button>

			<?php echo form_close();?>
		</div>
	</div>
</div>
