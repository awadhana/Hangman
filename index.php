<?php
session_start();
?>
<!DOCTYPE html PUBLIC >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="mainstyle.css" type="text/css" rel="stylesheet" />

<title>Hangman</title>
</head>
<body>

<?php
    // include 'config.php';
    include 'functions.php';
    // include 'signUP-submit.php';

    echo "<center>";

    if (isset($_POST['newWord'])) unset($_SESSION['answer']);

    if (!isset($_SESSION['answer']))
    {
        $_SESSION['attempts'] = 0;
        echo $_COOKIE["wordlistfilename"];
        // echo $WORDLISTFILE;

        $answer = fetchWordArray($_COOKIE["wordlistfilename"]);
        $_SESSION['answer'] = $answer;
        $_SESSION['hidden'] = hideCharacters($answer);
        echo "Attempts remaining: <br>".  "<img id=Potatoe src=\"images/" . ($_COOKIE["maxAtt"] - $_SESSION['attempts']).".png\" alt=\"Hangman\" title=\"Hangman\" /><br><br>";
    }else
    {
        if (isset ($_POST['userInput']))
        {
            $userInput = $_POST['userInput'];
            $_SESSION['hidden'] = checkAndReplace(strtolower($userInput), $_SESSION['hidden'], $_SESSION['answer']);
            checkGameOver($_COOKIE["maxAtt"],$_SESSION['attempts'], $_SESSION['answer'],$_SESSION['hidden']);
        }
        $_SESSION['attempts'] = $_SESSION['attempts'] + 1;
        echo "Attempts remaining: <br>". "<img id=Potatoe src=\"images/" . ($_COOKIE["maxAtt"] - $_SESSION['attempts']).".png\" alt=\"Hangman\" title=\"Hangman\" /><br><br>";
    }
    $hidden = $_SESSION['hidden'];
    foreach ($hidden as $char) echo $char."  ";

    echo "</center>";
?>

<!-- <center> -->
<form name = "inputForm" action = "" method = "post">
<br><br><center>Your Guess: <input name = "userInput" type = "text" size="1" maxlength="1"  /></center><br><br><br><input type = "submit"  value = "Check" onclick="return validateInput()"/>
<br><br><input type = "submit" name = "newWord" value = "Try another Word"/>

</form>
<!-- </center> -->
</body>
</html>
