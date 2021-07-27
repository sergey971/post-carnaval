<?php

require_once 'config/connect.php';

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `blog` WHERE id = '$product_id'");
$product = mysqli_fetch_assoc($product);

$comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE product_id = '$product_id'");
$comments = mysqli_fetch_all($comments);

?>


<!DOCTYPE html>
<html lang="en">
<head>

	<title>Document</title>
</head>
<style>
	h2{
		color: green;
	}
	h3{
		color: blue;
	}
</style>
<body>
	<h2>Автор: <?=$product['user']?></h2>
	<h3>Описание:</h3><h4><?=$product['post']?></h4>

	<form action="vendor/create_comment.php" method="POST">
		<input type="hidden" name="id" value="<?= $product['id'] ?>">
		<textarea name="body"></textarea><br><br>
		<button type="submit">Отправить</button>
	</form>
	<h3>Коментарий</h3>
	<ul>

		<?php
		foreach ($comments as $comment) {
			?>
			<li><?=$comment[2] ?></li>
			<?php
		}



		?>




	</ul>
</body>
</html>