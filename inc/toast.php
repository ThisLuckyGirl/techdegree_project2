<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <div class="container">
        <div id="quiz-box">
            <p class="quiz"> That is correct! </p>
          <!--  <p class="quiz"> <?php include("quiz.php"); echo "The correct answer is " . $_SESSION['questions'][$_SESSION['count']]["correctAnswer"]; ?></p> -->

            <form action="../index.php" method="post">
                <input type="hidden" name="id" value="0" />
                <input type="submit" class="btn" name="answer" value="Next Question" />
            </form>
        </div>
    </div>
</body>
</html>
