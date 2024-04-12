<?php require "views/components/head.php" ?>




<h1>Edit a book</h1>

<form method="POST">
  <label>Book name:
    <input name="name" value="<?= $_POST["name"] ?? $post["name"] ?? "" ?>"/>
  </label>
  <label>Author:
    <input name="author" value="<?= $_POST["author"] ?? $post["author"] ?? "" ?>"/>
  </label>
  <label>Release year:
    <input name="release_year" value="<?= $_POST["release_year"] ?? $post["release_year"] ?? "" ?>"/>
  </label>
  <label>Availability:
    <input type="number" name="availability" value="<?= $_POST["availability"] ?? $post["availability"] ?? "" ?>"/>
  </label>
  <button>Save</button>
</form>


<?php require "views/components/footer.php" ?>