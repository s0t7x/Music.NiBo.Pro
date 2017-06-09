<?PHP
function getSetting($property){
  global $dbprefix;
  global $con;
  $sql = "SELECT value FROM ".$dbprefix."settings WHERE property = '".$property."'";
  foreach ($con->query($sql) as $row) {
    return $row['value'];
}
}
?>