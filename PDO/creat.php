<?php require 'header.php';?>
    

    <?php
        require 'db.php';
        if(isset($_POST['name']) && isset($_POST['email'])){

        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = 'INSERT INTO people(name,email) VALUES(:name, :email)';
        $statement = $pdo->prepare($sql);
        if($statement->execute([':name' => $name, ':email' => $email])){
            echo "<script type='text/javascript'>alert('Data Insert Successfully');</script>";
        }
      }

    ?>


    <form class="card-body" method="post">
      
      <input type="text" name="name"><br>
      <input type="text" name="email"><br>
      <input type="submit" value="save"><br><br><br>

      <a href="http://localhost/PDO/Edit.php?"><input type="button" value="Show All Data"></a>

    </form>

<?php require 'footer.php';?>