<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../styles/components/contact.css" rel="stylesheet" />
    
    <title>Protfolio | Contact</title>
  </head>
  <body>
    //for nav bar
  <?php require'../components/req/header.php';?>

    <section class="bg-white dark:bg-gray-900">
      <div class="contact-container">
        <h2 class="heading">Contact Me</h2>
        <p class="description">
          Let me know if you need anything else.
        </p>
        <form action="#" class="form">
          <div class="form-group">
            <label for="email" class="label">Your email</label>
            <input
              type="email"
              id="email"
              class="input"
              placeholder="name@email.com"
              required
            />
          </div>
          <div class="form-group">
            <label for="subject" class="label">Subject</label>
            <input
              type="text"
              id="subject"
              class="input"
              placeholder="Enter subject here..."
              required
            />
          </div>
          <div class="form-group">
            <label for="message" class="label">Your message</label>
            <textarea
              id="message"
              rows="6"
              class="textarea"
              placeholder="Leave a comment..."
            ></textarea>
          </div>
          <button type="submit" class="btn">Send message</button>
        </form>
      </div>
    </section>
    <footer class="footer container section">
      <h3 class="footer__title">~ Alvan Bernal &copy; 2023 ~</h3>
    </footer>
  </body>
  <script src="../js/main.js"></script>
</html>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>