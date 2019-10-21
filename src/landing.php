<?php
session_start();
if (isset($_POST['add'])) {
  $x = $_POST['name'];
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tic Tac Toe!</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
</head>
<body>
<section>
<div class="main">
    <h1>Tic Tac Toe</h1>
<form action="gameIndex.php" method="post">
    <p>Enter Your name:</p>
   <input type="text" name="name" placeholder="please enter your name">
    <button type="submit" name="submit" value="Submit"><a href ="gameIndex.php" target="">Submit</a></button>
</form>

    </div>

</section>

</body>
</html>
