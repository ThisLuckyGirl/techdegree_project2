<?php

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

///////////////////////////////////////////

// start session
session_start();

if (!isset($_SESSION['questions'])) {
    include ("inc/questions.php");
    $_SESSION['questions'] = $questions;
}


if ($_POST)
    //evaluate answers from 1st question
    //store answer in session
    //remove question from session
}

//$_SESSION['count'] = 1; //counter

if(!isset($_SESSION['count']) || $_SESSION['count'] >= 10) {

   $_SESSION['count'] = 1;
} else {
   $_SESSION['count'] += 1;
}


echo "Count " . $_SESSION['count']; //retrieve data

//session_destroy();
?>