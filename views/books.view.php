<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views\styles\books.style.css">
</head>
<body>
    

<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1>Catalog</h1>

    <?php foreach($catalogs as $catalog) { ?>
    <div class="catalog-item">
    <a  href="/show?id=<?= $catalog['id'] ?>">
        <p>
            <span>Book name: <?= htmlspecialchars($catalog['name']) ?></span><br>
            <span>Author: <?= htmlspecialchars($catalog['author']) ?></span><br>
            <span>Release year: <?= htmlspecialchars($catalog['release_year']) ?></span><br>
            <span>Availability: <?= htmlspecialchars($catalog['availability']) ?> books</span>
        </p>
        
        </a>
    </div>
    <?php } ?>
</div>

<?php require "views/components/footer.php" ?>