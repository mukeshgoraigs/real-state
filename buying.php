<!DOCTYPE html>
<html lang="en">
<head>
<title>Real Estate | Buying</title>
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
<body id="page2">
<script>
function valid()
{
	var count=0,num,c1,c2;
	
	
	if(c.value=="Select")
	{
		alert("must fill city");
		/*document.getElementById("k1").innerHTML="*Fill the name";*/
		return false;
	}
	if(a.value=="Select")
	{
		alert("Fill the area");
		/*document.getElementById("k2").innerHTML="*Fill the name";*/
		return false;
	}
	
	if(lp.value=="Select")
	{
		alert("Select lower price range");
		/*document.getElementById("k2").innerHTML="*Fill the name";*/
		return false;
	}
	if(up.value=="Select")
	{
		alert("Select upper price range");
		/*document.getElementById("k2").innerHTML="*Fill the name";*/
		return false;
	}
	if(b.value=="Select")
	{
		alert("Select numbers of bedrooms");
		return false;
	}
	if(ba.value=="Select")
	{
		alert("Select numbers of bathroom");
		return false;
	}
	if(r.value=="Select")
	{
		alert("you must Select radius of your sqarfit requirement");
		return false;
	}
	
}
</script>
<div class="body1">
  <div class="main">
    <!--header -->
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
          <li id="menu_active"><a href="buying.php">Buying</a></li>
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
            <h2 class="pad_bot1 pad_top1">Buy Your Own House</h2>
            <p class="pad_bot1 color2">Basic Rental Properties. This is an investment as old as the practice of land ownership. A person will buy a property and rent it out to a tenant. The owner, the landlord, is responsible for paying the mortgage, taxes and costs of maintaining the property</p>
            <p class="pad_bot2">The key parameter in determining whether to buy or rent a home is property cost vis-à-vis rental value. With the new year ushering in cheaper home loans, we study the ArthaYantra Buy Vs Rent Report 2017 that looks at 12 cities across India to map where buying is affordable </p>
          </div>
          <div class="pad_left1">
            <div class="wrapper pad_bot3">
              <article class="cols">
                <ul class="list2">
                  Many buy a home early in life…' BSManu Rao ? ? What is the right age to buy property? What sort of tax benefits do you get? Buying a property involves a ...
                </ul>
              </article>
              <article class="cols pad_left1">
                <ul class="list2">
                  The exorbitant cost of property in Hong Kong leaves potential first-time buyers with a question: at what point does buying a flat become cheaper ...
                </ul>
              </article>
              <article class="cols pad_left1">
                <ul class="list2">
                  Ranchi TODAY spent four months cataloging every property Trump's companies own ... They could buy in the name of a shell company, making it ...
                </ul>
              </article>
            </div>
           </div>
        </article>
        <article class="col2">
          
             <form id="form_1" action="search.php" method="post" onsubmit="return valid()">
            <div class="pad1">
              <h3>Find Your Property</h3>
              <div class="row_Select">City<br>
                <Select name="c" id="c"><option>Select</option>
				<?php
include("conn.php");
$res=mysql_query("Select distinct city from p_info");
$count=mysql_numrows($res);
$x=0;
while($x<$count)
{
	$p1=mysql_result($res,$x,"city");
	echo$p1;
	$x++;
	?>
	<option><?php echo$p1;?></option>
	<?php

	}
				?>
				</Select>
              </div>
               <div class="row_Select"> Area:<br>
                
			   
			   <Select name="a" id="a"><option>Select</option>
				<?php
include("conn.php");
$res=mysql_query("Select distinct area from p_info");
$count=mysql_numrows($res);
$x=0;
while($x<$count)
{
	$p1=mysql_result($res,$x,"area");
	echo$p1;
	$x++;
	?>
	<option><?php echo$p1;?></option>
	<?php

	}
				?>
				</Select>
			             
              </div>
              <div class="row_Select">
                <div class="cols"> Price Range:<br>
                  
				  
				  <Select name="lp" id="lp"><option>Select</option>
				<?php
