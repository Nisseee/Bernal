<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./styles/style.css" rel="stylesheet" />
    <link href="./styles/modern-normalize.css" rel="stylesheet" />
    <link href="./styles/utils.css" rel="stylesheet" />
    <link href="./styles/components/header.css" rel="stylesheet" />
    <link href="./styles/components/footer.css" rel="stylesheet" />
    <link href="./styles/components/hero.css" rel="stylesheet" />
    <link href="./styles/components/mobile-nav.css" rel="stylesheet" />
    <link rel="stylesheet" href="./styles/components/signup.css" />
    <link rel="stylesheet" href="./styles/components/contact.css" />
    <link
      href="https://api.fontshare.com/v2/css?f[]=general-sans@500,600,400,700&display=swap"
      rel="stylesheet"
    />
    
    <title>Log In</title>
  </head>
  <body>
    <section class="bg-gray-50 dark:bg-gray-900">
      <div class="signup-container">
        <a class="heading"> Log in </a>
        <div class="card">
          <div class="card-content">
            <form class="form" action="./php/login.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
              <div class="form-group">
                <label for="email" class="label">Email</label>
                <input
                  type="email"
                  name="ename"
                  id="email"
                  class="input"
                  placeholder="name@company.com"
                  
                />
              </div>
              <div class="form-group">
                <label for="password" class="label">Password</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="input"
                  placeholder="••••••••"
                  
                />
              </div>
              
              <button type="submit" class="signup-btn">Log In</button>
              <p class="register-link">
                Don't have an account?
                <a href="./php/sign_up.php" class="register-link-text">Sign up</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
