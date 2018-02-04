<?php

$host="localhost"; 
$username="root";  
$password="";
$db_name="multiplechoice"; 

$conn = new mysqli($host, $username, $password, $db_name);

mysqli_select_db($conn, "$db_name");

$myQuestion = $_POST['question'];
$correctAnswer = $_POST['correctanswer'];

$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3= $_POST['answer3'];


$sql = "insert into qlist (question) values ('$myQuestion')";

$sql2 = "insert into qanswer (correctanswer, answer1, answer2, answer3) values ('$correctAnswer','$answer1','$answer2','$answer3')";


$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);

$conn->close();

?>