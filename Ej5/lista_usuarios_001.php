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

   $nombre = $_POST["nombre"];
   $mail = $_POST["mail"];

   if($mail == "" & $nombre == ""){
      $sql = "SELECT * from usuario";
      $result = $conn->query($sql);
       if ($result->num_rows > 0) {
          // mostramos los resultados por filas
          while($row = $result->fetch_assoc()) {
          echo "<br>" . "Nombre: " . $row["nombre"]. " Mail: " . $row["mail"]. "<br>";
          }
         }
   }elseif($nombre == ""){
    $sql = "SELECT * from usuario where mail = '$mail'";
    $result = $conn->query($sql);
     if ($result->num_rows > 0) {
        // mostramos los resultados por filas
        while($row = $result->fetch_assoc()) {
        echo "<br>" . "Nombre: " . $row["nombre"]. " Mail: " . $row["mail"]. "<br>";
        }
     } 
   }elseif($mail == ""){
    $sql = "SELECT * from usuario where nombre='$nombre';";
    $result = $conn->query($sql);
     if ($result->num_rows > 0) {
        // mostramos los resultados por filas
        while($row = $result->fetch_assoc()) {
        echo "<br>" . "Nombre: " . $row["nombre"]. " Mail: " . $row["mail"]. "<br>";
        }
     } 
   }
        $conn->close();
    ?>