<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add A Book</title>
  <link rel="stylesheet" href="views/styles/login.style.css">
</head>
<body>

    

<?php require "views/components/navbar.php" ?>



    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
        
    </div>
    <form method="POST">
        <h3>Login</h3>

        <label for="username">Username:</label>
        <?php if(isset($errors["username"])) {?>
    <p class="error"><?= $errors["username"] ?></p>
  <?php } ?>
        <input name="username" type="text" placeholder="Username" id="username">

        <label for="password">Password:</label>
        <?php if(isset($errors["password"])) {?>
    <p><?= $errors["password"] ?></p>
  <?php } ?>
        <input name="password" type="password" placeholder="Password" id="password">

        <button>Log In</button>
        
    </form>
    <?php if(isset($_SESSION["flash"])) { ?>
  <p class="flash"><?= $_SESSION["flash"] ?></p>
<?php } ?>

    
<?php require "views/components/footer.php" ?>
