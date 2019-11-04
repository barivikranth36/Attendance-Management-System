
<?php
    if(isset($_POST['submit'])) {
            
        
        if(empty($_POST['roll_no'])) {
            header("Location: ../takeattendance.php?error=empty");
            exit();
        }
        else {
            try{
                $pdo = new PDO('mysql:host=localhost;dbname=tgmanagement;charset=utf8', 'root', '');
            
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
                $date = date("Y-m-d");
                $sql = "ALTER TABLE `attendance` ADD `$date` VARCHAR(1) NOT NULL DEFAULT 'A'";
                $pdo->exec($sql);
            
                //Incrementing total by 1
                $sql = "UPDATE `attendance` SET `total` = `total` + 1";
                $pdo->exec($sql);
            
                try {
                    foreach($_POST['roll_no'] as $check) {
                        // echo $check."<br>";
                        $sql = "UPDATE `attendance` SET `$date`='P', `present` = `present` + 1 where Enrollment='$check'";
                        $pdo->exec($sql);
                    }
                    echo "Success";
                    header("Location: ../facultyhome.php?error=success");
                    exit();
                    // $sql = "UPDATE `newtab` SET `$date`='P'";
                    // $pdo->exec($sql);
                } catch(PDOException $e) {
                    header("Location: ../takeattendance.php?error=sqlerror");
                    exit();
                }
            }
            catch(PDOException $e) {
                $sql = "UPDATE `attendance` SET `$date`='A'";
                $pdo->exec($sql);
                foreach($_POST['roll_no'] as $check) {
                    // echo $check."<br>";
                    $sql = "UPDATE `attendance` SET `$date`='P' where Enrollment='$check'";
                    $pdo->exec($sql);
                }
                echo "Success";
                header("Location: ../facultyhome.php?error=success");
                exit();
            }
    
            // $count = count($_POST['roll_no']);
            
            // echo "<h1>data is =".$count."</h1>";
            // foreach($_POST['roll_no'] as $check) {
            //     echo $check."<br>";
            // }
        }
    }
    else {
        header("Location: ../takeattendance.php?error=invalid-access");
        exit();
    }