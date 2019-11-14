<?
require_once 'config.php'; 
require_once 'db.php';

$db = connect(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

$records = fetchAll($db);
?>
<html>
<head>
  <title>Select All</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Description</th>
        <th>Age</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
      <?
      if(count($records) > 0): // if group of records is > 0
        foreach($records as $record):  // loop through each record ?>          
            <tr>
              <td><? echo $record->id ?></td>
              <td><? echo $record->first_name ?></td>
              <td><? echo $record->last_name ?></td>
              <td><? echo $record->description ?></td>
              <td><? echo $record->age ?></td>
              <td><a href="delete.php?foo=<? echo $record->id ?>">Delete</a></td>
            </tr>          
        <? endforeach;
      else: ?>
        <tr>
          <td colspan="5">Cannot find any records</td>
        </tr>
      <? endif ?>
      
    </tbody>    
  </table>  
</body>
</html>