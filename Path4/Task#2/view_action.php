<?php
$DB_HOST = 'localhost';
$DB_USER= 'root';
$DB_PASSWORD = '';
$DB_DATABASE = 'Panel';




//Connect to mysql server
$con =  mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD);
if(!$con) 
	die('Failed to connect to server: ' . mysql_error());


//Select database
$db = mysqli_select_db($con, $DB_DATABASE);
if(!$db) 
	die("Unable to select database");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Control Panel</title>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/normalize.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
		<style>h1,h2{color:white;}</style>

	</head>
	<body>
<?php
//Create query
$qry= "SELECT * FROM control ORDER BY ID DESC LIMIT 1";

//Make query and get result
$result= mysqli_query($con, $qry);

if($result){
	while($info = mysqli_fetch_array( $result ))
{		
Print "<h2>".$info['Action']."</h2>";
}
}

else
	echo"not working";
	

?>

	</body>
</html>	
