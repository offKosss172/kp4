<?php
// проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'process_form') {
  
  // подключаемся к базе данных
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "kp4";

  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // проверяем соединение
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // извлекаем данные из формы
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];
  
  // подготавливаем SQL-запрос для вставки данных в таблицу
  $sql = "INSERT INTO help_me (name, email, comment) VALUES ('$name', '$email', '$comment')";
  
  // выполняем запрос
  if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  // закрываем соединение
  $conn->close();
}
?>