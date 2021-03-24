
<?php
require_once('oop/game.php');
require_once('oop/hangman.php');

//this will keep the game data as they refresh the page
session_start();

//if they haven't started a game yet let's load one
if (!isset($_SESSION['game']['hangman'])) {
$_SESSION['game']['hangman'] = new hangman();
}
?>
<html>
<head>
<title>Hangman</title>
<link rel="stylesheet" type="text/css" href="inc/style.css" />
</head>
<body>


<form method="POST">
<?php
echo "Let's Play Hangman!";

playgame($_POST);

?>
</form>



</body>
</html>