include("conn.php");
$res=mysql_query("Select distinct l_price from p_info");
$count=mysql_numrows($res);
$x=0;
while($x<$count)
{
	$p1=mysql_result($res,$x,"l_price");
	echo$p1;
	$x++;
	?>
	<option><?php echo$p1;?></option>
	<?php

	}
				?>
				</Select>
				 </div>
                <div class="cols pad_left1"> to:<br>
                  				  <Select name="up" id="up"><option>Select</option>
				<?php
include("conn.php");
$res=mysql_query("Select distinct u_price from p_info");
$count=mysql_numrows($res);
$x=0;
while($x<$count)
{
	$p1=mysql_result($res,$x,"u_price");
	echo$p1;
	$x++;
	?>
	<option><?php echo$p1;?></option>
	<?php

	}
				?>
				</Select>
				 </div>
              </div>
              <div class="row_Select">
                <div class="cols"> Bedroom(s):<br>
                  
				  <Select name="b" id="b"><option>Select</option>
				<?php
include("conn.php");
$res=mysql_query("Select distinct no_of_bedroom from p_info");
$count=mysql_numrows($res);
$x=0;
while($x<$count)
{
	$p1=mysql_result($res,$x,"no_of_bedroom");
	echo$p1;
	$x++;
	?>
	<option><?php echo$p1;?></option>
	<?php

	}
				?>
				</Select>
				                 </div>
                <div class="cols pad_left1"> Bathroom(s):<br>
                  				  <Select name="ba" id="ba"><option>Select</option>
				<?php
include("conn.php");
$res=mysql_query("Select distinct no_of_bathroom from p_info");
$count=mysql_numrows($res);
$x=0;
while($x<$count)
{
	$p1=mysql_result($res,$x,"no_of_bathroom");
	echo$p1;
	$x++;
	?>
	<option><?php echo$p1;?></option>
	<?php

	}
				?>
				</Select>
				 </div>
              </div>
              <div class="row_Select pad_bot1">
                <div class="cols"> Radius:<br>
                  
				  <Select name="r" id="r"><option>Select</option>
				  
				  
				<?php
include("conn.php");
$res=mysql_query("Select distinct radius from p_info");
$count=mysql_numrows($res);
$x=0;
while($x<$count)
{
	$p1=mysql_result($res,$x,"radius");
	echo$p1;
	$x++;
	?>
	<option><?php echo$p1;?></option>
	<?php

	}
				?>
				</Select>
				 </div>
                <div class="cols pad_left1"> <a href="#" class="button" ><input type="submit" value="searh now"></a> </div>
              </div>
              
          </form>
                     </article>
      </div>
      <div class="wrapper">
        <article class="col1">
          <div class="pad2">
            <h2 class="pad_bot1">Help For Buying</h2>
            <p>Help to Buy is a government scheme that means you could move home with a deposit as low as 5%. Whether you're taking your first step onto the property ladder or moving up a rung, we've put together everything you need to know about the two options available: Mortgage Guarantee and Equity Loan.</p>
            <div class="wrapper pad_bot3">
              <figure class="left marg_right1"><a href="search.php"><img src="images/page2_img1.jpg" alt=""></a></figure>
              <figure class="left marg_right1"><a href="search.php"><img src="images/page2_img2.jpg" alt=""></a></figure>
              <figure class="left marg_right1"><a href="search.php"><img src="images/page2_img3.jpg" alt=""></a></figure>
              <figure class="left marg_right1"><a href="search.php"><img src="images/page2_img4.jpg" alt=""></a></figure>
              <figure class="left"><a href="search.php"><img src="images/page2_img5.jpg" alt=""></a></figure>
            </div>
            <p>Homeownership can be one key to self-sufficiency for low-income families, building assets for families and stability and pride for neighborhoods. Through HOPE I and other programs, HUD is working to make homeownership possible for thousands of families now living in public housing.</p>
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
     <footer> <span class="call">Contact us: <span>+918409174710</span></span> Copyright &copy; <a href="http://gmail.com">pradeepkumar20495@gmail.com</a> All Rights Reserved<br>
      pradeepkumar and team<a target="_blank" href="http://realestatehome.ml">realestatehome.com</a>
      <!-- {%FOOTER_LINK} -->
    </footer>
    <!-- / footer -->
  </div>
</div>
<script>Cufon.now();</script>
</body>
</html>
