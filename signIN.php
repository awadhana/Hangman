<?php
	// session_start();
?>
<html>
	<head>
		<title>Sign In!</title>
    <link href="mainstyle.css" rel = "stylesheet">
  	</head>
	<body><br><br><br>
<fieldset id="box">
		<legend>Welcome back!</legend>
			<form action = "signUP-submit.php" method= "post">

					<!-- two separate forms or nested.  -->
		<dl>
			<dd>
				username:      <input type="text" id="RName" name="RName" width="20" required placeholder="enter your username"> <br><br>
				password: 		<input type="password" id="password" name = "password" size="20" required placeholder = "enter your password">

			</dd>
		</dl>

			<br><br>

			<!-- <form action = "config.php" method= "post"> -->
					<p>Choose Your Level:</p>

				<select id="sltn" name="Selection" >
												<option value="Sltn">(Choose Your Level)</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>

					</select>
					<?php
						//
						//  $_SESSION['lvlNumber'] = $_POST['Selection'];
						// $GLOBALS $_SESSION['RName'] = $_POST['RName'];
					?>
				<!-- </form> -->
			<input type="checkbox" name = "remember" /> Remember me?
		<div>
			<input type="submit" name="GSubmit" value= "Let's Play">

		</div>


	</form>

	<!-- <form action = "config.php" method= "post">
			<p>Choose Your Level:</p>

		<select id="sltn" name="Selection" >
										<option value="select">(Choose Your Level)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>

			</select>

		</form> -->

	</fieldset>

	<br><br><br><br><br><br><br><br><br><br>
    <a href = "hangmansignUP.php" class = "button"> Don't have an account? </a> <br>
		<a href= "aboutus.html" class= "button"> Learn about the team! </a>


	</body>
</html>
