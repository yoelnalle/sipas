<div class="row">
	<div class="col-xs-12">
		<div class="box box-default">
			<div class="box-body">
				<a class="btn btn-primary" href="<?php echo base_url('index.php/administrator/tambah/add_srt')?>">
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
				<th>Nomor Agenda</th>
				<th width="12%">Tanggal & jam Terima</th>
				<th>Asal surat</th>
				<th>Nomor Surat</th>
				<th>Perihal</th>
				<?php if ($this->session->userdata("level") === 'kabag'): ?>
				<th>Kpd Yth</th>
				<th>Disposisi Kabalai</th>
				<th>Catatan Kabalai</th>
				<?php endif;?>
				<th>File</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<TBODY>
			<?php $no=0; foreach ($surat as $key ) { $no++; ?>
			<TR>
				<td><?php echo $no ?></td>
				<td><?= $key->Nmr_Agenda ?></td>
				<td>
					<small> <?php $date=date_create($key->tgl);echo date_format($date,'d F Y'); ?></small>
					<?= $key->pukul?>
				</td>
				<td><?= $key->asal_srt?></td>
				<td><?= $key->nmr_srt ?></td>
				<td><?= $key->perihal ?></td>
				<?php if ($this->session->userdata("level") === 'kabag'): ?>
                <td><?= $key->nama ?></td>
                <?=
                $disarr			= $key->id_disposisi 
                $newvalues		=implode(", ", $disarr);
                ?>
                <td><?= $newvalues ?></td>
				<td><?= $key->catatan ?></td>	
				<?php endif;?>
				<td>
					<small>
						<span class="mailbox-attachment-icon-sm pl-4 "></span>
						<div class="mailbox-attachment-info">
							<p class="mailbox-attachment-name"><i class="fa fa-file-pdf-o"></i> <?= $key->foto?></p>
						</div>
						<span class="mailbox-attachment-size">
							<?= $key->ukuran?> KB
							<a href="<?php echo base_url('assets/uploads/'.$key->foto)?>"
								class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
						</span>
					</small>
				</td>
				<td>
					<a href="<?php echo base_url('index.php/administrator/edit/'.$key->id_srt)?>"
						class="btn btn-success" data-toggle="tooltip" data-original-title="edit">
						<span class="glyphicon glyphicon-edit"> </span>
					</a>
					<a onclick='return confirm("Yakin ingin menghapus data ini?")'
						href="<?php echo base_url('index.php/administrator/hapus_srt/'.$key->id_srt)?>"
						class="btn btn-danger" data-toggle="tooltip" data-original-title="hapus">
						<span class="glyphicon glyphicon-trash"> </span>
					</a>
				</td>
			</TR>
			<?php }?>
		</TBODY>
	</table>
</div>
