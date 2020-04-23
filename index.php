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
              <a href="https://wehamia.com/" class="brand-logo">WeHamia</a>       
            </div>
       
          </div>
       
        </nav>
      
      </div>
   
      
        <div class="parallax-container">      
          <div class="parallax"><img src="img/andrew.jpg"></div>
            <div class="container">
             <div class="index">
              <div class="card-panel">
                    
                    <h3>Selamat Datang</h3>
                    
                    <p><h5><i>Halaman ini merupakan aplikasi simulator survey pendidikan masyarakat</i></h5></p>
                    <p><h5><i>Aplikasi ini merupakan tugas UTS CRUD (Create, Read, Update, Delete)</i></h5></p>
                    <br>
                    <a href="login.php">
                        <button type="submit" class="btn grey darken-1">Masuk</button>
                    </a>                   
                  
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