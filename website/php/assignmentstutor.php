<?php
    session_start();

    if (!isset($_SESSION["userEmail"]) OR $_SESSION["userType"] != "tutor") {
        echo ("You are not authorised!");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- CSS -->
    <link rel="stylesheet" href="../styles/standard.css">

    <!-- JavaScript -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="../scripts/scripts.js"></script>
    
    <title>Ace Training</title>
    
</head>
<body onload="populateQuiz()">
    <header>
        <nav>
            <ul class="nav-links">
                <li><a href="tutor.php">Home</a></li>
                <li><a href="resourcesTutor.php">Resources</a></li>
                <li><a href="assignmentstutor.php">Assignments</a></li>
                <li><a href="studentsList.php">Students</a></li>
            </ul>
        </nav>
    </header>

    <div class="quizDiv">
        <form class="quizMenu">
            <select name="quizSelect" id="quizSelect">            
            </select>
            <button type="button" name="loadbutton" onclick="updateForm(<?php echo $_SESSION['userId'];?>)">Load</button>
            <p id="demo"></p>
        </form>

        <form class="quizForm" id="quizForm">
        </form>
    </div>
</body>