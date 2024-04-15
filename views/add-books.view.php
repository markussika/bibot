<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>add a book</h1>

<form method="POST">
  <label>Book name:
    <input name="name"/>
  </label>
  <label>Author:
    <input name="author"/>
  </label>
  <label>Release year:
    <input name="release_year"/>
  </label>
  <label>Availability:
    <input type="number" name="availability"/>
  </label>
  <button class = "save" >Save</button>
</form>

<?php require "views/components/footer.php" ?>
