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
   $nombreCambio = $_POST["nombreCambio"];
   $mailCambio = $_POST["mailCambio"];

   if($nombre==""){
    $sql = "UPDATE usuario SET nombre='$nombreCambio', mail='$mailCambio'
   WHERE mail='$mail'";
      $result = $conn->query($sql);
   }elseif($mail==""){
    $sql = "UPDATE usuario SET nombre='$nombreCambio', mail='$mailCambio'
   WHERE nombre='$nombre'";
      $result = $conn->query($sql);
   }else{
    $sql = "UPDATE usuario SET nombre='$nombreCambio', mail='$mailCambio'
   WHERE nombre='$nombre' AND mail='$mail'";
      $result = $conn->query($sql);
   }

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