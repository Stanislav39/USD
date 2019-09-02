
<?php
require_once 'cbr.php';// файл настройки ввода в бд
require_once 'db.php';//подключение к бд
if(isset($_POST['date']))
{
	$date= $_POST['date'];//получаем переменную из массива пост, убираем лишние пробелы
	$sql = "INSERT INTO exchange_rate(date, dollar) VALUES(:date, :dollar)";
	//защита от SQL-инекций
	$params = ['date' => $date,'dollar' => $dollar];
	$stmt = $pdo->prepare($sql);
	$stmt->execute($params);
		
		
	}


?>


