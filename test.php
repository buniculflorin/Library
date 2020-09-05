<?php

require_once("Model/DB/ConnectionFactory.php");

$connectionFactory = new ConnectionFactory();

try {
    $connection = $connectionFactory->create(ConnectionFactory::MACHINE_LINUX);
} catch (\Exception $ex) {
    echo "Could not create connection factory because of error {$ex->getMessage()} \n";
    exit(1);
}

// TODO READ FROM library.book table
// CTRL + CLICK
$id = 2;
$statement = $connection->prepare("SELECT * FROM book where id=?");
$statement->execute([$id]);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);

// TODO CREATE/ADD book to library.book table


// TODO UPDATE library.book table
// TODO DELETE book from library.book table
