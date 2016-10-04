<?php
if($_POST)
{
	$msg=$_POST['message'];
	$time=date("Y-m-d h:i:s");
require_once("Connection.php");

$query=mysqli_query($con,"insert into chat(message,time) values('$msg','$time');");
if(!$query)
{
	echo"";
}
else
{
	$query=mysqli_query($con,"select *from chat;");
	while($row=mysqli_fetch_array($query))
	{
		echo $row['message']."<br>";
	}
}
}

?>
