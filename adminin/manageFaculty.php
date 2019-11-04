<?php
    $title = "Manage Faculty";
    $style = "manageFaculty.css";
    require "adminheader.php";
?>

    <main>
        <div id="cards">
                <div class="card">
                    <h1>Add Faculty-Code</h1>
                    <form action="addFcode.php" method="post">
                        <input type="submit" name="reg-submit" value="Click Here">
                    </form>
                </div>
                <div class="card">
                    <h1>Remove Faculty-Code</h1>
                    <form action="deleteFcode.php" method="post">
                        <input type="submit" name="edit-submit" value="Click Here">
                    </form>
                </div>
        </div>
    </main>

<?php
    require "adminfooter.php";
?>