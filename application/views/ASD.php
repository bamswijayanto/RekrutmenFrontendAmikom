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
<title>Halaman Task</title>
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
<body>

<header class="header">
<!-- navbar atas -->
<div class="top-header-section">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-sm-3 col-6">
<div class="logo my-3 my-sm-0">
<a href="index-1.html">
<img src="<?= base_url() ?>assets/img/Capture.JPG" alt="logo image" class="img-fluid" width="100">
</a>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-6 text-right">
<div class="user-block d-none d-lg-block">
<div class="row align-items-center">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="user-notification-block align-right d-inline-block">
	<div class="top-nav-search item-animated">
		<form>
			<input type="text" class="form-control" placeholder="Cari">
			<button class="btn" type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
</div>

<div class="user-info align-right dropdown d-inline-block header-dropdown">
	<a href="javascript:void(0)" data-toggle="dropdown" class=" menu-style dropdown-toggle">
		<div class="user-avatar d-inline-block">
			<img src="<?= base_url() ?>assets/img/Capture2.JPG" alt="user avatar" class="rounded-circle img-fluid" width="55">
		</div>
	</a>

	<div class="dropdown-menu notification-dropdown-menu shadow-lg border-0 p-3 m-0 dropdown-menu-right">
		<a class="dropdown-item p-2" href="profile">
			<span class="media align-items-center">
				<span class="lnr lnr-user mr-3"></span>
				<span class="media-body text-truncate">
					<span class="text-truncate">Profile</span>
				</span>
			</span>
		</a>
		<a class="dropdown-item p-2" href="profile-settings">
			<span class="media align-items-center">
				<span class="lnr lnr-cog mr-3"></span>
				<span class="media-body text-truncate">
					<span class="text-truncate">Settings</span>
				</span>
			</span>
		</a>
		<a class="dropdown-item p-2" href="login">
			<span class="media align-items-center">
				<span class="lnr lnr-power-switch mr-3"></span>
				<span class="media-body text-truncate">
					<span class="text-truncate">Logout</span>
				</span>
			</span>
		</a>
	</div>
</div>
</div>
</div>
</div>
<!-- navbar atas -->

<!-- navbar mobile -->
<div class="d-block d-lg-none">
<a href="javascript:void(0)">
<span class="lnr lnr-user d-block display-5 text-white" id="open_navSidebar"></span>
</a>

<div class="offcanvas-menu" id="offcanvas_menu">
<span class="lnr lnr-cross float-left display-6 position-absolute t-1 l-1 text-white" id="close_navSidebar"></span>
<div class="user-info align-center bg-theme text-center">
<a href="javascript:void(0)" class="d-block menu-style text-white">
	<div class="user-avatar d-inline-block mr-3">
		<img src="<?= base_url() ?>assets/img/Capture2.JPG" alt="user avatar" class="rounded-circle" width="50">
	</div>
</a>
</div>
<div class="user-notification-block align-center">
<div class="top-nav-search item-animated">
	<form>
		<input type="text" class="form-control" placeholder="Cari">
		<button class="btn" type="submit"><i class="fa fa-search"></i></button>
	</form>
</div>
</div>
<hr>
<div class="user-menu-items px-3 m-0">
<a class="px-0 pb-2 pt-0" href="index-1.html">
	<span class="media align-items-center">
		<span class="lnr lnr-home mr-3"></span>
		<span class="media-body text-truncate text-left">
			<span class="text-truncate text-left">Dashboard</span>
		</span>
	</span>
</a>
<a class="p-2" href="employees">
	<span class="media align-items-center">
		<span class="lnr lnr-users mr-3"></span>
		<span class="media-body text-truncate text-left">
			<span class="text-truncate text-left">Employees</span>
		</span>
	</span>
</a>
<a class="p-2" href="company">
	<span class="media align-items-center">
		<span class="lnr lnr-apartment mr-3"></span>
		<span class="media-body text-truncate text-left">
			<span class="text-truncate text-left">Company</span>
		</span>
	</span>
</a>
<a class="p-2" href="calendar">
	<span class="media align-items-center">
		<span class="lnr lnr-calendar-full mr-3"></span>
		<span class="media-body text-truncate text-left">
			<span class="text-truncate text-left">Calendar</span>
		</span>
	</span>
