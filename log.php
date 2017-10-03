<?php
require "database.php" ;
if(!isset($_SESSION["loginid"]) || !isset($_SESSION["username"])){
  	if(isset($_POST["cmdlogin"])){
  		$u = strip_tags($_POST["username"]) ;
  		$p = md5(strip_tags($_POST["password"])) ;
  		$query = sprintf("SELECT loginid FROM login WHERE username = '%s' AND password = '%s' LIMIT 1;", mysqli_real_escape_string($conn,$u), mysqli_real_escape_string($conn,$p));
  		$result = mysqli_query($conn,$query);
  		if (mysqli_num_rows($result) != 1)
        {
            // invalid login information
            echo "Wrong username or password!";
            //show the loginform again.
            include "loginform.php";
        } else {
            // Login was successfull
            $row = mysqli_fetch_array($result);
            // Save the user ID for use later
            $_SESSION["loginid"] = $row["loginid"];
              // Save the username for use later
            $_SESSION["username"] = $u;
              // Now we show the userbox
            header("location: userbox.php"); 
        }
    } else {
    	 // User is not logged in and has not pressed the login button
    	 // so we show him the loginform
        include "loginform.php";
    }
 
} else {
	 // The user is already loggedin, so we show the userbox.
    header("location: userbox.php"); 
}

?>
 