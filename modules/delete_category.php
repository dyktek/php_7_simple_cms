<?php
if(!isset($_GET['id'])) {
	header('location: index.php?v=categories');
}

$result = $pdo->prepare('DELETE FROM categories WHERE id = :id');
$result->bindParam(':id', $_GET['id']);
$result->execute();
header('location: index.php?v=categories');