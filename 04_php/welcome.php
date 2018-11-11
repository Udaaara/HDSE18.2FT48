<?php
session_start();
if(isset($_SESSION["un"]) && (time() - $_SESSION["LAT"])<=10)
{
	$_SESSION["LAT"] = time();
	echo "Hello, ".$_SESSION["un"]."<br /><br />";
	
	if($_SESSION["tp"]=="admin")
	{
		echo "<a href=view_data.php>View Data</a><br />";
		echo "<a href=add_data.php>Add Data</a><br />";
		echo "<a href=logout.php>Logout</a><br />";
		
	}
	else if($_SESSION["tp"]=="user")
	{
		echo "<a href=view_data.php>View Data</a><br />";
		echo "<a href=logout.php>Logout</a><br />";
	}
}
else
{
	header("Location:login.php");
}
?>