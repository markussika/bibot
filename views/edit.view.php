<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>




<h1>Edit a book</h1>

<form method="POST">
<input name="id" value=" <?= $catalog["id"] ?>" type="hidden" />
  <label>Book name:
    <input name="name" value="<?= $_POST["name"] ?? $catalog["name"]  ?? "" ?>"/>
    <?php if (isset($errors["name"])) { ?>
            <p class="invalid-data"><?= $errors["name"] ?></p>
            <?php } ?>
  </label>
  <label>Author:
    <input name="author" value="<?= $_POST["author"] ?? $catalog["author"]  ?? "" ?>"/>
    <?php if (isset($errors["author"])) { ?>
            <p class="invalid-data"><?= $errors["author"] ?></p>
            <?php } ?>
  </label>
  <label>Release year:
    <input type="number" name="release_year" value="<?= $_POST["release_year"] ?? $catalog["release_year"] ?? "" ?>"/>
    <?php if (isset($errors["release_year"])) { ?>
            <p class="invalid-data"><?= $errors["release_year"] ?></p>
            <?php } ?>
  </label>
  <label>Availability:
    <input type="number" name="availability" value="<?= $_POST["availability"] ??  $catalog["availability"] ?? ""  ?>"/>
    <?php if (isset($errors["availability"])) { ?>
            <p class="invalid-data"><?= $errors["availability"] ?></p>
            <?php } ?>
  </label>
  <button class = "save" >Save</button>
 
 
</form>


<?php require "views/components/footer.php" ?>