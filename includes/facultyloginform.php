<?php

if(isset($_POST['login'])) {

    require "dbhandler.php";
    $fcode = $_POST['fcode'];
    $pass = $_POST['pass'];

    //Checking for the password
    $sql = "SELECT * FROM `fregistration` WHERE `fcode`=?";
    try{
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$fcode]);   //takes array as argument.
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $pwdcheck = password_verify($pass,$row['pass']);
            if($pwdcheck == false){
                header("Location: ../facultyLogin.php?error=invalidPassword");
                exit();        
            }
            elseif($pwdcheck == true){
                session_start();
                $_SESSION['uid'] = $row['fcode'];
                $_SESSION['name'] = $row['fname'];
                header("Location: ../facultyin/facultyhome.php");
                exit();
            }
            else {
                header("Location: ../facultyLogin.php?error=sqlerror");
                exit();
            }
        }

        header("Location: ../facultyLogin.php?error=invalid-user");
        exit();
    } catch(PDOException $e) {
        header("Location: ../facultyLogin.php?error=sqlerror");
        exit();
    }


} else {
    header("Location: ../facultyLogin.php?error=unauthorized");
    exit();
}