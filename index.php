<!DOCTYPE html>
   <html>
   <head>
     <title>Книга контактов</title>
   </head>
   <body>
     <h1>Книга контактов</h1>
   
     <!-- Форма добавления нового контакта -->
     <h2>Добавить контакт</h2>
     <form action="add_contact.php" method="post">
       <label for="name">Имя:</label>
       <input type="text" name="name" required><br>
       <label for="phone">Телефон:</label>
       <input type="text" name="phone" required><br>
       <label for="email">Email:</label>
       <input type="email" name="email"><br>
       <label for="address">Адрес:</label>
       <input type="text" name="address"><br>
       <input type="submit" value="Добавить контакт">
     </form>
   
     <!-- Список всех контактов -->
     <h2>Список контактов</h2>
     <?php
       // Установка соединения с базой данных
       $conn = mysqli_connect('localhost', 'root', 'vova2345', 'contacts_book');
   
       // Получение всех контактов из базы данных
       $query = "SELECT * FROM contacts";
       $result = mysqli_query($conn, $query);
   
       // Вывод списка контактов
       if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_assoc($result)) {
           echo "<p>{$row['name']}: {$row['phone']} {$row['email']} {$row['address']}</p>";
         }
       } else {
         echo "<p>Нет контактов.</p>";
       }
   
       // Закрытие соединения с базой данных
       mysqli_close($conn);
     ?>

      <h2>Удалить контакт</h2>
   <form action="delete_contact.php" method="get">
     <label for="contact_id">ID контакта:</label>
     <input type="number" name="contact_id" required><br>
     <input type="submit" value="Удалить контакт">
   </form>

   </body>
   </html>