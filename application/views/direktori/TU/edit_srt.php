<form action="<?php echo site_url('/TU_C/update_srt/'.$surat->id_srt)?>"  enctype="multipart/form-data" method="post">
<input type="hidden" name="id_srt" value="<?= $surat->id_srt ?>">
<div class="col-md-14">
		<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label> Nomor Agenda:</label>
				<input type="text" name="Nmr_Agenda" class="form-control" placeholder="Nomor Agenda" disabled value="<?=  $surat->Nmr_Agenda ?>">
			</div>
			<div class="form-group">
				<label> Tanggal:</label>
				<input type="text" name="tgl"  class="form-control" placeholder="Tanggal Terima" 
				disabled value="<?php $date=date_create($surat->tgl);echo date_format($date,'d-m-Y'); ?>">
			</div>
			<div class="form-group">
				<label> Pukul:</label>
				<input type="time" name="pukul" class="form-control" disabled placeholder="pukul" 
				value="<?= $surat->pukul ?>" >
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label> Asal Surat:</label>
				<input type="text" name="asal_srt" class="form-control" placeholder="Asal Surat" disabled
					value="<?= $surat->asal_srt ?>">
			</div>
			<div class="form-group">
				<label> Nomor Surat:</label>
				<input type="text" name="nmr_srt" class="form-control" placeholder="Nomor Surat" disabled
				value="<?= $surat->nmr_srt ?>">
			</div>
			<div class="form-group">
				<label> Perihal: </label>
				<input type="text" name="perihal" class="form-control" placeholder="perihal" disabled 
				value="<?= $surat->perihal ?>">
			</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Diteruskan Kepada:</label>
		<select name="kasubag" class="form-control" disabled>
			<option value="">-pilih-</option>
			<?php foreach ($kasubag as $key):?>
			<?php 
	                    if($key->id_ksb===$surat->id_ksb):
	                        $select='selected';
	                    else:
	                        $select='';
	                    endif;
	                ?>
			<option <?= $select ?> value="<?= $key->id_ksb ?>"><?= $key->nama ?></option>
			<?php endforeach; ?>

		</select>
	</div>
	<div class="col-md-8">
          <div class="box box-solid">
            <div class="box-header with-border text-center">
              <h3 class="box-title">Isi Disposisi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php foreach($disposisi as $key): ?>
				<div class="col-md-6">
				<?php
					if($key->disposisi=== $surat->dis1):
						$select='checked';
					elseif($key->disposisi=== $surat->dis2):
						$select='checked';
					elseif($key->disposisi=== $surat->dis3):
						$select='checked';
					elseif($key->disposisi=== $surat->dis4):
						$select='checked';
					elseif($key->disposisi=== $surat->dis5):
						$select='checked';
					elseif($key->disposisi=== $surat->dis6):
						$select='checked';
					elseif($key->disposisi=== $surat->dis7):
						$select='checked';					
					elseif($key->disposisi=== $surat->dis8):
						$select='checked';
					elseif($key->disposisi=== $surat->dis9):
						$select='checked';
					elseif($key->disposisi=== $surat->dis10):
						$select='checked';
					elseif($key->disposisi=== $surat->dis11):
						$select='checked';
					elseif($key->disposisi=== $surat->dis12):
						$select='checked';		
					else:
						$select='';
					endif;
				   ?>
					<div class="form-check form-check-inline">
						<input <?= $select ?> class="minimal" name="<?= $key->kode ?>" type="checkbox" id="<?= $key->id_disposisi ?>"
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
		<div class="row mb-2">
			<div class="col-md-3">
				<h3><p class="text-muted">File sebelumnya:</p></h3>
				<input type="hidden" name="foto_now" value="<?= $surat->foto ?>">
				<span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
	              <div class="mailbox-attachment-info">
	               <a href="" class="mailbox-attachment-name"><?= $surat->foto ?></a>
	              </div>
			</div>
		</div>
		<div class="form-group">
			<label> Catatan Kabalai:</label>
			<textarea type="text" name="Catatan" disabled class="form-control" placeholder="Catatan"><?= $surat->catatan ?></textarea>
	    </div>
		<div class="form-group">
			<label> Catatan: </label>
			<textarea type="text" name="Catatan1" class="form-control" placeholder="Catatan"></textarea>
	    </div>
		<hr>
		<div class="form-group">
			<input type="submit" name="update" class="btn btn-success" value="update">
		<a href="<?php echo base_url('index.php/TU_C')?>" class="btn btn-danger">Cancel</a>	
		<a href="<?php echo base_url('index.php/TU_C/print_srt/'.$surat->id_srt)?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print Disposisi</a>
		
		</div>

</form>
