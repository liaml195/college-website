<?php
include_once("../../login/includes/functions.inc.php");

if (isset($_POST["submit"])) {
    $question = $_POST["question"];
    $ans1 = $_POST["ans1"];
    $ans2 = $_POST["ans2"];
    $ans3 = $_POST["ans3"];
    $ans4 = $_POST["ans4"];
    $ans5 = $_POST["ans5"];
    
    addQuestion($conn, $question, $ans1, $ans2, $ans3, $ans4, $ans5);
    header("location: ../admin.php?error=success");

} else {
    header("location: ../admin.php?error=form_not_submitted");
    exit();
}