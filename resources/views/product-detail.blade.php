<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MƠ GỪNG CHUA NGỌT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="image/x-icon" rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/view/css/reset.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/view/css/animate.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/view/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/view/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/view/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/view/css/lobibox.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/view/css/star-rating-svg.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/view/css/product-detail.css">
</head>
<body>
	<div class="find-laptop-overlay">
		<div id="field-find" class="find-field-laptop">
			<div class="input-group">
				<input type="text" class="form-control" id="timkiem" placeholder="Tìm kiếm sản phẩm...">
				<!-- <span class="input-group-btn">
					<button class="btn btn-default" type="button">Tìm!</button>
				</span> -->
			</div>
		</div>
	</div>


	<header class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="{{url('/')}}/img/logo.png"></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="menu collapse navbar-collapse navbar-ex1-collapse">


						<ul class="nav navbar-nav nav-laptop">
							<li><a href="#">Trang chủ</a></li>
							<li>
								<a href="list-product.html">Sản phẩm</a>
								<div class="sub-menu">
									<ul>
										<li><a href="list-product.html">Ô Mai</a></li>
										<li><a href="list-product.html">Chè</a></li>
										<li><a href="list-product.html">Kẹo</a></li>
										<li><a href="list-product.html">Gói Quà Tặng</a></li>
									</ul>
								</div>
							</li>
							<li>
								<a href="vanhoa.html">Văn Hóa</a>
								<div class="sub-menu">
									<ul>
										<li><a href="vanhoa.html">Sự kiện TOM STORE</a></li>
										<li><a href="vanhoa.html">Cảm xúc TOM STORE</a></li>
										<li><a href="vanhoa.html">Nét Đẹp Văn Hóa</a></li>
									</ul>
								</div>
							</li>
							<li>
								<a href="#">Giới thiệu</a>
								<div class="sub-menu">
									<ul>
										<li><a href="">Văn Hóa Công Ty</a></li>
										<li><a href="">Nhận Diện Thương Hiệu</a></li>
										<li><a href="">Triết Lí Kinh Doanh</a></li>
										<li><a href="">Tầm Nhìn Sứ Mệnh</a></li>
										<li><a href="">Tuyển Dụng</a></li>
									</ul>
								</div>
							</li>
							<li>
								<a href="#">Hỗ Trợ</a>
								<div class="sub-menu">
									<ul>
										<li><a href="">Hướng Dẫn Đặt Hàng</a></li>
										<li><a href="">Chính Sách Và Quy Định</a></li>
										<li><a href="">Câu Hỏi Thường Gặp</a></li>
										<li><a href="">Hệ Thống Phân Phối</a></li>
										<li><a href="">Hòm Thư Góp Ý</a></li>
									</ul>
								</div>
							</li>
						</ul>



						<ul class="nav navbar-nav navbar-right nav-laptop-right">
							<li>
								<div class="menu2">
									<ul>
										<li id="menu-right-1"><a href="" data-toggle="modal" data-target=".bs-example-modal-lg">Tài khoản<span id="a1"></span></a></li>
										<li id="menu-right-2"><a href="" data-toggle="modal" data-target=".bs-lienhe-modal-lg">Liện hệ</a></li>
										<li id="menu-right-3"><a href="giohang.html">Giỏ hàng</a></li>
										<li id="menu-right-4" class="find-laptop"><a href="javascript:void(0)">Tìm Kiếm</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<section class="container-fluid diachi">
		<div class="col-xs-12 col-sm-12 col-md-11 col-md-offset-1 col-lg-11 col-lg-offset-1">
			<ol class="breadcrumb">
				<li><a href="#">Trang chủ</a></li>
				<li><a href="#">Sản phẩm</a></li>
				<li><a href="#">Ô Mai</a></li>
				<li class="active-breadcrumb">Mơ Tươi Cay</li>
			</ol>
		</div>
	</section>

	<section class="container-fluid noibat">
		<div class="row">
			<div class="col-xs-12- col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="image-product">
							<img src="{{url('/')}}/{{$product->feature_image}}" class="width-img-100">
						</div>
						<div class="promotion">
							<p>Chương trình TÚI ZIP TIẾT KIỆM THÁNG 8. Mua túi Zip 300gr giảm ngay 3.000đ so với hộp. </p>
							<p>Túi 500gr giảm ngay 5000đ so với hộp. 

							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pro-des">
						<div class="title-product">
							<h2>{{$product->name}}</h2>
							<p>{{$product->category->name}}</p>
						</div>
						<div class="description-product">
							<p>{{$product->description}}</p>
						</div>
						<div class="product-addcart">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 shopnow">
								<a href="#" title="Mua hàng" class="btn btn-lg background-red color-white text-uppercase pull-right" data-modulenameascii="mo" data-link="/gui-don-hang" id="add-to-cart-to-payment">Mua hàng</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 product-cart">
								<a href="javascript:void(0)" onclick="addCart()" title="Thêm vào giỏ hàng" class="btn btn-lg color-white text-uppercase pull-right" data-modulenameascii="mo" id="add-to-cart"><i class="glyphicon glyphicon-shopping-cart"></i>Thêm vào giỏ hàng</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="hidden-xs col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 comment">
				<div>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Người dùng đánh giá</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
						<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<h4 style="color: #8b0304; font-size: 24px;">Đánh giá của bạn</h4>
							<div style="margin-bottom: 20px;" class="my-rating"></div>
							<textarea style="resize: none;" class="form-control" row="5" placeholder="Nội dung đánh giá"></textarea>
							<a href="" style="float: right;margin-top: 20px; display: block"><button type="button" class="btn btn-primary">Gửi đánh giá</button></a>
						</div>
						<div role="tabpanel" class="tab-pane" id="profile">...</div>
						<div role="tabpanel" class="tab-pane" id="messages">...</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12- col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="other-product">
						<div class="lienquan">
							<h3 style="text-align: center; margin-bottom: 20px;color: #8b0304; font-size: 24px; text-transform: uppercase">Sản phẩm tương tự</h3>
						</div>
					</div>
					<div class="other-product-detail">
						@foreach($sanPhamTuongTu as $product)
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 special">
							<div class="list">
								<div class="item">
									<div class="image">
										<img src="{{url('/')}}/{{$product->feature_image}}">
										<div class="image-overlay">
											<a href="{{url('/')}}/product-detail/{{$product->id}}"><span>Xem Chi Tiết</span></a>
										</div>
									</div>
									<div class="description">
										<a href="product-detail.html">
											<h3>{{$product->name}}</h3>
										</a>
										<p>{{$product->price}}</p>
										<span><a href="#"></a></span>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</section>

			<section class="container-fluid map">
				<div class="row map-wrap">
					<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 col-lg-offset-1">
						<div class="chungtoi">
							<a href="">
								<h3>Về chúng tôi</h3>
							</a>
							<ul>
								<li><a href="">Văn Hóa Công Ty</a></li>
								<li><a href="">Nhận Diện Thương Hiệu</a></li>
								<li><a href="">Triết Lí Kinh Doanh</a></li>
								<li><a href="">Tầm Nhìn Sứ Mệnh</a></li>
								<li><a href="">Tuyển Dụng</a></li>
							</ul>
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						<div class="chinhsach">
							<a href="">
								<h3>Chính Sách Và Quy Định</h3>
							</a>
							<ul>
								<li><a href="">Hướng Dẫn Đặt Hàng</a></li>
								<li><a href="">Chính Sách Và Quy Định</a></li>
								<li><a href="">Câu Hỏi Thường Gặp</a></li>
								<li><a href="">Hệ Thống Phân Phối</a></li>
								<li><a href="">Hòm Thư Góp Ý</a></li>
							</ul>
						</div>
					</div>

					<div class="col-xs-12 col-sm-2 col-md-2 col-lg-1">
						<div class="sanpham">
							<a href="">
								<h3>Sảm phẩm</h3>
							</a>
							<ul>
								<li><a href="">Ô Mai</a></li>
								<li><a href="">Chè</a></li>
								<li><a href="">Kẹo</a></li>
								<li><a href="">Gói Quà Tặng</a></li>
							</ul>
						</div>
					</div>

					<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
						<div class="thanhtoan">
							<h3 class="h3-center">NHẬN THANH TOÁN</h3>
							<ul>
								<li><img src="{{url('/')}}/img/visa.png"></li>
								<li><img src="{{url('/')}}/img/master.png"></li>
								<li><img src="{{url('/')}}/img/cod.png"></li>
							</ul>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="tintuc">
							<h3>ĐĂNG KÝ NHẬN BẢN TIN</h3>
							<input type="email" name="email" id="email" placeholder="Email">
							<p>Nhận ngay thông tin về những ưu đãi hấp dẫn từ TOM STORE</p>
						</div>
					</div>
				</div>
			</section>

			<footer class="container-fluid footer">
				<div class="row footer-wrap">
					<div class="container-fluid">
						<div class="col-xs-12 col-sm-8 col-md-5 col-lg-4 col-lg-offset-1">
							<div class="company">
								<h3>công ty cổ phần tom store</h3>
								<p>Văn phòng: Số 14 Ngõ 4 - Nguyễn Đình Chiểu - Hai Bà Trưng - Hà Nội</p>
								<p>Điện thoại: 0165 629 6622</p>
								<p>Website: http://techmaster.vn/</p>
								<p>Email: techmaster@techmaster.vn</p>
							</div>
						</div>

						<div class="hidden-xs col-xs-12 col-sm-4 col-md-push-5 col-md-2 col-lg-2 col-lg-push-4">
							<div class="ketnoi">
								<h3>kết nối</h3>
								<div id="ktimg">
									<img src="{{url('/')}}/img/fb.png">
									<img src="{{url('/')}}/img/gg.png">
									<img src="{{url('/')}}/img/twt.png">
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-5 col-md-pull-2 col-lg-4 col-md-pull-2">
							<div class="chinhanh">
								<h3>hệ thống chi nhánh</h3>
								<p>1. Số 14 Ngõ 4 - Nguyễn Đình Chiểu - Hai Bà Trưng - Hà Nội</p>
								<p>2. Phòng 2304, tầng 23, toà nhà StarCity, 81 Lê Văn Lương, Nhân Chính, Thanh Xuân, Hà Nội</p>
								<p>3. Phòng 2304, tầng 23, toà nhà StarCity, 81 Lê Văn Lương, Nhân Chính, Thanh Xuân, Hà Nội</p>
							</div>
						</div>

						<div class="visible-xs col-sm-4 col-md-2 col-lg-2">
							<div class="ketnoi">
								<h3>kết nối</h3>
								<div id="ktimg">
									<img src="{{url('/')}}/img/fb.png">
									<img src="{{url('/')}}/img/gg.png">
									<img src="{{url('/')}}/img/twt.png">
								</div>
							</div>
						</div>

					</div>
				</div>
			</footer>

			<!-- LOGIN MODAL -->
			<!-- 	<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Đăng nhập</a></li>
								<li role="presentation"><a href="#signup" aria-controls="signup" role="tab" data-toggle="tab">Đăng kí</a></li>
							</ul>
						</div>
						<div class="modal-body">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="login">
									<form class="form-login-signup">
										<div class="form-group login-form">
											<label for="recipient-name" class="control-label">Email:</label>
											<input type="text" class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 form-control" id="email">
										</div>
										<div class="form-group login-form">
											<label for="message-text" class="control-label">Mật khẩu:</label>
											<input type="password" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-control" id="password">
										</div>
									</form>
									<div class="btn-login-sign-up">
										<div id="lost-pass">
											<a href="">Quên mật khẩu?</a>
											<input type="checkbox" name="" id=""><span>&nbsp; Ghi nhớ đăng nhập</span>
										</div>

										<div class="socials-login">
											<a href="" id="login-fb" class="color-white">
												<span class="fa fa-facebook text-center background-blue"></span>
												<span class="fix-width-social text-center color-blue">Facebook</span>
											</a>
											<a href="" id="login-gg" class="color-white">
												<span class="fa fa-google-plus text-center background-red"></span>
												<span class="fix-width-social text-center color-red">Google</span>
											</a>
										</div>

										<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
										<a href="user-info.html"><button type="button" class="btn btn-primary">Đăng Nhập</button></a>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane fade in" id="signup">
									<div role="tabpanel" class="tab-pane active" id="home">
										<form class="form-login-signup">
											<div class="form-group login-form">
												<label for="recipient-name" class="control-label">Họ tên:</label>
												<input type="text" class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 form-control" id="username">
											</div>

											<div class="form-group login-form">
												<label for="recipient-name" class="control-label">Email:</label>
												<input type="text" class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 form-control" id="email">
											</div>

											<div class="form-group login-form">
												<label for="message-text" class="control-label">Mật khẩu:</label>
												<input type="password" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-control" id="password">
											</div>

											<div class="form-group login-form">
												<label for="message-text" class="control-label">Xác nhận mật khẩu:</label>
												<input type="password" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-control" id="password">
											</div>

											<div class="form-group login-form">
												<label for="recipient-name" class="control-label">Địa chỉ:</label>
												<textarea style="resize: none" class="form-control" rows="3"></textarea>
											</div>
										</form>
										<div class="btn-login-sign-up">
											<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
											<button type="button" class="btn btn-primary">Đăng Kí</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			<!--   LIÊN HỆ MODAL  -->


			<div class="modal fade bs-lienhe-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<img src="{{url('/')}}/img/logo.png">
						</div>
						<div class="modal-body">
							<h3>HOTLINE: 1800 6657</h3>
							<p>(Miễn phí cước gọi)</p>
							<ul>
								<li>Tư vấn cụ thể, tận tâm về các sản phẩm & dịch vụ của Tom Store</li>
								<li>Đặt hàng trực tiếp, giao hàng nhanh chóng</li>
								<li>Tiếp nhận các góp ý, phản ánh, giải đáp thắc mắc của khách hàng</li>
							</ul>
						</div>

						<div class="modal-footer">
							<h4>Thời gian hoạt động:</h4>
							<p>8h00 đến 17h00 từ thứ 2 đến thứ 7 hàng tuần</p>
						</div>
					</div>
				</div>
			</div>


			<span  id="btn-to-top">
				<i class="fa fa-angle-double-up" aria-hidden="true"></i>
			</span>


			<script src="{{url('/')}}/view/js/jquery-3.1.0.min.js"></script>
			<script src="{{url('/')}}/view/js/bootstrap.min.js"></script>
			<script src="{{url('/')}}/view/js/jquery-ui.js"></script>
			<script src="{{url('/')}}/view/js/wow.min.js"></script>
			<script src="{{url('/')}}/view/js/lobibox.min.js"></script>
			<script src="{{url('/')}}/view/js/jquery.star-rating-svg.min.js"></script>
			<script src="{{url('/')}}/view/js/script.js"></script>
			<script src="{{url('/')}}/view/js/checkout.js"></script>
		</body>
		</html>