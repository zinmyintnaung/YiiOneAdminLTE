<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Dashboard</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/bower_components/Ionicons/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/dist/css/AdminLTE.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/iCheck/square/blue.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/dist/css/skins/_all-skins.min.css">
	
	<!-- Morris chart -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/bower_components/morris.js/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/bower_components/jvectormap/jquery-jvectormap.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"> -->
	
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>



<?php if (isset(Yii::app()->user->id)){ ?>
	<body class="hold-transition skin-blue sidebar-mini">	
		<div class="wrapper">
			<?php require_once('header.php'); ?>
			<?php require_once('sidebar.php'); ?>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<?php echo $content;?>
			</div>
			<!-- /.content-wrapper -->
			<?php require_once('footer.php'); ?>
			<?php require_once('panel.php'); ?>
		</div>
		
<?php }else{ ?>
	<body class="hold-transition login-page">
		<div class="login-box">
		<div class="login-logo">
			<a href="#"><b>Admin</b>LTE</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<?php echo $content;?>
		</div><!-- /.login-box-body -->
		</div><!-- /.login-box -->
		 
<?php } ?>
<!-- ./wrapper -->
	<!-- jQuery 3 -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- iCheck -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/plugins/iCheck/icheck.min.js"></script>
	<!-- Morris.js charts -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/raphael/raphael.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/morris.js/morris.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<!-- jvectormap -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/moment/min/moment.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- datepicker -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<!-- Slimscroll -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/dist/js/pages/dashboard.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/dist/js/demo.js"></script>
	
	<!-- DataTables -->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
	
	<script>
	  $(function () {
		$('input').iCheck({
		  checkboxClass: 'icheckbox_square-blue',
		  radioClass: 'iradio_square-blue',
		  increaseArea: '20%' // optional
		});
	  });
	</script>
	
	 

</body>
</html>