</a>
<a class="p-2" href="leave">
	<span class="media align-items-center">
		<span class="lnr lnr-briefcase mr-3"></span>
		<span class="media-body text-truncate text-left">
			<span class="text-truncate text-left">Leave</span>
		</span>
	</span>
</a>
<a class="p-2" href="reviews">
	<span class="media align-items-center">
		<span class="lnr lnr-star mr-3"></span>
		<span class="media-body text-truncate text-left">
			<span class="text-truncate text-left">Reviews</span>
		</span>
	</span>
</a>
<a class="p-2" href="reports">
	<span class="media align-items-center">
		<span class="lnr lnr-rocket mr-3"></span>
		<span class="media-body text-truncate text-left">
			<span class="text-truncate text-left">Reports</span>
		</span>
	</span>
</a>
<a class="p-2" href="manage">
	<span class="media align-items-center">
		<span class="lnr lnr-sync mr-3"></span>
		<span class="media-body text-truncate text-left">
			<span class="text-truncate text-left">Manage</span>
		</span>
	</span>
</a>
<a class="p-2" href="settings">
	<span class="media align-items-center">
		<span class="lnr lnr-cog mr-3"></span>
		<span class="media-body text-truncate text-left">
			<span class="text-truncate text-left">Settings</span>
		</span>
	</span>
</a>
<a class="p-2" href="profile">
	<span class="media align-items-center">
		<span class="lnr lnr-user mr-3"></span>
		<span class="media-body text-truncate text-left">
			<span class="text-truncate text-left">Profile</span>
		</span>
	</span>
</a>
<a class="p-2" href="login">
	<span class="media align-items-center">
		<span class="lnr lnr-power-switch mr-3"></span>
		<span class="media-body text-truncate text-left">
			<span class="text-truncate text-left">Logout</span>
		</span>
	</span>
</a>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

</header>
<!-- navbar mobile -->

<!-- sidebar kiri  -->
<div class="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
<aside class="sidebar sidebar-user">
<div class="row">
<div class="col-12">

<div class="user-card card shadow-sm bg-white text-center ctm-border-radius grow">
<div class="user-info card-body">
	<div class="user-avatar mb-4">
		<img src="<?= base_url() ?>assets/img/Capture2.JPG" alt="User Avatar" class="img-fluid rounded-circle" width="100">
	</div>
	<div class="user-details">
		<h4><b>Bambang Wijayanto</b></h4>
		<h5>20.22.2422</h5>
		<h6>S1 Sistem Informasi</h6>

		<br>
	</div>
</div>
</div>

<div class="sidebar-wrapper d-lg-block d-md-none d-none">
<div class="card ctm-border-radius shadow-sm border-none grow">
	<div class="card-body">
		<div class="row no-gutters">
			<div class="col-6 align-items-center text-center">
				<a href="home" class="text-dark   p-4 first-slider-btn ctm-border-right ctm-border-left ctm-border-top"><span class="lnr lnr-home pr-0 pb-lg-2 font-23"></span><span class="">Dashboard</span></a>
			</div>
			<div class="col-6 align-items-center shadow-none text-center">
				<a href="presensi" class="text-dark p-4 ctm-border-right ctm-border-left"><span class="lnr lnr-calendar-full pr-0 pb-lg-2 font-23"></span><span class="">Presensi</span></a>
			</div>
			<div class="col-6 align-items-center shadow-none text-center">
				<a href="jadwal" class="text-dark p-4 ctm-border-right ctm-border-left"><span class="lnr lnr-star pr-0 pb-lg-2 font-23"></span><span class="">Jadwal</span></a>
			</div>
			<div class="col-6 align-items-center shadow-none text-center">
				<a href="task" class="text-white active p-4 ctm-border-right"><span class="lnr lnr-briefcase pr-0 pb-lg-2 font-23"></span><span class="">Task</span></a>
			</div>
		</div>
	</div>
</div>

</aside>
</div>
<!-- sidebar kiri  -->

<div class="col-xl-9 col-lg-8 col-md-12">
<div class="quicklink-sidebar-menu ctm-border-radius shadow-sm grow bg-white card">
<div class="card-body">
	<p>Kuis Keaktifan | Algoritma Struktur Data| Romelah, S.Kom </p><p class="text-danger">Deadline: 19/07/2021 17:00 WIB</p>
