<?php include ("inc/generate_questions.php");

$buttons = array (
$btnA = $_SESSION['questions'][0]["correctAnswer"],
$btnB = $_SESSION['questions'][0]["firstIncorrectAnswer"],
$btnC = $_SESSION['questions'][0]["secondIncorrectAnswer"]
);

shuffle($buttons);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="container">
        <div id="quiz-box">
            <p class="breadcrumbs">Question <?php echo $_SESSION['count'];?> of 10</p>
            <!--  <?PHP var_dump($_SESSION); ?> -->
            <!-- <p class="quiz">What is 54 + 71?</p>-->
            <p class="quiz"> <?php echo " What is " . $_SESSION['questions'][0]["leftAdder"] . "+" . $_SESSION['questions'][0]["rightAdder"] . "?"?></p>

            <form action="index.php" method="post">
                <input type="hidden" name="id" value="0" />
                <input type="submit" class="btn" name="answer" value="<?php echo $btnA;?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $btnB;?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $btnC;?>" />
            </form>
        </div>
    </div>
</body>
</html>
