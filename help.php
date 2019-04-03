<!DOCTYPE html>
<html>
<head>
    <title>International Courier Service</title>
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
            position: absolute;
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
<?php
include("header.php");
require_once('connect.php');
?>
<body>
    
        
        <div class="container">
            <div class="navbar-header">
  
      <a class="navbar-brand" style="font-size: xx-large; font-weight: bold;" href="index.php"><font color=>INTERNATIONAL<span class="" style="font-size: x-large;"> COURIER</span></a></font>
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
                       <li style="display: block;"><a class="button btn btn-primary btn-sm btn-block" href="logout.php">Sign out</a></li>
                    </ul>
                </div>

                </li>
                <?php 
                    }
                    else
                    {
                        
                ?>  
                <li><a role="presentation" href="login.php"><font color="#595959">Login</a></li>
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


 <div class="how">
        <div class="text-center how-head">
            <h1>How It Works?</h1>
        </div>
        <div  class="text-center desc container">
            <h3>BOOK COURIERS ONLINE</h3>
            <p>Get an instant courier delivery quote, at best price.</p>
            <h3>WE MAKE IT SIMPLE TO SHIP</h3>
            <p>Get free door pick up from anywhere in INDIA.</p>
            <h3>FAST DELIVERY AND ONLINE TRACKING SERVICE</h3>
            <p>Get fast delivery and track your order anytime online.</p>
        </div>
    </div>
    </div>

     <div class="footer text-center">
    <p>2017 © International Couriers. All rights reserved.</p>

</div>  
    
    
    
    
    
        
  

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>
