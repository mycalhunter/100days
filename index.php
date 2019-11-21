<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>100 Days of Code | iDevHunter</title>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
  <link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
  <div class="title">
    <h1>100 Days of Code</h1>
  </div>
  <div class="days">    
    <script>
      $(function() {
        var days = [];    
        $.getJSON('days.json', function(data) {
          $.each(data, function(i, f) {
            for (i = 0; i < f.length; i++) {
              var day = `<div class="day"> 
                          <h2>Day ${f[i].day} </h2> 
                          <img src="${f[i].image}"> 
                          <div class="techs"> 
                            <p class="tech">${f[i].techs}</p> 
                          </div> 
                          <div class="viewBtn view"> 
                            <a href="${f[i].view}${f[i].day}/" target="_blank">View</a> 
                          </div> 
                          <div class="viewBtn"> 
                            <a href="${f[i].gitHub}${f[i].day}" target="_blank"> 
                              <img src="github-logo.png"> 
                            </a> 
                          </div>
                        </div>`
                        $(day).appendTo(".days");
            }
          });
        });
      });
    </script>    
  </div>
</body>
</html>