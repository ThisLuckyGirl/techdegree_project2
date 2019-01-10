<?php
// "Call" PHP array from questions.php file
include("questions.php");

// Randomize questions from PHP array
function randNumbers($questions) {
    $randomNumbers = $questions[array_rand($questions)];
    return $randomNumbers;
}

//$randomQuestion = randNumbers($questions);
//var_dump($randomQuestion);

// Loop for required number of questions

// Foreach loop that loops through randomized array
function randQuestions($questions) {
    $randomQuestion = randNumbers($questions);

    foreach($randomQuestion) {
          echo $questions["leftAdder"];

    }
}



randQuestions($questions);


// Get random numbers to add

// Calculate correct answer

// Get incorrect answers within 10 numbers either way of correct answer
// Make sure it is a unique answer

// Add question and answer to questions array
