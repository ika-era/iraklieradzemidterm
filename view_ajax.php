<?php
	include 'dbconnection.php';
	$sql = "SELECT * FROM product";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
			<td><?=$row['ProductName'];?></td>
			<td><?=$row['count'];?></td>
			<td><?=$row['ReleaseDate'];?></td>
			<td><?=$row['Code'];?></td>
			<td><?=$row['vargisi'];?></td>
			<td><?=$row['AddedAt'];?></td>
			<td><form action="delete_ajax.php" method="GET"><button>წაშლა</button></form></td>
		</tr>
<?php	
	}
	}
	else {
		echo "0 results";
	}
	mysqli_close($conn);
?>