<?php
	include 'dbconnection.php';
	$ProductName=$_POST['ProductName'];
	$count=$_POST['count'];
	$ReleaseDate=$_POST['ReleaseDate'];
	$Code=$_POST['Code'];
	$vargisi=$_POST['vargisi'];

	$sql = "INSERT INTO `product`( `ProductName`, `count`, `ReleaseDate`, `Code`,`vargisi`) 
	VALUES ('$ProductName','$count','$ReleaseDate','$Code','$vargisi')";
	if (mysqli_query($conn, $sql)) {
		echo "ჩაიწერა წარმატებით";
	} 
	else {
		echo "დაფიქსირდა შეცდომა";
	}
	mysqli_close($conn);

?>
<html>
<a href="insert.php">უკან დაბრუნება</a>
</html>