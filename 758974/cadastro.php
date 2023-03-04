<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <meta charset="utf-8">



    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <title>Mapas para a vida</title>



<head>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <link rel="stylesheet" type="text/css" href="../includes/geral.css">

  <link rel="stylesheet" type="text/css" href="../includes/CSS/numerologia.css">

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

    .input-field select:focus + label,

    .input-field input[type=text]:focus + label,

    .input-field input[type=email]:focus + label,

    .input-field input[type=password]:focus + label {

      color: #e91e63;

    }



    .input-field input[type=date]:focus,

    .input-field select:focus,

    .input-field input[type=text]:focus,

    .input-field input[type=email]:focus,

    .input-field input[type=password]:focus {

      border-bottom: 2px solid #e91e63;

      box-shadow: none;

    }

  </style -->

</head>



<body class="purple">

  <div class="section"></div>

  <main>

    <center>

      <img class="responsive-img" style="width: 10vw;" src="../imgs/Logo.png" />

      <div class="section"></div>



      <h5 class="white-text">Cadastre-se ultilizando o formulário abaixo</h5>

      <div class="section"></div>





      <div class="container">

        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">



          <form class="col s12" method="post" action="cad_users.php" enctype="multipart/form-data">

            <div class="row">

              <div class="col s12">

              </div>

            </div>

            <div class="row">

              <div class="col s6 input-field">

                <input class="validate" type="text" name="nome" id="nome">

                <label for="nome">Nome</label>

              </div>

              <div class="col s6 input-field">

                <input class="validate" type="text" name="sobrenome" id="sobrenome">

                <label for="sobrenome">Sobrenome</label>

              </div>

            </div>

            <div class="row">

              <div class="input-field col s12">

                <input class="validate" type="text" name="apelido" id="user" />

                <label for="user">Usuário</label>

              </div>

            </div>

            <div class="row">

              <div class="col s12 input-field">

                <input class="validate" id="date" type="date" name="dataNasc">

                <label>Data de Nascimento</label>

              </div>

            </div>

            <div class="row">

                <div class="input-field col s12">

                  <select class="validate" id="selectnivel" name="nivel">

                    <option value="" disabled selected>Selecione o nível de aceso</option>

                    <option value="2">Suporte</option>

                    <option value="3">Admistrador</option>

                  </select>

                  <label>Nível de Acesso</label>

                </div>

            </div>

            <div class="row">

              <div class="col s12 input-field">

                <input class="validate" id="email" type="email" name="email">

                <label>Email</label>

              </div>

            </div>

            <div class="row">

              <div class="input-field col s12">

                <input class="validate" type="password" name="senha" id="Password" />

                <label for="password">Insira sua senha</label>

              </div>

            </div>

            <div class="row">

             <div class="input-field col s12">

                <input class="validate" type="password" name="" id="ConfirmPassword" />

                <label for="password">Confirme sua senha</label>

              </div>

            </div>

            <div class="row">

              <div class="col s12">

                  <div class="file-field input-field">

                    <div class="btn purple darken-1">

                      <span>Upload</span>

                      <input type="file" name="imagem" accept=".jpg, .jpeg, .png">

                    </div>

                    <div class="file-path-wrapper">

                      <input class="file-path validate" type="text" placeholder="Envie sua imagem de perfil">

                    </div>

                  </div>

              </div>

            </div>



            <br />

            <center>

              <div class="row">

                <button type="submit" name="btn_registro" class="col s12 btn btn-large waves-effect purple darken-1">Register</button>

              </div>

            </center>

          </form>

        </div>

      </div>

      <div class="container mt-vh5">

          <p class="white-text">Produzido por: <a class="white-text" href="https://elderth.com/" target="_blank">ElderTH</a> & <a class="white-text" href="#">PabloLS</a> <br> &copy; 2023 Mapas para a vida</p>

      </div>

    </center>



    <div class="section"></div>

    <div class="section"></div>

  </main>



  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



</body>

    <script type="text/javascript">

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

  </script>

  <script>

    $(document).ready(function(){

    $('select').formSelect();

  });

  </script>





</body>



</html>



