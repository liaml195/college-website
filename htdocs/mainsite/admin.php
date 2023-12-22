<?php
include_once("../login/includes/dbh.inc.php");
include_once("../components/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../login/styles.css">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <div class="questions">
        <div class="wrapper">
        <thead>
            <table>
			<tr>
                <th></th>
				<th>Q.NO</th>
				<th>Question</th>
				<th>Option 1</th>
				<th>Option 2</th>
				<th>Option 3</th>
				<th>Option 4</th>
				<th>Option 5</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
            <?php
            $query = "SELECT * FROM quiz ORDER BY question_id ASC";
            $select_questions = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($select_questions) > 0 ) {
            while ($row = mysqli_fetch_array($select_questions)) {
                $qno = $row['question_id'];
                $ans = $row['question'];
                $option1 = $row['ans1'];
                $option2 = $row['ans2'];
                $option3 = $row['ans3'];
                $option4 = $row['ans4'];
                $option5 = $row['ans5'];
                echo "<tr>";
                echo "<td> <a href='includes/delquestion.inc.php?qno=$qno'> ❌ </a></td>";
                echo "<td>$qno</td>";
                echo "<td>$ans</td>";
                echo "<td>$option1</td>";
                echo "<td>$option2</td>";
                echo "<td>$option3</td>";
                echo "<td>$option4</td>";
                echo "<td>$option5</td>";
                echo "<td> <a href='includes/adminedit.php?qno=$qno'> Edit </a></td>";
             }
         }
         echo "</tr>";
                echo "<tr>";
                echo "<form action='includes/admin.inc.php' method='POST'><td></td>";
                echo "<td></td>";
                echo "<td><input name='question' type='text'></td>";
                echo "<td><input name='ans1' type='text'></td>";
                echo "<td><input name='ans2' type='text'></td>";
                echo "<td><input name='ans3' type='text'></td>";
                echo "<td><input name='ans4' type='text'></td>";
                echo "<td><input name='ans5' type='text'></td>";
                echo "<td><input name='submit' type='submit'></td></form>";
              
                echo "</tr>";
            ?>
            </tbody>
        </table>
        </div>
    </div>
</body>

</html>