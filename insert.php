<?php 

     $hostname = 'localhost';
     $username = 'root';
     $password = '';
     $db_name = 'own_database_2';

     $conn = mysqli_connect($hostname, $username, $password, $db_name);

     if(!$conn) {
          echo 'data not inserted'.mysqli_connect_error();
     }

     if(isset($_POST['submit'])) {
          $username = $_POST['username'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];



          $sql = "INSERT INTO own_info(first_name, last_name, email) VALUES('$username', '$lastname', '$email')";
          $result = mysqli_query($conn, $sql);

          if($result == true) {
               header("location:insert.php");
               exit();
               
          } else {
               echo 'data not inserted successfully'.mysqli_connect_error();
          }
     }

     

?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Insert value</title>
</head>
<body>
     
     <form action="insert.php" method="POST">
          <input type="text" name="username" placeholder="Enter your username" required> <br> <br>
          <input type="lastname" name="lastname" placeholder="Enter your lastname" required> <br> <br>
          <input type="email" name="email" placeholder="Enter your email" required><br> <br>

          <input type="submit" name="submit" value="Submit Here"> <br> <br>

     </form>

     <a href="search.php">Search Here</a>
</body>
</html>