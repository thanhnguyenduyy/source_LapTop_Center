	<footer id="footer" class="section section-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<div class="footer-logo">
							<a class="logo" href="#">
								<img src="../img/log.jpg" alt="">
							</a>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Tài khoản</h3>
						<ul class="list-links">
							<li><a href="#">Tài khoản</a></li>
							<li><a href="#">Yêu thích</a></li>
							<li><a href="#">So sánh</a></li>
							<li><a href="#">Thanh toán</a></li>
							<li><a href="#">Đăng nhập</a></li>
						</ul>
					</div>
				</div>

				<div class="clearfix visible-sm visible-xs"></div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Dịch vụ</h3>
						<ul class="list-links">
							<li><a href="gioi-thieu">Giới thiệu</a></li>
							<li><a href="lien-he">Liên hệ</a></li>
							<li><a href="giao-nhan">Giao & Nhận</a></li>
							<li><a href="faq">FAQ</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Nhận thông báo</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						<form action="{{ route('send_mail') }}" method="post" class="resign_form">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="form-group">
								<input type="text" name="emails" placeholder="Email nhận thông báo gửi mail" class="form-control">
							</div>
							<button type="submit" class="primary-btn">Nhận thông báo</button>
						</form>
					</div>
				</div>

			</div>
			<hr>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="footer-copyright">
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					</div>
				</div>
			</div>
		</div>
	</footer>