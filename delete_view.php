      <!DOCTYPE html>
<html lang="en">
<head>
  <title>View Ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>View data</h2>
	<table class="table table-bordered table-sm" >
    <thead>
      <tr>
        <th class="th-sm">პროდუქტის სახელი
        </th>
        <th class="th-sm">რაოდენობა
        </th>
        <th class="th-sm">გამოშვების თარიღი
        </th>
        <th class="th-sm">კოდი
        </th>
        <th class="th-sm">ვარგისია
        </th>
        <th class="th-sm">დამატების თარიღი
        </th>
        </th>
        <th class="th-sm">ცვლილება
        </th>
      </tr>
    </thead>
    <tbody id="table">
      
    </tbody>
  </table>
</div>
<script>
$(document).ready(function() {
	$.ajax({
		url: "View_ajax.php",
		type: "POST",
		cache: false,
		success: function(dataResult){
			$('#table').html(dataResult); 
		}
	});
	$(document).on("click", ".delete", function() { 
		var $ele = $(this).parent().parent();
		$.ajax({
			url: "delete_ajax.php",
			type: "POST",
			cache: false,
			data:{
				id: $(this).attr("data-id")
			},
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				if(dataResult.statusCode==200){
					$ele.fadeOut().remove();
				}
			}
		});
	});
});
</script>
</body>
</html>