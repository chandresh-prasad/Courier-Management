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
    			

<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
  </div>
</div>

    <div class="container text-center">
        
    	<div class="row">
    		<form class="form-horizontal" action="omega.php" method="post">
	    		<div class="col-md-7"  style="background-color:rgba(89, 89, 89, 0.8); padding-top: 50px;padding-bottom: 50px; margin-top: 50px; margin-left:200px;  border-radius: 4px;">
	    			
			        <div class="form-group">
			        	<label class="control-label col-sm-4" for="pstate">Pickup State:</label>
			        	<div class="col-sm-8">
			        		<input class="form-control" type="text" id="pstate" name="pstate">
			        	</div>
			        </div>
			        
			        <div class="form-group">
			        	<label class="control-label col-sm-4" for="pcity">Pickup City:</label>
			        	<div class="col-sm-8">
			        		<input class="form-control" type="text" id="pcity" name="pcity">
			        	</div>
			        	
			        </div>
			        <div class="form-group">
			        	<label class="control-label col-sm-4">Pickup Pincode:</label>
			        	<div class="col-sm-8">
			        		<input class="form-control" type="text" name="ppincode">
			        	</div>
			        </div>
	    		</div>


	    		<div class="col-md-7"  style="background-color:rgba(89, 89, 89, 0.8); padding-top: 50px;padding-bottom: 50px; margin-top: 30px; margin-left:200px;  border-radius: 4px;">
	    			<div class="form-group">
			        	<label class="control-label col-sm-4" for="dstate">Delivery State:</label>
			        	<div class="col-sm-8">
			        		<input class="form-control" type="text" id="dstate" name="dstate">
			        	</div>
			        </div>
			        
			        <div class="form-group">
			        	<label class="control-label col-sm-4" for="dcity">Delivery City:</label>
			        	<div class="col-sm-8">
			        		<input class="form-control" type="text" id="dcity" name="dcity">
			        	</div>
			        	
			        </div>
			        <div class="form-group">
			        	<label class="control-label col-sm-4">Delivery Pincode:</label>
			        	<div class="col-sm-8">
			        		<input class="form-control" type="text" name="dpincode">
			        	</div>
			        </div>
	    		</div>
                
                
	    		<div class="col-md-7"  style="background-color: rgba(89, 89, 89, 0.8); padding-top: 50px;padding-bottom: 50px; margin-top: 30px;margin-bottom: 100px; margin-left:200px;  border-radius: 4px;">
	    		    <div class="form-group">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="type">Type:</label>
                                <div class="radio col-sm-5">
                                    <label>
                                            <input class="" type="radio" name="type">&nbsp;&nbsp;Document

                                    </label>
                                </div>
                        
                                <label class="control-label col-sm-4" for="type"></label>
                                <div class="radio col-sm-5">
                                    <label>
                                            <input class="" type="radio" name="type">&nbsp;&nbsp;Parcel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </label>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="weight">Weight:</label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" name="weight" placeholder="in grams">
                                </div>
                        </div>
                        
                            
                                
	    			
	    		 </div>
                     <div>
                        <input type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top:5px;" href="omega.php" value="Get Quote">
                    </div>
    		  </form>
    	      </div>
              <!--
              <div class="col-md-5">
                  <br><br><br><br><br>
                 
                        
                        <span style="font-size: 2.8em; color:#e07b23" class=""><span class="glyphicon glyphicon-earphone" aria-hidden=true style="color:black;"></span>
                            1800-000-000</span>
                    
              </div>  -->

        

        </div>
    </div>
  
    <div class="footer text-center">
    <p>2017 © International Couriers. All rights reserved.</p>

</div>  
    
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>