<?php

if(isset($_POST['delete'])) {

    require "dbhandler.php";
    $fcode = $_POST['id'];
    
    try {
        $sql = "DELETE FROM `facultycode` WHERE `fcode`=:fCode";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':fCode',$fcode);
        $stmt->execute();
        header("Location: ../deleteFcode.php?error=success");
        exit();
    } catch(PDOException $e) {
        echo "Error Occured";
        header("Location: ../deleteFcode.php?error=sql-error");
        exit();
    }

}
else {
    header("Location: ../deleteFcode.php?error=invalid-access");
    exit();
}