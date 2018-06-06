<?php
include 'connection.php';

include 'Functions/checkinfo.php';
?>
<html lang="en">
<head>
    <title>Game Name</title>
    <meta name="description" content="Our game">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href = "Styling/style.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="icon" href="res/wave.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>

<nav id = "navbar">
    <?php if(isset($_SESSION['username'])) { ?>
        <h1>Welcome, <?php echo $_SESSION['alias'];?>! </h1>
    <?php }
    if (basename($_SERVER['PHP_SELF']) != "account.php"){ ?>
        <a href = "account.php">Account</a>
    <?php }
    if  (basename($_SERVER['PHP_SELF']) != "index.php"){ ?>
        <a href = "index.php">Home</a>
    <?php } ?>
</nav>