<?php
//start session
session_start();

//include questions.php in order to use array
include ("questions.php");

//counter to keep track of questions answered correctly
//referenced https://www.webdeveloper.com/forum/d/307225-php-html-quiz-counting-correct-answers
if(!isset($_SESSION['score']) || $_SESSION['count'] >= 10) {
    $_SESSION['score'] = 0;
}
//var_dump($_SESSION['score']);

//session counter which will loop through questions
if(!isset($_SESSION['count']) || $_SESSION['count'] >= 10) {
   $_SESSION['count'] = 0;
//add shuffle so questions are in different order when quiz restarts
   shuffle($questions);
   $_SESSION['questions'] = $questions;
//} else {
   //$_SESSION['count'] += 1;
//Per Jennifer, this code should prevent Chrome from implementing counter on GET requests
//increments only on POST requests
} elseif($_SERVER["REQUEST_METHOD"] == "POST") {
  $_SESSION['count'] ++;
  //code not working outside of this statement, added inside and it works
  //directs user to finale page when quiz is completed
  if($_SESSION['count'] >= 10) {
    header('Location: /inc/scorecard.php');
  }
}

// Get numbers from questions array
if (!isset($_SESSION['questions'])) {
  $_SESSION['questions'] = $questions;
}

//assign answers to button variables in order to shuffle
$buttons = [
$btnA = $_SESSION['questions'][$_SESSION['count']]["correctAnswer"],
$btnB = $_SESSION['questions'][$_SESSION['count']]["firstIncorrectAnswer"],
$btnC = $_SESSION['questions'][$_SESSION['count']]["secondIncorrectAnswer"]
];

//shuffle buttons so that answers display in different spot each time
shuffle($buttons);

//evaluate answer submitted and display correct/incorrect toast appropriately
if(!empty($_POST['answer']) && $_SESSION["count"] != 0) {
  if($_POST['answer'] == $_SESSION['questions'][$_SESSION['count']-1]["correctAnswer"]) {
    //add session variable "is correct" to display last "toast" on final page
    $_SESSION["isCorrect"] = "right";
    $toast = 'That was correct!';
    $_SESSION['score']++;
 } else {
    $_SESSION["isCorrect"] = "wrong";
    $toast = "Sorry, that was incorrect." . "<br>" .
    $_SESSION['questions'][$_SESSION['count']-1]["leftAdder"] .
    "+" . $_SESSION['questions'][$_SESSION['count']-1]["rightAdder"] .
    "=" . "<strong>" . $_SESSION['questions'][$_SESSION['count']-1]["correctAnswer"] . "<strong>";
  }
}


//session_destroy();
