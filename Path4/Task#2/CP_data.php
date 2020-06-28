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

//Create query
if(isset($_POST["buton"])){
	$buton=$_POST["buton"];
$qry= "INSERT INTO control(Action) VALUES ('$buton')";

//Make query and get result
$result= mysqli_query($con, $qry);

if($result){
	// redirect the user back to the ControlPanel page
	header("location:ControlPanel.html");
	echo '<script>alert("Added");</script>';
exit();
}

else
	echo"not working";
	

}

?>