<?php

$result = $pdo->prepare('SELECT id FROM categories');
$result->execute();
$checkId = $result->fetchAll();

$id_array = array();

foreach($checkId as $id_in_database)
{
    array_push($id_array, $id_in_database['id']);
}