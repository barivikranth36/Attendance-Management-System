<?php
    $title = 'Register | Faculty';
    $style = 'facultyregistration.css';
    require "header.php";
?>

    <main>
        <?php
            // if($_GET['name'] == "error") {
            //     echo "<script type='text/javascript'>alert(\"Faculty Code already exist!!\")</script>";
            // }
            // elseif($_GET['name'] == "pass") {
            //     echo "<script type='text/javascript'>alert(\"Password didn't match!!\")</script>";
            // }
        ?>
        <h1>Faculty Registration</h1>
        <div id="facultyregformarea">
        <form action="includes/facultyregform.php" method="POST">
            <p>Name</p>
            <input type="text" name="name" id="" placeholder="Name" required>
            <p>Faculty Code</p>
            <input type="text" name="fcode" placeholder="Faculty Code" required>
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
        <form action="index.php" method="POST">
            <input type="submit" value="Cancel" id="cancel">
        </form>
    </div>
    </main>

<?php
    require "footer.php";
?>