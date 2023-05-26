
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
    <style>
      .error {
        background: #F2DEDE;
        color: #A94442;
        padding: 10px;
        width: 95%;
        border-radius: 5px;
        margin: 20px auto;
        }
       .success {
        text-align: center;
        background: #ecf2de;
        color: #42a950;
        padding: 10px;
        width: 95%;
        border-radius: 5px;
        margin: 20px auto;
        }
    </style>
  </head>
  <body>
    
  <?php require'../components/req/header.php';?>

    <section class="bg-white dark:bg-gray-900">
      <div class="contact-container">
        <h2 class="heading">Contact Me</h2>
        <p class="description">
          Let me know if you need anything else.
        </p>
      
        <form action="../php/emailer.php" method="post" class="form">
          <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <div class="form-group">
            <label for="email" class="label">Your email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="input"
              placeholder="name@email.com"
              required=""
            />
          </div>
          <div class="form-group">
            <label for="subject" class="label">Subject</label>
            <input
              type="text"
              name="subject"
              id="subject"
              class="input"
              placeholder="Enter subject here..."
              required=""
            />
          </div>
          <div class="form-group">
            <label for="message" class="label">Your message</label>
            <textarea
              id="message"
              name="message"
              rows="6"
              class="textarea"
              placeholder="Leave a message..."
              required=""
            ></textarea>
          </div>
          <button type="submit" name="submit"class="btn">Send message</button>
        </form>
      </div>
    </section>
    <footer class="footer container section">
    <?php require'../components/req/footer.php';?>
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
