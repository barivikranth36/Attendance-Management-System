<?php
    $title = "Delete Faculty-Code";
    $style = "deleteFaculty.css";
    require "adminheader.php";
    require "includes/dbhandler.php";
?>
    <main>
        <?php
            $sql = "SELECT `fcode`, `fname` FROM `facultycode`";
            $result = $pdo->query($sql);
            while($row = $result->fetch()) {
                $faculties[] = ['fcode' => $row['fcode'], 'name' => $row['fname']];
            }
        ?>
        
        <!-- Showing faculty details. -->
        <?php foreach($faculties as $faculty): ?>

        <div id="fcodeform">
            <div id="fcodearea">
                <h1>Name = <?=$faculty['name']?></h1>
                <h1>Fcode = <?=$faculty['fcode']?></h1>
            </div>
            <div id="fcodedelete">
                <form action="includes/deletefcodeform.php" method="POST">
                    <input type="hidden" name="id" value="<?=$faculty['fcode']?>">
                    <input type="submit" name="delete" value="Delete" id="add">
                </form>
            </div>
            
        </div>
        <?php endforeach; ?>
    </main>

<?php
    require "adminfooter.php";
?>