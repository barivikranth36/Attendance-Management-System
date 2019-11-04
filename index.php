<?php
    $title = 'Home Page';
    $style = 'index.css';
    require "header.php";
?>
    <main>
        <h1>Welcome to Attendence system.</h1>
        <div id="logins">
            <div class="login">
                
                <h1>Admin Login</h1>
                <form action="adminLogin.php" method="POST">
                    <input type="submit" value="Login">
                </form>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="login">
                
                <h1>Faculty Login</h1>
                <form action="facultylogin.php" method="POST">
                    <input type="submit" value="Login">
                </form>
                <form action="facultyregistration.php" method="POST">
                    <input type="submit" value="Register">
                </form>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="login">
                
                <h1>Student Login</h1>
                <form action="#" method="POST">
                    <input type="submit" value="Login">
                </form>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </main>

<?php
    require "footer.php";
?>