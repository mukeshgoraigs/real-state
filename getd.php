<!DOCTYPE html>
<html lang="en">
<head>
<title>Real Estate | Selling</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script src="js/jquery-1.6.js" ></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Didact_Gothic_400.font.js"></script>
<script src="js/atooltip.jquery.js"></script>
<script src="js/jquery.jqtransform.js" ></script>
<script src="js/script.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<style type="text/css">.bg{behavior:url("js/PIE.htc");}</style>
<![endif]-->
</head>
<body id="page3">

<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <h1><a href="index.php" id="logo"></a></h1>
      <div class="wrapper">
        <ul id="icons">
          <li><a href="http://facebook.com" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
          <li><a href="http://twitter.com" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
          <li><a href="http://linked.com" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        
		</ul>
      </div>
      <nav>
        <ul id="menu">
          <li><a href="index.php">Home</a></li>
          <li id="menu_active"><a href="buying.php">Buy</a></li>
          <li ><a href="selling.php">Selling</a></li>
          <li><a href="reg.php">Register</a></li>
          <li><a href="finance.php">Finance</a></li>
          <li class="end"><a href="contacts.php">About Us</a></li>
        </ul>
      </nav>
    </header>
    <!-- / header -->
  </div>
</div>
<!-- content -->
<div class="body2">
  <div class="main">
    <section id="content">
      <div class="wrapper">
        <article class="col1">
          <div class="pad2">
            <h2 class="pad_bot1 pad_top1">Search Result</h2>
<script>
function a13()
{
open("trans.php");
}

function a12()
{
open("reg.php");
}
function a()
{
var x1,x2,x3,x4;
x1=document.getElementById("k1");
x2=document.getElementById("k2");
x3=document.getElementById("k3");
x4=document.getElementById("k4");

x1.type="text";
x2.type="text";
x3.type="submit";
x3.value="LOGIN";
x4.type="submit";
x4.value="NEW USER";

}
</script>             

<?php
include('conn.php');
$p2=$_REQUEST["id"];

$x=0;
$res=mysql_query("select * from p_info where img='$p2'");
$count=mysql_numrows($res);

while($x<$count)
{

$i3=mysql_result($res,$x,"city");
$i4=mysql_result($res,$x,"area");
$i5=mysql_result($res,$x,"l_price");
$i6=mysql_result($res,$x,"u_price");
$i7=mysql_result($res,$x,"no_of_bedroom");
$i8=mysql_result($res,$x,"no_of_bathroom");
$i9=mysql_result($res,$x,"radius");
$i1=mysql_result($res,$x,"img");

$x++;
?>
 <img src='<?php echo$i1; ?>'height="200" width="250">&nbsp;&nbsp;&nbsp;&nbsp;
 <div style="border-style:ridge; position: absolute; width: 355px; height: 163px; z-index: 1; left: 760px; top: 339px" id="layer1">

<table>
<tr><td>City</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo$i3;?></td></tr>
<td>Area</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo$i4;?></td></tr>
<td>L.Price</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo$i5;?></td></tr>
<td>U.Price</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo$i6;?></td></tr>
<td>Bedrooms</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo$i7;?></td></tr>
<td>Bathrooms</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo$i8;?></td></tr>
<td>Radius</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo$i9;?></td></tr>

</div>
</table>
<?php
}
?>
<form name="jkgd" method="Post" action="trans.php">
<br><input type="button" value="BOOK" onclick="a()"><br>
<input type="hidden" name="k1" id="k1" placeholder="Username">
<input type="hidden" name="k2" id="k2" placeholder="Password">
<input type="hidden" name="k3" id="k3"  >
<input type="hidden" id="k4" onclick="a12()" >

</form>
</article>