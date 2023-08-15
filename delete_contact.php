<?php
     // Установка соединения с базой данных
     $conn = mysqli_connect('localhost', 'root', 'vova2345', 'contacts_book');
   
     // Получение ID контакта из GET-запроса
     $contact_id = $_GET['contact_id'];
   
     // Удаление контакта из базы данных
     $query = "DELETE FROM contacts WHERE id = $contact_id";
     $result = mysqli_query($conn, $query);
   
     // Проверка результата удаления контакта
     if ($result) {
       echo "<p>Контакт успешно удален.</p>";
     } else {
       echo "<p>Ошибка при удалении контакта: " . mysqli_error($conn) . "</p>";
     }
   
     // Закрытие соединения с базой данных
     mysqli_close($conn);
   ?>