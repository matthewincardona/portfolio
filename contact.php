<?php
//  ini_set('display_errors',1); 
//  error_reporting(E_ALL);
if($_POST["submit"]) {
    $recipient="mpi7253@rit.edu";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact | Matthew Incardona</title>
    <?php include './includes/head.php';?>
  </head>

  <body>
    <div class="bg-overlay">
      <header>
        <?php include './includes/nav.php';?>
      </header>
      <main>
        <!-- contact -->
        <div class="contact-container">
          <div class="form-container">
            <h1>Get In Touch</h1>
            <p>
              Send me a message, I’m happy to answer any questions you have!
              <br />You can also connect with me on
              <a
                href="https://www.linkedin.com/in/matthew-incardona/"
                target="_blank"
                rel="noopener noreferrer"
                ><u>LinkedIn</u></a
              >, or reach me at (631) 594-9144<br /><br />
            </p>
            <form action="./email.php" method="”POST”">
              <label for="fname">Name</label>
              <input
                type="text"
                id="fname"
                name="fullname"
                placeholder="Name"
              />

              <label for="email">Email</label>
              <input type="text" id="email" name="email" placeholder="Email" />

              <label for="subject">Message</label>
              <textarea
                id="subject"
                name="subject"
                placeholder="Message"
                style="height: 200px"
              ></textarea>

              <input type="submit" value="Submit" />
            </form>
          </div>
        </div>
      </main>
        <?php include './includes/footer.php';?>
    </div>
  </body>
</html>
