<?php

if(isset($_POST['save'])) {

    require "dbhandler.php";

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $email = $_POST['email'];

    //Updating records
    $sql = "UPDATE studentdetail SET `Name`=\"$name\",`dob`=\"$dob\",`email`=\"$email\",`course`=\"$course\" WHERE `enroll`=\"$roll\"";
    //UPDATE studentdetail SET name="Vikranth",dob="1999-09-03",email="barivikranth@gmail.com",course="CSE" WHERE enroll="0132cs171099"
    try {
        $affectedrows = $pdo->query($sql);
        header("Location: ../editstudent.php?status=Success");
        exit();
    } catch(PDOException $e) {
        header("Location: ../editstudent.php?status=fail");
        exit();
    }
    
}

else{
    header("Location: ../editstudentform.php?error=access-denied");
    exit();
}