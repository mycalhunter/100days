<?
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Pagination | iDevHunter</title>
  <link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
  
  <?
  $results_per_page = 12; // results per page
  
  $sql = "SELECT * FROM 5_pages"; // select table limit first 10 results
  $result = mysqli_query($db, $sql); // save results
  $number_of_results = mysqli_num_rows($result); // output number of results
  /*while ($row = mysqli_fetch_array($result)) {
    echo $row['id'] . ' ' . $row['firstName'] . ' ' . $row['lastName'] . ' ' . $row['age'] . '<br>';
  }*/
  $number_of_pages = ceil($number_of_results / $results_per_page); // get number of pages, number of results divided by results per page
  if (!isset($_GET['page'])) { // if page is not set, set to page 1. Else set to correct page number
    $page = 1;
  } else {
    $page = $_GET['page'];
  }
  $this_page_first_result = ($page - 1) * $results_per_page; // start of limit = current page - 1 * 10.. ie. 2 - 1 = 1 * 10 = 10 on page 2.
  
  $sql = "SELECT * FROM 5_pages LIMIT " . $this_page_first_result . ',' . $results_per_page; // set low and high number of limit for sql statement
  $result = mysqli_query($db, $sql);
  ?>
  <div class="container">
    <h3>Pages: </h3>
  <?
  echo 'Page: ' . $page . ' of ' . $number_of_pages . '<br>'; // Page {current page} of {number of pages}
  for ($page = 1; $page <= $number_of_pages; $page++){ // for each page of the number of pages
    echo '<a href="index.php?page=' . $page . '"><div class="page-btn">' . $page . '</div></a>'; // $page = page number
  }  
  ?>
  <div class="page-btns">
  <?
  while($row = mysqli_fetch_array($result)) { // for each row within the limit, output row
    echo '<div class="card">';
    echo '<div class="title">ID:</div> ' . $row['id'] . '<br>';
    echo '<div class="title">First Name:</div> ' . $row['firstName'] . '<br>';
    echo '<div class="title">Last Name:</div> ' . $row['lastName'] . '<br>';
    echo '<div class="title">Age:</div> ' . $row['age'] . '<br>';
    echo '<input class="checkbox" type="checkbox" value="Select">';
    echo '</div>';
  }
  ?>
</div>
</div>

<script src="main.js"></script>
</body>
</html>