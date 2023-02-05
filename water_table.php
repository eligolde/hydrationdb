<?php
	include 'database.php';
	$query = "SELECT * FROM hydration ORDER BY size";
	$water = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Hydration Table </title>
	<link rel="stylesheet" href="styles/main.css">
</head>

<body>
	<div id="container">

	<h1>Hydration Table</h1>

	<p class="tabletext"><a href="form.php">Find out your own hydration score!</a></p>

	<table>
	<!-- table column headings -->
	<tr>
	  <th>Bottle Size (oz.)</th>
	  <th>Number of times a day</th>
	  <th>How hydrated they feel</th>
	  <th>Total Water Consumed (oz.)</th>
	</tr>

	<?php while ($row = mysqli_fetch_assoc($water)) :  ?>

	<tr>
  	<td><?php echo $row['size']; ?></td>
  	<td><?php echo $row['amount']; ?></td>
  	<td><?php echo $row['hydrated']; ?></td>
  	<td><?php echo $row['total']; ?></td>
</tr>

<?php endwhile;  ?>

</table>

</div>
</body>

</html>
