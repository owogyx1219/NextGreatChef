<?php

	$link = mysql_connect('webhost.engr.illinois.edu', 'projectdemo411_cs411', 'cs411');
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('projectdemo411_cs411');

    int curID= getcurrentid();//<--SUDO,     WHAT IS PHP VERSION?
	
	$searchCriterion=$_POST["update_param"];
	$searchType=$_POST["update_type"];


	if ($searchType == "Recipe_name")
	{
		$sql="UPDATE nextgreatchef_CS411 SET Recipe_name= '$searchCriterion'  WHERE Recipe_id= curID";
	}

	else if ($searchType == "Recipe_preptime")
	{
		$sql="UPDATE nextgreatchef_CS411 SET Recipe_preptime= '$searchCriterion'  WHERE Recipe_id= curID";
	}
	else if ($searchType == "Recipe_readytime")
	{
		$sql="UPDATE nextgreatchef_CS411 SET Recipe_readytime= '$searchCriterion'  WHERE Recipe_id= curID";
	}
	else if ($searchType == "Recipe_calories")
	{
		$sql="UPDATE nextgreatchef_CS411 SET Recipe_calories= '$searchCriterion'  WHERE Recipe_id= curID";
	}


	$res=mysql_query($sql);
	
		
		
	mysql_close($link);



?>


