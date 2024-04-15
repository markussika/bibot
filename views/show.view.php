<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>


<h1><?= htmlspecialchars($catalog["name"]) ?></h1>

<a href="/edit?id=<?= $catalog["id"] ?>"><button>Edit</button></a>

<?php require "views/components/footer.php" ?>