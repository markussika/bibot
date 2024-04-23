<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>


<h1><?= htmlspecialchars($catalog["name"]) ?></h1>

<a href="/edit?id=<?= $catalog["id"] ?>"><button>Edit</button></a>
<form class="delete-form" method="POST" action="/delete">
            <button class="delete" name="id" value="<?= $catalog["id"] ?>">Delete</button>
        </form>

<?php require "views/components/footer.php" ?>