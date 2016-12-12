<?php session_start();
$_SESSION["playernum"];
$_SESSION["bankernum"];
$_SESSION["playercount"];
$_SESSION["bankercount"];
$_SESSION["tiecount"];?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"
          type="text/css"/>
    <title>Daily Bugle</title>
    <script src="script.js"></script>
</head>
<nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Daily Bugle</a>
    </div>
</nav>
<body class="container">
    <a href="reset.php" class="btn btn-primary pull-right">Log Out</a>

