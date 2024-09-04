<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $exam_title = $_POST['exam_title'];
    $exam_time = $_POST['exam_time'];
    $subject = $_POST['subject'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $question2 = $_POST['question2'];
    $answer2 = $_POST['answer2'];
    $question3 = $_POST['question3'];
    $answer3 = $_POST['answer3'];
    $question4 = $_POST['question4'];
    $answer4 = $_POST['answer4'];
    $question5 = $_POST['question5'];
    $answer5 = $_POST['answer5'];
    $question6 = $_POST['question6'];
    $answer6 = $_POST['answer6'];
    $question7 = $_POST['question7'];
    $answer7 = $_POST['answer7'];
    $question8 = $_POST['question8'];
    $answer8 = $_POST['answer8'];
    $question9 = $_POST['question9'];
    $answer9 = $_POST['answer9'];
    $question10 = $_POST['question10'];
    $answer10 = $_POST['answer10'];
    require_once("connect.php");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare SQL statement
    // $r=$conn->query( "INSERT INTO exam_data VALUES ($exam_title, $exam_time, $subject, $question, $answer, $question2, $answer2, $question3, $answer3, $question4, $answer4, $question5, $answer5, $question6, $answer6, $question7, $answer7, $question8, $answer8, $question9, $answer9, $question10, $answer10)");
    $r = $conn->query("INSERT INTO exam_data VALUES ('$exam_title', '$exam_time', '$subject', '$question', '$answer', '$question2', '$answer2', '$question3', '$answer3', '$question4', '$answer4', '$question5', '$answer5', '$question6', '$answer6', '$question7', '$answer7', '$question8', '$answer8', '$question9', '$answer9', '$question10', '$answer10')");

    // Now you can store these values in a database, or pass them to exam.html
    // Here, let's pass them as URL parameters to exam.html for demonstration
    header("Location: ../../Student/Exam/exam.php?question=" . urlencode($question) . 
    "&answer=" . urlencode($answer)."&exam_title=" . 
    urlencode($exam_title)."&exam_time=" . urlencode($exam_time).
    "&question2=" .urlencode($question2).
    "&answer2=" .urlencode($answer2).
    "&question3=" .urlencode($question3).
    "&answer3=" .urlencode($answer3).
    "&question4=" .urlencode($question4).
    "&answer4=" .urlencode($answer4).
    "&question5=" .urlencode($question5).
    "&answer5=" .urlencode($answer5).
    "&question6=" .urlencode($question6).
    "&answer6=" .urlencode($answer6).
    "&question7=" .urlencode($question7).
    "&answer7=" .urlencode($answer7).
    "&question8=" .urlencode($question8).
    "&answer8=" .urlencode($answer8).
    "&question9=" .urlencode($question9).
    "&answer9=" .urlencode($answer9).
    "&question10=" .urlencode($question10).
    "&answer10=" .urlencode($answer10).
    "&subject=" .urlencode($subject)
    );
    exit;
}
?>
