<?PHP
  include('dbsettings.php');
  $connection = mysql_connect($dbhost,$dbuser,$dbpassword);
  mysql_select_db($db,$connection);
?>