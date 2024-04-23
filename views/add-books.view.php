<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>add a book</h1>

<form method="POST">
  <label>Book name:
    <input name="name"/><br>
  </label>
  <label>Author:
    <input name="author"/><br>
  </label>
  <label>Release year:
    <input name="release_year"/><br>
  </label>
  <label>Availability:
    <input type="number" name="availability"/><br>
  </label>
  <button class = "save" >Save</button><br>
</form>

<?php require "views/components/footer.php" ?>
