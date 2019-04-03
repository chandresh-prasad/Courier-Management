<?php

?>
<!doctype HTML>
<html>
<head>
	<title>Courier Service</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script type="" src="bootstrap.min.js"></script>
    <script type="" src="jquery.min.js"></script>
	<style type="text/css">
  body

  h2{

    text-align: center;

  }
  background-image: url("pics/.png");
      background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            background-attachment: fixed;
            
    }
     body:before {
                content:"";
                display:block;
                position:fixed;
                width:100%;
                height:100%;
                left:0;
                top:0;
                z-index:-1;
               
        }
        
        li{float: left;}
        
        .how{
            width: 100%;
            height: auto;
            margin-top: 50px;
            color: #e07b23;
            padding: 0%;
            
        }
        
        .how-head{
            background-color: #262626;
        }
        .desc{
           
            background-color: rgba(38,38,38,0.6);
            border: 2px solid black;
            border-radius: 10px;
            color: #999;
            width: 60%;
        }
        
         .footer{
            position: static;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: #595959;
            width: 100%;
            margin-top: 10px;
            padding: 1rem;
            color: #fff;
        }
        .desc p{
            color: aliceblue;
            padding: 5px;
        }
        .prohibited{
            background-color: rgba(38,38,38,0.6);
            border: 2px solid black;
            border-radius: 10px;
            width: 60%;
            color: aliceblue;
        }
        .pro-head{
            color: #e07b23;
            background-color: #262626;
        }
  </style>

	</head>
<body>

<div class="container">
    
    <div class="navbar-header">
  
      <a class="navbar-brand" style="font-size: xx-large; font-weight: bold;" href="index.php">INTERNATIONAL<span class="" style="font-size: x-large;"> COURIER</span></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
       <li><a href="about.php">ABOUT</a></li>
       <li><a href="product.php">PRODUCTS</a></li>
       <li><a href="quote.php">QUOTATION</a></li>
       <li><a href="track.php">TRACKING</a></li>
       <!-- <li><a href="contact.html">CONTACT US</a></li> -->
       <li><a href="help.php">HELP</a></li>
       
       
      
      <?php
                    session_start();
                    require_once('connect.php');
                    if(isset($_SESSION['email']))
                    {   
                        $name=$_SESSION['first_name'];

                ?>
                <li><a role="presentation" href="#" font style="font-size: 18px; color: #0052cc ;"><?php echo $name; ?></a>
                <div class="menuac">
                    <ul>
                        <li><a href="account.php" style="font-size:10px ">Your Orders</a></li><br>
                        <!--<li style="display: block;"><button class="btn btn-primary btn-sm btn-block" onclick="">Sign out</button></li>-->
                       <li style=""><a class="button btn btn-primary btn-sm btn-block" href="logout.php">Sign out</a></li>
                    </ul>
                </div>

                </li>
                <?php 
                    }
                    else
                    {
                        
                ?>  <li><a href="login.php">REGISTER</a></li>
                <li><a role="presentation" href="login.php">LOGIN</a></li>
                
                <?php
                    }
                ?>
            
    </div>
  </div>



<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
  </div>
</div>

<div class="ql">
   	<div class="container">
    	 <h2>QUICK LINKS</h2>
    	 <p>We strive to deliver a level of service that exceeds the expectations of our customers.</p>
    	<div class="row">
    		<div class="col-md-4">
    			<div class="thumbnail">
      				<img src="pics/paris.png">
     			</div>
     			<div class="thumbnail">
      				<img src="pics/tokyo.png">
    			</div>
    		</div>
    		<div class="col-md-4">
    			<div class="thumbnail">
      				<img src="pics/ny.png">
    			</div>
    			<div class="thumbnail">
      				<img src="pics/mexico-city.png">
    			</div>
    		</div>
    		<div class="col-md-4">
    			<div class="thumbnail">
      				<img src="pics/sing.jpg">
    			</div>
   				<div class="thumbnail">
      				<img src="pics/rl.png">
   				</div>
    		</div>
       </div>
   </div>
</div>



 <div class="learn-more">
    <div class="container">
      <div class="row">
		    <div class="col-md-3">
				<h3>Products</h3>
  			    <p>We have right combination of products for all your courier and corgo needs.</p>
    		    <p> <a href="#">See product types and services.</a> </p>
			</div>	
   
      
			<div class="col-md-3">
    			<h3>Destinations</h3>
     			<p>Browse throught the domestic and international destinations we serve.</p>
     			<p> <a href="#">Learn more about Destinations</a> </p>
			</div>


			<div class="col-md-3">
				<h3>Find a Branch</h3>
				<p>Locate our nearest office along with pincode search facility.</p>
				<p><a href="#">Learn more about Branches.</a></p>
			</div> 

			<div class="col-md-3">
				<h3>Customer Support</h3>
				<p>From Verified ID to our worldwide customer support team,we've got your back.</p>
				<p><a href="#">Learn about trust at RCS.</a></p>
			</div> 

	</div>
 </div>
</div>
<div class="footer text-center">
        <p>2017 © International Couriers. All rights reserved.</p>
        
    </div>
<script type="text/javascript" src="jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js.js"></script>
</body>
</html>
