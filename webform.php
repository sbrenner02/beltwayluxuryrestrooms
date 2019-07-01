<?php

if($_POST["submit"]) {
    $recipient="sbrenner02@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>

<html>
<head>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <p>
          <label>Name:</label>
          <input name="sender">
          <label><br>
            <br>
            Email address:</label>
          <input name="senderEmail">
        </p>
        <p>

          <label>Message:</label>
          <textarea rows="5" cols="100" name="message"></textarea>

          <br>
          <input type="submit" name="submit">
        </p>
    </form>

</body>

</html>
