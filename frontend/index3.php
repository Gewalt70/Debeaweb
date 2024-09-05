<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script> 
    <link rel="stylesheet" href="styles/style.css">
    <title>DbeaWeb</title>
</head>

<body>

<main>
    <div class="form-container">
        <h1>Recherche de Palette</h1>
        <!-- Formulaire de recherche -->
        <form action="" method="POST">
            <label for="numPalette">Numéro de Palette ou Voyage :</label>
            <input type="text" id="search" name="search" placeholder="Entrez le numéro..." required>
            <button type="submit">Rechercher</button>
        </form>

        <?php
            include('../backend/config/pdo.php');

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $search = $_POST['search'];

                $sql = "SELECT * FROM palette WHERE numPalette = :search OR Voyage = :search";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':search', $search);
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ($results) {
                    echo "<table><thead><tr><th>Numéro Palette</th><th>Voyage</th><th>Date</th><th>Etat</th><th>Bloqué</th></tr></thead><tbody>";
                    foreach ($results as $row) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['numPalette']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['Voyage']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['Date']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['Etat']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['Bloqué']) . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody></table>";

                    switch ($row) {
                        case $row['Etat'] == "13":
                            echo "<p class='alert alert-warning' style='color: white; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);'>L'état actuel de votre palette est : " . $row['Etat'] . "</p>";
                                break;
                        case $row['Bloqué'] == "N":
                            echo "<p class='alert alert-warning' style='color: white; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);'>L'état actuel de votre palette est : " . $row['Bloqué'] . "</p>";
                                break;
                    }
                } else {
                    echo "<p class='alert alert-warning' style='color: white; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);'>Aucun résultat trouvé.</p>";
                }
            }
        ?>
    </div>
</main>
</body>
</html>