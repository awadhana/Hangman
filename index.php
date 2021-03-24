<?php session_start();?>
<!DOCTYPE html PUBLIC >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hangman</title>
</head>
<body>

<?php
    include 'config.php';
    include 'functions.php';
    // include 'signIN.php';


    if (isset($_POST['newWord'])) unset($_SESSION['answer']);

    if (!isset($_SESSION['answer']))
    {
        $_SESSION['attempts'] = 0;
        // $filename = $WORDLISTFILE . $lvlNum . ".txt";
        $answer = fetchWordArray($WORDLISTFILE);
        $_SESSION['answer'] = $answer;
        $_SESSION['hidden'] = hideCharacters($answer);
        echo "Attempts remaining: <br>". "<img src=\"images/" . ($MAX_ATTEMPTS - $_SESSION['attempts']).".png\" alt=\"Hangman\" title=\"Hangman\" /><br><br>";
    }else
    {
        if (isset ($_POST['userInput']))
        {
            $userInput = $_POST['userInput'];
            $_SESSION['hidden'] = checkAndReplace(strtolower($userInput), $_SESSION['hidden'], $_SESSION['answer']);
            checkGameOver($MAX_ATTEMPTS,$_SESSION['attempts'], $_SESSION['answer'],$_SESSION['hidden']);
        }
        $_SESSION['attempts'] = $_SESSION['attempts'] + 1;
        echo "Attempts remaining: <br>". "<img src=\"images/" . ($MAX_ATTEMPTS - $_SESSION['attempts']).".png\" alt=\"Hangman\" title=\"Hangman\" /><br><br>";
    }
    $hidden = $_SESSION['hidden'];
    foreach ($hidden as $char) echo $char."  ";
?>

<form name = "inputForm" action = "" method = "post">

Your Guess: <input name = "userInput" type = "text" size="1" maxlength="1"  />
<input type = "submit"  value = "Check" onclick="return validateInput()"/>
<input type = "submit" name = "newWord" value = "Try another Word"/>

</form>
</body>
</html>
