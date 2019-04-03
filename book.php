<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
    <title>International Courier Service</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script type="" src="bootstrap.min.js"></script>
    <script type="" src="jquery.min.js"></script>
	<style type="text/css">
		
		body{
            background-image: url("pics/.jpg");
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
        .footer{
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            background-color:  #595959;
            width: 100%;
            margin-top: 10px;
            color: #fff;
            padding: 1rem;
        
        }

        li{float: left;}

        thead{
            background-color: #262626;
            color: #fff;
            width: 100%;
        }
        
        table{
            margin-top: 20px;
        }
        td{
            background-color: #fff;
            font-size: 1.2em;
        }
       
    
    </style>
</head>
<body>
    <?php
    if(isset($_SESSION['email']))
    {

    ?>
	<!-- --------------------------------------navbar------------------------------------------ -->
   
        
        <div class="container">
            <div class="navbar-header"> 
                <a class="navbar-brand" style="font-size: xx-large; font-weight: bold;" href="index.php">INTERNATIONAL<span class="" style="font-size: x-large;"> COURIER</span></a>
            </div>
            <div class="menu">
            <ul class="nav navbar-nav pull-right"> 
                <li><a role="presentation" href="index.php" font style="font-size: 18px; color: ;">Home</a></li>
                <li><a role="presentation" href="track.php" font style="font-size: 18px; color:  ;">Track</a></li> 
                <li><a role="presentation" href="about.php" font style="font-size: 18px; color:  ;">About</a></li>
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
                <li><a role="presentation" href="login.php">Login</a></li>
                <?php
                    }
                ?>
            </ul>
            </div>
        </div>
    </nav>
    <!-- --------------------------------------NAVBAR ENDS------------------------------------------ -->
<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
  </div>
</div>
    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <form class="form-horizontal" action="done.php" method="post">
                
                <div class="col-md-5" style="background-color: rgba(245,245,245,0.4); padding-top: 10px; border-radius: 4px; color: #333;">
                    
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="paddress1">Pickup Address</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" id="paddress1" name="paddress1" placeholder="line1">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="paddress2"></label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" id="paddress2" name="paddress2" placeholder="line2">
                        </div>
                        
                    </div>
                    
                </div>


                <div class="col-md-5" style="background-color:rgba(245,245,245,0.4); padding-top: 10px; margin-left: 10px; border-radius: 4px;color: #333;">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="daddress1" >Delivery Address</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" id="daddress1" name="daddress1" placeholder="line1">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="daddress2"></label>
                        <div class="col-sm-8">
                            
                            <input class="form-control" type="text" id="daddress2" name="daddress2" placeholder="line2">
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-md-5" style="background-color: rgba(245,245,245,0.4); padding-top: 10px; border-radius: 4px; color: #333;">

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="rname">Recievers Name:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="rname" placeholder="Recievers Name">
                        </div>
                    </div>                
                </div>
                
                
                
                    
                     <div style="width: 85%;">
                        <input type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top:5px;" value="BOOK" >
                    </div>

                

            </form>
              
            <!--<div class="container text-center" style="width: 40%;"> 
                <div class="alert alert-info card" role="alert">
                     <?php echo $_SESSION['email']; ?>.. Your Order has been Booked Successfully!...
                     This Page will soon be ridirected
                </div>
            </div>
                <?php header('Refresh:2 url=index.html'); ?>-->
              <!--<script>
                  function done()
                  {
                    document.write("Congratulations, your order has been placed");
                    //<h1>asdasd</h1>
                  }
              </script>-->

        </div>
    </div>
    <div class="footer text-center">
            <p>2017 © International Courier Service All rights reserved.</p>

    </div>
    <?php
    }
    else {
        ?>
        <div class="container text-center" style="width: 40%;"> 
            <div class="alert alert-danger card" role="alert">
                    You need to login first!.. 
            </div>
        </div>
      <?php   header('Refresh:2 url=login.php'); 
      }
      ?>
</body>
</html>