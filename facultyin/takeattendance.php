<?php
    $title = "Take Attendance | Attendance System";
    $style = "takeattendance.css";
    require "facultyheader.php";
?>
    <main>
        <form action="includes/takeattendanceform.php" id="attendanceform" method="post">
            <table>
                <tr>
                    <th>Enrollment Number</th>
                    <th>Present</th>
                </tr>
                <?php
                    //Extracting student rollnos
                    try {
                        $pdo = new PDO('mysql:host=localhost;dbname=tgmanagement;charset=utf8', 'root', '');
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "SELECT `Enrollment` FROM `attendance`";
                        $result = $pdo->query($sql);
                        while($row = $result->fetch()) {
                            $rollnos[] = $row['Enrollment'];
                        }
                    } catch(PDOException $e) {
                        echo "Error";
                    }
                ?>
                <?php foreach($rollnos as $rollno): ?>
                <tr>
                    <td><?=$rollno?></td>
                    <td><input type="checkbox" name="roll_no[]" value="<?=$rollno?>" id=""></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <input type="submit" name="submit" value="Submit" id="add">
            
        </form>
        <!-- <form action="facultyhome.php" method="POST">
            <input type="submit" value="Cancel" name="cancel" id="cancel-edit">
        </form> -->
    </main>

<?php

    require "facultyfooter.php";
?>