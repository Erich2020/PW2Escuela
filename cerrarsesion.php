<?PHP 
/**
 * Este archivo realiza la operacion de destruir la sesion y adicional canaliza al usuario a
 * la pagina principal  
 * 
 */
include '../head.php';
session_destroy();
echo "<script> window.location='index.php'; </script>";
include "../footer.php";


?>