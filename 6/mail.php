
  <?
  // Recipient
  $email = $_POST['email'];
  
  // Subject
  $subject = 'Test Email: Not Important';
  
  // Headers
  $headers = "From: test@email.com\r\n";
  $headers .= "Reply-To: test@email.com\r\n";
  $headers .= 'Content-Type: text/html; charset=ISO-8859-1\r\n';
  
  // Message
  $message = '<html><body>';
  $message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
  $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
  $message .= "<tr style='background: #eee;'><td><strong>Name:</strong></td><td>filler text</td></tr>";
  $message .= "<tr><td><strong>Email:</strong> " . $email . " </td><td>filler text</td></tr>";
  $message .= "<tr><td><strong>Type of Change:</strong> </td><td>filler text</td></tr>";
  $message .= "<tr><td><strong>Urgency:</strong> </td><td>filler text</td></tr>";
  $message .= "<tr><td><strong>URL To Change (main):</strong> </td><td>filler text</td></tr>";
  $message .= "<tr><td><strong>NEW Content:</strong> </td><td>filler text</td></tr>";
  $message .= "</table>";
  $message .= "</body></html>";
  
  // Send Email
  mail($email, $subject, $message, $headers);
  
  
  echo "Copy of message sent to " . $email . "<br>" . $message . "<br><a href='index.php'>Go back</a>";
  ?>