<?php

if(isset($_POST['signup'])){

    require "dbhandler.php";
    $Name = $_POST['name'];
    $Fcode = $_POST['fcode'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $passRepeat = $_POST['cnfpass'];

    //hashing password
    $hashedpass = password_hash($pass,PASSWORD_DEFAULT);
        
    //Checking password
    if($pass != $passRepeat){
        header("Location: ../facultyregistration.php?name=pass");
        exit();
    }

    //Existance of Faculty
    $sql = "SELECT COUNT(*) FROM facultycode WHERE fcode=$Fcode";
    $result = $pdo->query($sql);
    $rows = $result->fetchColumn();
    if($rows > 0) {
        //Checking for duplicate entry
        $sql = "SELECT COUNT(*) FROM fregistration WHERE fcode=$Fcode";
        $result = $pdo->query($sql);
        $rows = $result->fetchColumn(); //fetches the first column of next row.
        if($rows > 0) {
            header("Location: ../facultyregistration.php?name=error");
            exit();
        }

        //Inserting data into database
        else {
            $sql = 'INSERT INTO `fregistration` VALUES(:fcode, :fname, :dob, :email, :hashedpass)';
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':fcode', $Fcode);
            $stmt->bindValue(':fname', $Name);
            $stmt->bindValue(':dob', $dob);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':hashedpass', $hashedpass);
            
            $stmt->execute();
        }

        header("Location: ../facultyregistration.php?name=success");
    }
    else {
        header("Location: ../facultyregistration.php?name=notFaculty");
        exit();
    }
    

}