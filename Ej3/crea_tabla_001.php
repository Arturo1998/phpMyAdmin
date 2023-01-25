<?php  
   //datos de conexión
   $servername = "localhost";
   $username = "usuariotest";
   $password = "testpassword";
   $dbname = "test";

   $conn = new mysqli($servername, $username, $password, $dbname);

   if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
    }
    
        echo "Connected successfully";
        echo "<br>";

        $sql = "CREATE TABLE usuario (ID INT NOT NULL PRIMARY KEY
        AUTO_INCREMENT, nombre VARCHAR(50) NOT NULL, mail VARCHAR(100) NOT NULL)
        ENGINE=InnoDB";
    
        $conn->query($sql);

        if($conn->errno) die($conn->errno);
  
        $conn->close();
      
    ?>