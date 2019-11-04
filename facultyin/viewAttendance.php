<?php
    $title = "View Attendance | Attendance System";
    $style = "viewattendance.css";
    require "facultyheader.php";
?>

    <main>
        <?php
            try{
                $pdo = new PDO('mysql:host=localhost;dbname=tgmanagement;charset=utf8', 'root', '');
            
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
                $sql = "SELECT column_name AS cname FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'attendance'";
                $result = $pdo->query($sql);
                while($row = $result->fetch()) {
                    $columns[] = $row['cname'];
                }
                $sql = "SELECT * FROM `attendance`";
                $result = $pdo->query($sql);
                
            } catch(PDOException $e) {
                echo "error";
            }
        ?>
        <table id="viewattendancetable">
            <tr>
                <?php for($i = 0; $i < count($columns); $i++):?>
                <th><?=$columns[$i]?></th>
                <?php endfor;?>
            </tr>
            <?php while($row = $result->fetch()):?>
            <tr>
            
                <?php for($i = 0; $i < count($columns); $i++):?>
                <td><?=$row[$columns[$i]]?></td>
                <?php endfor;?>
                
            </tr>
            <?php endwhile;?>
            
        </table>
    </main>
<?php

    require "facultyfooter.php";
?>