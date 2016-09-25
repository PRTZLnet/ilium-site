<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php include 'database.php';?>
 
<?php
 
//var
$name=$_POST['name'];
$sc=$_POST['sc'];
$email=$_POST['email'];
 
//exec
 
mysqli_query($connect,"INSERT INTO data(name,sc,email) VALUES('$name','$sc','$email')");
		
			
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Response Added</p>";
	echo "<a href='index.html'>Go Back</a>";
} else {
	echo "NOT Added<br />";
	echo mysqli_error ($connect);
}
			
				?>


<body>
</body>
</html>