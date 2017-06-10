<div class="container maxs">
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<h2>Input Harga</h2>
			<hr />
		</div>
		<div class="col-md-12 col-xs-12">
			<?php echo form_open_multipart('welcome/tambah_harga');?>
				<div class="form-group">
					<label for="id_resep">Nama Bahan:</label>
					<?php $js='class="form_control"'; echo form_dropdown('id_bahan',$list_bahan,"",$js);?>
        </div>
        <div class="form-group">
					<label for="per">Per:</label>
					<input type="text" class="form-control" name="per">
				</div>
				<div class="form-group">
					<label for="per">Harga Per Satuan:</label>
					<input type="text" class="form-control" name="harga_per_satuan">
				</div>

				<div class="form-group">
					<label for="id_resep">Satuan:</label>
					<?php $js='class="form_control"'; echo form_dropdown('id_satuan',$satuan,"",$js);?>
				</div>
				<button type="submit" class="btn btn-default">Simpan</button>

			<?php echo form_close();?>
		</div>
	</div>
</div>
