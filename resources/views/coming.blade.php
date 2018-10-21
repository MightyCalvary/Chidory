<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chidory.co - Photograph Malang</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="theme/images/icons/chi.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="theme/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="theme/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="theme/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="theme/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="theme/css/util.css">
	<link rel="stylesheet" type="text/css" href="theme/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="size1 bg0 where1-parent">
		<!-- Coutdown -->
		<div class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2" style="background-image: url('theme/images/bg01.jpg');">
			<div class="wsize2 flex-w flex-c-m cd100 js-tilt">
				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 days"></span>
					<span class="s2-txt4">Hari</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 hours"></span>
					<span class="s2-txt4">Jam</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 minutes"></span>
					<span class="s2-txt4">Menit</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 seconds"></span>
					<span class="s2-txt4">Detik</span>
				</div>
			</div>
		</div>
		
		<!-- Form -->
		<div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
			<div class="wrap-pic1">
				<img src="theme/images/icons/chi_logo.png" alt="LOGO">
			</div>

			<div class="p-t-50 p-b-60">
				<p class="m1-txt1 p-b-36">
					Chidory.co <span class="m1-txt2">Segera Hadir</span>, follow kami untuk informasi lebih lanjut!
				</p>

				<form class="contact100-form validate-form" action="/" method="post">
					<div class="wrap-input100 m-b-20 validate-input" data-validate = "Email is required: ex@abc.xyz">
						<input class="s2-txt1 placeholder0 input100" type="text" name="email" placeholder="Email ">
						<span class="focus-input100"></span>
					</div>

					<div class="w-full">
						<button class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-04">
							Subscribe
						</button>
					</div>
				</form>

				<p class="s2-txt3 p-t-18">
					Jangan khawatir, kami juga tidak suka spam.
				</p>
			</div>

			<div class="flex-w">
				<a href="https://www.instagram.com/chidoryhome/" class="flex-c-m size5 bg6 how1 trans-04 m-r-5">
					<i class="fa fa-instagram"></i>
				</a>

				<a href="https://www.youtube.com/channel/UClo_wcUys2fFDVhmuXWkCyw" class="flex-c-m size5 bg5 how1 trans-04 m-r-5">
					<i class="fa fa-youtube-play"></i>
				</a>
			</div>
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="theme/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="theme/vendor/bootstrap/js/popper.js"></script>
	<script src="theme/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="theme/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="theme/vendor/countdowntime/moment.min.js"></script>
	<script src="theme/vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="theme/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="theme/vendor/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: {{$live->format('Y')}},
			endtimeMonth: {{$live->format('m')}},
			endtimeDate: {{$live->format('d')}},
			endtimeHours: {{$live->format('H')}},
			endtimeMinutes: {{$live->format('i')}},
			endtimeSeconds: {{$live->format('s')}},
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="theme/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="theme/js/main.js"></script>

</body>
</html>