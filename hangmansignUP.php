<html>
	<head>
		<title>HangMan SignUp</title>
   <link rel="stylesheet" href="mainstyle.css">

  	</head>

	<body>

		<h3>Rules:</h3>
               <p>Guess the letters that are missing in the word given the clues
                provided until all attempts are lost or the word is complete. </p>
        </p>
        <h3>Difficulty levels</h3>

        <ol>
            <li>Simple, small words (Word length is 5 letters or less)
            </li>
            <li>Length of the word (Word length is greater than 5 letters)
            </li>
            <li>Complexity of the word
            </li>
            <li>Tries before failure (3 petals, instead of the initial 6)
            </li>
        </ol>


<fieldset id="box">
		<legend>Register Here!</legend>
		<dl>
			<form action = "signUP-submit.php" method= "post">
			username:        <input type="text" id="name" name="name" size="20" required placeholder="create a unique username"> <br><br>
			 password: 		 <input type="password" id="password" name = "password" size="20" required placeholder = "create a password">
		</dl>
		<p>Choose your level:</p>
		<!-- <input type="radio" id="1" name="level" value="1">
		<label for="1">Level 1</label><br>
		<input type="radio" id="2" name="level" value="2">
		<label for="2">Level 2</label><br>
		<input type="radio" id="3" name="level" value="3">
		<label for="3">Level 3</label><br>
		<input type="radio" id="4" name="level" value="4">
		<label for="4">Level 4</label><br> -->
				<!-- <?php
			//$_SESSION['RName'] = $_POST['RName'];
			// $_SESSION['level'] = $_POST['level'];

			?> -->
			<input type="checkbox" name = "remember" /> Remember me?

		<div><br>
			<input type="submit" name="SignUp" value= "Register">
		</div>
	</fieldset>

	<br><br><br>
	<a href = "signIN.php" class = "button"> Already a member? </a>
	</form>
	</body>
</html>
