<?php
if(isset($_POST['name'])){
    $name=$_POST["name"];
    echo "<h2>Resistration is sucessful</h2>";
    echo "<br>";
    echo "<p>Student Name:$name</p>";
    $email=$_POST['email'];
    echo "<p>Student Email:$email</p>";

    $age=$_POST['age'];
    echo "<p>Student Age:$age</p>";

    $course=$_POST["course"];
    echo "<p>Student Course:$course</p>";

    echo "<p>Thanks $name for joining us</p>";

}

?> 