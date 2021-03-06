<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BPTD | Print Disposisi</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet"
		href="<?php echo base_url('assets/bower_components') ?>/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet"
		href="<?php echo base_url('assets/bower_components') ?>/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/dist') ?>/css/AdminLTE.min.css">

	<link rel="stylesheet" href="<?php echo base_url('assets/plugins') ?>/iCheck/all.css">

	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/select2/dist/css/select2.min.css">

	<link rel="stylesheet" href="<?php echo base_url('assets/dist') ?>/css/skins/_all-skins.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!-- [if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif] -->
	<!-- Google Font -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
	<div class="wrapper">
		<!-- Main content -->
		<section class="invoice">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="page-header text-center">
						<img class="pull-left img-circle" width="100" height="100"
							src="<?php echo base_url('assets/dist') ?>/img/logo.png">
						<b>KEMENTERIAN PERHUBUNGAN<br>
							DIREKTORAT JENDERAL PERHUBUNGAN DARAT<br>
							BALAI PENGELOLA TRANSPORTASI DARAT<br>
							WILAYAH XIII - PROVINSI NTT<br></b>
						<u>LEMBAR DISPOSISI</u>
					</h2>
				</div>
			</div>
			<!-- title row -->
			<div class="row" >
				<div class="col-xs-12">
					<h4 class="text-center">Yth. Kepala Subbagian Tata Usaha </h4>
					<div class="table">
						<table class="table table-bordered">
							<tr>
								<th>Nomor Agenda</th>
								<td><?= $surat->Nmr_Agenda ?></td>
							</tr>
							<tr>
								<th>Diterima Tanggal </th>
								<td><?php $date=date_create($surat->tgl);echo date_format($date,'d F Y'); ?></td>
							</tr>
							<tr>
								<th>Pukul</th>
								<td><?= $surat->pukul ?></td>
							</tr>
							<tr>
								<th>Dari</th>
								<td><?= $surat->asal_srt ?></td>
							</tr>
							<tr>
								<th>Nomor Surat</th>
								<td><?= $surat->nmr_srt ?></td>
							</tr>
							<tr>
								<th>Tanggal</th>
								<td></td>
							</tr>
							<tr>
								<th>Perihal</th>
								<td><?= $surat->perihal ?></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="box box-solid">
						<div class="box-header with-border text-center">
							<h4 class="box-title">Diteruskan Kepada Yth.</h4>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="col-xs-7">
								<div class="form-check form-check-inline">
									<input class="minimal" type="checkbox" id="a" value="Bendahara Pengeluaran">
                                    <label class="minimal" for="a"> Bendahara Pengeluaran</label>
                                </div>
                                <h5>1. Simeon Rhiti, A.Md LLASPD</h5>
								<div class="form-check form-check-inline">
									<input class="minimal" type="checkbox" id="b" value="Pengelola Kepegawaian/Arsip">
									<label class="minimal" for="b"> Pengelola Kepegawaian/Arsip</label>
                                </div>
                                <h5>1. Marcel Tjeunfin</h5>
                                <h5>2. Heppy Wardani</h5>
    						</div>
							<div class="col-xs-5">
                                <div class="form-check form-check-inline">
									<input class="minimal" type="checkbox" id="c" value="PENGAWAS KINERJA OPERASIONAL KEPELABUHAN">
									<label class="minimal" for="c">Pengelola Keuangan/Anggaran</label>
                                    <h5>1. Robert N.I. Tail, S.SIT</h5>
                                    <h5>2. Yaan Sem Appah, S.ST</h5>
                                    <h5>3. Santo Igno Gelu, S.SIT</h5>
                                    <h5>4. M. Riduan,A.Md LLASPD</h5>
                                </div>
								<div class="form-check form-check-inline">
									<input class="minimal" type="checkbox" id="d" value="PPNS">
									<label class="minimal" for="d"> Staf Lainnya</label>
                                </div>                            
							</div>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<div class="col-sm-12">
					<div class="box box-solid">
						<div class="box-header with-border text-center">
							<h3 class="box-title">Isi Disposisi</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<?php foreach($disposisi as $key): ?>
							<div class="col-xs-6">
								<?php
									if($key->disposisi === $surat->dis1):
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
									<input <?= $select ?> class="minimal" name="<?= $key->kode ?>" type="checkbox"
										id="<?= $key->id_disposisi ?>" value="<?= $key->disposisi ?>">
									<label class="minimal" for="<?= $key->id_disposisi ?>"><?= $key->disposisi ?></label>
								</div>
							</div>
							<?php endforeach ?>
							<label>catatan : </label>
							<textarea class="form-control" cols="1" rows="2" ><?= $surat->catatan?></textarea>
							</div>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
	<!-- ./wrapper -->
</body>
</html>