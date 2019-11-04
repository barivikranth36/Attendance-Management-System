<?php

    if(isset($_POST['add'])) {

        
        $fName = $_POST['fname'];
        $fCode = $_POST['fcode'];
        $reFcode = $_POST['re-fcode'];

        if($reFcode == $fCode) {
            require "dbhandler.php";    
            $sql = "SELECT COUNT(*) FROM facultycode WHERE fcode=$fCode";
            $result = $pdo->query($sql);
            if($result->fetchColumn() > 0) {
                header ("Location: ../addFcode.php?error=fcode-exist");
                exit();    
            }
            else {
                try {
                    $sql = "INSERT INTO `facultycode` VALUES(:fCode, :fName)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindValue(':fCode', $fCode);
                    $stmt->bindValue(':fName', $fName);
                    $stmt->execute();

                    header ("Location: ../addFcode.php?error=success");
                    exit();
                } catch(PDOException $e) {
                    header ("Location: ../addFcode.php?error=sqlerror");
                    exit();
                }
            }

        } 
        else {
            header ("Location: ../addFcode.php?error=fcode-not-match");
            exit();
        }
    
    }
    else {
        header ("Location: ../addFcode.php?error=invalid-access");
        exit();
    }
