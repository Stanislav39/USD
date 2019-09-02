<?php
	//задаём переменные с значениями для подключения к бд
$driver = 'mysql';
$host = 'localhost';
$db   = 'test_pdo';
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = 
[             //доп массив с параметрами для PDO
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
	
try
{   //проверка на подключение к бд
	$pdo = new PDO("$driver:host=$host;dbname=$db;charset=$charset", $user, $pass, $opt);
}
catch(PDOException $e)
{
	die("Не могу подключится к базе данных");
}
	

?>

