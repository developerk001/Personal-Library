<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  $pageTitle = 'Suggession';
  include 'inc/nav.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
    $email    = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $address  = trim(filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING));
    $feedback = trim(filter_input(INPUT_POST, 'feedback', FILTER_SANITIZE_STRING));
    if ($name == '' || $email == '' || $address == '' || $feedback == '') {
      $errorMessage = '<p style="color: blue">Please Fill out the feild properly</p>';
      echo $errorMessage;
      exit;
    }
    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);
    if (!isset($errorMessage) AND !$mail->ValidateAddress($email)) {
      $errorMessage = 'Invalid Email Address';
    }
    if (!isset($errorMessage)) {
      try {
          // SMTP configuration
          $mail->isSMTP();
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPAuth = true;
          $mail->Username = 'designersohail786@gmail.com';
          $mail->Password = '159632478';
          $mail->SMTPSecure = 'tls';

          // Addresses
          $mail->setFrom($email, $name);
          $mail->addAddress('designersohail786@gmail.com', 'Sohail Khan');

          // Output Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'Suggession From ' . $name;
          $mail->Body    = strip_tags($feedback);

          $mail->send();
          echo '<p stle="color:blue">Message has been send. Please check that out.</p>';
          exit;
      } catch (Exception $e) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      }
    }
  }
?>
<section>
  <div class="form">
    <p class="caption">Give Some Feedback About This Library</p>
    <div class="wrapper">
      <form action="suggest.php" method="POST">
        <label for="name">Full Name : </label>
        <input type="text" name="name" class="input-text"><br /><br />

        <label for="name">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </label>
        <input type="email" name="email" class="input-text"><br /><br />

        <label for="name">Address : &nbsp;&nbsp;</label>
        <input type="text" name="address" class="input-text"><br /><br />

        <label for="feedback">Feedback : </label><br /><br />
        <textarea name="feedback" rows="6" cols="80" class="input-text"></textarea><br /><br />

        <input type="submit" name="submit" value="Submit" class="input-button">
      </form>
    </div>
  </div>
</section>
<?php
  include 'inc/foot.php';
?>
