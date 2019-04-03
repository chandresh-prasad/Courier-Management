<html>
<head>
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script type="" src="bootstrap.min.js"></script>
    <script type="" src="jquery.min.js"></script>
	<style type="text/css">
	body{
        background-image: url("pics/.png");
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            background-attachment: fixed;
            
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
<?php

?>
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
       <li><a href="help.html">HELP</a></li>
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
                        
                ?>  
                <li><a role="presentation" href="login.php">Login</a></li>
                <?php
                    }
                ?>
            </ul>
            </div>
        </div>
        
 <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
  </div>
</div>
				
	
    <div>
        <div class="">
    	
		<h2 class="text-center bg-grey text-grey">INTERNATIONAL COURIER SERVICES</h2><br>
		<p>		Express Shipping Service across the World.</p><br><br>
		<p>		Couriers are distinguished from ordinary mail services by features such as speed, security, tracking, signature, specialization and individualization of express services, and swift delivery times, which are optional for most everyday mail services. As a premium service, couriers are usually more expensive than standard mail services, and their use is normally limited to packages where one or more of these features are considered important enough to warrant the cost.</p><br><br><br>
		<p>		Express mail is an accelerated mail delivery service for which the customer pays a surcharge and receives faster delivery. Express mail is a service for domestic and international mail and is in most countries governed by a country's own postal administration. Since 1998, the international accelerated delivery services are governed by the EMS Cooperative.</p><br><br><br>
		<p>		Many transportation logistics firms offer similar accelerated services. UPS, DHL and FedEx are the most popular alternatives. However in many countries such alternative carriers shipments have different status for several legal purposes. E.g. in Russia shipments from abroad to individuals for private needs are exempt from customs duties of value is less than 1000E if sent via post or EMS, while when sent by other means the exemption applies to values below 250E only.In some countries legal notification sent by post and EMS are deemed made on the date of dispatch, while for other couriers on the date of delivery only.</p><br><br>
    </div>

</div>



<div class="footer text-center">
        <p>2017 © International Couriers. All rights reserved.</p>
    
    </div>


</body>

</html>