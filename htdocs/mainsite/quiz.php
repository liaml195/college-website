<?php
include "../components/header.php";
include "../login/includes/dbh.inc.php";

    $sql = "SELECT * FROM questions";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        exit();
    }
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    foreach ($questions as $question) {
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Quiz</title>
</head>
<body>
    
</body>
</html>