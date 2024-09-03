
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Recherche Simple</title>
<style>

        body {

            font-family: Arial, sans-serif;

            padding: 20px;

        }

        .search-container {

            margin-bottom: 20px;

        }

        .search-container input {

            padding: 10px;

            margin-right: 10px;

            width: 200px;

        }

        .search-container button {

            padding: 10px 20px;

        }

        table {

            width: 100%;

            border-collapse: collapse;

            margin-top: 20px;

        }

        table, th, td {

            border: 1px solid black;

        }

        th, td {

            padding: 10px;

            text-align: left;

        }
</style>
</head>
<body>
 
<div class="search-container">
<input type="text" id="searchField1" placeholder="Recherche par champ 1">
<input type="text" id="searchField2" placeholder="Recherche par champ 2">
<button onclick="rechercher()">Rechercher</button>
</div>
 
<table id="resultTable">
<thead>
<tr>
<th>Champ 1</th>
<th>Champ 2</th>
</tr>
</thead>
<tbody>
<!-- Les résultats de recherche s'afficheront ici -->
</tbody>
</table>
 
<script>

    function rechercher() {

        const searchValue1 = document.getElementById('searchField1').value;

        const searchValue2 = document.getElementById('searchField2').value;
 
        fetch(`http://localhost:3000/rechercher?champ1=${searchValue1}&champ2=${searchValue2}`)

            .then(response => response.json())

            .then(data => {

                const tbody = document.querySelector('#resultTable tbody');

                tbody.innerHTML = '';
 
                data.forEach(item => {

                    const row = document.createElement('tr');

                    row.innerHTML = `<td>${item.champ1}</td><td>${item.champ2}</td>`;

                    tbody.appendChild(row);

                });

            })

            .catch(error => console.error('Erreur:', error));

    }
</script>
 
</body>
</html>

 