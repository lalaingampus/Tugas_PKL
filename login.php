<?php
  session_start();
  require 'Proses/konek.php';
  
  if(isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
  }

  if(isset($_POST["registrasi"])) {
    if( register($_POST) > 0 ) {
      header("Location: index.html");
    }
    else {
      echo mysqli_error($conn);
    }
  }

  if(isset($_POST["login"])) {
    $email = $_POST["Eml_Login"];
    $password = $_POST["Pass_Login"];

    $result = mysqli_query($conn, "SELECT * FROM tb_regis WHERE Eml_Login = '$email'");

    // cek username
    if(mysqli_num_rows($result) === 1) {
      // cek password
      $row = mysqli_fetch_assoc($result);
      if( password_verify($password, $row["Pass_Login"]) ) {
          // Set Session
          $_SESSION["login"] = true;

          header("Location: index.php");
          exit;
      }
    }
    $error = true;
  }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Daftar Dulu</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel="stylesheet" href="aset/css/styleLogin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="cotn_principal">
<div class="cont_centrar">
    
  <div class="cont_login">

<div class="cont_info_log_sign_up">
        
      <div class="col_md_login">
        
        <?php if(isset($error)) : ?>
    <p style="color:red;">Username / Password Salah</p>
 <?php endif; ?>      
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p>Unutk Pengguna Yang Sudah Mendaftarkan Dirinya</p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p>Untuk Pengguna Yang Belum Mendaftarkan Dirinya</p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>

 <form action="" method="POST">
 
 <div class="cont_form_login">

  <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
  <a href="index.html" class="home" onclick="ocultar_login_sign_up()" >Home</a>
   <h2>LOGIN</h2>
  <input type="text" name="Eml_Login" placeholder="Email" required oninvalid="this.setCustomValidity('Ini Belum Diisi Goblok')" oninput="this.setCustomValidity('')"/>
  <input type="password" name="Pass_Login" placeholder="Password"  required oninvalid="this.setCustomValidity('Password belum diisi juga Goblok')" oninput="this.setCustomValidity('')"/>
  <button class="btn_login" name="login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </form>

  
  <form action="" method="POST"> 
  <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>SIGN UP</h2>
<input type="text" name="Nm_Login" placeholder="Nama" required oninvalid="this.setCustomValidity('Ini Belum Diisi Goblok')" oninput="this.setCustomValidity('')"/>
<input type="text" name="Eml_Login" placeholder="Email" required oninvalid="this.setCustomValidity('Ini Juga Belum Diisi Goblok')" oninput="this.setCustomValidity('')"/>
<input type="password" name="Pass_Login" placeholder="Password" required oninvalid="this.setCustomValidity('Hidih Ini Belum Diisi Goblok')" oninput="this.setCustomValidity('')"/>
<input type="password" name="Copass_Login" placeholder="Confirm Password" required oninvalid="this.setCustomValidity('Dasar Goblok')" oninput="this.setCustomValidity('')"/>
<button class="btn_sign_up" name="registrasi" onclick="cambiar_sign_up()">SIGN UP</button>

  </div>
</form>

    </div>
    
  </div>
 </div>
</div>
<!-- partial -->
  <script  src="aset/js/scriptLogin.js"></script>

</body>
</html>