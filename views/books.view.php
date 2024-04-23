<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1>Catalog</h1>

    <?php foreach($catalogs as $catalog) { ?>
    <div >
    <a  href="/show?id=<?= $catalog['id'] ?>">
        <p>
            <span class="catalogitem">Book name: <?= htmlspecialchars($catalog['name']) ?></span><br>
            <span class="catalogitem">Author: <?= htmlspecialchars($catalog['author']) ?></span><br>
            <span  class="catalogitem">Release year: <?= htmlspecialchars($catalog['release_year']) ?></span><br>
            <span  class="catalogitem">Availability: <?= htmlspecialchars($catalog['availability']) ?> books</span>
        </p>
        
        </a>
    </div>
    <?php } ?>
</div>

<?php require "views/components/footer.php" ?>