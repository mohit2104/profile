<?php

//config file
include("config.php");   

//connecting to database and server

$con=mysql_connect($server,$username,$password);
mysql_select_db($database,$con);



if(isset($_POST["submit"])){












echo "
<div style='position:absolute;left:100px;top:200px;width:60%'>";
function recurse_child($child)
{
$query="select * from `content_s1` where id=$child ";
$result=mysql_query($query);
$r=mysql_fetch_assoc($result);
$children=explode("," ,$r["children"]);

echo "<div id='".$child."' style='background:rgba(20,100,100,0.1);'><div style='float:right'><button >edit</button><button>delete</button><button class='add'>add</button></div><h1>".$r["heading"]."</h2><div>".$r["content"]."</div>";
foreach($children as $child1)
{
if(is_numeric($child1))
recurse_child($child1);
else 
break;
}
echo "</div>";
}
recurse_child(1);
echo "</div>";
?>
<script src="../mohit.js"></script>
<script>
$(".add").click(function(){ document.getElementById("hold_id").value=this.parentNode.parentNode.id;document.getElementById("insert").style.display="block";
});
</script>
<div  id="insert" style="position:fixed;left:30%;top:30%;height:40%;width:40%;background:white;border:1px solid black;border-radius:5%;display:none">
<h2>Insert Into</h2>
<form action="" method="post">
<input type="number" id="hold_id"></input>
<input type="text" placeholder="sub_head" ></input><br>
<textarea cols=40 rows=8></textarea>
</form>
</div>