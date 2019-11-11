<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form | iDevHunter</title>
  <link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
  
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
      $(function () { //empty function

        $('form').on('submit', function (e) { //when form is submitted

          e.preventDefault(); //prevent page relord

          // AJAX call
          $.ajax({
            type: 'post',
            url: 'insert.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
              setTimeout(function(){// wait for 5 secs(2)
                   location.reload(); // then reload the page.(3)
              }, 500); 
            }
          });
          
          

        }); // end form submittion function

      }); // end empty function
    </script>
</head>
<body>
  
  <div class="container">
  
  <form action="insert.php" method="post">
    <h1>Contact Form</h1>
    
    <div class="form-column-left">
      <label>First Name</label>
      <label>Last Name</label>
      <label>Email</label>
      <label>Password</label>
      <label>Message</label>
    </div>
    
    <div class="form-column-right">
    <input type="text" name="fname" id="fname" placeholder="First name" required>
    <input type="text" name="lname" id="lname" placeholder="Last name" required>
    <input type="text" name="email" id="email" placeholder="Email" required>
    <input type="text" name="password" id="password" placeholder="Password" required>
    <textarea name="message" placeholder="Message" required></textarea>
  </div>
  
  <div class="submitContainer">
    <input type="submit" name="submit">
  </div>
    
    
  </form>
  
  <div class="records-container">
  
  
  <div class="records">
  <table cellspacing="0">
    <tbody>
      <tr class="header">
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Message</td>
      </tr>
  
  <?
  $getsql = 'SELECT * FROM 2_accounts ORDER BY id ASC';
         $result = mysqli_query($conn, $getsql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
               echo "<td>" . $row["id"]. "</td>";
                echo "<td>" . $row["first_name"]. "</td>";
                 echo "<td>" . $row["last_name"]. "</td>";
                  echo "<td title='" . $row["email"]. "'>" . $row["email"]. "</td>";
                   echo "<td id='rpass'>" . $row["password"]. "</td>";
                    echo "<td title='" . $row["message"]. "'>" . $row["message"]. "</td>";
                   echo "</tr>";
            }
         } else {
            //echo "0 results";
         }
         mysqli_close($conn);
  ?>
</tbody>
</table>
</div>
</div>
</div>
  
  <script src="main.js" type="text/javascript"></script>
</body>
</html>