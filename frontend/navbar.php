<!doctype html>
<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <script src="https://cdn.tailwindcss.com"></script> 
  <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <!-- <style>
        .slide-in-left {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }
        .slide-out-left {
            transform: translateX(0);
            transition: transform 0.3s ease-in-out;
        }
    </style> -->
</head>

<body>
    <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="index.php"></a>
            <nav class="flex items-center">
                
                <a href="index2.php"><img src="../frontend/images/gifi.png" class="w-15 h-10 mr-5 hover:text-gray-900"></a>              
                <a href="ean.php" class="mr-5 hover:text-gray-900">EAN</a>
                <a href="Palettes.php" class="mr-5 hover:text-gray-900">Palettes</a>
                <a href="gestiontech.php" class="mr-5 hover:text-gray-900">Gestion</a>
                <a href="assignes.php" class="mr-5 hover:text-gray-900">Voyages</a>
                <a href="autrestickets.php" class="mr-5 hover:text-gray-900">Articles</a>
    
                <button id="openPanel" class="ml-5 text-gray-900">Ouvrir</button>
            </nav>
    </div>


<div id="slidePanel" class="fixed top-12 left-0 h-full bg-gray-100 shadow-lg w-80 slide-in-left z-50" style="display: none;">
    <div class="p-5">
        <h2 class="text-lg font-medium text-gray-900">Nos applis et sites partenaires:</h2>        
        
        <div class="mt-4 grid grid-cols-3 gap-4">
            <a href="page1.php">
                <img src="https://via.placeholder.com/100" alt="Image 1" class="w-full h-auto rounded-md shadow-md hover:opacity-80">
            </a>
            <a href="page2.php">
                <img src="https://via.placeholder.com/100" alt="Image 2" class="w-full h-auto rounded-md shadow-md hover:opacity-80">
            </a>
            <a href="page3.php">
                <img src="https://via.placeholder.com/100" alt="Image 3" class="w-full h-auto rounded-md shadow-md hover:opacity-80">
            </a>
            <a href="page4.php">
                <img src="https://via.placeholder.com/100" alt="Image 4" class="w-full h-auto rounded-md shadow-md hover:opacity-80">
            </a>
        </div>
        
        <button id="closePanel" class="mt-5 text-red-500">Fermer</button>
    </div>
</div>
<!-- <script>
    const openPanel = document.getElementById('openPanel');
    const closePanel = document.getElementById('closePanel');
    const slidePanel = document.getElementById('slidePanel');
    openPanel.addEventListener('click', () => {
        slidePanel.style.display = 'block';
        setTimeout(() => {
            slidePanel.classList.remove('slide-in-left');
            slidePanel.classList.add('slide-out-left');
        }, 10);
    });
    closePanel.addEventListener('click', () => {
        slidePanel.classList.remove('slide-out-left');
        slidePanel.classList.add('slide-in-left');
        setTimeout(() => {
            slidePanel.style.display = 'none';
        }, 300);
    });
</script> -->
</body>
</html>