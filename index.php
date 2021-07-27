<?php
require_once 'config/connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	th, td {
		padding: 10px;
	}
	th {
		background: #606060;
		color: #ffffff;
	}

	td{
		background: #b5b5b5;
	}
</style>
<body>
	<table>
		<tr>
			<th>Id</th>
			<th>User</th>
			<th>Post</th>
		</tr>
				<?php
					$products = mysqli_query($connect, "SELECT * FROM `blog`");
					$products = mysqli_fetch_all($products);
					foreach ($products as $product) {
						?>
						
						<tr>
							<td><?=$product[0]?></td>
							<td><?=$product[1]?></td>
							<td><?=$product[2]?></td>
							<td><a href=""></a></td>
							<td><a href="post.php?id=<?=$product[0]?>">View</a></td>
							<td><a href="update.php?id=<?=$product[0]?>">Update</a></td>
							<td><a style="color: red;" href="vendor/delete.php?id=<?=$product[0]?>">Delete</a></td>
						</tr>
						<?php
					}
				?>
	</table>

<form action="vendor/create.php" method="POST">
	<h2>Add new post</h2>
	<p>Name</p>
	<input type="text" name="name">
	<p>Post</p>
	<textarea name="post"></textarea><br><br>
	<button type="submit">Add new post</button>
</form>


</body>
</html>