<?php
include("inc/connect.inc");
$matinh=$_GET['matinh'];

$sql="Select * from huyen 
	where matinh='{$matinh}' 
	order by mahuyen";
$rs=mysqli_query($con,$sql);
$str="<select id=huyen>";
while($row=mysqli_fetch_array($rs)){
	$str.="<option value={$row['mahuyen']}>{$row['tenhuyen']}</option>";
}
$str.="</select>";
echo $str;

?>