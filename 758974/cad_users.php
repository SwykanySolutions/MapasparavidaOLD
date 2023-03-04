<?php

include '../includes/conectar.php';

$nome = $_POST['nome'];

$sobrenome = $_POST['sobrenome'];

$apelido = $_POST['apelido'];

$dataNasc = $_POST['dataNasc'];

$nivel = $_POST['nivel'];

$email = $_POST['email'];

$senha = $_POST['senha'];

$file = $_FILES['imagem'];

if (isset($_POST['nome'])) {

      if (isset($file)) {

      $tipo_arquivo = $file['name'];

      $tamanho = $file['size'];

      $ext = strtolower(pathinfo($tipo_arquivo,PATHINFO_EXTENSION));

            if ($ext == "jpg" or $ext == "png" or $ext == "jpeg") {

                  if ($tamanho <= 4194304) {

                  $senha = password_hash($senha, PASSWORD_DEFAULT);

                  if ($nivel == 3) {

                  $nomenv = "adminsitrador";

                  }

                  if ($nivel == 2) {

                  $nomenv = "moderador";

                  }

                  if ($nivel == 1) {

                  $nomenv = "comprador";

                  }

                  $idrnd = uniqid();

                  $newdir = "/imgs/users/".$nomenv."/".$apelido."/".$idrnd."/";

                  $newfilename = "perfil".$idrnd.$apelido.".".$ext;

                  $locationimgperfil = $newdir.$newfilename;

                  $mkdir = "..".$newdir;

                  $valid = mkdir($mkdir, 0777, true);

                        if ($valid) {

                        $upload = move_uploaded_file($file['tmp_name'], $mkdir.$newfilename);

                              if ($upload) {

                              $sql = "INSERT into gestao (nome, sobrenome, apelido, dataNasc, nivel, email, senha, imgperfil) VALUES ('$nome', '$sobrenome','$apelido','$dataNasc','$nivel', '$email', '$senha', '$locationimgperfil')";

                              $inserindo = mysqli_query($conn, $sql);

                                    if ($inserindo) {

                                    header('Location:../index.php');

                                    }else{
                                          die("Erro ao inserir o usuário: ".mysqli_error($conn)."  Teste de variavel ".$locationimgperfil);
                                          //header('Location:cadastro.php');
                                    }

                              }else{
                                    echo 'erro 5';
                                    //header('Location:cadastro.php');

                              }

                        }else{
                              echo 'erro 4';
                              //header('Location:cadastro.php');
                        }
                  }else{
                  echo 'erro 3';
                  //header('Location:cadastro.php');
                  }

            }else{
                  echo 'erro 2';
                  //header('Location:cadastro.php');
            }

            }else

            {
                  echo "erro 1";
                  //header('Location:cadastro.php');
            }

      }else

{

      header('Location:cadastro.php');

}



 ?>