<?php
include('db/pdo.php');
include('utils/utils.php');

if(array_key_exists('v', $_GET)) {
	$module = $_GET['v'];
} else {
	$module = 'categories';
}

$moduleDir = 'modules/' . $module . '.php';


if(file_exists($moduleDir)) {
    ob_start();
    include($moduleDir);
	$content = ob_get_contents();
	ob_end_clean();

	include('layouts/admin.php');
} else {
	header("HTTP/1.1 404 Not Found");
	echo '404';
}

