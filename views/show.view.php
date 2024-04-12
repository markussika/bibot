<?php require "views/components/head.php" ?>


<h1><?= htmlspecialchars($catalog["name"]) ?></h1>

<a href="/edit?id=<?= $catalog["id"] ?>">Edit</a>

<?php require "views/components/footer.php" ?>