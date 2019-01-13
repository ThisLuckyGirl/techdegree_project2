<?php
//start session
session_start();
// "Call" questions.php file
include("questions.php");

//session counter

//$_SESSION['count'] = 1; //counter
if(!isset($_SESSION['count']) || $_SESSION['count'] >= 10) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count'] += 1;
}

// Get random numbers from questions array
if (!isset($_SESSION['questions'])) {
    include ("inc/questions.php");
    $_SESSION['questions'] = $questions;
}

//retrieve data and display on page for testing
echo "Count " . $_SESSION['count'];



if ($_POST)
    //evaluate answers from 1st question
    //store answer in session
    //remove question from session
}

//session_destroy();


// Calculate correct answer

// Get incorrect answers within 10 numbers either way of correct answer
// Make sure it is a unique answer

// Add question and answer to questions array







?>
