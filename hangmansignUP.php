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
            <li>Advanced complex words
            </li>
        </ol>


<fieldset id="box">
		<legend>Register Here!</legend>
		<dl>
			<form action = "signUP-submit.php" method= "post">
			username:        <input type="text" id="name" name="RName" size="20" required placeholder="create a unique username"> <br><br>
			 password: 		 <input type="password" id="password" name = "password" size="20" required placeholder = "create a password">
		</dl>
		<form action = "config.php" method= "post">
				<p>Choose Your Level:</p>

			<select id="sltn" name="Selection" >
											<option value="Sltn">(Choose Your Level)</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>

				</select>
			<input type="checkbox" name = "remember" /> Remember me?

		<div><br>
			<input type="submit" name="SignUp" value= "Register">
		</div>
	</fieldset>

	<br><br><br>
	<a href = "signIN.php" class = "button"> Already a member? </a> <br>
	<a href= "aboutus.html" class= "button"> Learn about the team! </a>

	</form>
	</body>
</html>
