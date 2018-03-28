<?php

$pdo = new PDO('mysql:host=localhost;dbname=php_cms_001;encoding=utf8', 'root', '123qwe');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);



//class Lampka
//{
//	public $moc = 10;
//
//	const TEST = 1;
//
//	public function __construct($moc)
//	{
//		echo 'moc: ' . $moc;
//	}
//
//	public function zaswiec()
//	{
//		echo 'SWIECE';
//	}
//
//	public function zgas()
//	{
//		echo 'GASZE';
//	}
//}
//
//$lampa = new Lampka(100);
//$lampa->zaswiec();
//$lampa->zgas();
//echo $lampa->moc;