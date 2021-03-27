<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link href="mainstyle.css" type="text/css" rel="stylesheet" />

		<title></title>
	</head>
	<body>

<?php
if(!empty($_POST["remember"])) {
	setcookie ("RName",$_POST["RName"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	// setcookie("Selection", $_POST["Selection"]);

	echo "Cookies Set Successfuly";

 if(isset($_POST['RName']) && isset($_POST['password'])) {
		    $myfile = "users.txt";
			$txt = "\n".$_POST["RName"] . "," .$_POST['Selection'];
			file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
			$txt = $_POST["password"] . "\n";
          echo "<br> <b> Thank you! </b> <br>";

 }
//  else {
// 	setcookie("RName",$_POST['RName']);
// 	setcookie("password","");
// 	echo "Cookies Not Set";
// }


    $MAX_ATTEMPTS = 5;
		setcookie("maxAtt",$MAX_ATTEMPTS);

    $lvlNum = $_POST['Selection'];
		// setcookie("Selection", $_POST['Selection']);


    $filename = 'wordlist';

    $WORDLISTFILE = $filename .  $lvlNum .".txt";
		setcookie("wordlistfilename",$WORDLISTFILE);
		// echo $WORDLISTFILE;
    $LEVEL = 1;

}
?>

<center>	<h2>Welcome! I hope you're ready to test your Luck. Let's see how you do!</h2> </center>

<center><br><br><br><br><br><br><br><p><a href="index.php"  class = "button">Try your Luck! </a> </p> </center>


</body>
</html>
