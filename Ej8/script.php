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
    

   $nombre = $_POST["nombre"];
   $passwd = $_POST["passwd"];

   if($nombre==""){
    echo "Introduce un nombre de usuario";
   }elseif($passwd==""){
    echo "Introduce una contraseña";
   }else{
    $sql = "SELECT * from usuario where nombre = '$nombre' and passwd = '$passwd'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
            echo "Login correcto, bienvenido $nombre";
            echo "<br>";
            echo '<form action="./index.html">
            <input type="submit" value="LOG OUT">
            </form>';
      }else{
        echo "No existe el usuario";
      }
  
 }
        $conn->close();
    ?>