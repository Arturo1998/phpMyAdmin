<?php  

   //datos de conexión
   $servername = "localhost";
   $username = "usuariotest";
   $password = "testpassword";
   $dbname = "test";

   $conn = new mysqli($servername, $username, $password, $dbname);

   $nombre = $_POST["nombre"];
   $mail = $_POST["mail"];
   echo $nombre;

   if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
    }
    
        echo "Connected successfully";
        echo "<br>";

        $sql = "INSERT INTO usuario ( nombre, mail ) values( '$nombre', '$mail' )";
    
        $result = $conn->query($sql);

        $sql = "SELECT * from usuario";
    
        $result = $conn->query($sql);
    
         if ($result->num_rows > 0) {
            // mostramos los resultados por filas
            while($row = $result->fetch_assoc()) {
            echo "<br>" . "Nombre: " . $row["nombre"]. " Mail: " . $row["mail"]. "<br>";
            }
         } 
    
        $conn->close();
    ?>