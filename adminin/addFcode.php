<?php
    $title = "Add Faculty | Attendance System";
    $style = "addFcode.css";
    require "adminheader.php";
?>

    <main>
        <div id="fcodeform">
            <h1>Add Faculty</h1>
            <form action="includes/addfcodeform.php" method="POST">
                <p>Name</p>
                <input type="text" name="fname" id="" required>
                <p>Enter Faculty Code</p>
                <input type="number" name="fcode" id="" required>
                <p>Re-Enter Faculty Code</p>
                <input type="number" name="re-fcode" id="" required>
                <input type="submit" name="add" value="Add" id="add">
            </form>
            <form action="manageFaculty.php" method="POST">
                <input type="submit" value="Cancel" id="cancel">
            </form>
        </div>
    </main>

<?php
    require "adminfooter.php";
?>