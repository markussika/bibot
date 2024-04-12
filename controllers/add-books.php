<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "INSERT INTO catalog (name, author, release_year, availability)
              VALUES (:name, :author, :release_year, :availability)";
    $params = [
        ":name" => $_POST["name"],
        ":author" => $_POST["author"],
        ":release_year" => $_POST["release_year"],
        ":availability" => $_POST["availability"]
    ];
    $db->execute($query, $params);
    header("Location: /");
    die();
}

$title = "Add a Book";
require "views/add-books.view.php";
?>