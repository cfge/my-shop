<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cascade Styles</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<div class="margin">
			<!-- menu-->
			<div class="menu">
				<!-- Header-->
				<div class="header">
					<div class="logob">
						<img src="img/logo.png" class="logo">
					</div>
					<div class="sends">
						<div class="lowlight"><a href="http://7less/admin.php">Админка</a></div>
					</div>
				</div>
				<!-- Scroller-->
				<div class="scroller">
					<div class="hightext">
						<p class="bigtext">My Shop</p>
						<p></p>
					</div>
				</div>
			</div><?php  ?>
			<?php 
										$connect = mysqli_connect("127.0.0.1","root","","myshop");
										
										$text_query = 'SELECT * FROM product';

										$query = mysqli_query($connect, $text_query);


										$result = $query->fetch_assoc();


										echo $result["img"];
									 		?>
			<!-- shop -->
			<div class="shop">
				<div class="container">
					<div class="item">
						<div class="img">
							<img src="">
						</div>
						<button class="buy">BUY</button>
					</div>
					<div class="item">
						<div class="img"></div>
						<button class="buy">BUY</button>
					</div>
					<div class="item">
						<div class="img"></div>
						<button class="buy">BUY</button>
					</div>
				</div>
				<div class="container">
					<div class="item">
						<div class="img"></div>
						<button class="buy">BUY</button>
					</div>
					<div class="item">
						<div class="img"></div>
						<button class="buy">BUY</button>
					</div>
					<div class="item">
						<div class="img"></div>
						<button class="buy">BUY</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>