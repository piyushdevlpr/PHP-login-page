<?php
$dbhost ="localhost" ;
$dbuser ="root" ;
$dbpass ="piyush" ;
$dbname ="test" ;

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) ;

if(mysqli_connect_errno()){
	echo "can not connect".mysqli_connect_error() ;
}
else echo "connected successfully" ;
?>
