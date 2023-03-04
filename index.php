<?php 
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['nivel'])){
  header('Location:./inicio.php');
}
$info =0;
?>
<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <meta charset="utf-8">



    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <title>Mapas para a vida</title>

    <link rel="shortcut icon" href="./imgs/Logo.ico">

<head>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  
  <link rel="stylesheet" type="text/css" href="./includes/CSS/numerologia.css">

  <link rel="stylesheet" type="text/css" href="./includes/geral.css">

  <!-- <style>

    body {

      display: flex;

      min-height: 100vh;

      flex-direction: column;

    }



    main {

      flex: 1 0 auto;

    }



    body {

      background: #fff;

    }



    .input-field input[type=date]:focus + label,

    .input-field input[type=text]:focus + label,

    .input-field input[type=email]:focus + label,

    .input-field input[type=password]:focus + label {

      color: #e91e63;

    }



    .input-field input[type=date]:focus,

    .input-field input[type=text]:focus,

    .input-field input[type=email]:focus,

    .input-field input[type=password]:focus {

      border-bottom: 2px solid #e91e63;

      box-shadow: none;

    }

  </style> -->

</head>
<body class="purple">
  <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 5vw;" src="./imgs/Logo.png" />
      <h5 class="white-text font-padrao">Sistema Mapas para a vida</h5>
      <div class="section"></div>
      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; width: 25vw; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post" action="./Login/logando.php" enctype="multipart/form-data">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='Login' id='Login' />
                <label for='Login'>E-mail ou Usuário</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='Senha' id='Password' />
                <label for='Password'>Insira sua senha</label>
              </div>
            </div>
            <div class="row">
             <!-- <div class='input-field col s12'>
                <input class='validate' type='password' name='' id='ConfirmPassword' />
                <label for='ConfirmPassword'>Confirme sua senha</label>
              </div> -->
              <label style='float: right;'>
                <a class='purple-text text-darken-4' href='#!'><b>Forgot Password?</b></a>
              </label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect purple'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
          <p class="white-text font-padrao"> &copy; 2023 Mapas para a vida</p>
    </center>
  </main>
  <?php include "./includes/PHP/errosdelogin.php"; ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!--     <script type="text/javascript">

    var password = document.getElementById("Password")

  , confirm_password = document.getElementById("ConfirmPassword");



      function validatePassword(){

        if(password.value != confirm_password.value) {

          confirm_password.setCustomValidity("As senhas estão divergentes corrija por favor");

        } else {

          confirm_password.setCustomValidity('');

        }
      }
      password.onchange = validatePassword;

      confirm_password.onkeyup = validatePassword;

  </script> -->
  <?php if(isset($_POST['idErr'])){$info = $_POST['idErr'];} ?>
  <script>
    var info = <?php echo$info;?>;
    if(info == 1){
      $('#modalerro1').modal();
      $('#modalerro1').modal('open'); 
    }
    if(info == 2){
      $('#modalerro2').modal();
      $('#modalerro2').modal('open'); 
    }
    if(info == 3){
      $('#modalerro3').modal();
      $('#modalerro3').modal('open'); 
    }
  </script>

</body>

</html>