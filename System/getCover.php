<?PHP
function getCoverURL($cover_id){
  global $dbprefix;
  global $con;
  $sql = "SELECT URL FROM ".$dbprefix."covers WHERE id = '".$cover_id."'";
  foreach ($con->query($sql) as $row) {
    return $row['URL'];
}
}
?>