<?php

//config file
include("config.php");   

//connecting to database and server

$con=mysql_connect($server,$username,$password);
mysql_select_db($database,$con);

if(isset($_POST["delete"])){

function recurse_delete($parent)
{
$query="select * from `content_s1` where parent=$parent ";
$result=mysql_query($query);
$query="DELETE FROM `content_s1` WHERE id=$parent ";
mysql_query($query);
while($r=mysql_fetch_assoc($result)){

recurse_delete($r["id"],$count);
}
}
recurse_delete($_POST["hold_delete_id"]);


}  

/*if(isset($_POST["submit"]))
{
$query="INSERT INTO  `profile`.`content_s1` (
`id` ,
`heading` ,
`content`,
`order`,
`visibility`,
`children`,
`parent`
)
VALUES (
NULL ,  '".$_POST['sub_head']."',  '".$_POST['content']."' ,'1','1','','".$_POST['hold_id']."'
);";

mysql_query($query);

$query="SELECT `children` from `content_s1` where `id`='".$_POST['hold_id']."'";
$fetch=mysql_fetch_assoc(mysql_query($query));
if($fetch["children"]=='')
$fetch["children"]=$set;
else
$fetch["children"]=$fetch["children"].",".$set;

$query="UPDATE `content_s1` SET `children`='".$fetch['children']."', WHERE `id`='".$_POST['hold_id']."'";
mysql_query($query);

}

*/



echo "
<div style='position:absolute;left:100px;top:200px;width:60%'>";
$count=0;
function recurse_child($parent,$count)
{
$count++;
$query="select * from `content_s1` where parent=$parent ";
$result=mysql_query($query);

while($r=mysql_fetch_assoc($result)){
echo "<div id='".$parent."' style='background:rgba(20,100,100,0.1);'><div style='float:right'><button >edit</button><button class='delete'>delete</button><button class='add'>add</button></div><h1>".$r["heading"]."</h2><div>".$r["content"]."</div>";
recurse_child($r["id"],$count);

}
echo "</div>";
}
recurse_child(1,$count);
echo "</div>";
echo $count;
?>
<script src="../mohit.js"></script>
<script>
$(".add").click(function(){ document.getElementById("hold_id").value=this.parentNode.parentNode.id;document.getElementById("insert").style.display="block";
});
$(".delete").click(function(){ if(confirm("do you want to continue")){ document.getElementById("hold_delete_id")=this.parentNode.parentNode.id; document.forms["delete"].submit.click();}
});
</script>
<!--div  id="insert" style="position:fixed;left:30%;top:30%;height:40%;width:40%;background:white;border:1px solid black;border-radius:5%;display:none">
<h2>Insert Into</h2>
<form action="" method="post" name="delete">
<input type="number" id="hold_id"></input>
<input type="text" placeholder="sub_head" ></input><br>
<textarea cols=40 rows=8></textarea>
</form>
</div-->
<div style="display:none">
<form action='' method='post'>
<input type="text" id="hold_delete_id" name="hold_delete_id"></input>
<input type="submit" name="delete"></input>
</form>
</div>
