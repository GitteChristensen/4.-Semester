?php

$servername = "localhost";
$dbusername = "root";
$dbpwd = "";
$dbname = "cro_db";

// Creating the connection to the db
$conn = new mysqli($servername, $dbusername, $dbpwd, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}

//try {
    #pdo = new PDO($dsn, $dbusername, $dbpsw); - er en forkortelse af nedenstående kode.
    #Men, det er godt at have et sikkerhedsnet i forhold til fejl.
//    $pdo = new PDO($dns, $dbusername, $dbpwd);
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
//} catch (PDOException $e) {
//    echo "Connection failed: " . $e->getMessage();
//}
