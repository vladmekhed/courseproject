<?php 
$servername = "yy217444.mysql.tools"; // имя сервера
$database = "yy217444_mekhed-course"; // имя базы данных
$username = "yy217444_mekhed-course"; // логин для подключения к базе данных
$password = "B7ib7S(f-7"; // пароль для подключения к базе данных
// Устанавливаем соединение
$conn = mysqli_connect($servername, $username, $password, $database); // создание перемнной которая сведетельствует о подключении

mysqli_query($conn, "SET NAMES 'utf8' COLLATE 'utf8_general_ci'"); // установка нужной кодировки
mysqli_query($conn, "SET CHARACTER SET 'utf8'"); // установка нужной кодировки

// Проверяем соединение
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error()); // проверка подключения
}

$name = $_POST['name']; // копирование данных в переменную методом POST 
$email = $_POST['email']; // копирование данных в переменную методом POST 
$number = $_POST['number']; // копирование данных в переменную методом POST 
$textMassage = $_POST['text-massage']; // копирование данных в переменную методом POST 


$sql = "INSERT INTO `contact-data` (`name`, `email`, `number` , `textMassage`) VALUES ('$name', '$email', '$number' , '$textMassage')"; // запрос на запись данных в базу


if (mysqli_query($conn, $sql)) { // проверка подключения к базе
				header("Location: index.html");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn); // вывод сообщения, при ошибке подкючения и записи данных
}
mysqli_close($conn); // закрытие подключения к базе; отключаемся от базы
?>