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
    <!-- --------------------------------------navbar------------------------------------------ -->
    
        
        <div class="container">
            <div class="navbar-header"> 
                <a class="navbar-brand" style="font-size: xx-large; font-weight: bold;" href="index.php">INTERNATIONAL<span class="" style="font-size: x-large;"> COURIER</span></a>
            </div>
            <div class="menu">
            <ul class="nav navbar-nav pull-right"> 
                <li><a role="presentation" href="index.php" font style="font-size: 18px; color:  ;">Home</a></li>
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
        <?php
            function calculate(){
                $total=100;
                $state1=$_POST["pstate"];
                $state2=$_POST["dstate"];
                $city1=$_POST["pcity"];
                $city2=$_POST["dcity"];
                $weight=$_POST["weight"];
                if($state1==$state2)
                {
                    if($city1==$city2)
                        $total=$total+50;
                    else   
                        $total=$total+100;
                }
                else
                {
                    $total=$total+150;
                }
                $total=$total+$weight/10;
                $_SESSION['cost1']=$total;
                
                echo "<strong>RS.$total</strong>";
                
            }
            function calculate1(){
                $total=0;
                $state1=$_POST["pstate"];
                $state2=$_POST["dstate"];
                $city1=$_POST["pcity"];
                $city2=$_POST["dcity"];
                $weight=$_POST["weight"];
                if($state1==$state2)
                {
                    if($city1==$city2)
                        $total=$total+50;
                    else   
                        $total=$total+100;
                }
                else
                {
                    $total=$total+150;
                }
                $total=$total+$weight/10;
                $_SESSION['cost2']=$total;

                echo "<strong>RS.$total</strong>";
                
            }
            
            $_SESSION['scity']=$_POST['pcity'];
            $_SESSION['rcity']=$_POST['dcity'];


        function func()
        {
            $_SESSION['cost']=$_SESSION['cost1'];
        }
        function func1()
        {
            $_SESSION['cost']=$_SESSION['cost2'];
        }
        ?>
        <div class="container">
            <form action="book.php" method="post">

                <div class="col-md-5" style="background-color: rgba(245,245,245,0.4); padding-top: 10px; border-radius: 4px;">
                        <h2>Quick Delivery</h2>                  
                       <div class="col-sm-8" style="color: #000;"><h6>Pickup Date: <?php echo date("d-m-Y", time()+86400); ?></h6></div>
                       <div class="col-sm-8" style="color: #000;"><h6>Delivery date: 1-3 Business days</h6></div>
                        <h4 style="float: right;"><?php calculate();  ?>    <br>      </h4>
                       <div class="text-center"><input type="submit" name="book" value="BOOK NOW" class="btn btn-primary "></div>
                </div>
                <div class="col-md-5" style="background-color: rgba(245,245,245,0.4); padding-top: 10px; border-radius: 4px; margin-left: 10px;">
                        <h2>Normal Delivery</h2>
                        <div class="col-sm-8" style="color: #000;"><h6>Pickup Date: <?php echo date("d-m-Y", time()+86400); ?></h6></div>
                       <div class="col-sm-8" style="color: #000;"><h6>Delivery date: 3-9 Business days</h6></div>
                       <h4 style="float: right;"><?php calculate1();  ?><br>          </h4>
                       <div class="text-center"><input type="submit" name="book1" value="BOOK NOW"  class="btn btn-primary "></div>
                </div>
            </form>
                
            <div class="panel panel-primary" style="margin-top: 20%;">
                <div class="panel-heading"><h3 class="panel-title">Instructions</h3></div>
                <div class="panel-body">
                    <p>-Pickup attempt will be made on next day of booking.</p>
                    <p>-Payment should be done at the time of pickup in cash or cheque.</p>                    
                    <p>-In case of cancellation or failure of courier(i.e If the delivery address is not correct) 90% of the total ammount will be refunded.</p>
                </div>
            </div>
        </div>
        

        <div class="footer text-center">
            <p>2015 © International Courier Service. All rights reserved.</p>

        </div>
    </body>
</html>
