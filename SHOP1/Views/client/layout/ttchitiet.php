<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<title>Document</title>
	<style>
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}
	body{
		font-family: Helvetica;
		font-size: 16px;
	}
	#top{
		float: left;
		height: 35px;
		width: 100%;
		background: #fb5530;
		box-sizing: border-box;
	}
	#top-left{
		margin-left: 40px;
		width: 95%;
		height: 35px;

	}
	#top-left ul li{
		float: left;
		list-style: none;
	}

	#top-left ul li a{
		display: block;
		padding: 0px 10px 0px 10px;
		text-decoration: none;
		color: white;
		border-right: 1px solid #ccc;
		margin-top: 9px;
		font-size: 14px;
	}
	#top-left .icon{
		padding-right: 480px; 
		letter-spacing: 2px;
	}
	#header{
		background-color: #fb5530;
		height: 140px;
	}
	#logo{
		float: left;
		padding-left: 100px;
		padding-top: 10px;
	}
	#search{
		float: left;
		width: 750px;
		margin-top: 25px;
		margin-left: 50px;
		background: white;

	}
	#search form input[type="text"]{
		width: 640px;
		height: 46px;
		border: none;
		text-indent: 10px;
	}
	#search form input[type="submit"]{
		height: 40px;
		width: 54px;
		margin-left: 50px;
		border: none;
		background: #fb5530 url(../../../image/search.PNG) no-repeat center;
	}
	#gh{
		float: left;
		margin-left: 60px;
		margin-top: 30px;
	}
	.menu{
		width: 100%;
		height: 50px;
		background: #fb5530;
		margin-top: 2px;
	}
	.menu ul {
		margin-left: 70px;
	}
	.menu ul li{
		list-style: none;
		float: left;
		position: relative;
		padding: 17px 50px 12px 40px;
	}
	.menu ul li a{
		text-decoration: none;
		display: inline-block;
		color: white;
		font-size: 18px;
	}
	.menu li ul{
		display: none;
		position: absolute;
		width: 100%;
		margin-left: 0px;
	}
	.menu li > ul li{
		width: 100%;
		background: #fb5540;
		text-align: left;
		margin-bottom: 1px;
	}
	.menu li:hover > ul{
		display: block;			

	}
	.menu ul li:hover{
		background-color: #f69113;
	}
	.menu ul > li:hover > .submenu{
		display: block;

	}
	.menu li .submenu{
		position: absolute;
		left: 0;
		top: 51px;
	}
	#main{
		width: 95%;
		height: 700px;
		margin: 0 auto;
		border: 1px solid #fb5530;
		margin-top: 30px;
		box-sizing: border-box;
	}
	#main .card{
		margin-top: 20px;
		width: 100%;
		height: 700px;
	}
	#main .card ul li{
		margin-left: 30px;
		float: left;
		list-style: none;
		height: 400px;
		margin-right: 20px;

	}
	#main .card ul li img{
		width: 420px;
		height: 300px;
	}
	#main .card .mt{
		height: 200px;
	}
	#main .card .sp{
		margin-left: 80px;
	}
	#main .card ul li p img{
		border: 1px solid blue;
	}
	#main .card ul li p img:hover {
		border: 2px solid red;
	}
	footer{
		background: #fb5530;
		color: white;
		height: 200px;
		margin-top: 50px;
	}
	footer ul li{
		list-style: none;
		float: left;
		margin-left: 90px;
		margin-top: 30px;
	}
	footer ul li a{
		color: white;
		text-decoration: none;
	}
	
