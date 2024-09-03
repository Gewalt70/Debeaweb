<?php
//phpinfo();
// $dsn = "DRIVER={IBM DB2 ODBC DRIVER};DATABASE=DB2 - Production;HOSTNAME=S1026546;UID=rayham;PWD=hamray;";
 
// $conn = odbc_connect($dsn);
 
// if (!$conn) {
//     die("Erreur de connexion à la base DB2 : " . odbc_errormsg());
// }
// else echo "OK";
 
// return $conn;



//phpinfo();
//$dsn = "odbc:DRIVER={IBM DB2 ODBC DRIVER};HOSTNAME=AS400;DATABASE=DB2 - Production;PROTOCOL=TCPIP;UID=rayham;PWD=hamray";//
//phpinfo();
$conn = odbc_connect('S1026546','rayham','hamray');
 
if (!$conn)
   {
   echo (die(odbc_error()));
   }
   else
  { 
      echo "Connection Successful !";
  }
   

?>