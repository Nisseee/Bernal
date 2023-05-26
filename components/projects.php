<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <link  href="../styles/components/project.css" rel="stylesheet"/>
        
        <title>Protfolio | Projects</title>
        
    </head>
    <body>
      <!-- nav bar  -->
    <?php require'../components/req/header.php';?>
        <main>
          <div class="projects container ">
            <dir class="project__title">
              <h1>Projects</h1>
             
            </dir>
            <div class="subtitle">
              <p>Works and Collaborative Works</p>
            </div>
            
            <div class="project__container">
              <div class="project-box">

                  <div class="img-wrapper">
                    <img class="sample__img" src="../img/cProject.png" alt="c Project">
                  </div>
                  <div class="content">
                    <h3>Jail Management Record</h3>
                    <p>Utilizing the powerful capabilities of the <strong>C programming language</strong>
                      , an ingenious system we developed that encompasses a
                       wide range of functionalities, including robust login features 
                       and the ability to perform Create, Update, Search, and Delete 
                       operations on records.
                    </p>
                  </div>
                </div>
                
                <div class="project-box">
                  <div class="img-wrapper">
                    <img class="sample__img"  src="../img/ux-ui.png" alt="1st website">
                  </div>
                  <div class="content">
                    <h3>
                      BYTES Online Store (HiFi Prototype)
                    </h3>
                    <p>A <strong>JavaScript</strong>-based prototype of an online T-shirt store
                       website has been created, showcasing user login and signup 
                       functionalities with local storage serving as the database. 
                       Additionally, it includes a cart system implemented through DOM Manipulation.
                    </p>
                  </div>
                </div>

                <div class="project-box">
                  <div class="img-wrapper">
                    <img class="sample__img"  src="../img/calcu.png" alt="calcu">
                  </div>
                  <div class="content">
                    <h3>
                      Basic Calculator with Mean, Median, Mode Calculator
                    </h3>
                    <p>I developed a <strong>Java</strong> calculator that includes functions
                       for calculating mean, median, and mode. Additionally, it 
                       features a history of computation and includes buttons to 
                       conveniently access its various features.
                       <a href="https://github.com/Nisseee/Calculator" target="_blank"> 
                        &lt; source code &gt; </a>
                    </p>
                  </div>
                </div>

                <div class="project-box">
                  <div class="img-wrapper">
                    <img class="sample__img"  src="../img/oopJAva.png" alt="inventory">
                  </div>
                  <div class="content">
                    <h3>
                      VEGAN Inventory and Point of Sale System
                    </h3>
                    <p>An Inventory and Point of Sale System designed specifically for farms.
                       VEGAN is a simple and authentic system that helps farmers manage their 
                       inventory and process transactions efficiently. This was created by our team using 
                       <strong>Java</strong> together with Apache NetBeans.
                    </p>
                  </div>
                </div>

                <div class="project-box">
                  <div class="img-wrapper">
                    <img class="sample__img"  src="../img/weather.png" alt="weather app">
                  </div>
                  <div class="content">
                    <h3>
                      UI Design for Weather Application 
                    </h3>
                    <p>he UI design for this project was created using <strong>Figma</strong>, 
                      incorporating carefully chosen colors, attributes, and 
                      other components that were utilized throughout the design. 
                      <a href="https://www.figma.com/file/1JiiGmlUH8CXfe1Dd003z1/Alfonso%2FAlvan---Weather-App?type=design&node-id=140%3A1250&t=sulYyrcdsm6dLUbD-1" target="_blank"> 
                        &lt; view project &gt; </a>
                    </p>
                  </div>
                </div>

                <div class="project-box">
                  <div class="img-wrapper">
                    <img class="sample__img"  src="../img/chat.png" alt="node js chat">
                  </div>
                  <div class="content">
                    <h3>
                      Messaging App using Node JS
                    </h3>
                    <p>This chatting app was developed using <strong>Node.js</strong> and 
                      <strong>Socket.io</strong>, 
                      featuring a login system that allows users to create an account 
                      and choose a room for communication.
                    </p>
                  </div>
                </div>
            </div>
            
          </div>
          
         
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