</style>
</head>
<body>
	<div id="top">
		<?php
		$conn = mysqli_connect("localhost","root","","shop");
		mysqli_query($conn,"SET shop 'utf8'");
		$sql = "select * from dangnhap";
		$kq = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($kq);
		$rs = mysqli_fetch_array($kq);
		?>
		<div id="top-left">
			<ul>
				<li><a href="#" >Nguy???n ?????c M???nh</a></li>
				<li><a href="">0982 43 1556</a></li>
				<li><a href="">Li??n S??n - L????ng S??n - H??a B??nh</a></li>
				<li><a style="border-right: none;" href="">K???t n???i </li>
					<li class="icon"><a style="border-right: none; padding-left: 0px; " href=""><i class="fab fa-facebook"></i> <i class="fab fa-instagram"></i></a></a></li>
					<?php
					if (isset($_SESSION['test'])==$rs[2]) {?>
						<li>
							<a href="#">
								<?php echo $_SESSION['test'] ?></a>
							</li>
							<li>
								<a href="dangxuat.php">????ng xu???t</a>
							</li>
						<?php } else {?>
							<li>
								<a href="dangky.php">????ng k??</a>

							</li>
							<li>
								<a href="dangnhap.php#">????ng nh???p</a>
							</li>
						<?php }
						?>
					</ul>
				</div>
			</div>
			<div id="header">
				<div id="logo">
					<img src="../../../image/logo.png" alt="" width=" 220px" height="80px">
				</div>
				<div id="search">
					<form action="" method="">
						<input type="text" placeholder="Nh???p n???i dung t??m ki???m..." />
						<input type="submit" value="&nbsp;" />
					</form>
				</div>
				<div id="gh">
					<a href=""><img src="../../../image/gh.PNG" alt=""></a>
				</div>
			</div>
			<div class="menu">
				<ul>
					<li><a href="">Danh m???c s???n ph???m</a>

						<ul class="submenu">
							<li><a href="">LapTop</a></li>
							<li><a href="">Linh ki???n</a></li>
						</ul>

					</li>	
					<li><a href="index.php">Trang ch???</a></li>
					<li><a href="">Gi???i Thi???u</a></li>
					<li><a href="">Ch??nh s??ch b???o h??nh</a></li>
					<li><a href="">T?? v???n</a></li>
					<li><a href="">Li??n h???</a></li>
				</ul>
			</div>
			<div id="main">

				<div class="card">
					<?php
					$masp = $_GET['masp'];
					$conn = mysqli_connect("localhost","root","","shop");
					mysqli_query($conn,"SET shop 'utf8'");
					$kq = mysqli_query($conn,"select * from sanpham where masp ='$masp' ");
					while($rs = mysqli_fetch_array($kq)){
						?>
						<ul>
							<li>
								<img src="<?php echo $rs['anh'] ?>" alt="">
								<p>
									<img src="../../../image/tt5_lt1.jpg" alt="" style="width:80px; height:70px">
									<img src="../../../image/tt_lt1.png" alt="" style="width:80px; height:70px">
									<img src="../../../image/tt2_lt1.jpg" alt="" style="width:80px; height:70px">
									<img src="../../../image/tt3_lt1.png" alt="" style="width:80px; height:70px">
									<img src="../../../image/tt4_lt1.jpg" alt="" style="width:80px; height:70px">
								</p>
							</li>
							<li class="sp">
								<h3><?php echo $rs['tensp'] ?></h3>
								<br>
								<p>M?? s???n ph???m : <?php echo $rs['masp'] ?></p>
								<br>
								<p>Nh?? s???n xu???t : <?php echo $rs['nxb'] ?></p>
								<br>

								<p>Xu???t x??? : <?php echo $rs['xuatxu'] ?></p>
								<br>

								<p>B???o h??nh : <?php echo $rs['baohanh'] ?></p>
								<br>

								<p>T??nh tr???ng : <?php echo $rs['tinhtrang'] ?></p>
								<br>
								<p>
									<h5 style="color:red; font-size: 18px;"><?php echo number_format($rs['gia'],0,",",".") ?>???</h5>
								</p>
								<br>
								<?php echo" <a href='xuly_giohang.php?masp=".$rs['masp']." '> Them vao gio hang"?>
								<br>
								<br>
								<a href="">Mua h??ng</a>
							</li>
						</ul>
						<ul>
							<li class="mt">
								<br>
								<h3>M?? t??? s???n ph???m</h3>
								<br>
								<p><?php echo $rs['chitiet'] ?></p>
							</li>
						</ul>
						<?php
					}
					?>
				</div>
			</div>
		</body>
		<footer>
			<ul>
				<li>
					<p>Cshop</p>
					<br>
					<p>?????a ch???: S??? 3 Ng?? 325 V?? H???u, Thanhh Xu??n B???c, Thanhh Xu??n, H?? N???i</p>
					<p>??i???n tho???i: 0966900220 - 096.801.8880</p>
					<p>Email: doankhoiatk@gmail.com</p>
					<p>Web: http://laptoptuanminh.vn </p>
					<p>Facebook: https://www.facebook.com/laptop.tuanminh</p>
				</li>
				<li>
					<p>D???CH V??? KH??CH H??NG</p>
					<br>
					<p><a href="">Tr??? gi??p kh??ch h??ng</a></p>
					<p><a href="">G???i ????n g??p ??, khi???u n???i</a></p>
					<p><a href="">Ch??nh s??ch v?? quy ?????nh</a></p>
					<p><a href="">G???i tr??? ph???n h???i c???a kh??ch h??ng</a></p>
				</li>
				<li>
					<p>V??? ch??ng t??i</p>
					<br>
					<p><a href="">Gi???i thi???u v??? c??ng ty</a></p>
					<p><a href="">Tri???t l?? kinh doanh</a></p>
					<p><a href="">H??nh th??nh v?? ph??t tri???n</a></p>
				</li>
			</ul>
		</footer>
		</html>