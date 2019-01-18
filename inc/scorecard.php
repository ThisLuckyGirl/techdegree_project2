<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Score</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <div class="container">
        <div id="quiz-box">
            <p class="quiz"><?php
                //start session
                session_start();
                //display appropriate toast for last question answered
                if($_SESSION["isCorrect"] == "right") {
                    echo "Your last answer was correct!";
                } else {
                    echo "Sorry, your last answer was incorrect.";
                }
                ?>
            </br>
            </br>
            <!--display final score -->
            <p class="quiz">Final Score:
            </br>
              <?php
               //display number of correct answers
               echo $_SESSION['score'] . " out of 10 correct";
               //calculate and display percentage of correct answers based off of session score
               $percentage = $_SESSION['score'] * 10;
               echo "</br>" . "(" . $percentage . "%)";
               ?>
          </p>
          </br>
          </br>
          <!-- html button to redirect to homepage -->
          <button><a href="../index.php" class="btn">Retake Quiz</a></button>
        </div>
    </div>
</body>
</html>
