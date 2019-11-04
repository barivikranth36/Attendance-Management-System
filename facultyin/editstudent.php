<?php
    $title = "Edit Student | Attendance System";
    $style = "editstudent.css";
    require "facultyheader.php";
?>

    <main>
        <div id="searchstudent">
            <div id="searchformarea">
                <form action="editstudentform.php" method="POST">
                    <label for="rno">Enter Roll no.</label>
                    <input type="search" name="roll" id="roll">
                    <input type="submit" value="Search" name="search">
                </form>
            </div>
        </div>
    </main>

<?php

    require "facultyfooter.php";
?>