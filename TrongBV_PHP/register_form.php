<?php
$mess = "";
if(isset($_POST['user'])){
	$user = $_POST['user'];
	$pass = $_POST['password'];
		$mess = "Đăng ký thành công!";
}
?>
<!DOCTYPE html>
<html>	
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title> Đăng ký tài khoản</title>
</head>
<body>
<div class="container">
	<div class="col-sm-6">
		<h2>Đăng ký</h2>
	<h6>Nhanh chóng và dễ dàng</h6>
	<hr>
	</div>
	<div class="col-sm-6">
	<?php if($mess != ''):?>
		<div class="alert alert-success" role="alert"><?php echo $mess;?></div>
	<?php endif;?>
	<form action="register_from.php" method="POST">
		<div class="form-group">
			<div class="form-inline">
				<input type="text" name="ho" placeholder="Họ" class="col-sm-6">
				<input type="text" name="ten" placeholder="Tên" class="col-sm-6">
			</div>
		</div>
		<div class="form-group">
			<form class="form-inline">
				<input type="text" name="user" placeholder="Số di động hoặc email" class="col-sm-12" required>
			</form>
		</div>
		<div class="form-group">
			<form class="form-inline">
				<input type="password" name="password" placeholder="Mật khẩu mới" class="col-sm-12" req
				>
			</form>
		</div>
		<div class="form-group">
			<div>
				<label>Ngày sinh</label>
				<a href="https://www.google.com.vn">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
					  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
					</svg>
				</a>
			</div>
			<div class="form-inline">
				<select class="form-control col-sm-4" name="ngaySinh">
					<option value="0" selected="1">Ngày</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				<select class="form-control col-sm-4" name="thangSinh">
					<option value="0" selected="1">Tháng</option>
					<option value="1">Tháng 1</option>
					<option value="2">Tháng 2</option>
					<option value="3">Tháng 3</option>
					<option value="4">Tháng 4</option>
					<option value="5">Tháng 5</option>
					<option value="6">Tháng 6</option>
					<option value="7">Tháng 7</option>
					<option value="8">Tháng 8</option>
					<option value="9">Tháng 9</option>
					<option value="10">Tháng 10</option>
					<option value="11">Tháng 11</option>
					<option value="12">Tháng 12</option>
				</select>
				<select class="form-control col-sm-4" name="namSinh">
					<option value="0" selected="1">Năm</option>
					<option value="2007">2007</option>
					<option value="2006">2006</option>
					<option value="2005">2005</option>
					<option value="2004">2004</option>
					<option value="2003">2003</option>
					<option value="2002">2002</option>
					<option value="2001">2001</option>
					<option value="2000">2000</option>
					<option value="1999">1999</option>
					<option value="1998">1998</option>
					<option value="1997">1997</option>
					<option value="1996">1996</option>
					<option value="1995">1995</option>
					<option value="1994">1994</option>
					<option value="1993">1993</option>
					<option value="1992">1992</option>
					<option value="1991">1991</option>
					<option value="1990">1990</option>
				</select>
			</div>
			<div class="form-group">
				<label>Giới tính</label>
				<a href="https://www.google.com.vn">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
					  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
					</svg>
				</a>
			</div>
			<div class="form-inline">
				<div class="custom-control custom-radio custom-control-inline border rounded col-sm-3 d-flex bd-highlight">
						<label class="form-check-label p-2 w-100 bd-highlight" for="nu">Nữ</label>
						<input class="form-check-input p-2 flex-shrink-1 bd-highlight" name="gioiTinh" type="radio" id="nu" value="nu">
				</div>
				<div class="custom-control custom-radio custom-control-inline border rounded col-sm-3 d-flex bd-highlight">
					<label class="form-check-label p-2 w-100 bd-highlight" for="nam">Nam</label>
					<input class="form-check-input p-2 flex-shrink-1 bd-highlight" name="gioiTinh" type="radio" id="nam" value="nam">
				</div>
				<div class="custom-control custom-radio custom-control-inline border rounded col-sm-4 d-flex bd-highlight">
					<label class="form-check-label p-2 w-100 bd-highlight" for="gioiTinh">Tùy chỉnh</label>
					<input class="form-check-input p-2 flex-shrink-1 bd-highlight" name="gioiTinh" type="radio" id="gioiTinh" value="khong ro">
				</div>
			</div class="form-group">
			<p class="text-muted text-justify">Bằng cách nhấp vào Đăng ký, bạn đồng ý với <a href="https://www.google.com.vn" id="term_link" target="_blank">Điều khoản</a>, <a href="https://www.google.com.vn" target="_blank" id="privacy_link">Chính sách dữ liệu</a> và <a href="https://www.google.com.vn" target="_blank" id="cookie_link">Chính sách cookie</a> của chúng tôi. Bạn có thể nhận được thông báo của chúng tôi qua SMS và hủy nhận bất kỳ lúc nào.
			</p>
			<div class="form-group col-sm-4 offset-sm-4">
				<button class="btn btn-success btn-lg btn-block" type="submit">Đăng ký</button>
			</div>
		</div>
		</div>
	</form>
</div>
</body>
</html>