<?php


require_once("Connection.php");

$query=mysqli_query($con,"select *from chat;");
	while($row=mysqli_fetch_array($query))
	{
		echo "<p><b>".$row['message']."</b></p>";
	}


?>
