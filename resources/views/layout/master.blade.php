<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LapTop-CenTre | @yield('title')</title>
	<base href="{{ asset('') }}">
	<link rel="shortcut icon" href="/img/thanh.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="../css/slick.css" />
	<link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />
	<link type="text/css" rel="stylesheet" href="../css/nouislider.min.css" />
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="../css/style.css" />

	<link type="text/css" rel="stylesheet" href="../css/news/new.css" />
</head>

<body>
	@include('layout.header')

	@yield('content')

	@include('layout.footer')
	@if (session('success') || session('error'))
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-show="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title" id="myModalLabel"><span style="color: #F8694A; border-color: #F8694A; border-bottom: 5px solid; font-size: 24px;">Thông báo</span></h4>
		            </div>
		            <div class="modal-body">
		            	<span style="font-size: 18px;">{{ session('success') }}{{ session('error') }}</span>
		                
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="primary-btn" data-dismiss="modal">Đóng</button>
		            </div>
		        </div>
		    </div>
		</div>
	@endif
	<!-- jQuery Plugins -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/slick.min.js"></script>
	<script src="../js/nouislider.min.js"></script>
	<script src="../js/jquery.zoom.min.js"></script>
	<script src="../js/main.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#myModal').modal('show');

			$('.dang-nhap').click(function () {
				currentUrl = window.location.pathname;

				window.location.href = 'dang-nhap?current_url=' + currentUrl;
			});

			$('.dang-xuat').click(function () {
				currentUrl = window.location.pathname;

				window.location.href = 'dang-xuat?current_url=' + currentUrl;
			});
		})
	</script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.1/socket.io.js"></script>
	<script>   
    	var socket = io('http://localhost:9090')
    </script>
	@yield('script')

</body>

</html>
