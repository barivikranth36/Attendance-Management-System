<?php
    $title = "Home | Attendance System";
    $style = "facultyhome.css";
    require "facultyheader.php";
?>
    <main>
        <div id="cards">
            <div class="card">
                <h1>Manage Student</h1>
                <form action="managestudent.php" method="post">
                    <input type="submit" name="manage-submit" value="Click Here">
                </form>
            </div>
            <div class="card">
                <h1>Take Attendance</h1>
                <form action="takeattendance.php" method="post">
                    <input type="submit" name="take-att-submit" value="Click Here">
                </form>
            </div>
            <div class="card">
                <h1>View <br> Attendance</h1>
                <form action="viewAttendance.php" method="post">
                    <input type="submit" name="calc-submit" value="Click Here">
                </form>
            </div>
        </div>

    </main>

<?php

    require "facultyfooter.php";
?>