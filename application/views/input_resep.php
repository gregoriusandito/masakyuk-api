<div class="container maxs">
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<h2>Input Data Resep</h2>
			<hr />
		</div>
		<div class="col-md-12 col-xs-12">
			<?php echo form_open_multipart('welcome/tambah_resep');?>
				<div class="form-group">
					<label for="judul">Nama Resep:</label>
					<input type="text" class="form-control" name="judul">
				</div>
        <div class="form-group">
        <label for="id_cat">Kategori:</label>
        <?php echo form_dropdown('id_cat', $kategori);?>
        </div>
        <div class="form-group">
					<label for="link_youtube">Link YouTube:</label>
					<input type="text" class="form-control" name="link_youtube">
				</div>
				<div class="form-group">
					<label for="rekomendasi">Rekomendasi:</label>
					<select class='form-control' name='rekomendasi'>
						<option value='' disabled selected>--Pilih Kategori--</option>
						<option value='1'>Ya</option>
						<option value='0'>Belum Sekarang</option>
					</select>
				</div>
				<div class="form-group">
					<label for="gambar">Gambar:</label>
					<input type="file" name="gambar" />
				</div>
				<button type="submit" class="btn btn-default">Simpan</button>
			<?php echo form_close();?>
		</div>
	</div>
</div>
