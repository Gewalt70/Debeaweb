<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recherche de Palette</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
<div class="container mt-5">
        <h1 class="mb-4">Control global</h1>
        <!-- Formulaire de recherche -->
        <form action="" method="POST" class="mb-4">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="numPalette" class="col-form-label">N°Palette ou Voyage :</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="search" name="search" class="form-control" placeholder="EAN"required>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Rechercher</button>
                </div>
            </div>
        </form>

        <?php
            include('../backend/config/pdo.php');

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $search = $_POST['search']; // Récupérer le terme de recherche depuis le formulaire

                $sql = "SELECT * FROM palette WHERE numPalette = :search OR Voyage = :search";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':search', $search);
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);// Récupérer les résultats

                if ($results) { // Afficher les résultats
                    echo "<h2>Résultats de la recherche:</h2>";
                    echo "<table class='table table-bordered'>";
                    echo "<thead class='table-dark'><tr><th>Numéro Palette</th><th>Voyage</th><th>Date</th><th>Etat</th><th>Bloqué</th></tr></thead><tbody>";

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
                } else {
                    echo "<p class='alert alert-warning'>Aucun résultat trouvé.</p>";
                }
            }
        ?>
    </div>
    </div>
</body>
</html>