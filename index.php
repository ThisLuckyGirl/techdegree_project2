<?php include ("inc/generate_questions.php");

$buttons = [
$btnA = $_SESSION['questions'][$_SESSION['count']]["correctAnswer"],
$btnB = $_SESSION['questions'][$_SESSION['count']]["firstIncorrectAnswer"],
$btnC = $_SESSION['questions'][$_SESSION['count']]["secondIncorrectAnswer"]
];

shuffle($buttons);

if($_POST['answer'] == $_SESSION['questions'][$_SESSION['count']-1]["correctAnswer"]) {

    echo 'Correct!';
 } else {
    echo 'WRONG!';
}
    //evaluate answers from 1st question
    //store answer in session
    //remove question from session

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
            <p class="quiz"> <?php echo " What is " . $_SESSION['questions'][$_SESSION['count']]["leftAdder"] . "+" . $_SESSION['questions'][$_SESSION['count']]["rightAdder"] . "?"?></p>

            <form action="index.php" method="post">
                <input type="hidden" name="id" value="0" />
                <input type="submit" class="btn" name="answer" value="<?php echo $buttons[0];?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $buttons[1];?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $buttons[2];?>" />
            </form>
        </div>
    </div>
</body>
</html>
