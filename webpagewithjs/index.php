<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UMS Website</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
      <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
      <script>
          $( function() {
              $( "#tabs" ).tabs();
          } );
      </script>
      <style>
          #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
          #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
          #sortable li span { position: absolute; margin-left: -1.3em; }
      </style>
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
      <script>
          $( function() {
              $( "#sortable" ).sortable();
          } );
      </script>
      <style>
          .toggler { width: 500px; height: 200px; position: relative; }
          #button { padding: .5em 1em; text-decoration: none; }
          #effect { position: relative; }
          .newClass { width: 240px;  padding: 1em; letter-spacing: 0; margin: 0; }
          .anotherNewClass { text-indent: 40px; letter-spacing: .2em; width: 410px; height: 100px; padding: 30px; margin: 10px; font-size: 1.1em; }
      </style>
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
      <script>
          $( function() {
              $( "#button" ).on( "click", function() {
                  $( ".newClass" ).switchClass( "newClass", "anotherNewClass", 1000 );
                  $( ".anotherNewClass" ).switchClass( "anotherNewClass", "newClass", 1000 );
              });
          } );
      </script>
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="#home" id="navbar__logo">UMS</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="#home" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__item">
            <a href="#about" class="navbar__links" id="about-page">About</a>
          </li>
          <li class="navbar__item">
            <a href="#services" class="navbar__links" id="services-page">Services</a
            >
          </li>
          <li class="navbar__btn">
            <a href="#sign-up" class="button" id="signup">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero" id="home">
      <div class="hero__container">
        <h1 class="hero__heading">University management <span>system</span></h1>
        <p class="hero__description">Simplify your student life</p>
        <button class="main__btn"><a href="#">Explore</a></button>
      </div>
    </div>

    <!-- About Section -->
    <div class="main" id="about">
      <div class="main__container">
        <div class="main__img--container">
          <div class="main__img--card"><i class="fas fa-layer-group"></i></div>
        </div>
        <div class="main__content">
          <h1>About</h1>
          <h2>University Management System</h2>
          <p>University Management System will make your university life easier.
            You can easily register on our website. You can find out the class schedules,
            when interesting events and other news will take place.</p>
        </div>
      </div>
    </div>

    <!-- Services Section -->
    <div class="services" id="services">
      <h1>What we can offer</h1>
      <div class="services__wrapper">
        <div class="services__card">
          <h2>Watch Schedules</h2>
          <p>Disciplines</p>
          <div class="services__btn"><button>Get Started</button></div>
        </div>
        <div class="services__card">
          <h2>Events</h2>
          <p>In which you cat take part</p>
          <div class="services__btn"><button>Get Started</button></div>
        </div>
        <div class="services__card">
          <h2>Telegram chats</h2>
          <p>Almost all</p>
          <div class="services__btn"><button>Get Started</button></div>
        </div>
        <div class="services__card">
          <h2>Write your own suggestions</h2>
          <p>We see everything</p>
          <div class="services__btn"><button>Get Started</button></div>
        </div>

      </div>
    </div>

    <!-- Features Section -->
    <div class="main" id="sign-up">
      <div class="main__container">
        <div class="main__content">
          <h1>Join Us</h1>
          <h2>Sign Up Today</h2>
          <p>University Management System</p>
          <button class="main__btn"><a href="#">Sign Up</a></button>
        </div>
        <div class="main__img--container">
          <div class="main__img--card" id="card-2">
            <i class="fas fa-users"></i>
          </div>
        </div>
      </div>
    </div>

    <div id="tabs" style="color: #1A1A1A; background-color: #1c1e1e">
        <ul>
            <li><a href="#tabs-1">Nunc tincidunt</a></li>
            <li><a href="#tabs-2">Proin dolor</a></li>
            <li><a href="#tabs-3">Aenean lacinia</a></li>
        </ul>
        <div id="tabs-1">
            <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
        </div>
        <div id="tabs-2">
            <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
        </div>
        <div id="tabs-3">
            <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
            <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
        </div>
    </div>

    <div class="toggler">
        <div id="effect" class="newClass ui-corner-all">
            Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede.
        </div>
    </div>
    <button id="button" class="ui-state-default ui-corner-all">Run Effect</button>
    <br>


    <!-- Footer Section -->
    <div class="footer__container">
      <div class="footer__links">
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>Contact Us</h2>
            <a href="/">+380 000 00 00</a>
            <a href="/">ums@gmail.com</a>
            <a href="/">ums@ukr.net</a>
              <form action="index.php" method="POST">
                  <p>Имя: <input type="text" name="name" /></p>
                  <p>Возраст: <input type="number" name="age" /></p>
                  <input type="submit" value="Отправить">
                  <?php
                  $name = "";
                  $age = "";
                  if(isset($_POST["name"])){
                      $name = $_POST["name"];
                  }
                  if(isset($_POST["age"])){
                      $age = $_POST["age"];
                  }
                  if (!empty($name) && !empty($age)) {
                      echo "<p>Received</p><br>";
                      echo "<p>",date("Y-m-d H:i:s", strtotime('+2 hours')), "</p>";
                  }?>
              </form>

          </div>
        </div>
        <div class="footer__link--wrapper">

        </div>
      </div>
      <section class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <a href="/" id="footer__logo">UMS</a>
          </div>
          <p class="website__rights">© UMS 2021. All rights reserved</p>
          <div class="social__icons">
            <a href="/" class="social__icon--link" target="_blank"
              ><i class="fab fa-facebook"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-instagram"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-youtube"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-linkedin"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-twitter"></i
            ></a>

          </div>
        </div>
      </section>
    </div>

    <script src="app.js"></script>
  </body>
</html>


