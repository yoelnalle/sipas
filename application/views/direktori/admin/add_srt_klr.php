<form action="<?php echo base_url()?>index.php/admin_C/finish" enctype="multipart/form-data" method="post">
	<div class="form-group">	
		<label> Tanggal</label>
		<input type="date" name="tanggal" class="form-control">
	</div>
	<div class="form-group">
		<label> Nomor Surat</label>
		<input type="text" name="no_surat" class="form-control" placeholder="Nomor Surat">
	</div>
	<div class="form-group">
		<label> Alamat</label>
		<input type="text" name="alamat" class="form-control" placeholder="Alamat">
    </div>
    <div class="form-group">
		<label> Perihal</label>
		<input type="text" name="perihal" class="form-control" placeholder="Perihal">
    </div>
    <div class="form-group">
		<label> Keterangan</label>
		<input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Upload File</label>
        <input type="file" name="file" id="exampleInputFile" class="form-control">
        <p class="help-block">Silahkan upload file pdf! ukuran maksimal 10 MB</p>
    </div>
	<div class="form-group">
		<input type="submit" name="save" class="btn btn-primary" value="Simpan">
		<a href="<?php echo base_url('index.php/admin_C/srt_keluar/')?>" class="btn btn-danger">Kembali</a>
	</div>
</form>