</div>
</div>



<div class="row">
<div class="col-md-7 d-flex">
	<div class="card ctm-border-radius shadow-sm grow flex-fill">
		<div class="card-header">
			<h4 class="card-title mb-0">
				Soal  2

			</h4>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-8">
					<p><span class="">Pilih dibawah ini yang termasuk rukun iman: </span></p>

					<div class="form-check">
						<input class="form-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
						<label class="form-check-label" for="flexRadioDefault1">
							Iman kepada Allah SWT
						</label>
					</div>
					<div class="form-check">
						<input class="form-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked>
						<label class="form-check-label" for="flexRadioDefault2">
							Iman kepada Nabi & Rasul
						</label>
					</div>
					<div class="form-check">
						<input class="form-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked>
						<label class="form-check-label" for="flexRadioDefault2">
							Iman kepada Hari Kiamat
						</label>
					</div>
				</div>

			</div>
			<div class="text-center mt-3">
				<button class="btn btn-theme text-white ctm-border-radius button-1" data-toggle="modal" data-target="#add-information"><i class="mr-2 fa fa-arrow-right"></i>Next </button>
			</div>
		</div>
	</div>
</div>
<div class="col-md-5 d-flex">
	<div class="card ctm-border-radius shadow-sm grow flex-fill">
		<div class="card-header">
			<h4 class="card-title mb-0">
				Kuis Navigasi
			</h4>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12 text-center">

				</div>
			</div>

			<div class="row align-items-center" >
				<div class="col">
					<h5 class="btn  btn-outline-primary mt-3"><b>1</b></h5>
				</div>
				<div class="col">
					<h5 class="btn btn-theme text-white  mt-3"><b>2</b></h5>
				</div>
				<div class="col">
					<a href="manage3.html"><h5 class="btn btn-outline-primary mt-3"><b>3</b></h5></a>
				</div>    
				<div class="col">
					<h5 class="btn btn-outline-primary mt-3"><b>4</b></h5>
				</div><div class="col">
					<h5 class="btn btn-outline-primary mt-3"><b>5</b></h5>
				</div><div class="col">
					<h5 class="btn btn-outline-primary mt-3"><b>6</b></h5>
				</div><div class="col">
					<h5 class="btn btn-outline-primary mt-3"><b>7</b></h5>
				</div><div class="col">
					<h5 class="btn btn-outline-primary mt-3"><b>8</b></h5>
				</div><div class="col">
					<h5 class="btn btn-outline-primary mt-3"><b>9</b></h5>
				</div><div class="col">
					<h5 class="btn btn-outline-primary mt-3"><b>10</b></h5>
				</div>
			</div>
		</div>
	</div>
</div>


</div>
</div>
</div>
</div>
</div>

<div class="text-center p-3 mt-5" style="background-color: #40047c">
<a class="text-white" href="http://instagram.com/bamswijayanto">
© 2021 build with <i class="fa fa-heart"></i> by @bamswijayanto</a>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
<script src="plugins/select2/moment.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="plugins/select2/select2.min.js"></script>
<script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="plugins/fullcalendar/jquery.fullcalendar.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/chart.js"></script>
<script src="js/script.js"></script>
<script>
$(function () {
$('.selectpicker').selectpicker();
});
</script>
<script type="text/javascript">
$(function() {
var interval = setInterval(function() {
var momentNow = moment();
$('#date').html(momentNow.format('dddd').substring(0,3).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
$('#time').html(momentNow.format('hh:mm:ss A'));
}, 100);

$('#attendance').submit(function(e){
e.preventDefault();
var attendance = $(this).serialize();
$.ajax({
type: 'POST',
url: 'attendance.php',
data: attendance,
dataType: 'json',
success: function(response){
	if(response.error){
		$('.alert').hide();
		$('.alert-danger').show();
		$('.message').html(response.message);
	}
	else{
		$('.alert').hide();
		$('.alert-success').show();
		$('.message').html(response.message);
		$('#employee').val('');
	}
}
});
});

});
</script>
</body>
</html>