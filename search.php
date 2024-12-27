<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'own_database_2';

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

if (isset($_GET['submit'])) { 
    $search = $_GET['search']; 
    

    
     $sql = "SELECT * FROM own_info WHERE first_name LIKE '%$search%'";
     $result = mysqli_query($conn, $sql);

     if(mysqli_num_rows($result) > 0) {
          $data = mysqli_fetch_array($result);

          $first_name = $data['first_name'];
          $last_name = $data['last_name'];
          $email = $data['email'];
          echo $first_name." ".$last_name. " ".$email;
     }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <form action="" method="GET"> <!-- Use method="GET" -->
        <label for="">Search Here</label><br>
        <input type="text" name="search" placeholder="Search Here" required> <br><br>
        <input type="submit" name="submit" value="Search Here"> <br><br>
    </form>
    <a href="insert.php">Insert Data</a>
</body>
</html>
