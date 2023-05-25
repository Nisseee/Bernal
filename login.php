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
    <title>Sign up</title>
  </head>
  <body>
    <section class="bg-gray-50 dark:bg-gray-900">
      <div class="signup-container">
        <a class="heading"> Create an account </a>
        <div class="card">
          <div class="card-content">
            <form class="form" action="signup.php" method="post">
              <div class="form-group">
                <label for="email" class="label">Username</label>
                <input
                  type="email"
                  name="name"
                  id="email"
                  class="input"
                  placeholder="Enter username"
                  required=""
                />
              </div>
              <div class="form-group">
                <label for="email" class="label">Email</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="input"
                  placeholder="name@company.com"
                  required=""
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
                  required=""
                />
              </div>
              <div class="form-group">
                <label for="password" class="label">Confirm Password</label>
                <input
                  type="password"
                  name="confpassword"
                  id="password"
                  class="input"
                  placeholder="••••••••"
                  required=""
                />
              </div>
              <button type="submit" class="signup-btn">Log In</button>
              <p class="register-link">
                Don't have an account?
                <a href="signup.php" class="register-link-text">Sign up</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
