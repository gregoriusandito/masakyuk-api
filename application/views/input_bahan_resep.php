<div class="container maxs">
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<h2>Input Bahan Resep</h2>
			<hr />
		</div>
		<div class="col-md-12 col-xs-12">
			<?php echo form_open_multipart('welcome/tambah_bahan_resep/'.$this->uri->segment(3));?>
				<div class="form-group">
					<label for="nama_bahan">Nama Bahan:</label>
					<?php $js='class="form-control"'; echo form_dropdown('id_bahan', $list_bahan, "", $js);?>
				</div>
        <div class="form-group">
					<label for="banyaknya">Banyaknya:</label>
					<input type="text" class="form-control" name="banyaknya">
				</div>
				<div class="form-group">
					<label for="id_resep">Satuan:</label>
					<?php $js='class="form-control"'; echo form_dropdown('id_satuan', $satuan, "", $js);?>
        </div>

				<div class="form-group">
					<label for="id_resep">Nama Bahan:</label>
	          <?php $js='class="form-control"'; echo form_dropdown('id_bahan_2', $list_bahan, "", $js);?>
        </div>
        <div class="form-group">
					<label for="banyaknya">Banyaknya:</label>
					<input type="text" class="form-control" name="banyaknya_2">
				</div>
				<div class="form-group">
					<label for="id_satuan">Satuan:</label>
					<?php $js='class="form-control"'; echo form_dropdown('id_satuan_2', $satuan, "", $js);?>
        </div>

				<div class="form-group">
					<label for="id_resep">Nama Bahan:</label>
					<?php $js='class="form-control"'; echo form_dropdown('id_bahan_3', $list_bahan, "", $js);?>
        </div>
        <div class="form-group">
					<label for="banyaknya">Banyaknya:</label>
					<input type="text" class="form-control" name="banyaknya_3">
				</div>
				<div class="form-group">
					<label for="id_satuan">Satuan:</label>
					<?php $js='class="form-control"'; echo form_dropdown('id_satuan_3', $satuan, "", $js);?>
        </div>

				<button type="submit" class="btn btn-default">Simpan</button>

			<?php echo form_close();?>
		</div>
	</div>
</div>
