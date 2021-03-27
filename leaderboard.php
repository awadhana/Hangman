<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainstyle.css">
    <title>Leaderboard</title>
</head>
<body>
    <center><h1>Leaderboard</h1></center>
    <div class="leader"></div>
<center>
    <?php
    //
    // $con = mysqli_connect("localhost",
    //         "root", "", "leaderboard");
    //
    // /* Mysqli query to fetch rows
    // in descending order of marks */
    // $result = mysqli_query($con, "SELECT userName,
    // marks FROM leaderboard ORDER BY marks DESC");
    //
    // /* First rank will be 1 and
    //     second be 2 and so on */
    // $ranking = 1;
    //
    // /* Fetch Rows from the SQL query */
    // if (mysqli_num_rows($result)) {
    //     while ($row = mysqli_fetch_array($result)) {
    //         echo "<td>{$ranking}</td>
    //         <td>{$row['userName']}</td>
    //         <td>{$row['marks']}</td>";
    //         $ranking++;
    //     }
    // }
    //
    // $file = fopen("users.txt","r");
    //
    // while(! feof($file))
    //   {
    //     $mylines = fgetcsv($file);
    //     if (in_array($_COOKIE["RName"] ,$mylines) ) {
    //       $myname = $mylines[0];
    //       $mylevel = $mylines[1];
    //     }
    //
    //   }
    //
    // fclose($file);
    //
    $file = fopen("users.txt","r");

    while(! feof($file))
      {
      //   $mylines = fgetcsv($file);
      //   if (in_array($_COOKIE["RName"] ,$mylines) ) {
      //     $myname = $mylines[0];
      //     $mylevel = $mylines[1];
      //   }

        // if ($mylevel >= $mylines[1]){
        //
        //    echo $myname . " " . $mylevel. "<br>";
        //  }
        //  else{
        //    echo $myname . " " . $mylevel. "<br>";
        //
           echo "<br>" . fgets($file). "<br />";
         // }
      }

    ?>
</center>
   <!-- <div id="container" style="width:5%">
       <ol>
       // session_save_path("./");
       // session_start();
       // // if (!isset($_COOKIE["RName"])) {
       // //     $_COOKIE["RName"] = "1 jake\n3 jatt\n";
       // // }
       // $_COOKIE["RName"] .=  $_POST["Selection"]. " ".$_COOKIE["RName"]."\n";
       // $array = explode("\n", $_COOKIE["RName"]);
       // rsort($array);
       // echo "<p>Scores:</p>";
       // foreach ($array as  $_POST["Selection"]) {
       //     if ( $_POST["Selection"] != ""){
       //     echo "<li>";
       //     echo "<h3>". $_POST["Selection"]."</h3>";
       //     echo "</li>"; -->



    <a href = "hangmansignUP.php" class = "button"> Back to Landing Page </a>

</body>
</html>
