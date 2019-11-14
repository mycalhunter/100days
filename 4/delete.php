<?
require_once 'config.php'; 
require_once 'db.php';

$db = connect(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


//$id = $_GET['foo'];
//$val = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
//$isValid = filter_var($val, FILTER_VALIDATE_INT);
$id = filter_input(INPUT_GET, 'foo', FILTER_VALIDATE_INT);

if(empty($id)){
  die("ID is invalid");
}

deleteRecord($db, $id);
header("Location: /100days/4/select.php");
die;