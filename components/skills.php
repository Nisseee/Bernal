<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        
        <link  href="../styles/components/skills.css" rel="stylesheet"/>
       
        <title>Protfolio | Skills</title>

    </head>
    <body>
      <!-- nav bar  -->
    <?php require'../components/req/header.php';?>
        <main>
            <dir class="skills">
              <dir class="skill-head">
                  <h1>Skills</h1>
              </dir>
              <div class="skill-container">
                  <div class="skill-box">
                    <div class="skill-title">
                      <div class="logo">
                        <img class="skill-icon" src="../img/html-5.png" alt="html logo">
                      </div>
                      <h3>HTML 5</h3>
                      <p>70%</p>
                    </div>
                    <span class="bar"><span class="html"></span></span>
                  </div>

                  <div class="skill-box">
                    <div class="skill-title">
                      <div class="logo">
                        <img class="skill-icon" src="../img/css-3.png" alt="html logo">
                      </div>
                      <h3>CSS</h3>
                      <p>60%</p>
                    </div>
                    <span class="bar"><span class="css"></span></span>
                  </div>

                  <div class="skill-box">
                    <div class="skill-title">
                      <div class="logo">
                        <img class="skill-icon" src="../img/figma.png" alt="html logo">
                      </div>
                      <h3>Figma</h3>
                      <p>70%</p>
                    </div>
                    <span class="bar"><span class="figma"></span></span>
                  </div>

                  <div class="skill-box">
                    <div class="skill-title">
                      <div class="logo">
                        <img class="skill-icon" src="../img/js.png" alt="html logo">
                      </div>
                      <h3>Javascript</h3>
                      <p>60%</p>
                    </div>
                    <span class="bar"><span class="js"></span></span>
                  </div>

                  <div class="skill-box">
                    <div class="skill-title">
                      <div class="logo">
                        <img class="skill-icon" src="../img/java.png" alt="html logo">
                      </div>
                      <h3>Java</h3>
                      <p>90%</p>
                    </div>
                    <span class="bar"><span class="java"></span></span>
                  </div>

                  <div class="skill-box">
                    <div class="skill-title">
                      <div class="logo">
                        <img class="skill-icon" src="../img/c.png" alt="html logo">
                      </div>
                      <h3>C</h3>
                      <p>90%</p>
                    </div>
                    <span class="bar"><span class="c"></span></span>
                  </div>

                  <div class="skill-box">
                    <div class="skill-title">
                      <div class="logo">
                        <img class="skill-icon" src="../img/node.png" alt="html logo">
                      </div>
                      <h3>Node JS</h3>
                      <p>60%</p>
                    </div>
                    <span class="bar"><span class="node"></span></span>
                  </div>

                  <div class="skill-box">
                    <div class="skill-title">
                      <div class="logo">
                        <img class="skill-icon" src="../img/bootstrap.png" alt="html logo">
                      </div>
                      <h3>Bootstrap</h3>
                      <p>50%</p>
                    </div>
                    <span class="bar"><span class="bootstrap"></span></span>
                  </div>

                  <div class="skill-box">
                    <div class="skill-title">
                      <div class="logo">
                        <img class="skill-icon" src="../img/git.png" alt="html logo">
                      </div>
                      <h3>Git</h3>
                      <p>70%</p>
                    </div>
                    <span class="bar"><span class="git"></span></span>
                  </div>
                  
              </div>
            </dir>
        </main>
        <script src="../js/main.js"></script>
    </body>
    <footer class="footer container section">
      <?php require'../components/req/footer.php';?>
    </footer>

</html>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>