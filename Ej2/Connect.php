<?php  

    require("Alumno.php");
   //datos de conexión
   $servername = "localhost";
   $username = "usuariotest";
   $password = "testpassword";
   $dbname = "test";

    $array_alumnos = [];

   $conn = new mysqli($servername, $username, $password, $dbname);

   if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
    }
    
        echo "Connected successfully";
        echo "<br>";

        $sql = "SELECT * FROM test";
    
        $result = $conn->query($sql);
  
        if($result -> num_rows > 0){
            while($row = $result->fetch_assoc()) {
                array_push($array_alumnos, new Alumno($row["Nombre"],$row["Apellido"],$row["Nivel"]));
                };
        }

        foreach ($array_alumnos as $alumno) {
            echo "<br>";
            echo $alumno -> mostrarAlumno();
            echo "<br>";
        }
   
        $conn->close();
    ?>