<?php

if(isset($_POST['login'])) {

    require "dbhandler.php";
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //Checking for the password
    $sql = "SELECT * FROM `adminlogin` WHERE `username`=?";
    try{
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);   //takes array as argument.
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // $pwdcheck = password_verify($pass,$row['pass']);
            if($pass != $row['pass']){
                header("Location: ../adminLogin.php?error=invalidPassword");
                exit();        
            }
            elseif($pass == $row['pass']){
                session_start();
                $_SESSION['Name'] = $row['Name'];
                header("Location: ../adminin/adminhome.php");
                exit();
            }
            else {
                header("Location: ../adminLogin.php?error=sqlerror");
                exit();
            }
        }

        header("Location: ../adminLogin.php?error=invalid-user");
        exit();
    } catch(PDOException $e) {
        header("Location: ../adminLogin.php?error=sqlerror");
        exit();
    }


} else {
    header("Location: ../adminLogin.php?error=unauthorized");
    exit();
}