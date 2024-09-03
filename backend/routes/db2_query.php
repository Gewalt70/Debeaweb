<?php
include('../config/db2.php');

$sql = "SELECT * FROM ta_table";
$result = odbc_exec($conn, $sql);

$data = [];
while ($row = odbc_fetch_array($result)) {
    $data[] = $row;
}

odbc_close($conn);

header('Content-Type: application/json');
echo json_encode($data);
?>
