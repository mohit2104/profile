<?php

//config file
include("config.php");   

//connecting to database and server

$con=mysql_connect($server,$username,$password);
mysql_select_db($database,$con);


//quering for the root
$query="select * from `content_s1` where id=1 ";

//result of the query for root
$result=mysql_query($query,$con);

$r=mysql_fetch_assoc($result);
// getting all the children for root

$children=explode("," ,$r["children"]);
echo $children[2];


?>

