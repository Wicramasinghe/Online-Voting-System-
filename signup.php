<!DOCTYPE html>
<html>
<head>
<title>signup</title>

<meta name="viewport" content="width=device-width, initial-scale=1">


<script src="js/common.js"></script>

<link rel = "stylesheet" href="css/signup.css">

<div class="voice">
<a href="home.html">
  <input type="image" src="images/voice.png" name="voice" width="100" height="100" alt="voice"/>
</div>
<div class="log">
<a href="user.html">
  <input type="image" src="images/Log2.png" name="log" width="60" height="60" alt="log"/>

 
</a>
</div>




<span style="font-size:50px;cursor:pointer" onclick="openNav()"><img src="images/menu2.png" width="30" height="30"> </span>




<div class="btn-group">
  <button onclick="window.location.href='home.html'">Home</button>
  <button onclick="window.location.href='vote.html'">Vote</button>
  <button onclick="window.location.href='result.html'">Results</button>
  <button onclick="window.location.href='about us.php'">About Us</button>
  <button onclick="window.location.href='contactus.php'">Contact Us</button>
  <button onclick="window.location.href='FAQ.html'">FAQ</button>
  <button onclick="window.location.href='log.html'">LOG IN</button>
</div>





</head>


<hr class="c.line" style="color:white">
<body style = "background-image:url(images/background1.jpg); background-size:100%; backdrop-filter:brightness(40%)">

<img src="images/movie.gif" alt="dance" class="myImage">	 

   
<div class= "title">
	<p>Tune Titans</p>
</div>


<form action = "insert.php" method = "post">
		<div class = "container">
			<h1>Sign up</h1>
			<div class = "userDetails">
				<input type = "text" name = "username" placeholder = "Username" required>
				<br>
			
				<input type = "text" name = "fullname" placeholder = "Full Name" required>			
				<br>

				<input type = "text" name = "email" placeholder = "Email" required>
				<br>

				<input type = "text" name = "password" placeholder = "Password" required>
				<br>

				<input type = "text" name = "re-enterpassword" placeholder = "Re-Enter Password" required>
				<br>
			</div>
			<div class = "button">
				<input type = "submit" name = "Sign up" value = "Sign up">
			</div>
		</div>
</form>


<div class= "para">
	<p>Reality television offers a distinctive sort of entertainment, <p/>
	<p>opens doors for creative people,<p/>
	<p>encourages viewers to push themselves,<p/> 
	<p>and has the capacity to inform and educate.<p/> 
	<p>While reality programs may have their detractors,<p/>
	<p>they continue to attract audiences and</p> 
	<p>influence popular culture.<p/>
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
                        <li><a href="contactus.php">Contact</a></li>
                        <li><a href="tc.html">Terms & Conditions</a></li>
                      </ul>
                    </div>
        </div>

    </footer>
	
	



   

</html> 