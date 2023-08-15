<?php
     // Установка соединения с базой данных
     $conn = mysqli_connect('localhost', 'root', 'vova2345', 'contacts_book');
   
     // Получение данных из POST-запроса
     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $address = $_POST['address'];
   
     // Вставка нового контакта в базу данных
     $query = "INSERT INTO contacts (name, phone, email, address) VALUES ('$name', '$phone', '$email', '$address')";
     $result = mysqli_query($conn, $query);
   
     // Проверка результата вставки контакта
     if ($result) {
       echo "<p>Контакт успешно добавлен.</p>";
     } else {
       echo "<p>Ошибка при добавлении контакта: " . mysqli_error($conn) . "</p>";
     }
   
     // Закрытие соединения с базой данных
     mysqli_close($conn);
   ?>