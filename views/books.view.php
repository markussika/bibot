<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>



<h1>Catalog</h1>


<?php foreach($catalogs as $catalog) { ?>
  <p>
  <?= htmlspecialchars( "book name: " . $catalog['name'] . " / " . " The author " . $catalog['author'] . " / " . " Was released in " . $catalog['release_year'] . " / " . " Right now available " . $catalog['availability']) . " books" ?>
    <form class="delete-form" method="POST" action="/delete">
      <button class = "delete" name="id" value="<?= $catalog["id"] ?>">Delete</button>
      
    </form>
    <a href="/show?id=<?= $catalog['id'] ?>"><button  name="id" value="<?= $catalog["id"] ?>">check deeper</button></a>
    
</p>
<?php } ?>


<?php require "views/components/footer.php" ?>