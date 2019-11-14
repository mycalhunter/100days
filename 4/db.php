<?
//connect to db
function connect($dbHost, $dbName, $dbUsername, $dbPassword){
  $db = new mysqli(
                  $dbHost, 
                  $dbUsername, 
                  $dbPassword, 
                  $dbName
  );
  if($db->connect_error){
    die("Cannot connect to database: \n" 
        . $db->connect_error . "\n" 
        . $db->connect_errno);
  }
  return $db;
}



// select from db
function fetchAll(mysqli $db){
  $data = []; // blank data array
  
  $sql = 'SELECT * FROM `4_person`'; // select everything from person table
  
  $results = $db->query($sql); // save sql results in variable
  
  if($results->num_rows > 0){ // if number of results rows is greater than 0
    while($row = $results->fetch_object()){ // each row will be a record in db
      $data[] = $row;
    }
  }
  return $data;
}


// insert into db
function insertRecord(mysqli $db, array $record){
  $sql = "INSERT INTO `4_person` ";
  $sql .= "(`first_name`, `last_name`, `description`, `age`) ";
  $sql .= "VALUES ";
  $sql .= "(";
  $sql .= "'".$record['first_name']."', ";
  $sql .= "'".$record['last_name']."', ";
  $sql .= "'".$record['description']."', ";
  $sql .= "'".$record['age']."' ";
  $sql .= ")";
  
  $result = $db->query($sql); // run query
  if(!$result){ // if cant insert, throw error
    throw new Exception('Cannot insert record');
  }
  $record['id'] = $db->insert_id;
  return $record;
}



// delete a record
function deleteRecord(mysqli $db, $id){
  $sql = "DELETE FROM `4_person` WHERE id = '".$id."'";
  $result = $db->query($sql);
  if(!$result){ // if cant insert, throw error
    throw new Exception('Cannot delete record');
  }
}