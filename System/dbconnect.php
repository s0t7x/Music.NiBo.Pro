<?PHP
  include('dbsettings.php');
  $con = new PDO('mysql:host='.$dbhost.';dbname='.$dbschema.';charset=utf8mb4', $dbuser , $dbpassword);
?>