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
          <li><a href="http://facebook.com/Unofficial-Real-Estate-288483528254346/" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
          <li><a href="http://twitter.com" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
          <li><a href="http://linked.com" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        
		</ul>
      </div>
      <nav>
        <ul id="menu">
          <li><a href="index.php">Home</a></li>
          <li id="menu_active"><a href="buying.php">Buy</a></li>
          <li><a href="selling.php">Selling</a></li>
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
            <h2 class="pad_bot1 pad_top1">your Search here</h2>
             

<?php
include('conn.php');
$p2=$_REQUEST["c"];

$x=0;
$res=mysql_query("select * from p_info where city='$p2'");
$count=mysql_numrows($res);

while($x<$count)
{
$i1=mysql_result($res,$x,"img");
$x++;
?>
<a href='getd.php?id=<?php echo$i1;?>'><img src='<?php echo$i1; ?>'height="120" width="150">&nbsp;&nbsp;&nbsp;&nbsp;
</a><?php
}
?>
</article>