<?php 
		$connect = mysqli_connect("127.0.0.1","root","","myshop");

		$text_vstav = "INSERT INTO product (img, title, text, price) VALUES ('img/rtx.jpg', '{$_GET["title"]}', '{$_GET["text"]}'), '{$_GET["price"]}')";

		$zapros_vstav = mysqli_query($connect, $text_vstav);
		header("Location: admin.php")
 ?>