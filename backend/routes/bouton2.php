<?php
// Inclusion des fichiers de configuration
include('../config/db2.php');
include('../config/mysql.php');

// Requête sur DB2
$sqlDB2 = "SELECT * FROM table_db2 WHERE condition1 = 'valeur1'";
$resultDB2 = odbc_exec($connDB2, $sqlDB2);

$dataDB2 = [];
while ($row = odbc_fetch_array($resultDB2)) {
    $dataDB2[] = $row;
}

// Requête sur MySQL
$sqlMySQL = "SELECT * FROM table_mysql WHERE condition2 = 'valeur2'";
$resultMySQL = $connMySQL->query($sqlMySQL);

$dataMySQL = [];
if ($resultMySQL->num_rows > 0) {
    while ($row = $resultMySQL->fetch_assoc()) {
        $dataMySQL[] = $row;
    }
}

// Fermeture des connexions
odbc_close($connDB2);
$connMySQL->close();

// Fusion des résultats des deux bases de données
$response = [
    'db2' => $dataDB2,
    'mysql' => $dataMySQL
];

// Retourner le résultat en JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
