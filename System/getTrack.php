<?PHP
function getTrackTitle($track_id){
  global $dbprefix;
  global $con;
  $sql = "SELECT title FROM ".$dbprefix."tracks WHERE id = '".$track_id."'";
  foreach ($con->query($sql) as $row) {
    return $row['title'];
}
}

function getTrackArtistID($track_id){
  global $dbprefix;
  global $con;
  $sql = "SELECT artist_id FROM ".$dbprefix."tracks WHERE id = '".$track_id."'";
  foreach ($con->query($sql) as $row) {
    return $row['artist_id'];
}
}

function getTrackCoverID($track_id){
  global $dbprefix;
  global $con;
  $sql = "SELECT cover_id FROM ".$dbprefix."tracks WHERE id = '".$track_id."'";
  foreach ($con->query($sql) as $row) {
    return $row['cover_id'];
}
}

function getTrackUploadDate($track_id){
  global $dbprefix;
  global $con;
  $sql = "SELECT upload_date FROM ".$dbprefix."tracks WHERE id = '".$track_id."'";
  foreach ($con->query($sql) as $row) {
    return $row['upload_date'];
}
}
?>