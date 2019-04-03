<?php
        require_once('connect.php');
        session_start(); 
        if (isset($_SESSION['admin']))
        {
            header('Refresh:2 url=admin.php');
        }

        else
        {
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

    <!-- --------------------------------------navbar------------------------------------------ -->
    
        
        <div class="container">
            <div class="navbar-header"> 
                <a class="navbar-brand" style="font-size: xx-large; font-weight: bold;" href="index.php">INTERNATIONAL<span class="" style="font-size: x-large;"> COURIER</span></a>
            </div>
            <div class="nav">
            <ul class="nav navbar-nav pull-right">
                <li><a href="index.php">HOME</a></li>
       <li><a href="about.php">ABOUT</a></li>
       <li><a href="product.php">PRODUCTS</a></li>
       <li><a href="quote.php">QUOTATION</a></li>
       <li><a href="track.php">TRACKING</a></li>
                <li><a role="presentation" href="admin.php">ORDERS</a></li> 
                <li><a role="presentation" href="update.php">UPDATE</a></li>
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

        <div class="container">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Admin Sign in</h3>
                        </div>
                        <div class="panel-body">
                        
                            <form role="form" action="adminlog.php" method="post">
                                <div class="form-group">
                                    <input type="text" name="adminid" class="form-control input-sm" placeholder="Admin id" required="">
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


<?php
        }

if(isset($_POST['adminid']) AND isset($_POST['password']))
{
    $id=$_POST['adminid'];
    $pass=$_POST['password'];

    $sql= "SELECT id from admin WHERE id='$id' AND password='$pass'";
    $result= $conn->query($sql);
    if($result->num_rows >0)
    {
        $_SESSION['admin']=$id;
        echo "Your page is being Redirected..Please wait";
        header('Refresh:2 url=admin.php');

    }
    else{
        echo "incorrect id or password";
    }

}
?>
      <div class="footer text-center">
        <p>2017 © International Couriers. All rights reserved.</p>
    
    </div>
  



</body>
</html>

