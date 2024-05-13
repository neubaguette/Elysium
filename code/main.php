<?php
// Получаем данные из формы
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';

// Создаем строку с данными для записи в файл
$data = "Name: $name\nEmail: $email\nSubject: $subject\n\n";

// Указываем путь к файлу, в который будут записываться данные
$file = '/data/data.txt';

// Открываем файл на запись с использованием флага FILE_APPEND для добавления данных в конец файла
// Если файл не существует, он будет создан
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

// Выводим сообщение об успешной записи данных
echo "Your data has been saved to file.";

?>