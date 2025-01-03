<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link href="../styles/style.css" rel="stylesheet" />
    <link href="../styles/modern-normalize.css" rel="stylesheet" />
    <link href="../styles/utils.css" rel="stylesheet" />
    <link href="../styles/components/header.css" rel="stylesheet" />
    <link href="../styles/components/footer.css" rel="stylesheet" />
    <link href="../styles/components/mobile-nav.css" rel="stylesheet" />
    <link
      href="https://api.fontshare.com/v2/css?f[]=general-sans@500,600,400,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="32x32" href="../img/icon.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icon1.png" />

    <style>
      .mobile-nav__link:hover {
      color: var(--clr-green);
      }
    </style>
  </head>
  <body>
    <header style=" justify-content: space-between;" class="header container">
    <div style="margin-left: 100px; " >
          <h1><a style="text-decoration: none;" href="">Alvan Bernal</a> </h1>
    </div>
      <nav>
        
        <ul class="header__menu">
          <li>
            <a class="header__link" href="../components/home.php">Home</a>
          </li>
          <li>
            <a class="header__link" href="../components/about.php">About</a>
          </li>
          <li>
            <a class="header__link" href="../components/skills.php">Skills</a>
          </li>
          <li>
            <a class="header__link" href="../components/projects.php">Projects</a>
          </li>
          <li class="header__line"></li>
          <li>
            
          </li>
          <li>
            <a class="header__contact btn" href="../components/contact.php">Contact</a>
          </li>
          <li class="dropdown">
            <a class="dropdown-button"><i class="fa login-icon">&#xf007;</i><i class="bi bi-caret-down-fill"></i></a>
            <div class="dropdown-content">
              <a class="header__contact " href="../php/logout.php">Logout</a>
            </div>
          </li>
        </ul>
        <button class="header__bars">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
              clip-rule="evenodd"
            />
          </svg>
        </button>
      </nav>
    </header>
    <!-- Mobile  -->
    <div class="mobile-nav">
      <nav>
        <ul class="mobile-nav__menu">
          <li>
            <a class="mobile-nav__link" href="../components/home.php">Home</a>
          </li>
          <li>
            <a class="mobile-nav__link" href="../components/about.php">About</a>
          </li>
          <li>
            <a class="mobile-nav__link" href="../components/skills.php">Skills</a>
          </li>
          <li>
            <a class="mobile-nav__link" href="../components/projects.php">Projects</a>
          </li>
          <li class="mobile-nav__link-line"></li>
          <li>
            
          </li>
          <li>
            <a class="mobile-nav__btn btn" href="../components/contact.php">Contact</a>
          </li>
          <li class="dropdown">
            <a class="dropdown-button"><i class="fa login-icon">&#xf007;</i><i class="bi bi-caret-down-fill"></i></a>
            <div class="dropdown-content">
              <a class="header__contact " href="../php/logout.php">Logout</a>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </body>
  </html>