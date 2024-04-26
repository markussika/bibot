<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add A Book</title>
  <link rel="stylesheet" href="views/styles/register.style.css">
</head>
<body>
<?php require "views/components/navbar.php" ?>



<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
        
    </div>

<form method="POST">
<h3>Register</h3>
  <label>
    username:
    <input name="username" type="username" placeholder="Create username" id="username"/>
  </label>
  <?php if(isset($errors["username"])) {?>
    <p><?= $errors["username"] ?></p>
  <?php } ?>
  <label>
    Password <span class="explanation">(jābūt 8 rakstzīmēm, 1 lielam, 1 mazam un 1 īpaša simbolam un 1 ciparam, good luck)</span>   :
    <input name="password" type="password" placeholder="Create password" id="password"/>
  </label>
  <?php if(isset($errors["password"])) {?>
    <p><?= $errors["password"] ?></p>
  <?php } ?>
  <button>Register</button>
</form>



<?php require "views/components/footer.php" ?>
