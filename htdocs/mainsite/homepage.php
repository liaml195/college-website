<?php
include_once '../components/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div class="left-section">
        <a href="quiz.php">Take the Quiz</a>
    </div>

    <div class="middle-section">
        <iframe class="intro" src="intro.mp4" frameborder="0"></iframe>
        <div id="player">
            <?php $videoID = "korRfKTDoxE";
            echo "<script>var videoID = '$videoID';</script>"; ?>
        </div>
        <button onclick="player.destroy()" style="width: 100px; height: 50px;">Hide</button>
        <script src="scripts.js" defer></script>
    </div>

    <div class="right-section">
        
    </div>

</body>

</html>