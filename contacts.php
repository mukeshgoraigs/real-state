<!DOCTYPE html>
<html lang="en">
<head>
<title>Real Estate | Contacts</title>
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
<body id="page6">
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
          <li><a href="buying.php">Buy</a></li>
          <li><a href="selling.php">Selling</a></li>
          <li><a href="reg.php">Register</a></li>
          <li><a href="finance.php">Finance</a></li>
          <li id="menu_active" class="end"><a href="contacts.php">About Us</a></li>
        </ul>
      </nav>
    </header>
    <!-- / header -->
  </div>
</div>
<!-- content -->
<div class="body2">
<script>
function valid()
{
var count=0,num,c1,c2;
	
	
	if(na.value=="")
	{
		alert("you must fill name");
		/*document.getElementById("k1").innerHTML="*Fill the name";*/
		return false;
	}
	
		str=em.value;
	c1=str.indexOf("@");
	c2=str.indexOf(".com");
	if(c1==-1||c2==-1)
	{
		alert("Invalid E-Mail Id");
		return false;
	}
	if(textarea.value=="")
	{
		alert("you leave a message");
		/*document.getElementById("k1").innerHTML="*Fill the name";*/
		return false;
	}

}
</script>
  <div class="main">
    <section id="content">
      <div class="wrapper">
        <article class="col1">
          <div class="pad2">
            <h2 class="pad_bot1 pad_top1">Contacts us</h2>
            <form id="ContactForm"  method="post" action="contacts.php" onsubmit="return valid()">
			<?php
 if(isset($_REQUEST["send"]))
 {
include('conn.php');
$p1=$_REQUEST["na"];
$p2=$_REQUEST["em"];
$p3=$_REQUEST["textarea"];
$str="insert into contact values('$p1','$p2','$p3')";


mysql_query($str);

 echo'<script language="javascript">';
 echo'alert("message is saved we will sent information in your email")';
 echo'</script>';
 }
?>
			
			
			
			
			
			
			
              <div>
                <div  class="wrapper"> <span>Your Name:</span>
                  <input type="text" class="input" name="na" id="na" placeholder="Enter your name" >
                </div>
                <div  class="wrapper"> <span>Your E-mail:</span>
                  <input type="text" class="input" name="em" id="em" placeholder="realstate@mail.com" >
                </div>
                <div  class="textarea_box"> <span>Your Message:</span>
                  <textarea name="textarea" id="textarea" placeholder="leave your message   ex:-help to buy a property" cols="1" rows="1"></textarea>
                </div>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" value="send" name="send" id="send"> </div>
            </form>
          </div>
        </article>             
          </form>
        </article>
      </div>
      <div class="wrapper">
        
         </div>
        </article>
      </div>
    </section>
  </div>
</div>
<!-- / content -->
<div class="body4">
  <div class="main">
    <!-- footer -->
     <footer> <span class="call">Contact us: <span>+918409174710</span></span> Copyright &copy; <a href="htttp://gmail.com">pradeepkumar20495@gmail.com</a> All Rights Reserved<br>
      pradeepkumar and team<a target="_blank" href="http://realestatehome.ml">realestatehome.com</a>
      <!-- {%FOOTER_LINK} -->
    </footer>
    <!-- footer -->
  </div>
</div>
<script>Cufon.now();</script>
</body>
</html>
