<?php

// --------------------------------
// -- PDO Example
// --------------------------------

$dbPassword = "toor";
$dbUserName = "root";
$dbServer = "localhost";
$dbName = "tabot";

$connection = new PDO('mysql:host='.$dbServer.';dbname='.$dbName, $dbUserName, $dbPassword);

$query = "SELECT * FROM messages";
$resultObj = $connection->query($query);

if($resultObj->rowCount() > 0)
{
    foreach($resultObj as $singleRowFromQuery)
    {
        echo "Author: ".$singleRowFromQuery['message']."<br />";
    }
}

$resultObj = null;
$connection = null;
