<?php
    session_start();
    $name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/facultytemplate.css">
    <!-- Dynamic styling of main content -->
    <link rel="stylesheet" href="style/<?php echo $style;?>">
    <!-- Dynamic page title -->
    <title><?php echo $title; ?></title>
</head>
<body>
    <header>
        <nav>
            <div id="logo"></div>
            <div id="formlinks">
                <a href="facultyhome.php">Home</a>
                <a href="#"><?php echo $name; ?></a>
                
                <!-- Logging out -->
                <form action="../includes/facultylogout.php" method="post">
                    <input type="submit" name="logout" value="Logout">
                </form>

            </div>
        </nav>
    </header>