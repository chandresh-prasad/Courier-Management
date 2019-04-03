<?php require_once('connect.php');
    session_start();
    if(isset($_SESSION['email']))
    {
    	$email=$_SESSION['email'];
    	$sql="SELECT first_name,last_name FROM user where email='$email'";
    	$result=$conn->query($sql);
    	$sname=$result->fetch_assoc();
    	$sfname=$sname['first_name'];
    	$slname=$sname['last_name'];
    	$padd1=$_POST['paddress1'];
    	$padd2=$_POST['paddress2'];
        $dadd1=$_POST['daddress1'];
        $dadd2=$_POST['daddress2'];
    	$rname=$_POST['rname'];
        if(isset($_SESSION['cost1']))
        {
            $cost=$_SESSION['cost1'];    
        }
        elseif (isset($_SESSION['cost2'])) 
        {
            $cost=$_SESSION['cost2'];
        }
        
        $origin=$_SESSION['scity'];
        $dest=$_SESSION['rcity'];
    	$sql1="INSERT INTO orders(cost,origin,destination,reciever_name,email) VALUES('$cost','$origin','$dest','$rname','$email')";
        $conn->query($sql1);
        $order_no = $conn->insert_id;
        
        
        
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Omega Couriers</title>
	<title>Omega Couriers</title>
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
                <li><a role="presentation" href="index.php" font style="font-size: 18px; color:  ;">HOME</a></li>
                <li><a role="presentation" href="track.php" font style="font-size: 18px; color: ;">TRACK</a></li> 
                <li><a role="presentation" href="about.php" font style="font-size: 18px; color:  ;">ABOUT</a></li>
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
    <div class="container text-center" style="width: 80%;"> 
		<div class="alert alert-success card"  role="alert">
			Congratulations!!! your Order have been booked Successfully.....<br>
            <h>
                YOUR ORDER NO. IS <?php echo $order_no;  ?>
            </h3>
		</div>
        
	</div>

	<div class="panel panel-info col-sm-4" style="margin-left: 230px">
        <div class="panel-heading  text-center">
        	<h class="panel-title ">Pickup Details:</h>
        </div>
    
        <div class="panel-body">
            <div >
                Name:<p class="text-center"><b> <?php echo $sfname." ".$slname; ?></b></p><br>
                Add1:<p class="text-center"><b> <?php echo $padd1; ?></b></p><br>
                Add2:<p class="text-center"><b> <?php echo $padd2; ?></b></p><br>
                city:<p class="text-center"><b> <?php echo $origin; ?></b></p><br>
                cost:<p class="text-center"><b> <?php echo $cost; ?></b></p>

            </div>
        </div>
    </div>

    <div class="panel panel-info col-sm-4" style="margin-left: 200px">
        <div class="panel-heading  text-center">
            <h class="panel-title ">Delivery Details:</h>
        </div>
    
        <div class="panel-body">
            <div >
                Recievers Name:<p class="text-center"><b> <?php echo $rname; ?></b></p><br>
                Add1:<p class="text-center"><b> <?php echo $dadd1; ?></b></p><br>
                Add2:<p class="text-center"><b> <?php echo $dadd2; ?></b></p><br>
                city:<p class="text-center"><b> <?php echo $dest; ?></b></p><br>
                <p class="text-center"><b></b></p></br>

            </div>
        </div>
    </div>
    <div class="footer text-center">
    <p>2015 &copy International Courier Service. All rights reserved.</p>

</div>

</body>
</html>