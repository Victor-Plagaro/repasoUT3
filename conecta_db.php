<?php
    $servername = "localhost";
    $username = "mitiendaonline";
    $db = "examenut3";  
    //Uso de PDO. Es mejor porque es versatil y facil migracion a otros gestores DDBB
    // Create connection
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username);
        // set the PDO error mode to exception
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion exitosa";
    } catch (PDOException $e) {
        echo "Conexion fallida " . $e->getMessage();
    }
?>