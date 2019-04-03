
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

        
   <div class="container">
            <div class="navbar-header">
  
      <a class="navbar-brand" style="font-size: xx-large; font-weight: bold;" href="index.php"><font color="#595959">INTERNATIONAL<span class="" style="font-size: x-large;"> COURIER SERVICE</span></a></font>
    </div>
            <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><font color="#595959">HOME</a></li></font>
       <li><a href="about.php"><font color="#595959">ABOUT</a></li></font>
       <li><a href="product.php"><font color="#595959">PRODUCTS</a></li></font>
       <li><a href="quote.php"><font color="#595959">QUOTATION</a></li></font>
       <li><a href="track.php"><font color="#595959">TRACKING</a></li></font>
       <!-- <li><a href="contact.html">CONTACT US</a></li> -->
       <li><a href="help.html"><font color="#595959">HELP</a></li></font>
                <?php
                    session_start();
                    require_once('connect.php');
                    if(isset($_SESSION['email']))
                    {   
                        $name=$_SESSION['first_name'];

                ?>
                <li><a role="presentation" href="#" font style="font-size: 18px; color: #595959 ;"><?php echo $name; ?></a>
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
    
<br><br>
<div class="text-center">
    <font  size=6 color="#595959">Your Orders</font><br>
</div>

<div>
    <table class="table">
        <thead>
            <tr>
                <th>Order no.</th>
                <th>Origin</th>
                <th>Destination</th>
                <th>Booking date</th>
                <th>Receivers name</th>
                <th>Cost<th>
                <th>Status</th>
            </tr>
        </thead>
        <?php 
            
            $email= $_SESSION['email'];            
            $sql = "SELECT order_no, origin, destination, book_date, reciever_name, cost, status FROM orders WHERE email='$email'";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                
                $order = $row['order_no'];
                $orig = $row['origin'];
                $dest = $row['destination'];
                $bookdate = $row['book_date'];
                $reciever_name = $row['reciever_name'];
                $cost = $row['cost'];
                $status = $row['status'];
                
                ?>

                <tbody>
                    <tr>
                        
                        <td><?php echo $order;  ?></td>
                        <td><?php echo $orig;  ?></td>
                        <td><?php echo $dest;  ?></td>
                        <td><?php echo $bookdate;  ?></td>
                        <td><?php echo $reciever_name;  ?></td>
                        <td><?php echo $cost;  ?></td>
                        <td><?php echo $status; ?></td>
                        <td></td>
                    </tr>
                </tbody>
                <?php
            }

        ?>
    </table>
</div>
<div class="footer text-center">
        <p>2017 © International Courier Service. All rights reserved.</p>
    
</div>

</body>
</html>