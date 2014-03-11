<?php

include("config.php");   



$con=mysql_connect($server,$username,$password);
mysql_select_db($database,$con);