<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang !</title>
	<link rel="stylesheet" type="text/css" href="..css/stylepengdahuluan.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">

	<div class="menu">
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'tentang':
				include "halaman/tentang.php";
				break;
			case 'tutorial':
				include "halaman/tutorial.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>