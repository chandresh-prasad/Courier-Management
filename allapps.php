<?php
session_start(); 
if(isset($_SESSION['admin']))
{
?>
<!DOCTYPE html>
<html>
<head>
    <title>Omega Courier Service</title>
    <link rel="icon" type="img/png" href="img/icon.png">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main.css">
	<style type="text/css">
		
		body{
			background-image: url("pics/3.jpg");
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

        thead{
            background-color: #262626;
            color: #999;
            width: 100%;
        }
        
        table{
            margin-top: 20px;
        }
        td{
            background-color: #ffffff;
            font-size: 1.2em;
        }
        
    </style>
</head>
<body>
	
        
        <div class="container">
        	<div class="navbar-header"> 
        		<a class="navbar-brand" style="font-size:24px;" href="index.php">OMEGA<span class="text-warning" style="font-size:0.8em;"> COURIER SERVICE</span></a>
        	</div>
        	<div class="menu">
                <ul class="nav navbar-nav pull-right">
    				<li class="active"><a role="presentation" href="admin.php">orders</a></li>
    				<li><a role="presentation" href="update.php">Update</a></li> 
                    <li><a role="presentation" href="allapps.php">Apps</a></li> 
                </ul>
            </div>
        </div>
    </nav>

    <br><br>
<div class="text-center">
    <font  size=6 color="#ccc">All applications</font><br>
</div>

<div>
<?php
//session_start();
require_once('connect.php');

$tsql = "SELECT t_id FROM tender WHERE is_active = 1";
$tres = $conn->query($tsql);
while ($trow = $tres->fetch_assoc()) {
    $tid = $trow['t_id'];
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Application Id.</th>
                <th>Rate</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Tender ID</th>
                <th>Vendor Email<th>
            </tr>
        </thead>
        <?php
                $sql = "SELECT * FROM application WHERE t_id='$tid' ORDER BY rate ASC ";
                $result = $conn->query($sql);
                //while ($row = $result->fetch_assoc()) {
                    $row = $result->fetch_assoc();
                    $app = $row['a_id'];
                    $rate = $row['rate'];
                    $qty = $row['qty'];
                    $total = $row['total'];
                    $tid = $row['t_id'];
                    $vid = $row['v_id'];
                    
                    
                    ?>

                    <tbody>
                        <tr>
                            
                            <td><?php echo $app;  ?></td>
                            <td><?php echo $rate;  ?></td>
                            <td><?php echo $qty;  ?></td>
                            <td><?php echo $total;  ?></td>
                            <td><?php echo $tid;  ?></td>
                            <td><?php echo $vid;  ?></td>
                            <td></td>
                            
                            
                        </tr>
                    </tbody>
                    <?php
                //}
            }
        }
        else{
            echo "Your page is being Redirected..Please wait";
            header('Refresh:2 url=adminlog.php');
        }
        ?>
    </table>
</div>
<div class="footer text-center">
            <p>2017 © Omega Courier Service. All rights reserved.</p>

    </div>
</body>
</html>