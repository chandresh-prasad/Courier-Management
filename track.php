<?php require_once('connect.php');
include("header.php");

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>International Courier Service</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script type="" src="bootstrap.min.js"></script>
    <script type="" src="jquery.min.js"></script>


	<style type="text/css">

		body{
			background-image: url("pics/grey.png");
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


        .footer{
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            background-color:  #595959;
            width: 100%;
            margin-top: 10px;
            color: #FFF;
            padding: 1rem;

        }

        .track{
            font-size: 1.5em;


        }
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


<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
  </div>
</div>
<style>

    .navbar {
    margin-bottom: 0;
    background-color: #404040;
    z-index: 9999;
    border: 0;
    font-size: 20px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
    color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #404040 !important;
    background-color: #fff !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}
</style>

    </nav>

<br><br><br>
<div class="track text-center">
    <form action="track.php" method="post">
        <font  size=5 color="#333">Track Your Order:</font><br>
        <input type="text" name="order_no" style="margin-top:5px; color: #333" placeholder="Order no.">
        <br>
        <input type="submit" class="btn btn-primary btn-lg" style="margin-top:5px; color: #333;" value="Track">

    </form>
</div>
<?php

    if(isset($_POST['order_no']))
    {
        $order_no=$_POST['order_no'];

        $sql = "SELECT order_no FROM orders WHERE order_no = '$order_no'";
        $sql1 = "SELECT book_date FROM orders WHERE order_no = '$order_no'";
        $sql2 = "SELECT origin FROM orders WHERE order_no = '$order_no'";
        $sql3 = "SELECT destination FROM orders WHERE order_no = '$order_no'";
        $sql4 = "SELECT reciever_name FROM orders WHERE order_no = '$order_no'";
        $sql5 = "SELECT status FROM orders WHERE order_no = '$order_no'";
        $result=$conn->query($sql);
        $book_date=$conn->query($sql1);
        $origin=$conn->query($sql2);
        $dest=$conn->query($sql3);
        $recn=$conn->query($sql4);
        $status=$conn->query($sql5);
        if ($result->num_rows > 0) {
            $order = $result->fetch_assoc();
            $bookdate = $book_date->fetch_assoc();
            $from = $origin->fetch_assoc();
            $to = $dest->fetch_assoc();
            $reciever = $recn->fetch_assoc();
            $statuss = $status->fetch_assoc();
        }
        else{
            ?>
            <div class="container text-center" style="width: 20%;">
                 <div class="alert alert-danger card" role="alert">
                    Invalid Order no.
                </div>
            </div><?php
        }
    }

?>

<div>

    <div class="track-details">
        <table class="table">
            <thead>
                <tr>
                    <th>Order no.</th>
                    <th>Booking date</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Receivers name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td><?php echo $order['order_no'];  ?></td>
                    <td><?php echo $bookdate['book_date'];  ?></td>
                    <td><?php echo $from['origin'];  ?></td>
                    <td><?php echo $to['destination'];  ?></td>
                    <td><?php echo $reciever['reciever_name'];  ?></td>
                    <td><?php echo $statuss['status'];  ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>






<div class="footer text-center">
        <p>2017 © International Couriers. All rights reserved.</p>

</div>
</body>
</html>
