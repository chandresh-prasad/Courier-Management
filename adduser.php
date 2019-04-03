<?php 
	require_once('connect.php');

	if(isset($_POST['email']) ? $_POST['email']:''){
		if  (
			isset($_POST['first_name']) ? $_POST['first_name'] : '' &&
			isset($_POST['last_name']) ? $_POST['last_name'] : ''&&
			isset($_POST['email']) ? $_POST['email'] : '' &&
			isset($_POST['password']) ? $_POST['password'] : '' &&
			isset($_POST['password_confirmation']) ? $_POST['password_confirmation'] : '' &&
			isset($_POST['phone']) ? $_POST['phone'] : ''
			)
		{

			$phone = $_POST['phone'];

			$username = $_POST['email'];
			$password = $_POST['password'];
			$passwordc =$_POST['password_confirmation'];

			$fname = $_POST['first_name'];
			$lname = $_POST['last_name'];
			$email = $_POST['email'];
			

			
				if($password != $passwordc){
					?>
					<div class="container text-center" style="width: 40%;"> 
						<div class="alert alert-danger card" role="alert">
							Password's Didn't <b>MATCHED</b> !!!
						</div>
					</div>
					<?php
									
				}else{
					$sql = "SELECT email FROM user WHERE  email = '$username'";

					$usercheck = $conn->query($sql);

					if ($usercheck->num_rows>0){
						?>
						<div class="container text-center" style="width: 40%;"> 
							<div class="alert alert-danger card" role="alert">
								Email <?php echo $email;?> already exist.
							</div>
						</div>
						<?php
						$conn->close();
						
						}
						else
						{
							
							if( $conn->query($sql) ){
								
								
								$sql = "INSERT INTO user(email,password,first_name,last_name,phone) VALUES('$email','$password','$fname','$lname','$phone')";
								$conn->query($sql);
								?>
								<div class="container text-center" style="width: 40%;"> 
									<div class="alert alert-success card"  role="alert">
										Congratulations!!! you have successfully registered with Omega couriers
									</div>
								</div>
								<?php
								header('Refresh:3 url=login.php');
								$conn->close();
								die();
							}else{
								?>
								<div class="container text-center" style="width: 40%;"> 
									<div class="alert alert-danger card"  role="alert">
										Error something went wrong
									</div>
								</div>
								<?php
								$conn->close();
							}
						}

					}
				}
				
			//}
			

			
 	

		
	
        else{
		if(
			isset($_POST['email']) ? $_POST['email'] : '' && 
			isset($_POST['password']) ? $_POST['password'] : ''
			)
		{

			$uname = $_POST['email'];
			$pword = $_POST['password'];

			$check = "SELECT email FROM user WHERE email = '$uname' AND password = '$pword'";	
			
			$verifylogin = $conn->query($check);

			if($verifylogin->num_rows>0)
			{

				$row = $verifylogin->fetch_assoc();	
				$check = "SELECT first_name FROM user WHERE email='$row[email]'";
                                
                                $userfname = $conn->query($check);
                                $row = $userfname->fetch_assoc();
                                session_start();                                    
                                $_SESSION['email']=$uname;
                                $_SESSION['first_name']=$row['first_name'];
                                
				?>

				<div class="container text-center" style="width: 40%;"> 
					<div class="alert alert-info card" role="alert">
						Welcome <?php echo $_SESSION['first_name']; ?>.. This Page will soon be redirected
					</div>
				</div>

				<?php
                                
                                    $conn->close();
                                    header('Refresh:2 url=index.php');
                                    exit();
                                    
                                    
			}
			
			else
			{
				?>

				<div class="container text-center" style="width: 40%;"> 
					<div class="alert alert-danger card" role="alert">
						Username or Password Incorrect.
					</div>
				</div>

				<?php
			}

		}
	}
}


 ?>