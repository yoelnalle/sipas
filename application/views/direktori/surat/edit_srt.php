<form action="<?php echo site_url('/administrator/update_srt/'.$surat->id_srt)?>"  enctype="multipart/form-data" method="post">
<input type="hidden" name="id_srt" value="<?= $surat->id_srt ?>" required>
	<div class="form-group">
		<label>Nomor Agenda:</label>
		<input type="text" name="Nmr_Agenda" class="form-control" placeholder="Nomor Agenda" required value="<?=  $surat->Nmr_Agenda ?>">
	</div>
	<div class="col-md-14">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label> Tanggal:</label>
					<input type="date" name="tgl"  class="form-control" placeholder="Tanggal Terima" 
					required value="<?= $surat->tgl ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Pukul:</label>
					<input type="time" name="pukul" class="form-control" placeholder="pukul" value="<?= $surat->pukul ?>" >
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Asal Surat:</label>
		<input type="text" name="asal_srt" class="form-control" placeholder="Asal Surat" required
			value="<?= $surat->asal_srt ?>">
	</div>
	
	<div class="form-group">
		<label>Nomor Surat:</label>
		<input type="text" name="nmr_srt" class="form-control" placeholder="Nomor Surat" required
		value="<?= $surat->nmr_srt ?>">
	</div>
	<div class="form-group">
		<label>Perihal: </label>
		<input type="text" name="perihal" class="form-control" placeholder="Perihal" required 
		value="<?= $surat->perihal ?>">
	</div>
	<?php if ($this->session->userdata("level") === 'kabag'): ?>
	<div class="form-group">
		<label>Diteruskan kepada:</label>
		<select name="kasubag" class="form-control">
			<option value="">-pilih-</option>
			<?php foreach ($kasubag as $key):?>
				<?php 
					if($key->id_ksb===$surat->id_ksb):
						$select='selected';
					else:
						$select='';
					endif;
				?>
			<option <?= $select ?> value="<?= $key->id_ksb ?>"><?= $key->nama_lengkap ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border text-center">
              <h3 class="box-title">Isi Disposisi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php foreach($disposisi as $key): ?>
            <div class="col-md-6">
			<?php
					if($key->disposisi=== $surat->d1):
						$select='checked';
					elseif($key->disposisi=== $surat->d2):
						$select='checked';
					elseif($key->disposisi=== $surat->d3):
						$select='checked';
					elseif($key->disposisi=== $surat->d4):
						$select='checked';
					elseif($key->disposisi=== $surat->d5):
						$select='checked';
					elseif($key->disposisi=== $surat->d6):
						$select='checked';
					elseif($key->disposisi=== $surat->d7):
						$select='checked';					
					elseif($key->disposisi=== $surat->d8):
						$select='checked';
					elseif($key->disposisi=== $surat->d9):
						$select='checked';
					elseif($key->disposisi=== $surat->d10):
						$select='checked';
					elseif($key->disposisi=== $surat->d11):
						$select='checked';
					elseif($key->disposisi=== $surat->d12):
						$select='checked';		
					else:
						$select='';
					endif;
				   ?>
               <div class="form-check form-check-inline">
				  <input <?= $select ?> class="minimal" name="<?= $key->kode ?>" type="checkbox" id="<?= $key->id_disposisi ?>" value="<?= $key->disposisi ?>">
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
		<label> Catatan</label>
		<textarea type="text" name="Catatan" class="form-control" placeholder="Catatan"><?= $surat->catatan ?></textarea>
    </div>  
	<?php endif;?>
		<div class="row mb-2">
			<div class="col-md-3">
				<h3><p class="text-muted">File sebelumnya</p></h3>
				<input type="hidden" name="foto_now" value="<?= $surat->foto ?>">
				<span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
	              <div class="mailbox-attachment-info">
	               <a href="" class="mailbox-attachment-name"><?= $surat->foto ?></a>
	              </div>
			</div>
			<div class="col-md-8">
				<div class="alert alert-success">
					<strong>Perhatian!</strong> Jika File Tidak Ingin Diubah, Jangan Isi Bagian ini
				</div>
				<div class="form-group">
					<label><i class="fa fa-file-pdf-o"></i> FILE: </label>
					<input type="file" name="foto" class="form-control">
				</div>
			</div>
		</div>
		<hr>
		<div class="form-group">
		<input type="submit" name="update" class="btn btn-success" value="update">
		<a href="<?php echo base_url('index.php/administrator')?>" class="btn btn-danger">Cancel</a>
		<a href="<?php echo base_url('index.php/administrator/print_srt/'.$surat->id_srt)?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print Disposisi</a>	
		</div>

</form>
