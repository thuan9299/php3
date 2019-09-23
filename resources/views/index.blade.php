	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="image/x-icon" rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="view/css/reset.css">
		<link rel="stylesheet" type="text/css" href="view/css/animate.css">
		<link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="view/css/jquery-ui.min.css">
		<link rel="stylesheet" type="text/css" href="view/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="view/css/style.css">
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
					<a class="navbar-brand" href="#"><img src="img/logo.png"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="menu collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav nav-laptop">
						<li><a href="#">Trang chủ</a></li>
						<li>
							<a href="list-product.html">Sản phẩm</a>
							<div class="sub-menu">
								@foreach($showcate as $row)
								<ul>
									<li><a href="#">{{$row->name}}</a></li>
								</ul>
								@endforeach
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

<section class="container-fluid information-mobile">
	<div class="row">
		<div class="col-xs-12">
			<div class="row">
				<div class="menu2">
					<ul>
						<li id="menu-right-1"><a href="" data-toggle="modal" data-target=".bs-example-modal-lg">Tài khoản<span id="a1"></span></a></li>
						<li id="menu-right-2"><a href="" data-toggle="modal" data-target=".bs-lienhe-modal-lg">Liện hệ</a></li>
						<li id="menu-right-3"><a href="giohang.html">Giỏ hàng</a></li>
						<li id="menu-right-4" class="find-moblie"><a href="javascript:void(0)">Tìm Kiếm</a></li>
					</ul>
				</div>

				<div id="field-find" class="find-field-mobile">
					<div class="input-group">
						<input type="text" id="timkiem-mobile" class="form-control" placeholder="Tìm kiếm sản phẩm...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Tìm!</button>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid">
	<div class="row">
		<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
			<!-- 			<div class="overlay"></div> -->

			<ol class="carousel-indicators">
				<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#bs-carousel" data-slide-to="1"></li>
				<li data-target="#bs-carousel" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item slides active">
					<div class="slide-1"></div>
					<div class="hero">
						<hgroup>
							<h1>We are creative</h1>
							<h3>Get start your next awesome project</h3>
						</hgroup>
						<button class="btn btn-hero btn-lg" role="button">See all features</button>
					</div>
				</div>
				<div class="item slides">
					<div class="slide-2"></div>
					<div class="hero">
						<hgroup>
							<h1>We are smart</h1>
							<h3>Get start your next awesome project</h3>
						</hgroup>
						<button class="btn btn-hero btn-lg" role="button">See all features</button>
					</div>
				</div>
				<div class="item slides">
					<div class="slide-3"></div>
					<div class="hero">
						<hgroup>
							<h1>We are amazing</h1>
							<h3>Get start your next awesome project</h3>
						</hgroup>
						<button class="btn btn-hero btn-lg" role="button">See all features</button>
					</div>
				</div>
			</div>

			<a id="myBtn" class="left carousel-control" role="button" data-slide="prev">
				<span class="icon-prev" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a id="myBtn2" class="right carousel-control" role="button" data-slide="next">
				<span class="icon-next" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</section>


<section class="container-fluid" id="support">
	<div class="row">
		<div class="container">
			<div>
				<div class="support-wrap">
					<ul>
						<li>
							<a href="">
								<img src="img/deliver.png">
								<span>Giao hàng siêu tốc</span>
							</a>
						</li>
						<li>
							<a href="">
								<img src="img/message.png">
								<span>Tư vấn miễn phí</span>
							</a>
						</li>
						<li>
							<a href="">
								<img src="img/usd.png">
								<span>Thanh toán khi nhận hàng</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="container-fluid noibat">
	<div class="row">
		<h2>SẢN PHẨM NỔI BẬT</h2>
		<div class="title">
			<img src="img/title.png">
		</div>
		@foreach($product as $item)
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-2 col-lg-offset-1 special"
		style=" margin-left:95px;">
		<div class="list">
			<div class="item">
				<div class="image">
					<img src="{{$item->feature_image}}">
					<div class="image-overlay">
						<a href="product-detail/{{$item->id}}"><span>Xem Chi Tiết</span></a>
					</div>
				</div>
				<div class="description">
					<a href="product-detail.html">
						<h3>{{$item->name}}</h3>
					</a>
					<p>{{$item->price}}</p>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	{{-- <div colspan="4" class="text-center">
		{{ $product->links() }}
	</div> --}}
