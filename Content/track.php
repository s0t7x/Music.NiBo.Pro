<?PHP
include("../System/dbconnect.php");
include("../System/getTrack.php");
include("../System/getCover.php");
//include("Content/Tracks/".$_GET['track'])
$id = $_GET['track'];
echo("ID = " . $id . "</br>");
echo("TITLE = " . getTrackTitle($id) . "</br>");
echo("COVERID = " . getTrackCoverID($id) . "</br>");
echo("<img src='" . getCoverURL(getTrackCoverID($id)) . "'></img></br>");
echo("UPLOADDATE = " . getTrackUploadDate($id));
?>