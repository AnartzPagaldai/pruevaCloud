<?php
$conn = connect();

function connect()
{
    global $conn;

    define('DB_HOST', 'viaduct.proxy.rlwy.net:19925');
    define('DB_NAME', 'railway');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'D55-34aFF24E5B4A5aHFhBDEf5bffghd');
    
    try {
        $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        //$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        return $conn;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function closeCon()
{
    global $conn;
    $conn = null;
}

function select($sentencia, $objeto = null)
{
    global $conn;
    $stmt = $conn->prepare($sentencia);
    if (!is_array($objeto) && $objeto !== null) {
        $objeto = [$objeto];
    }
    if (!$stmt->execute($objeto)) {
        throw new Exception($stmt->errorInfo()[2]);
    }
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function execute($sentencia, $objeto = null)
{
    global $conn;
    $stmt = $conn->prepare($sentencia);
    if (!is_array($objeto) && $objeto !== null) {
        $objeto = [$objeto];
    }
    if (!$stmt->execute($objeto)) {
        throw new Exception($stmt->errorInfo()[2]);
    }
}