<?php
    $title = "Manage Student | Attendance System";
    $style = "managestudent.css";
    require "facultyheader.php";
?>
    <main>
        <div id="cards">
            <div class="card">
                <h1>Register Student</h1>
                <form action="studentregistration.php" method="post">
                    <input type="submit" name="reg-submit" value="Click Here">
                </form>
            </div>
            <div class="card">
                <h1>Edit Student</h1>
                <form action="editstudent.php" method="post">
                    <input type="submit" name="edit-submit" value="Click Here">
                </form>
            </div>
            <div class="card">
                <h1>Student's Detail</h1>
                <form action="#" method="post">
                    <input type="submit" name="detail-submit" value="Click Here">
                </form>
            </div>
        </div>

    </main>

<?php

    require "facultyfooter.php";
?>