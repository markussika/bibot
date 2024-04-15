<?php

// Dabūt datus no datu bāzes
require "Database.php";
$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM catalog WHERE id = :id";
$params = [":id" => $_GET["id"]];

$catalog = $db->execute($query, $params)->fetch();

$title = htmlspecialchars($catalog["name"]) ;
require "views/show.view.php";
