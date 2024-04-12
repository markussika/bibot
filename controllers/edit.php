<?php

require "Validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = [];

  if (!Validator::string($_POST["name"], min: 1, max: 50)) {
    $errors["name"] = "Title cannot be empty or too long";
  }
  if (!Validator::string($_POST["author"], min: 1, max: 50)) {
    $errors["author"] = "Title cannot be empty or too long";
  }
  if (!Validator::number($_POST["release_year"], min: 1, max: 4)) {
    $errors["release_year"] = "Category ID invalid";
  }
  if (!Validator::number($_POST["availability"], min: 1, max: INF)) {
    $errors["availability"] = "Category ID invalid";
  }

  if (empty($errors)) {
    $query = "UPDATE catalog
              SET name = :name, author = :author, release_year = :release_year, availability = :availability
              WHERE id = :id";
    $params = [
        ":name" => $_POST["name"],
        ":author" => $_POST["author"],
        ":id" => $_POST["id"],
        
        ":release_year" => $_POST["release_year"],
        ":availability" => $_POST["availability"],
    ];
    $db->execute($query, $params);

    header("Location: /");
    die();
  }

  
}



$query = "SELECT * FROM catalog WHERE id = :id";
$params = [":id" => $_GET["id"]];
$post = $db->execute($query, $params)->fetch();
$title = "edit a Book";
require "views/edit.view.php";