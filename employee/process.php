<!DOCTYPE html>
<html>
<head>
    <title>Quiz Results</title>
</head>
<style>
    .container{
        border:2px solid black;
        padding:200px;
        margin:50px;
        align-items:center;
        text-align:center;
        padding-top:100px;
        background:url('ratings.webp') no-repeat;
        color:white;
        background-size:cover;
        height:500px;
    }
    button{
        background-color:pink;
    }
    </style>
<body>
    <div class="container">
    <?php
    // define the correct answers
    $q1_answer = "All of the Above";
    $q2_answer = "Class";
    $q3_answer = "Charles Bachman";
    $q4_answer = "Drop table";
    $q5_answer = "log file";
    $q6_answer = "three";
    $q7_answer = "Computer-Aided Software Engineering";
    $q8_answer = "two";

    $score = 2;

    if ($_POST["q1"] == $q1_answer) {
        $score++;
    }
    if ($_POST["q2"] == $q2_answer) {
        $score++;
    }
    if ($_POST["q3"] == $q3_answer) {
        $score++;
    }
    if ($_POST["q4"] == $q4_answer) {
        $score++;
    }
    if ($_POST["q5"] == $q5_answer) {
        $score++;
    }
    if ($_POST["q6"] == $q6_answer) {
        $score++;
    }
    if ($_POST["q7"] == $q7_answer) {
        $score++;
    }
    if ($_POST["q8"] == $q8_answer) {
        $score++;
    }

    // display the score
    
    echo "<h2>Your Rating is: " . $score . "/10</h2>";

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="job_portal";

    $conn=new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO quiz_results (username, score) VALUES (?, ?)");
    $stmt->bind_param("si", $username, $score);

    $username = $_POST["username"];

    // execute the statement
    $stmt->execute();

    // close the connection
    $stmt->close();
    $conn->close();
    ?>

    <button><a href="index.php">Click Here to continue to your login</a></button>

</div>
</body>
</html>
