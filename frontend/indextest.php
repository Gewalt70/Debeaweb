

<!doctype html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <script src="https://cdn.tailwindcss.com"></script> 
</head>

<body>
<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>

<header class="text-gray-700 body-font border-b border-gray-200">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="index.php">
      <img src="syscab.jpg" class="w-15 h-10 rounded-full" viewBox="0 0 24 24"></img>
    </a>

    <span class="ml-3 text-xl">Bonjour '.$_SESSION['pseudo'].'</span>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
    
    
      <button id="dropdownDefault" class="inline-flex items-center mr-5 hover:text-gray-900 " data-dropdown-toggle="dropdown" type="button">Gestion<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
      <!-- Dropdown menu -->
      <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-600">
          <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
              <li><a href="gestion.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Gestion Ticket</a></li>
              <li><a href="gestionchantier.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Gestion Chantier </a></li>
              <li><a href="gestionheure.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Gestion heure tech</a></li>
              <li><a href="creerchantier.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Création chantiers</a></li>
          </ul>
      </div>
    
    <nav>
      <a href="mestickets.php" class="mr-5 hover:text-gray-900">Mes Tickets</a>
      <a href="meschantiers.php" class="mr-5 hover:text-gray-900">Mes Chantiers</a>
      <a href="gestiontech.php" class="mr-5 hover:text-gray-900">Gestion</a>
      <a href="assignes.php" class="mr-5 hover:text-gray-900">Tickets en cours</a>
      <a href="autrestickets.php" class="mr-5 hover:text-gray-900">Tickets Non Assignés</a>
      <a href="compte.php" class="mr-5 hover:text-gray-900">Mon compte</a>
      <!--<a href="savticket.php" class="mr-5 hover:text-gray-900">SAV Ticket</a>-->
      <!--<a href="suivi.php" class="mr-5 hover:text-gray-900">Suivi ticket</a>-->
    </nav>
 
    <button onclick="window.location.href='logout.php'" class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Se déconnecter
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </div>
</header>