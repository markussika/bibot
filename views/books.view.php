<?php require "views/components/head.php" ?>




<h1>Catalog</h1>

<ul>
<?php foreach($catalogs as $catalog) { ?>
  <li>
  <?= htmlspecialchars( "book name: " . $catalog['name'] . " / " . " The author " . $catalog['author'] . " / " . " Was released in " . $catalog['release_year'] . " / " . " Right now available " . $catalog['availability']) . " books" ?>
    <form class="delete-form" method="POST" action="/delete">
      <button name="id" value="<?= $catalog["id"] ?>">Delete</button>
      
    </form>
    <a href="/show?id=<?= $catalog['id'] ?>"><button name="id" value="<?= $catalog["id"] ?>">check deeper</button></a>
    
  </li>
<?php } ?>
</ul>

<?php require "views/components/footer.php" ?>