<?php

if(!isset($_GET['id']) || !in_array($_GET['id'], $id_array)) {
	header('location: index.php?v=categories');
}else{
    $result = $pdo->prepare('DELETE FROM categories WHERE id = :id');
    $result->bindParam(':id', $_GET['id']);
    $result->execute();
    header('location: index.php?v=categories');
}