<?php
$quesid = $_GET['ref'];
$qupage = $_GET['page'];

$qu = $_POST['question'];
$op1 = $_POST['option1'];
$op2 = $_POST['option2'];
$op3 = $_POST['option3'];
$op4 = $_POST['option4'];
$ans = $_POST['answer'];

include '../db_config/connection.php';

$sql = "UPDATE exam SET question='$qu', option1='$op1', option2='$op2', option3='$op3', option4='$op4', answer='$ans' WHERE question_id='$quesid'";

if ($conn->query($sql) === TRUE) {
header("location:examination.php?page=$qupage");
} else {
header("location:examination.php?page=$qupage");
}

$conn->close();

?>