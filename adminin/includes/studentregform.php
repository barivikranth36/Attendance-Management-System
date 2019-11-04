<?php

if(isset($_POST['signup'])){

    require "dbhandler.php";
    $Name = $_POST['name'];
    $roll = $_POST['roll'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $passRepeat = $_POST['cnfpass'];

    //hashing password
    $hashedpass = password_hash($pass,PASSWORD_DEFAULT);
        
    //Checking password
    if($pass != $passRepeat){
        header("Location: ../studentregistration.php?name=pass");
        exit();
    }

    
    //Checking for duplicate entry
    $sql = "SELECT COUNT(*) FROM studentdetail WHERE `enroll`=\"$roll\"";
    $result = $pdo->query($sql);
    $rows = $result->fetchColumn(); //fetches the first column of next row.
    if($rows > 0) {
        header("Location: ../studentregistration.php?name=error");
        exit();
    }

    //Inserting data into database
    else {
        $sql = 'INSERT INTO `studentdetail` VALUES(:enroll, :sname, :dob, :email, :course, :hashedpass)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':enroll', $roll);
        $stmt->bindValue(':sname', $Name);
        $stmt->bindValue(':dob', $dob);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':course', $course);
        $stmt->bindValue(':hashedpass', $hashedpass);
        
        $stmt->execute();
    }

    header("Location: ../studentregistration.php?name=success");

}
else {
    header("Location: ../studentregistration.php?name=invalidaccess");
    exit();
}