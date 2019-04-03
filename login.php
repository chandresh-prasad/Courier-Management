<!DOCTYPE html>
<html>
<head>
    <title>International Courier Service</title>

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
            background-color: #595959;
            width: 100%;
            margin-top: 10px;
            padding: 1rem;
            color: #fff;
        }
        .centered-form{
            margin-top: 60px;
        }

        .centered-form .panel{
            background: rgba(245, 245, 245, 0.6);
          box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;

}

    </style>
</head>
<body>
<?php
include("header.php");
?>

    <?php require_once('adduser.php');
    session_start(); ?>
	 <!-- --------------------------------------navbar------------------------------------------ -->


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
                <li><a role="presentation" href="#" font style="font-size: 18px; color: #fff ;"><?php echo $name; ?></a>
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
        if (isset($_SESSION['email']))
        {

                ?>
                <div class="container text-center" style="width: 40%;">
                        <div class="alert alert-danger card" role="alert">
                                you are already logged in
                        </div>
                </div>
                <?php
                    $user=$_POST['first_name'];
                    echo "$user";
                ?>

                <?php
                exit();

        }
    ?>
      <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-primary">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Sign in</h3>
			    </div>
                    <div class="panel-body">

                    <form role="form" action="login.php" method="post">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required="">
                        </div>


                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required="">
                        </div>



                        <input type="submit" value="Sign in" class="btn btn-primary btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <!--Register Panel Starts-->
    <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-primary">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Sign up for International Courier Service</h3>
			    </div>
                    <div class="panel-body">
                    <form role="form" action="login.php" method="post">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                     <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" required="">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="Phone no." required="">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required="">
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required="">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required="">
                                </div>
                            </div>

                        </div>

                        <input type="submit" value="Register" class="btn btn-primary btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
