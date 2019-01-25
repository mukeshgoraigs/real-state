<?php
include('conn.php');
$p1=$_REQUEST["c"];
$p2=$_REQUEST["a"];
$p3=$_REQUEST["lp"];
$p4=$_REQUEST["up"];
$p5=$_REQUEST["b"];
$p6=$_REQUEST["ba"];
$p7=$_REQUEST["r"];
$p8=$_REQUEST["f"];

$str="insert into p_info values('$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8')";


mysql_query($str);


echo'<script language="javascript">';
 echo'alert("your property details are uploaded please register")';

 echo'</script>';
 
  header("Location:reg.php");
 
?>