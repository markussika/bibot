<?php
// Šis fails ir, lai izvadītu datus no datubāzes uz
// lapu 
require "Database.php";
$config = require("config.php");

$db = new Database($config);

$query = "SELECT catalog.* FROM catalog";
$params = [];



$catalogs = $db
          ->execute($query, $params)
          ->fetchAll();
          
$title = "catalogs 🙂";
require "views/books.view.php";