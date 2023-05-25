<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link href="../styles/components/hero.css" rel="stylesheet" />
    
    <title>Protfolio | Home</title>
  </head>
  <body>
    <?php require'../components/req/header.php';?>
    <main>
      <div class="hero container">
        <img class="hero__img" src="../img/Alvan.png" alt="Profile picture" />
        <h2 class="hero__subtitle">Hi, I'm Alvan 👋</h2>
        <h1 class="hero__title">BS IT Student.</h1>
        <p class="hero__description">
          A passionate <strong>Frontend / Backend</strong> web developer and a
          <strong>Programmer</strong>
        </p>
        <a class="hero__btn btn" href="../components/about.html">Know More</a>
      </div>
    </main>
    <script src="../js/main.js"></script>
  </body>
  <footer class="footer container section">
    <h3 class="footer__title">~ Alvan Bernal &copy; 2023 ~</h3>
  </footer>
</html>


<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>