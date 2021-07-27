<?php 

require_once 'config/connect.php';

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `blog` WHERE id = '$product_id'");
$product = mysqli_fetch_assoc($product);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update</title>
</head>
<body>
<form action="vendor/update.php" method="POST">
	<input type="hidden" name="id" value="<?=$product['id']?>">
	<h2>Update post</h2>
	<p>Name</p>
	<input type="text" name="name" value="<?=$product['name']?>">
	<p>Post</p>
	<textarea name="post"><?=$product['post']?></textarea><br><br>
	<button type="submit">Update post</button>
</form>
</body>
</html>