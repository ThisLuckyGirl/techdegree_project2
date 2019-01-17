<?php
//start session
session_start();
//include questions.php in order to "pull" array
include ("questions.php");

//session counter which will loop through questions
if(!isset($_SESSION['count']) || $_SESSION['count'] >= 9) {
   $_SESSION['count'] = 0;
   shuffle($questions);
   $_SESSION['questions'] = $questions;
//} else {
   //$_SESSION['count'] += 1;
//implemented code to prevent Chrome from implementing counter w/ GET requests
//increments only on POST requests
} elseif($_SERVER["REQUEST_METHOD"] == "POST") {
  $_SESSION['count'] ++;
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

//evaluate answer submitted - if correct display "correct" toast
//if incorrect answer - display "incorrect" toast and correct answer
if(!empty($_POST['answer'])) {
  if($_POST['answer'] == $_SESSION['questions'][$_SESSION['count']-1]["correctAnswer"]) {
    $toast = 'That was correct!';
    //testing code to show toasts on different page and redirect to quiz after
    //header('Location: /inc/toast.php');
    //exit;
 } else {
    $toast = "Sorry, that was incorrect." . "<br>" .
    $_SESSION['questions'][$_SESSION['count']-1]["leftAdder"] .
    "+" . $_SESSION['questions'][$_SESSION['count']-1]["rightAdder"] .
    "=" . "<strong>" . $_SESSION['questions'][$_SESSION['count']-1]["correctAnswer"] . "<strong>";
    //header('Location: /inc/incorrect_toast.php');
    //exit;
}
}
//direct user to finale page when quiz is completed
//***code not working***
if($_SESSION['count'] >= 10) {
  header('Location: /inc/scorecard.php');
  exit;
}



//session_destroy();
//retrieve data and display on page for testing
//echo "Count " . $_SESSION['count'];



/*
 * PHP Techdegree Project 2: Build a Quiz App in PHP
 *
 * These comments are to help you get started.
 * You may split the file and move the comments around as needed.
 *
 * You will find examples of formating in the index.php script.
 * Make sure you update the index file to use this PHP script, and persist the users answers.
 *
 * For the questions, you may use:
 *  1. PHP array of questions
 *  2. json formated questions
 *  3. auto generate questions
 *
 */

// Include questions

// Keep track of which questions have been asked

// Show which question they are on
// Show random question
// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question

// Show score
