<form action="<?php echo site_url('/admin_C/update/'.$surat->id_surat)?>"  enctype="multipart/form-data" method="post">
<input type="hidden" name="id_surat" value="<?= $surat->id_surat ?>" required>
	
	<div class="form-group">
		<label> Tanggal</label>
		<input type="datepicker" name="tanggal"  class="form-control" placeholder="Tanggal" 
		required value="<?php $date=date_create($surat->tanggal);echo date_format($date,'d-m-Y'); ?>" id="datepicker">
	</div>
	<div class="form-group">
		<label> Nomor Surat</label>
		<input type="no_surat" name="no_surat" class="form-control" placeholder="Nomor Surat" required
			value="<?= $surat->no_surat ?>">
	</div>
	<div class="form-group">
		<label> Alamat</label>
		<input type="text" name="alamat" class="form-control" placeholder="Alamat" required
			value="<?= $surat->alamat ?>">
	</div>
	<div class="form-group">
		<label> Perihal</label>
		<input type="text" name="perihal" class="form-control" placeholder="Perihal" required
			value="<?= $surat->perihal ?>">
	</div>
	<div class="form-group">
		<label> Keterangan</label>
		<input type="text" name="keterangan" class="form-control" placeholder="keterangan" required
			value="<?= $surat->keterangan ?>">
	</div>
	<div class="row mb-2">
		<div class="col-md-3">
			<h3><p class="text-muted">File sebelumnya</p></h3>
			<input type="hidden" name="file_now" value="<?= $surat->file ?>">
			<span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
              <div class="mailbox-attachment-info">
               <a href="" class="mailbox-attachment-name"><?= $surat->file ?></a>
              </div>
		</div>
		<div class="col-md-8">
			<div class="alert alert-success">
				<strong>Perhatian!</strong> Jika file tidak ingin di ubah, jangan isi bagian ini
			</div>
			<div class="form-group">
				<label><i class="fa fa-file-pdf-o"></i> Upload File: </label>
				<input type="file" name="file" class="form-control">
			</div>
		</div>
	</div>
	<hr>
	<div class="form-group">
		<input type="submit" name="update" class="btn btn-primary" value="Update">
		<a href="<?php echo base_url('index.php/admin_C/srt_keluar/')?>" class="btn btn-danger">Cancel</a>
	</div>
</form>
