<!DOCTYPE html>
<html>
<head>
	<title>Insert data in MySQL database using Ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<form method="POST" action="insertdata.php">
		<div style="margin: auto;width: 60%;">
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>
		<form id="fupForm" name="form1" method="post">
			<div class="form-group">
				<label for="email">პროდუქტის დასახელება:</label>
				<input type="text" class="form-control" id="ProductName"  name="ProductName">
			</div>
			<div class="form-group">
				<label for="pwd">რაოდენობა:</label>
				<input type="text" class="form-control" id="count"  name="count" value="<?php echo rand(1,101); ?>"> 
			</div>
			<div class="form-group">
				<label for="pwd">გამოშვების თარიღი:</label>
				<input type="date" class="form-control" id="ReleaseDate"  name="ReleaseDate">
			</div>
			<div class="form-group">
				<label for="pwd">მარაგის კოდი:</label>
				<input type="text" class="form-control" id="Code"  name="Code" value="<?php echo rand(10000,100000); ?>">
			</div>
			<div class="form-group">
				<label for="pwd">ვარგისიანობა:</label>
				<input type="text" class="form-control" id="vargisi" name="vargisi" value="<?php echo rand(10,31); ?>">
			</div>
			
			<button>ჩაწერა</button>
		</form>
	</div>


	</form>
	
</body>
</html>