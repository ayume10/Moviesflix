<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con, 'userfeedback');

$movie = $_POST['movie'];
$slot = $_POST['slot'];
$ticketclass = $_POST['ticketclass'];
$date =$_POST['date'];

$query="insert into userinfodata2 (movie, slot, ticketclass, date) values('$movie', '$slot', '$ticketclass', '$date') ";

mysqli_query($con,$query );

header('location:movies.php')

?>