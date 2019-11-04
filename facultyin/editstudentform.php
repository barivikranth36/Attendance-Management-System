
    <?php
        $title = "Edit Student | Attendance System";
        $style = "editstudentform.css";
        require "facultyheader.php";
        require "includes/dbhandler.php";
        
        if(!isset($_POST['search'])) {
            header("Location: editstudent.php?error=unauthorized-access");
        }

        $rollno = $_POST['roll'];
        $name = '';
        $dob = '';
        $email = '';

        $sql = "SELECT COUNT(*) FROM `studentdetail` WHERE `enroll`=\"$rollno\"";
        $stmt = $pdo->query($sql);
        if($stmt->fetchColumn() <= 0) {
            header("Location: editstudent.php?error=doesnot-exist");
            exit();
        }

        $sql = "SELECT * FROM `studentdetail` WHERE `enroll`=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$rollno]);  //takes array as argument.

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $name = $row['Name'];
            $email = $row['email'];
            $dob = $row['dob'];
        }
    ?>


        <main>
            <div id="editstudent">
                <h1 id="editinfo">Edit student <br> <?php echo "\"$rollno\""?></h1>
                <div id="studenteditformarea">
                    
                    <form action="includes/editstudentsave.php" method="POST">
                        <p>Enrollment No</p>
                        <input type="text" name="roll" id='' value=<?php echo "\"$rollno\""?>>                       
                        <p>Name</p>
                        <input type="text" name="name" id="" placeholder="Name" value=<?php echo "\"$name\""?> required>
                        <p>Course</p>
                        <select name="course" id="seditselect">
                            <option value="ME">Mechanical Engineering</option>
                            <option value="CSE">Computer Science Engineering</option>
                            <option value="CE">Civil Engineering</option>
                            <option value="EC">Electrical Engineering</option>
                            <option value="EX">Electronics Engineering</option>
                            <option value="IT">Information Technology</option>
                        </select>
                        <p>Date of Birth</p>
                        <input type="date" name="dob" id="" value=<?php echo "\"$dob\""?> required>
                        <p>Email</p>
                        <input type="email" name="email" id="" placeholder="example@domain.com" value=<?php echo "\"$email\""?> required>

                        <input type="submit" name="save" value="Save" id="save-edit">
                        <form action="editstudent.php" method="POST">
                                <input type="submit" value="Cancel" name="cancel" id="cancel-edit">
                        </form>
                    </form>
                    
                </div>
            </div>

        </main>

    <?php
        require "facultyfooter.php";
    ?>



