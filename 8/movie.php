<!DOCTYPE html>
<html>
<head>
  <title>Movie Info | iDevHunter</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">MovieInfo</a>
      </div>
    </div>
  </nav>
  
  <div class="container">
    <div id="movie" class="well"></div>
  </div>
  
  
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="main.js"></script>
<script>
  getMovie();
</script>
</body>
</html>