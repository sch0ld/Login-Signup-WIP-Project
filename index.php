<?php

include("codes.php");

?>

<html>
    <head>
    <!-- Charset UTF-8-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Sets the page title -->
    <title>Page Title</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="fonts.css"> <!-- Local fonts file -->
    <link rel="stylesheet" href="style.css"> <!-- Main CSS file --> 

    <!-- JavaScript -->
    <script src="main.js"></script>
    
</head>
<body>

    <div id="login" class="container FontAnek ">
        <h1>Log in</h1>
        <form action="auth.php" method="post" class="FontIBM">
            <label for="username">Username</label>
            <input type="text" name="username" class="FontAnek" autocomplete="off" placeholder="Enter username" value="">
            <p class="error"><?php if (isset($_GET['q'])) echo $user_codes[$_GET['q']]; ?></p>
            <label for="password">Password</label>
            <input type="password" name="password" class="FontAnek" autocomplete="off" placeholder="Enter your password" value="">
            <p class="error"><?php if (isset($_GET['c'])) echo $pass_codes[$_GET['c']]; ?></p>
            <input type="submit" value="Log in">
        </form>
        <a href="javascript:alert('WIP');">Don't have an account yet? Create one!</a>
    </div>
    
</body>
</html>