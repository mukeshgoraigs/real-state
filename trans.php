
<!DOCTYPE html>
<html lang="en">
<head>
<title>Real Estate | Sellling</title>
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
          <li ><a href="buying.php">Buy</a></li>
          <li ><a href="selling.php">Selling</a></li>
          <li id="menu_active"><a href="reg.php">Register</a></li>
          <li ><a href="finance.php">Finance</a></li>
          <li class="end"><a href="contacts.php">About us</a></li>
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
            <h2 class="pad_bot1 pad_top1"></h2><?php

$u=$_REQUEST["k1"];
$p=$_REQUEST["k2"];
include("conn.php");
$res=mysql_query("select * from user1 where name='$u' and email='$p'");
//$count=mysql_rownums($res);
$count=mysql_numrows($res);


//echo"count=".$count;
if($count==1)

echo"THANKS FOR BOOKING IN REAL ESTATE HOME.WE HAVE SENT ALL THE REALATED INFORMATION TO YOUR EMAIL";
else
echo"Invalid User";
?>