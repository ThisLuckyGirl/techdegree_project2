<?php
// "Call" PHP array from questions.php file
include("questions.php");



// Randomize questions from PHP array
shuffle($questions);
//var_dump ($questions);
foreach ($questions as $value) {
  echo $value["leftAdder"];
}


// Get random numbers to add

// Calculate correct answer

// Get incorrect answers within 10 numbers either way of correct answer
// Make sure it is a unique answer

// Add question and answer to questions array
