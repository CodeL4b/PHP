<?php require 'header.php';?>
    

    <?php
        require 'db.php';

        $getUsers = $pdo->prepare("SELECT * FROM people ORDER BY id ASC");
        $getUsers->execute();
        $users = $getUsers->fetchAll();
        foreach ($users as $user) {

            echo $user['id'] . " - " .$user['name'] . " - " . $user['email'] . "<br>";
        }



        
        echo '<a href="http://localhost/PDO/index.php?"><input type="button" value="Home"></a>';
    



    ?>