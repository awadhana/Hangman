<?php
	session_start();
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
		<p>Choose Your Level:</p>

		<!-- <select id="Selection" name="Selection" >
                    <option value="">(Choose Your Level)</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>

      </select> -->
			<br><br>


		<!-- <input type="radio" id="1" name="level" value="1">
		<label for="1">Level 1</label><br>
		<input type="radio" id="2" name="level" value="2">
		<label for="2">Level 2</label><br>
		<input type="radio" id="3" name="level" value="3">
		<label for="3">Level 3</label><br>
		<input type="radio" id="4" name="level" value="4">
		<label for="4">Level 4</label><br> -->
			<input type="checkbox" name = "remember" /> Remember me?
		<div>
			<input type="submit" name="GSubmit" value= "Let's Play">
			<?php
				// $lvlNum = $_POST["Selection"];
			//$_SESSION['RName'] = $_POST['RName'];
			// $_SESSION['level'] = $_POST['level'];

			?>
		</div>


	</form>

	</fieldset>

	<br><br><br><br><br><br><br><br><br><br>
    <a href = "hangmansignUP.php" class = "button"> Don't have an account? </a>

	</body>
</html>
