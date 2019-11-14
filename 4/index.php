<? 
require_once 'config.php'; 
require_once 'db.php';

$db = connect(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

if($db instanceof mysqli){
  echo "Client mysql info: " . $db->client_info . "<br>";
  echo "Client mysql version: " . $db->client_version;
}
?>