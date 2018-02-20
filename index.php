<?php
include('utils/utils.php');
?>
<a href="index.php?v=categories">Kategorie</a>
<a href="index.php?v=posts">Posty</a>
<hr>
<?php

if(array_key_exists('v', $_GET)) {
	$module = $_GET['v'];
} else {
	$module = 'categories';
}

$moduleDir = 'modules/' . $module . '.php';

if(file_exists($moduleDir)) {
	include( $moduleDir );
} else {
	header("HTTP/1.1 404 Not Found");
	echo '404';
}

?>

