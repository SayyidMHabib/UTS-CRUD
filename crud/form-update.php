<?php
include "database.php";

$query = "SELECT *FROM person WHERE id = '$_GET[id]'";
$data = $con -> prepare($query);
$data -> execute();

$person = $data -> fetch(PDO :: FETCH_OBJ);

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
              <a href="index.php" class="brand-logo">WeHamia</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
       
              <ul class="right hide-on-med-and-down">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="form.php" class="active">Form</a></li>       
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
        <li><a href="index.php" class="active white-text">Home</a></li>
        <li><a href="form.php" class="active white-text">Form</a></li>
      </ul>


      <!-- form -->     
        
        <div class="parallax-container">      
          <div class="parallax"><img src="img/jonatha.jpg"></div>
            <div class="container">
              <div class="card-panel">
                    <form method="POST" action="update.php">
                           
                            <h5>Update Form</h5>

                            <input type="hidden" name="id" value="<?php echo $person -> id ?>"/>

                            <div class="input-field">
                            <input type="text" name="name" id="name" required class="validate" value="<?php echo $person -> name ?>">
                            <label for="name"">Nama Lengkap</label>
                            </div>

                            <div class="input-field">
                            <input type="text" name="tempat_lahir" id="tempat_lahir" required class="validate" value="<?php echo $person -> tempat_lahir ?>">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            </div>

                            <div class="input-field">
                            <input type="text" class="datepicker" name="tanggal_lahir" id="tanggal_lahir" required class="validate" value="<?php echo $person -> tanggal_lahir ?>">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            </div>

                            <div class="input-field">
                            <input type="text" name="usia" id="usia" required class="validate" value="<?php echo $person -> usia ?>">
                            <label for="usia">Usia</label>
                            </div>

                            <div class="input-field">
                              <select type="text" name="pendidikan" id="pendidikan" required class="validate" value="<?php echo $person -> pendidikan ?>">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="Sekolah Dasar (SD/MI)">Sekolah Dasar (SD/MI)</option>
                                <option value="Sekolah Menengah Pertama (SMP/MTS)">Sekolah Menengah Pertama (SMP/MTS)</option>
                                <option value="Sekolah Menengah Atas (SMA/MA)">Sekolah Menengah Atas (SMA/MA)</option>
                                <option value="Strata I (S1)/Diploma (D3)">Strata I (S1)/Diploma (D3)</option>
                                <option value="Strata II (S2)">Strata II (S2)</option>
                                <option value="Strata III (S3)">Strata III (S3)</option>
                              </select>
                              <label for="pendidikan">Pendidikan</label>
                            </div>


                            <div class="input-field">
                            <input type="text" name="email" id="email" required class="validate" value="<?php echo $person -> email ?>">
                            <label for="email">Email</label>
                            </div>

                            <div class="input-field">
                            <textarea name="alamat" id="alamat" class="materialize-textarea"><?php echo $person -> alamat ?></textarea>
                            <label for="alamat">Alamat</label>
                            </div>

                            <button type="submit" class="btn grey darken-1"><i class="material-icons left">book</i>Save</button>
                        
                    </form>                
                  <br>
                  
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

        const select = document.querySelectorAll('select');
        M.FormSelect.init(select);

        const date = document.querySelectorAll('.datepicker');
        M.Datepicker.init(date);

        </script>

    </body>
  </html>