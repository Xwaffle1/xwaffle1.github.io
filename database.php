<?php

echo '<script src="assets/js/listener.js"></script>';

/**
 * Created by PhpStorm.
 * User: chase
 * Date: 11/2/2017
 * Time: 10:21 PM
 */
class Database {

    public $pdo;

    function __construct() {
        // Host, Username, Password, Databasename
        $this->pdo = new PDO('mysql:host=35.202.48.108;dbname=tarkov', "root", "SSAbwx2A");
    }
    function searchForItem() {
        if (isset($_GET['itemName'])) {
            $search = $_GET['itemName'];
            $items = $this->getItemsStartWith($search);
            echo '<div id="searchData"> ';
            foreach ($items as $item) {

                $this->displayItem($item);
            }
            echo '</div>';
        }
    }


    function getItemsStartWith($search = "") {

        $items = array();

        $sql = "SELECT * FROM items WHERE itemName LIKE '%$search%';";
        foreach ($this->pdo->query($sql) as $row) {
            $items[] = $row;
        }
        return $items;
    }

    function getAllItems() {
        echo "CALLED";
        $items = array();

        $sql = "SELECT * FROM items;";
        foreach ($this->pdo->query($sql) as $row) {
            $items[] = $row;
            echo $row;
        }
        return $items;
    }


    function displayItem($item) {

        //echo "<img color='black' hieght='64' width='64' src=assets/slot.png />";

        $itemID = $item['ID'];
        $itemName = $item['itemName'];
        // print $itemID . "\t";
        //print $itemName . "\t\n";


        echo "
            <div class='slot'>
                <img class='slotImage' onmouseover='showItemName(this)' src=assets/items/$itemID />
            </div>
        ";

    }


    public function displayAllItems() {
        $sql = 'SELECT * FROM items';
        foreach ($this->pdo->query($sql) as $row) {
            $itemID = $row['ID'];
            print $row['ID'] . "\t";
            print $row['itemName'] . "\t\n";

            echo "<img src='assets/items/$itemID.png' />";


        }
    }
}