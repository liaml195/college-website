<?php 
    include_once '../components/header.php';
?>

    <img class="backdrop" src="middle_background.webp">
    <div class="wrapper">
    <h2>Sign Up</h2>
    <form method="POST" action="includes/signup.inc.php">
        <input type="text" name="name" placeholder="Name" autocomplete="off"><br>
        <input type="text" name="uid" placeholder="Username" autocomplete="off"><br>
        <input type="email" name="email" placeholder="Email" autocomplete="off"><br>
        <input type="password" name="pwd" placeholder="Password" autocomplete="off"><br>
        <input type="password" name="pwdrepeat" placeholder="Confirm Password" autocomplete="off"><br>
        <button type="submit" name="submit">Sign Up</button>
    </form>
</div>

    <?php
        if (isset($_GET["error"])) {
            $error = $_GET["error"];
            if ($error == "emptyinput") {
                echo "<p>Fill in all fields.</p>";
            }
            else if ($error == "invaliduid") {
                echo "<p>Choose a proper username.</p>";
            }
            else if ($error == "invalidemail") {
                echo "<p>Choose a proper email.</p>";
            }
            else if ($error == "passwordsdontmatch") {
                echo "<p>Passwords do not match.</p>";
            }
            else if ($error == "stmtfailed") {
                echo "<p>Something went wrong, try again.</p>";
            }
            else if ($error == "usernametaken") {
                echo "<p>Username already taken.</p>";
            }
            else if ($error == "none") {
                echo "<p>You have signed up.</p>";
            }
        }
    ?>

</body>
</html>