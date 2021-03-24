<?php

if(!empty($_POST["remember"])) {
	setcookie ("RName",$_POST["RName"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies Set Successfuly";

 if(isset($_POST['RName']) && isset($_POST['password'])) {
		    $myfile = "users.txt";
			$txt = "\n".$_POST["RName"] . ",";
			file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
			$txt = $_POST["password"] . "\n";
          echo "<br> <b> Thank you! </b> <br>";

 }else {
	setcookie("RName","");
	setcookie("password","");
	echo "Cookies Not Set";
}
}
?>

<p><a href="index.php">Try your Luck! </a> </p>
