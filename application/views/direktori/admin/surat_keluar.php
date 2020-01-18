<div class="row">
	<div class="col-xs-12">
		<?php if ($this->session->flashdata('pesan') !== null): ?>
			<div class="alert alert-info alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<?= $this->session->flashdata('pesan') ?>
			</div> 
		<?php endif; ?>
		<div class="box box-default">
			<div class="box-body">
				<a class="btn btn-primary" href="<?php echo base_url('index.php/admin_C/add/add_srt_klr')?>">
				Tambah Data
				</a>	
			</div>
		</div>
	</div>
</div>
<div class="table-responsive">	
<table id="table" class="table table-bordered table-striped text-center">
	<thead>
		<tr>
			<th>No</th>
			<th width="12%">Tanggal</th>
			<th>Nomor Surat</th>
      		<th>Alamat Penerima</th>
     		<th>Perihal</th>
     		<th>Keterangan</th>
     		<th>File</th>
     		<th>Aksi</th>
		</tr>
	</thead>
	<TBODY>
		<?php $no=0; foreach ($surat as $key ) { $no++; ?>
		<TR>
			<td><?php echo $no ?></td>
			<td>
				<small><?php $date=date_create($key->tanggal);echo date_format($date,'d F Y'); ?></small>
			</td>
			<td><?= $key->no_surat?></td>
			<td><?= $key->alamat ?></td>
     		<td><?= $key->perihal ?></td>
     		<td><?= $key->keterangan ?></td>
     		
	      	<td>
	      	<small>
              <span class="mailbox-attachment-icon-sm pl-4 "></span>
              <div class="mailbox-attachment-info">
              	<p class="mailbox-attachment-name"><i class="fa fa-file-pdf-o"></i> <?= $key->file?></p>
              </div>
             <span class="mailbox-attachment-size">
             <?= $key->size?> KB
              <a href="<?php echo base_url('assets/ekspor/'.$key->file)?>" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
             </span>
           </small>
			</td>
			<td>
				<a href="<?php echo base_url('index.php/admin_C/edit_surat/'.$key->id_surat)?>" class="btn btn-success" data-toggle="tooltip" data-original-title="edit">
					<span class="glyphicon glyphicon-edit"> </span>
				</a>
				<a onclick='return confirm("Yakin ingin menghapus data ini?")' href="<?php echo base_url('index.php/admin_C/hapus_surat/'.$key->id_surat)?>" class="btn btn-danger"  data-toggle="tooltip" data-original-title="hapus">
					<span class="glyphicon glyphicon-trash"> </span>
				</a>
			</td>
		</TR>
		<?php }?>
	</TBODY>
</table>
</div>
