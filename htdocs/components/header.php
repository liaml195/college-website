<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../login/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title ?></title>
</head>
<body>
    <header>
        Toka Fitness
        <nav class="navbar">
        <li><a href="#">About</a></li>
        <?php
        if (isset($_SESSION["usersuid"])) {
            echo "<li><a href='../login/profile.php'>Profile</a></li>";
            echo "<li><a href='../login/logout.php'>Log out</a></li>";
        }
        else {
            echo "<li><a href='../login/admin.php'>Admin</a></li>";
            echo "<li><a href='../login/signup.php'>Sign up</a></li>";
            echo "<li><a href='../login/login.php'>Log in</a></li>";
        }
        ?>
        
    </nav>
    </header>