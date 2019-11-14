<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>100 Days of Code | iDevHunter</title>
  <link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
  <div class="title">
    <h1>100 Days of Code</h1>
  </div>
  
  <div class="days">
    
    
    <?php
    $gitSlug = "//github.com/mycalhunter/100days/tree/master/";
    $gitLogo = "//pngimg.com/uploads/github/github_PNG15.png";
    
    ?>
    
    
    
    <div class="day">
      <h2>Day 1</h2>
        <img src="/100days/images/day_1.png">
      <div class="techs">
        <p class="tech">HTML</p>
        <p class="tech">CSS</p>
        <p class="tech">Javascript</p>
        <p class="tech">jQuery</p>
      </div>
      <div class="viewBtn view">
        <a href="/100days/1/" target="_blank">View</a>
      </div>
      <div class="viewBtn">
        <a href="<? echo $gitSlug . '1' ?>" target="_blank">
          <img src="<? echo $gitLogo ?>">
        </a>
      </div>
    </div>
    
    
    <div class="day">
      <h2>Day 2</h2>
        <img src="/100days/images/day_2.png">
      <div class="techs">
        <p class="tech">HTML</p>
        <p class="tech">CSS</p>
        <p class="tech">jQuery</p>
        <p class="tech">PHP</p>
        <p class="tech">MySQLi</p>
      </div>
      <div class="viewBtn view">
        <a href="/100days/2/" target="_blank">View</a>
      </div>
      <div class="viewBtn">
        <a href="<? echo $gitSlug . '2' ?>" target="_blank">
          <img src="<? echo $gitLogo ?>">
        </a>
      </div>
    </div>
    
    
    <div class="day">
      <h2>Day 3</h2>
        <img src="/100days/images/day_3.png">
      <div class="techs">
        <p class="tech">HTML</p>
        <p class="tech">CSS</p>
        <p class="tech">jQuery</p>
      </div>
      <div class="viewBtn view">
        <a href="/100days/3/" target="_blank">View</a>
      </div>
      <div class="viewBtn">
        <a href="<? echo $gitSlug . '3' ?>" target="_blank">
          <img src="<? echo $gitLogo ?>">
        </a>
      </div>
    </div>
    
    <div class="day">
      <h2>Day 4</h2>
        <img src="/100days/images/day_4.png">
      <div class="techs">
        <p class="tech">PHP</p>
        <p class="tech">MySQLi</p>
      </div>
      <div class="viewBtn view">
        <a href="/100days/4/" target="_blank">View</a>
      </div>
      <div class="viewBtn">
        <a href="<? echo $gitSlug . '4' ?>" target="_blank">
          <img src="<? echo $gitLogo ?>">
        </a>
      </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
  </div>
  <script src="main.js" type="text/javascript"></script>
</body>
</html>