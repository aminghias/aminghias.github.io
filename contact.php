<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="contactme.css">

  <title>Contact Me</title>
</head>

<body>

  <?php
if (isset($_POST['submit'])) {

  $name  = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];
  $txt = $_POST['message'];

  $to_email = "whereismymind557@gmail.com";
  $headers = 'From: '.$from_email;
  $message = '<h3><strong>Name: </strong>'.$name.'</h3>
  <h4><strong>Email: </strong>'.$from_email.'</h4>
  <h4><strong>Subject: </strong>'.$subject.'</h4><hr>
  <p><strong>Message: </strong>'.$txt.'</p>';
  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  
}
?>
  <div class="container okay rounded">
    <h4 class="bg-white p-3 font-weight-light text-center rounded">Contact Me</h4>
    <form class="bg-white p-3 rounded" method="POST" action="">
      <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput2">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput2"
          placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput3">Subject</label>
        <input type="header" name="subject" class="form-control" id="exampleFormControlInput3" placeholder="heading">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Your Message</label>
        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-lg My-Button-see-live w-100 rounded">Submit</button>
      <?php 
      if (isset($_POST['submit'])) {
      if (mail($to_email, $subject, $message , $headers)) {
        echo "<p class = 'text-center mt-2 container alert alert-success' >$name, Your email has been sent successfully</p> <br>";
      } else {
        echo "<p class = 'text-center container alert alert-success' >Email didn't sent, try again!</p> <br>";
      }
     } ?>
    </form>

  </div>


</body>

</html>