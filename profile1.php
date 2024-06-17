<?php

    include'config.php'
    session_start();
    $user_id=$_SESSION['user_id']
    
    if(isset($_POST['update_profile'])){
        $update_name=mysqli_real_escape_string($connection, $_POST['update_name']);
        $update_fname=mysqli_real_escape_string($connection, $_POST['update_fname']);
        $update_email=mysqli_real_escape_string($connection, $_POST['update_email']);

        mysqli_query($connection,"UPDATE 'user SET name='$update_name',fname='$update_fname',
        email='$update_email' WHERE user_id='$user_id'")or die("query faild");

        $Old_pass=$_POST['old_pass'];
        $update_pass=mysqli_real_escape_string($connection, md5($_POST['update_pass']);
        $new_pass=mysqli_real_escape_string($connection, md5($_POST['new_pass']);
        $confirm_pass=mysqli_real_escape_string($connection,md5($_POST['confirm_pass']);

        if(!empty($update_pass)||!empty($new_pass)||!empty($confirm_pass)){
            if($update_pass !=$old_pass){
                $message[]='old password not match!';
            }elseif($new_pass !=$confirm_pass){
                $message[]='confirm password not matched!';
            }else{
                mysqli_query($connection,"UPDATE 'user SET password='$confirm_pass' WHERE user_id='$user_id'")or die("query faild");
                $message[]='password update sucessfully!';
            }
        }

    }
    ?>
    
<!DOCTYPE hthml>

<html>
<head>
<title>Update Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet"  href="css/common.css" >
<script src="js/common.js"></script>
<link rel="C:common.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" >
<link rel="stylesheet" type="text/css" href="css/style2.css">

<div class="voice">
<a href="https://example.com">
  <input type="image" src="images/voice.png" name="voice" width="100" height="100" alt="voice"/>
</div>
<div class="log">
<a href="profile1.php">
  <input type="image" src="images/Log.png" name="log" width="60" height="60" alt="log"/>

 
</a>
</div>



<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="Home page.html">Home</a>
  <a href="vote.html">Vote</a>
  <a href="result.html">Results</a>
  <a href="about us.php">About us</a>
  <a href="contactUs.php">Contact us</a>
  <a href="FAQ.html">FAQ</a>
  
</div>

<span style="font-size:50px;cursor:pointer" onclick="openNav()">&#9776; </span>



<div class="btn-group">
  <button><a href="Home page.html">Home</a></button>
  <button><a href="vote.html">vote</a></button>
  <button><a href="result.html">Results</a></button>
  <button><a href="about us.php">About us</a></button>
  <button><a href="contactUs.php">Contact us</a></button>
  <button><a href="FAQ.html">FAQ</a></button>
</div>







<hr class="c.line">
</head>
<body style = "background-image:url(images/background.jpg); background-size:100%; backdrop-filter:brightness(40%)">
	<div class="update-profile">
        
        <?php
            $select=mysqli($connection, "SELECT*FROM user WHERE user_id='$user_id'")
            or die ('query faild');
            if(mysqli_num_rows($select)>0){
                $fetch=mysqli_real_assoc($select)
            }

            ?>
	
		<form action="" method="POST">
			<div class="flex">
				<div class="inputBox">
                    <div class="wrapper">
                    <inpul type="file" calss="my_file">
                </div>
					<h3>Account Information</h3>
					<span>Username</span>
					<input type="text" name="update_name" value="<?php echo $fetch['username'] ?>" class="box">
					<span>Full Name</span>
					<input type="text" name="update_fname" value="<?php echo $fetch['fullname'] ?>" class="box">
					<span>Email</span>
					<input type="text" name="update_email" value="<?php echo $fetch['fullname'] ?>" class="box">
					
            
					
				</div>
				<div class="inputBox">
					<h3>Change Password</h3>
					<input type="hidden" name="old_pass" value="<?php echo $fetch['password'] ?>" >
					<span>old password</span>
					<input type="password" name="update_pass" placeholder="enter previous password" class="box">
					<span>new password</span>
					<input type="password" name="new_pass" placeholder="enter new password" class="box">
					<span>confirm password</span>
					<input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
				</div>
			</div>
			<div class="inputBox">
			<input type="submit" value="update profile" name="update_profile">
			</div>
		</form>			

	</div>



</body>
<footer>
        <div class="footer-content">
            <h3>TUNE TITANS</h3>
            <p>"Welcome to our online voting system for reality shows! Cast your vote and shape the 
			outcome of your favorite contestants with just a few clicks. Join the excitement, influence
			the competition, and be a part of the ultimate reality show experience. Make your voice heard 
			and make a difference today!"</p>
            <ul class="socials">
                <li><a href=><img src="images/face.png" height="30"><i class="fa fa-facebook"></i></a></li>
                <li><a href=><img src="images/twi.png" height="30"><i class="fa fa-twitter"></i></a></li>
                <li><a href=><img src="images/google.png" height="50"><i class="fa fa-google"></i></a></li>
                <li><a href=><img src="images/you.png" height="30"><i class="fa fa-youtube"></i></a></li>
                <li><a href=><img src="images/inster.png" height="30"><i class="fa fa-instergram"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; <a href="#">HS</a>  </p>
                    <div class="footer-menu">
                      <ul class="f-menu">
                        <li><a href="privacy policy.html">Privacy policy</a></li>
                        <li><a href="about us.php">About</a></li>
                        <li><a href="contactUs.php">Contact</a></li>
                        <li><a href="terms and conditions.html">Terms & conditions</a></li>
                      </ul>
                    </div>
        </div>

    </footer>



</html>