<?php
    
    // retrieve the session information
    $u = $_SESSION['username'];
    $uid = $_SESSION['loginid'];
    // display the user box
?>
    <html>
        <div id='userbox'>
	       Welcome <?= $u ?>
		<ul>
		   <li><a href='./logout.php'>Logout</a></li>
		</ul>
             </div>
    </html>

