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
<script>
function valid()
{
	var count=0,num,c1,c2;
	
	
	if(c.value=="")
	{
		alert("must fill city");
		/*document.getElementById("k1").innerHTML="*Fill the name";*/
		return false;
	}
	if(a.value=="")
	{
		alert("Fill the area");
		/*document.getElementById("k2").innerHTML="*Fill the name";*/
		return false;
	}
	
	if(lp.value=="Lower case")
	{
		alert("select lower price range");
		/*document.getElementById("k2").innerHTML="*Fill the name";*/
		return false;
	}
	if(up.value=="Upper case")
	{
		alert("select upper price range");
		/*document.getElementById("k2").innerHTML="*Fill the name";*/
		return false;
	}
	if(b.value=="Selelct")
	{
		alert("select numbers of bedrooms");
		return false;
	}
	if(ba.value=="Select")
	{
		alert("select numbers of bathroom");
		return false;
	}
	if(r.value=="Select")
	{
		alert("you must select radius of your sqarfit requirement");
		return false;
	}
	if(f.value=="")
	{
		alert("you must upload a image of your property");
		return false;
	}
	
	
}
</script>
</script>
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
          <li ><a href="buying.php">Buy</a></li>
          <li id="menu_active"><a href="selling.php">Selling</a></li>
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
            <h2 class="pad_bot1 pad_top1">Home Price Estimater </h2>
            <div class="wrapper">
              <figure class="left marg_right1"><img src="price estimater.jpg" alt=""></figure>
              <p class="pad_bot1 color2">Let's assume you buy a property for Rs 25 lakh and sell it after five years for Rs 35 lakh, making a profit of Rs 10 lakh. However, your actual gain will be lower after indexation. Long-term capital gains from real estate are taxed at 20%. You cannot claim regular tax deductions against long-term capital gains..</p>
              <p>If you owned and lived in the place for two of the five years before the sale, then up to $250,000 of profit is tax-free. If you are married and file a joint return, the tax-free amount doubles to $500,000. The law lets you "exclude" this much otherwise taxable profit from your taxable income.</p>
            </div>
            <p>For example, if you bought 1000 units of a debt fund at Rs. 50 per unit in 2008-09 and sold the 1000 units in 2009-10 for Rs. 55, then:

(Purchase Price = Rs. 50,000 and Sale price = 55×1000 = Rs. 55,000)

a) Indexed Cost of Acquisition = 50,000 x (632/582) = 54,295.

b) Capital gain = 55,000-54,295 = 705.

c) Capital Gains tax = 20% of 705 = Rs. 141.</p>
             </div>
        </article>
        <article class="col2">
        <script >
        function upload()
        {
        
        document.getElementById ("k").src=f.value;
        alert(f.value);
        
        }
        </script>
          <form id="form_1" action="save.php" method="post" onsubmit="return valid()">
            
	  <div class="pad1">
              <h3>Enter  Property Details</h3>
              <div class="row">City<br>
                <input type="text"  name="c" id="c"  class="input">
				
              </div>
              <div class="row_select">   Area:<br>
               <input type="text" name="a" id="a" class="input">
              </div>
              <div class="row_select">
                <div class="cols"> Price Range:<br>
                  <select name="lp" id="lp">
                    <option>Lower case</option>
                    <option>200000</option>
                    <option>300000</option>
 		    <option>350000</option>
 		    <option>400000</option>
                    <option>450000</option>
                    <option>500000</option>
                    <option>550000</option>
                    <option>600000</option>
 		    <option>650000</option>
                  </select>
                </div>
                <div class="cols pad_left1"> to:<br>
                  <select name="up" id="up">
                    <option>Upper case</option>
                    <option>700000</option>
                    <option>750000</option>
 		    <option>800000</option>
 		    <option>850000</option>
 		    <option>900000</option>
 		    <option>950000</option>
 		    <option>1000000</option>
 		    <option>1050000</option>
		    <option>1100000</option>
                  </select>
                </div>
              </div>
              <div class="row_select">
                <div class="cols"> Bedroom(s):<br>
                  <select name="b" id="b">
                    <option>Select</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
		    <option>6</option>
		    <option>7</option>
		    <option>8</option>
		    <option>9</option>
		    <option>10</option>
                  </select>
                </div>
                <div class="cols pad_left1"> Bathroom(s):<br>
                  <select name="ba" id="ba">
                    <option>Select</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                     <option>4</option>

                  </select>
                	<div style="position: absolute; width: 123px; height: 161px; z-index: 3; left: 1095px; top: 209px" id="layer1">
&nbsp;
<img src="" id="k">

</div>
                </div>
              </div>
              <div class="row_select pad_bot1">
                <div class="cols"> Radius:<br>
                  <select name="r" id="r">
                    <option>Select</option>
                    <option>2000 sq.ft.</option>
                    <option>3000 sq.ft</option>
                    <option>4000 sq.ft</option> 
                    <option>4500 sq.ft</option>
		    <option>5000 sq.ft</option>
		    <option>5500 sq.ft</option>
		    <option>6000 sq.ft</option>
		    <option>6500 sq.ft</option>
		    <option>7000 sq.ft</option>

                      
                  </select>
                </div>
                
               

 <td><input type="file" name="f" id="f" onhange="upload()"></td>  <td>Upload Image </td>&nbsp;&nbsp;&nbsp;&nbsp;
               
                 <input type="submit" value="SAVE" >
				 
    </section>
  </div>
</div>
<!-- / content -->
<div class="body4">
  <div class="main">
    <!-- footer -->
    <footer> <span class="call">Contact us: <span>+918409174710</span></span> Copyright &copy; <a href="http://gmail.com">pradeepkumar20495@gmail.com</a> All Rights Reserved<br>
      pradeepkumar and team <a target="_blank" href="http://realestatehome.ml">realestatehome.com</a>
      <!-- {%FOOTER_LINK} -->
    </footer>
    <!-- / footer -->
  </div>
</div>
<script>Cufon.now();</script>
</body>
</html>
