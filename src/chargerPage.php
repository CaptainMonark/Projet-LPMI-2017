<?php
$page="accueil";
if(isset($_SESSION['user']))
{
	if (isset($_GET["rub"])) {
		$page=$_GET["rub"];
	}
}
else 
{
	$query = "select * from enseignement";	
	if($result = mysqli_query($link,$query))
	{
		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{ 
			$tabPages[] = strtolower($row['alias']);
		}
		mysqli_free_result($result);
	}

	// $query = "select * from recherche";	
	// if($result = mysqli_query($link,$query))
	// {
	// 	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	// 	{ 
	// 		$tabPages[] = $row['alias'];
	// 	}
	// 	mysqli_free_result($result);
	// }

	if(!in_array($_GET["rub"], $tabPages))
	{
		$page=$_GET["rub"];
	}
	else
	{
		$_SESSION["noAccess"] = true;
		$page = "login";
	}	
	
}
include "www/".$page.".php";
?>
