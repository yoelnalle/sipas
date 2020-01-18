<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BPTD | DIREKTORI SURAT</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/Ionicons/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet"
		href="<?php echo base_url('assets/bower_components') ?>/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/dist') ?>/css/AdminLTE.min.css">
	  <!-- bootstrap datepicker -->
	 <link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins') ?>/iCheck/all.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/select2/dist/css/select2.min.css">
	
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url('assets/dist') ?>/css/skins/_all-skins.min.css">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<style>
		.example-modal .modal {
			position: relative;
			top: auto;
			bottom: auto;
			right: auto;
			left: auto;
			display: block;
			z-index: 1;
		}

		.example-modal .modal {
			background: transparent !important;
		}
	</style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini">BPTD</span>
				<!-- logo for regular state and mobile devices -->

				<span class="logo-lg">
					<div class="pull-left image">
			          <img src="<?php echo base_url('assets/dist')?>/img/logo.png" class="img-circle"> <b>BPTD</b> NTT
			        </div>
			    </span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
			          	<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('namefull') ?> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
								<a href="<?php echo base_url('index.php/administrator/user/'.$this->session->userdata('userid'))?>"><i class="fa fa-gear"></i>Kelola Akun</a>
								</li>
								<li>
									<a onclick='return confirm("Anda Yakin Ingin Keluar?")' href="<?php echo base_url('index.php/auth/logout_action')?>"><i class="fa fa-power-off"></i>Logout</a>
								</li>
							</ul>
			            </li>
					</ul>
				</div>
			</nav>
		</header>

		<!-- =============================================== -->

		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->				
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header text-center">MAIN NAVIGATION</li>
					<li>
						<?php if ($this->session->userdata("level") === 'admin'): ?>
						<a href="<?php echo base_url('index.php/admin_C/surat')?>">
							<i class="fa fa-download"></i> <span>SURAT MASUK</span>
						</a>
						<?php elseif ($this->session->userdata("level") === 'kabag'):?>
						<a href="<?php echo base_url('index.php/administrator')?>">
							<i class="fa fa-download"></i> <span>SURAT MASUK</span>
						</a>
						<?php elseif ($this->session->userdata("level") === 'umum'):?>
						<a href="<?php echo base_url('index.php/all_C')?>">
							<i class="fa fa-download"></i> <span>SURAT MASUK</span>
						</a>
						<?php elseif ($this->session->userdata("level") === 'lalin'):?>
						<a href="<?php echo base_url('index.php/lalin_C')?>">
							<i class="fa fa-download"></i> <span>SURAT MASUK</span>
						</a>
						<?php elseif ($this->session->userdata("level") === 'sarpras'):?>
						<a href="<?php echo base_url('index.php/sarpras_C')?>">
							<i class="fa fa-download"></i> <span>SURAT MASUK</span>
						</a>
						<?php elseif ($this->session->userdata("level") === 'TJ'):?>
						<a href="<?php echo base_url('index.php/TJ_C')?>">
							<i class="fa fa-download"></i> <span>SURAT MASUK</span>
						</a>
						<?php elseif ($this->session->userdata("level") === 'TU'):?>
						<a href="<?php echo base_url('index.php/TU_C')?>">
							<i class="fa fa-download"></i> <span>SURAT MASUK</span>
						</a>
						<?php endif;?>
					</li>
					<li>
						<?php if ($this->session->userdata("level") === 'admin'): ?>
							<a href="<?php echo base_url('index.php/admin_C/srt_keluar/')?>">
						  	<i class="fa fa-upload"></i><span>SURAT KELUAR</span>
							</a>
						<?php elseif ($this->session->userdata("level") === 'kabag'):?>
						  <a href="<?php echo base_url('index.php/administrator/srt_keluar/')?>">
						  <i class="fa fa-upload"></i><span>SURAT KELUAR</span>
						  </a>
						<?php elseif ($this->session->userdata("level") === 'umum'):?>
						  <a href="<?php echo base_url('index.php/all_C/srt_keluar/')?>">
						  <i class="fa fa-upload"></i><span>SURAT KELUAR</span>
						  </a>
						<!-- <?php elseif ($this->session->userdata("level") === 'kabag'):?>
						  <a href="<?php echo base_url('index.php/administrator/srt_keluar/')?>">
						  <i class="fa fa-upload"></i><span>SURAT KELUAR</span>
						  </a>
						<?php elseif ($this->session->userdata("level") === 'umum'):?>
						  <a href="<?php echo base_url('index.php/all_C/srt_keluar/')?>">
						  <i class="fa fa-upload"></i><span>SURAT KELUAR</span></a>
						<?php elseif ($this->session->userdata("level") === 'kabag'):?>
						  <a href="<?php echo base_url('index.php/administrator/srt_keluar/')?>">
						  <i class="fa fa-upload"></i><span>SURAT KELUAR</span>
						  </a>
						<?php elseif ($this->session->userdata("level") === 'umum'):?>
						  <a href="<?php echo base_url('index.php/all_C/srt_keluar/')?>">
						  <i class="fa fa-upload"></i><span>SURAT KELUAR</span>
						  </a> -->
					  <?php endif;?>
			        
			      	</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- =============================================== -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Balai Pengelola Transportasi Darat (BPTD) Wilayah XIII-NTT 
				</h1>
				<ol class="breadcrumb">
				<li>
					<a href=""><i class="fa fa-dashboard"></i> Home</a></li>
				<li><?php echo $title_level1 ?></a></li>
				<?php if ($title_level2!='') {?>
				<li class="active"><?php echo $title_level2 ?></li>
				<?php } ?>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				
						<!-- Default box -->
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">DATA <?php echo $title ?></h3>
							</div>

							<div class="box-body">
								<?php $this->load->view($konten)?>
							</div>
							<!-- /.box-body -->

							<!-- /.box-footer-->
						</div>
						<!-- /.box -->
					
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Copyright &copy;</b> BPTD NTT
			</div>
			<strong>Balai Pengelola Transportasi Darat Wilayah XIII Provinsi NTT</strong>
		</footer>

		 <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
		<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="<?php echo base_url('assets/bower_components') ?>/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url('assets/bower_components') ?>/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- DataTables -->
	<script src="<?php echo base_url('assets/bower_components') ?>/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url('assets/bower_components') ?>/datatables.net-bs/js/dataTables.bootstrap.min.js">
	</script>
	<!-- SlimScroll -->
	<script src="<?php echo base_url('assets/bower_components') ?>/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url('assets/bower_components') ?>/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('assets/dist') ?>/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url('assets/dist') ?>/js/demo.js"></script>

	<script src="<?php echo base_url('assets/bower_components') ?>/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="<?php echo base_url('assets/bower_components') ?>/select2/dist/js/select2.full.min.js"></script>
	<script src="<?php echo base_url('assets/plugins') ?>/iCheck/icheck.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url('assets/bower_components') ?>/fastclick/lib/fastclick.js"></script>

</body>

</html>
<script>
	$(function () {
	
	$('#table').DataTable()
		 
	//Date picker
    $('#datepicker').datepicker({
    format: "dd-mm-yyyy",
      autoclose: true
    })

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
   })
</script>
 
