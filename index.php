<!DOCTYPE html>
<html>
<head><title>
</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="first_page">
	<div class="cleardot">
		<img class="logo" src="images/logo.png" alt="text">
		<ul class="header" type="disc">
			<li><a href="index.html">Home</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#about_us_page">About Us</a></li>
			<li><a href="#">Log in</a></li>
		</ul>
	</div>
	<div class="def">
		<p>
		Welcome to <span class="color_change"> nova-cafe</span>.<br>
		order your items, <br>
		it will be placed on your table...<br>
		</p>
		<a class="button" href="##">Order Here</a>
		<div class="image">
			<img src="images/business.png" alt="text"><br>
		
			<a id="register_button" onclick="" class="button"  href="#fill_form">Click here to register</a>
		</div>
	</div>
</div>

<div class="second_page" id="fill_form">
	<h2 class="before_head">.</h2>
	<h1 class="register_head">Register Here</h1>


	<script>
	function myfun(){
	var a=document.getElementById("password1").value;
	var b=document.getElementById("password2").value;

	if(a==""){
	document.getElementById("message").innerHTML="**Please enter password";
	return false;
	}

	if(a.length<5){
		document.getElementById("message").innerHTML="**Password is too short";
	return false;
	}
	if(a.length>25){
		document.getElementById("message").innerHTML="**Password is too long";
	return false;
	}
	if(a!=b){
		document.getElementById("message").innerHTML="**Enter correct password";
	return false;
	}

}
</script>
	<div class="form_design" >
		<form onsubmit="return myfun()" method="post">
			Name:<br>
			<input class="textbox" type="text" name="name" required><br>
			Email:<br>
			<input class="textbox" type="email" name="email" required><br>
			New Password:<br>
			<input class="textbox" type="password" name="password" id="password1" value=""><span style="color:red" id="message"></span><br>
			Confirm Password:<br>
			<input class="textbox" type="password" name="password" id="password2" value=""><br>
			Gender:<br>
			<input type="radio" name="gender" value="Male" required>Male
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Others">Others<br>

			<input class="submit_button" type="submit" value="Submit">
			<input class="submit_button" type="reset" value="Reset All" style="margin-left:50px;">
		</form>
	</div>
</div>

<div class="third_page" id="about_us_page">
	<h2 class="before_head">.</h2>
<div class="content">
	<img src="images/ashant.jpg" alt="text" style="height:200px;width:auto; border-radius: 40%;">
		<p>Can design any kind of page as required by the client.<br/>
			Page is made simple for future use.
		</p>
	</div>

<footer>
	<hr class="line">
	<div class="copy">COPYRIGHT &copy; Nova-Cafe 2019 <br>
	</div> 

</footer>

</body>
</html>