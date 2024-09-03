  function openModal(title) {
        document.getElementById('modal-title').textContent = title;
        document.getElementById('modal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }

    async function handleButtonClick(queryId) {
        const titleMap = {
            'requete1A': 'Recherche global',
            'requete1B': 'Support/Palette NULL',
            'requete1C': 'Etat palette 600',
            'requete1D': 'Contrôle assortiment',
            'requete1E': 'Historique palette',
            'requete2A': 'Contrôle EAN',
            'requete2B': 'Contrôle PMP'
        };

        openModal(titleMap[queryId]);

        try {
            const response = await fetch('/api/query', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ queryId })
            });

            const results = await response.json();
            const tableBody = document.querySelector('#result-table tbody');
            tableBody.innerHTML = ''; // Efface les anciens résultats

            results.forEach(result => {
                const row = document.createElement('tr');
                row.innerHTML = `<td>${result.col1}</td><td>${result.col2}</td><td>${result.col3}</td>`;
                tableBody.appendChild(row);
            });

            alert('Résultats affichés dans le tableau.');
        } catch (error) {
            console.error('Erreur lors de la récupération des données:', error);
        }
    }