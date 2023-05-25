<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link href="../styles/components/about.css" rel="stylesheet" />
    
    <title>Protfolio | About</title>
  </head>
  <body>
    <?php require'../components/req/header.php';?>
    <!-- End of Mobile  -->
    <main>
      <div class="about container section">
        <div class="about__img-wrapper">
          <img class="about__img" src="../img/profile.png" alt="picture" />
        </div>
        <div class="about__content">
          <h2 class="about__title">About</h2>
          <p class="about__description">
            My name is John Alvan Bernal, and I am currently pursuing a
            <strong>Bachelor of Science in Information Technology.</strong>This
            website serves as a platform for me to share my passion for
            technology and showcase my skills and knowledge in the field.
          </p>
          <p class="about__description">
            In the course of my academic career, I have had the chance to work
            on a number of difficult projects that have improved my technical
            proficiency and problem-solving capabilities.
          </p>
          <p class="about__description">
            This website serves as a portfolio where you can explore some of my
            projects and see firsthand the skills I have developed throughout my
            studies.
          </p>
          <hr class="about__hr" />
          <h3 class="about__subtitle">More About Me</h3>
          <div class="about__ul-container">
            <ul class="about__ul">
              <h3 class="about__subtitle">Education</h3>
                    <li class="about__list">Tiwi Central School [Elementary 2008 - 2015]</li>
                    <li class="about__list">Tabaco National High School [Junior High 2015 - 2019]</li>
                    <li class="about__list">Tabaco National High School [Senior High 2019 - 2021]</li>
              </ul>
          </div>
          <div class="about__ul-container">
            <ul class="about__ul">
              <h3 class="about__subtitle">Skill/Qualification</h3>
                    <li class="about__list">Good communication</li>
                    <li class="about__list">Willing to learn</li>
                    <li class="about__list">Fast learner</li>
                    <li class="about__list">Can   work   under   pressure</li>
                    <li class="about__list">Responsible to provide a good quality
                      customer service</li>
                    <li class="about__list"><a class="btn" href="../components/skills.html">Technologic Skills</a></li>
              </ul>
          </div>
        </div>
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