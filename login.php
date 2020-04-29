<?php session_start();
if(isset($_SESSION['user'])) { header("Location: crud/form.php"); }
 ?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--my css-->
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!-- logo -->
      <link href="img/logo.png" rel="icon" type="icon/x-image" >

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>WeHamia | Aplikasi Simulator Survey Pendidikan Menggunakan Metode CRUD</title>
    </head>

    <body>

    <div class="navbar-fixed">
       
        <nav class="#757575 grey darken-1">
       
          <div class="container">
       
            <div class="nav-wrapper">
              <a href="../index.php" class="brand-logo">WeHamia</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
       
              <ul class="right hide-on-med-and-down">
                <li><a href="index.php" class="active">Home</a></li>       
              </ul>
       
            </div>
       
          </div>
       
        </nav>
      
      </div>

      <!--sidenav-->

      <ul class="sidenav grey darken-0" id="mobile-nav">
        <div>  
          <h5 class="center white-text">WeHamia</h5>
        </div>
        <br>
        <li><a href="index.php" class="active white-text">Home</a></li>
      </ul>


      <!-- form -->     
        
        <div class="parallax-container">      
          <div class="parallax"><img src="img/form.jpg"></div>
            <div class="container">
             <div class="login">
              <div class="card-panel center">
                    <form method="POST" action="server/server_login.php">
                           
                            <h5>Form Login</h5>

                            <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="username" id="username" required class="validate">
                            <label for="username">Username or Email</label>
                            </div>

                            <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" name="password" id="password" required class="validate">
                            <label for="password">Password</label>
                            </div>

                            <button name="login" value="Masuk" type="submit" class="btn grey darken-1">Masuk</button>

                            <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
                        
                    </form>
                  
              </div>
             </div>
            </div>
        </div>

      <!-- footer -->

      <footer class="grey darken-1 center white-text">
        <p>
            WeHamia &copy;Copyright 2020 by <a href="https://instagram.com/sayyidmhabib/" class="active white-text">Sayyid Muhammad Habib</a>
        </p>
      </footer>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

        <script>

        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        </script>

    </body>
  </html>