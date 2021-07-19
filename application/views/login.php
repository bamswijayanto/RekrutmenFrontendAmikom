<!-- 
Dev: Bambang Wijayanto @bamsdesain@gmail.com
Date: 19 Juli 2021
For: Recrutmen Fronted Dev Amikom
 -->
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Login</title>
	<link rel="icon" type="image/x-icon" href="https://img2.pngdownload.id/20180513/dgq/kisspng-university-of-amikom-yogyakarta-gadjah-mada-univer-5af860d5f260e2.0312113915262271579928.jpg">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min-1.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/lnr-icon-1.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min-1.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datetimepicker.min-1.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-1.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/select2/select2.min-1.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fullcalendar/fullcalendar.min-1.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style-1.css">
</head> 

<body style="background: #AF7AC5 ">
	<section style="display: flex; align-items: center;  ">	
		<!-- login -->
		<div class="login-wrapper">
			<div class="loginbox shadow-sm" style="width: 30%;">
				<div class="login-right">
					<div class="login-right-wrap">
						<img src="<?= base_url() ?>assets/img/Capture.jpg">
						<p class="account-subtitle" style="font-size: 13px">Gunakan NIM dan password yang dimiliki</p>

						<form action="home">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="NIM">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Password">
							</div>
							<div class="form-group">
								<button class="btn btn-theme button-1 text-white ctm-border-radius btn-block" type="submit">Login</button>
							</div>
						</form>

						<div class="login-or">
							<span class="or-line"></span>
							<span class="span-or">or</span>
						</div>

						<button class="btn btn-theme button-5 text-white ctm-border-radius btn-block mb-3" type="submit"><i class="fa fa-google"></i> Amikom Google Account</button>

						<div class="text-center forgotpass">Lupa Password? 
							<a href="forgot-password.html">Kontak Admin</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url() ?>assets/js/jquery-3.2.1.min-1.js"></script>
	<script src="<?= base_url() ?>assets/js/popper.min-1.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.min-1.js"></script>
	<script src="<?= base_url() ?>assets/plugins/theia-sticky-sidebar/ResizeSensor-1.js"></script>
	<script src="<?= base_url() ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar-1.js"></script>
	<script src="<?= base_url() ?>assets/plugins/select2/moment.min-1.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap-datetimepicker.min-1.js"></script>
	<script src="<?= base_url() ?>assets/plugins/select2/select2.min-1.js"></script>
	<script src="<?= base_url() ?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min-1.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery-ui.min-1.js"></script>
	<script src="<?= base_url() ?>assets/plugins/fullcalendar/fullcalendar.min-1.js"></script>
	<script src="<?= base_url() ?>assets/plugins/fullcalendar/jquery.fullcalendar-1.js"></script>

	<script src="<?= base_url() ?>assets/js/script-1.js"></script>
	<script>
		$(function () {
			$('.selectpicker').selectpicker();
		});
	</script>
</body>
</html>