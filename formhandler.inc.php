<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"]; 

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, firstname, lastname, pwd, email) VALUES
        (?, ?, ?, ?, ?);";

        $stmt = $conn->prepare($query);

        $stmt->bind_param("sssss", $username, $firstname, $lastname, $pwd, $email);

        $stmt->execute();
        $conn = null;
        $stmt = null;
        
        header("Location: ../kind/index.php");

        die();
    } catch (PDOException $e) {
        die("query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");    
}
