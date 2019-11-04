<?php
    $title = "Home | Attendance System";
    $style = "adminhome.css";
    require "adminheader.php";
?>
    <main>
        <div id="cards">
            <div class="card">
                <h1>Manage Faculty</h1>
                <form action="manageFaculty.php" method="post">
                    <input type="submit" name="manage-submit" value="Click Here">
                </form>
            </div>
            <!-- <div class="card">
                <h1>Take Attendance</h1>
                <form action="#" method="post">
                    <input type="submit" name="take-att-submit" value="Click Here">
                </form>
            </div>
            <div class="card">
                <h1>Calculate <br> Attendance</h1>
                <form action="#" method="post">
                    <input type="submit" name="calc-submit" value="Click Here">
                </form>
            </div> -->
        </div>

    </main>

<?php

    require "adminfooter.php";
?>