</div>
</section>


<section class="container-fluid vanhoa">
	<div class="row">
		<h2>VĂN HÓA ẨM THỰC</h2>
		<div class="title">
			<img src="img/title.png">
		</div>

		<div class="container-fluid vanhoa-list">
			<div style="margin-left: 70px" class="row">
				@foreach($post as $row)
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-lg-offset-1">
					<div id="vanhoa1" class="vanhoa-detail wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="vanhoa-img">
							<img src="{{$row->image}}">
						</div>
						<h3>{{$row->title}}</h3>
						<a href="">
							<div class="overlay">
								<h3>“Món quà” quý giá của người dân Bắc Kạn</h3>
								<p> Những quả mơ đá lớn lên trong sương gió của núi rừng, chắt chiu từng dưỡng chất từ đất mẹ không chỉ là người bạn thân thiết, là món quà quý giá mà thiên nhiên đã trao tặng cho người dân Bắc Kạn...</p>
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span>Xem chi tiết</span>
							</div>
						</a>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>
</section>


<section class="container-fluid about-us">
	<div class="row">
		<div class="container-fluid about-wrap">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-lg-offset-1">
					<div class="khach-hang">
						<div class="about-title">
							<h3>Phản hồi của khách hàng</h3>
						</div>
						<div class="quote">
							<div class="quote-detail">
								<p>Các sản phẩm của ô mai TOM STORE hầu hết mẫu mã đẹp, mang đậm phong cách truyền thống. Về hương vị, có lẽ do mình khó tính nên chỉ cảm thấy yêu thích một số dòng ô mai của TOM STORE thôi ;)</p>
							</div>
						</div>
						<div class="user">
							<div class="avatar">
								<img src="img/user.jpg" alt="Anh Khach Hang" title="Khach hang: Touliver">
							</div>
							<div class="info">
								<h3>Hoàng Touliver</h3>
								<p>Producer, DJ</p>
							</div>
						</div>
					</div>
				</div>


				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
					<div class="video">
						<div class="about-title">
							<h3>Video</h3>
						</div>
						<div class="video-detail">
							<div id="video1">
								<iframe width="250" height="150" src="https://www.youtube.com/embed/fcnwiasVXSw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div id="video2">
								<iframe width="250" height="150" src="https://www.youtube.com/embed/7-tJNVg8YM0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>


				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
					<div class="facebook">
						<div class="about-title">
							<h3>HƯỚNG DẪN</h3>
						</div>
						<div class="facebook-detail">
							<iframe width="250" height="150" src="https://www.youtube.com/embed/ltPq1XJpNWk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>


			</div>
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
					<li><img src="img/visa.png"></li>
					<li><img src="img/master.png"></li>
					<li><img src="img/cod.png"></li>
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
						<img src="img/fb.png">
						<img src="img/gg.png">
						<img src="img/twt.png">
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
						<img src="img/fb.png">
						<img src="img/gg.png">
						<img src="img/twt.png">
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
					<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Đăng nhập</a></li>
					<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Đăng kí</a></li>
				</ul>
			</div>
			<div class="modal-body">
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">
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

					<div role="tabpanel" class="tab-pane" id="profile">
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
									<label for="recipient-name" class="control-label">Số điện thoại:</label>
									<input type="text" class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 form-control">
								</div>
								<div class="form-group login-form">
									<label for="recipient-name" class="control-label">Địa chỉ:</label>
									<!-- <input type="text" class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 form-control"> -->
									<textarea class="form-control" rows="3"></textarea>
								</div>
							</form>
							<div class="btn-login-sign-up">
								<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
								<a href=""><button type="button" class="btn btn-primary">Đăng Kí</button></a>
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
				<img src="img/logo.png">
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


<script src="view/js/jquery-3.1.0.min.js"></script>
<script src="view/js/bootstrap.min.js"></script>
<script src="view/js/jquery-ui.js"></script>
<script src="view/js/wow.min.js"></script>
<script src="view/js/script.js"></script>
</body>
</html>