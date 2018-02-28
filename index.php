<?php


include('database.php');
$db = new Database();
include('main.php');

if (!isset($db->pdo)) {
    die("NO DATABASE CONNECTION FOUND.");
}


//$db->displayAllItems();
//
//
//$db->searchForItem();

echo '';