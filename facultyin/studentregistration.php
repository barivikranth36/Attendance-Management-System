<?php
    $title = "Register Student | Attendance System";
    $style = "studentregistration.css";
    require "facultyheader.php";
?>

    <main>
        <h1>Student Registration</h1>
            <div id="studentregformarea">
            <form action="includes/studentregform.php" method="POST">
                <p>Name</p>
                <input type="text" name="name" id="" placeholder="Name" required>
                <p>Enrollment Number</p>
                <input type="text" name="roll" placeholder="Enrollment Number" required>
                <p>Course</p>
                <select name="course" id="sregselect">
                    <option value="ME">Mechanical Engineering</option>
                    <option value="CSE">Computer Science Engineering</option>
                    <option value="CE">Civil Engineering</option>
                    <option value="EC">Electrical Engineering</option>
                    <option value="EX">Electronics Engineering</option>
                    <option value="IT">Information Technology</option>
                </select>
                <p>Date of Birth</p>
                <input type="date" name="dob" id="" required>
                <p>Email</p>
                <input type="email" name="email" id="" placeholder="example@domain.com" required>
                <p>Password</p>
                <input type="password" name="pass" id="" placeholder="Password" required>
                <p>Confirm Password</p>
                <input type="password" name="cnfpass" id="" placeholder="Re-enter Password" required>
                <input type="submit" name="signup" value="Register" id="reg">
            </form>
        </div>
    </main>
<?php

    require "facultyfooter.php";
?>