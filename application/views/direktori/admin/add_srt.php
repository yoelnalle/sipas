<form action="<?php echo base_url()?>index.php/admin_C/simpan" enctype="multipart/form-data" method="post">
	<div class="form-group">
		<label> Nomor Agenda :</label>
		<input type="text" name="Nmr_Agenda" class="form-control" placeholder="Nomor agenda" required>
	</div>
	<div class="col-md-14">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label> Tanggal Terima :</label>
					<input type="date" name="tgl" class="form-control" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label> Jam Terima :</label>
					<input type="time" name="pukul" class="form-control" placeholder="jam">
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label> Asal Surat :</label>
		<input type="text" name="asal_srt" class="form-control" placeholder="Asal Surat" required>
	</div>
	<div class="form-group">
		<label> Nomor Surat :</label>
		<input type="text" name="nmr_srt" class="form-control" placeholder="Nomor Surat" required>
	</div>
	<div class="form-group">
		<label> Perihal :</label>
		<textarea type="text" name="perihal" class="form-control" placeholder="Perihal"></textarea>
	</div>
	<div class="form-group">
		<label>Diteruskan Kepada :</label>
		<select name="kasubag" class="form-control">
			<option value="">-pilih-</option>
			<?php foreach ($kasubag as $key){ 
	    echo '<option value="'.$key->id_ksb.'">'.$key->nama.'</option>';
	    }
	    ?>
		</select>
	</div>
	<?php if ($this->session->userdata("level") === 'kabag'): ?>
	<div class="col-md-12">
		<div class="box box-solid">
			<div class="box-header with-border text-center">
				<h3 class="box-title">Isi Disposisi</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<?php foreach($disposisi as $key): ?>
				<div class="col-md-6">
					<div class="form-check form-check-inline">
						<input class="minimal" name="<?= $key->kode ?>" type="checkbox" id="<?= $key->id_disposisi ?>"
							value="<?= $key->disposisi ?>">
						<label class="minimal" for="<?= $key->id_disposisi ?>"><?= $key->disposisi ?></label>
					</div>
				</div>
				<?php endforeach ?>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<div class="form-group">
		<label> Catatan :</label>
		<textarea type="text" name="Catatan" class="form-control" placeholder="Catatan"></textarea>
	</div>
	<?php endif;?>

	<div class="form-group">
		<label for="exampleInputFile">Upload file :</label>
		<input type="file" name="foto" id="exampleInputFile" class="form-control" required>
		<p class="help-block">Perhatian! Silahkan pilih file tipe PDF! Ukuran maksimal 10MB</p>
	</div>
	<div class="form-group">
		<input type="submit" name="save" class="btn btn-primary" value="Simpan">
		<a href="<?php echo base_url('index.php/admin_C/surat')?>" class="btn btn-danger">Kembali</a>
	</div>
</form>
