<?php 

session_start();

    include_once '../components/header.php';
?>
    

    <img class="backdrop" src="middle_background.webp">
    <div class="wrapper">
        <h2>Login</h2>
        <form method="POST" action="includes/login.inc.php">
            <input type="text" name="uid" placeholder="Username/Email" autocomplete="off"><br>
            <input type="password" name="pwd" placeholder="Password" autocomplete="off"><br>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>

    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields.</p>";
            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p>Invalid username/email or password.</p>";
            }
            
        }
    ?>

</body>
</html>