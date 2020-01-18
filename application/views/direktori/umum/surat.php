<div class="table-responsive">
	<table id="table" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>Nomor Agenda</th>
				<th width="12%">Tanggal & jam Terima</th>
				<th>Asal surat</th>
				<th>Nomor Surat</th>
				<th>Perihal</th>
				<th>Kpd Yth</th>
				<th>Disposisi Kabalai</th>
				<th>Catatan Kabalai</th>
				<th>Disposisi Kasie</th>
				<th>Catatan Kasie</th>
				<th>File</th>
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
				<td><?= $key->nama ?></td>
				<td>
					<h6 class="text-light-blue"> <?= $key->d1?></h6>
					<h6 class="text-light-blue"> <?= $key->d2?></h6>
					<h6 class="text-light-blue"> <?= $key->d3?></h6>
					<h6 class="text-light-blue"> <?= $key->d4?></h6>
					<h6 class="text-light-blue"> <?= $key->d5?></h6>
					<h6 class="text-light-blue"> <?= $key->d6?></h6>
					<h6 class="text-light-blue"> <?= $key->d7?></h6>
					<h6 class="text-light-blue"> <?= $key->d8?></h6>
					<h6 class="text-light-blue"> <?= $key->d9?></h6>
					<h6 class="text-light-blue"> <?= $key->d10?></h6>
					<h6 class="text-light-blue"> <?= $key->d11?></h6>
					<h6 class="text-light-blue"> <?= $key->d12?></h6>
				</td>
				<td><?= $key->catatan ?></td>
				<td>
					<h6 class="text-green"> <?= $key->dis1?></h6>
					<h6 class="text-green"> <?= $key->dis2?></h6>
					<h6 class="text-green"> <?= $key->dis3?></h6>
					<h6 class="text-green"> <?= $key->dis4?></h6>
					<h6 class="text-green"> <?= $key->dis5?></h6>
					<h6 class="text-green"> <?= $key->dis6?></h6>
					<h6 class="text-green"> <?= $key->dis7?></h6>
					<h6 class="text-green"> <?= $key->dis8?></h6>
					<h6 class="text-green"> <?= $key->dis9?></h6>
					<h6 class="text-green"> <?= $key->dis10?></h6>
					<h6 class="text-green"> <?= $key->dis11?></h6>
					<h6 class="text-green"> <?= $key->dis12?></h6>
				</td>
				<td><?= $key->catatan1 ?></td>
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
			</TR>
			<?php }?>
		</TBODY>
	</table>
</div>
