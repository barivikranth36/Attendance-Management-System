<?php
    $title = 'Admin Login';
    $style = 'facultylogin.css';
    require "header.php";
?>

    <main>
        <div id="facultyloginformarea">
            <h1 id="loginheading">Login Form</h1>
            <div id="user"></div>
            <form action="includes/adminloginform.php" method="POST">
                <p>Username</p>
                <input type="text" name="email" id="" placeholder="Username" required>
                <p>Password</p>
                <input type="password" name="pass" id="" placeholder="Password" required>
                <input type="submit" name="login" value="Login">
            </form>
        </div>
    
    </main>

<?php
    require "footer.php";
?>