<?php include './includes/PHP/vl_lg.php';?>

<!-- INICIO DO DOCUMENTO HTML -->

<?php  include './includes/PHP/inicio.php';?>

<!-- NAVBAR DO DOCUMENTO HTML -->

<?php  include './includes/navbar.php';?>

<!-- Corpo da aplicação -->



  <!-- divisão em containers dentro do container principal -->
  <div class="section  bg-img">
    <div class="row">
      <div class="col s4 m2">
        <div class="row mb-vh10">
          
        </div>
        <a href="#user"><img class="circle white responsive-img" src=".<?php echo$_SESSION['imgperfil'];?>"></a>
        <div class="row mb-vh5">
          
        </div>
      </div>
      <div class="col s6 l5" id="txt-perfil">
        <div class="row mb-vh10">
          
        </div>
        <div class="row" id="nome-perfil">
          <a class="" href="#name"><span class="h3-rd white-text name"><?php echo $_SESSION['nomecompleto']; ?></span></a>
        </div>
        <div id="email-perfil" class="row">
          <a class="" href="#email"><span class="h6-rd white-text email"><?php echo $_SESSION['email'];?></span></a>
        </div>
        <div class="row mb-vh5">
          
        </div>
        <div class="row">
          
        </div>
      </div>
    </div>
  </div>

  <div class="section purple">
    <div class="row">
      <div class="col s12 m12">
        
      </div>
    </div>
  </div>

  <div class="section purple">
    <div class="container center-align">
      <div class="row">
        <div class="col s12 m12">
          <h3 class="h3-rd white-text">Informações de perfil</h3>
        </div>
        <?php
        $user = $_SESSION['user'];
        $email = $_SESSION['email'];
          $sqluser = "SELECT * FROM gestao WHERE apelido = '$user' AND email = '$email'";
          $query = mysqli_query($conn,$sqluser);
          if(!$dadosuser = $query->fetch_array()){
              header("Location:index.php");
          }
          $idU = $dadosuser['idU'];
          $nome = $dadosuser['nome'];
          $sobrenome = $dadosuser['sobrenome'];
          $dataNasc = $dadosuser['dataNasc'];
         ?>
      </div>
      <div class="row">
        
      </div>
       <div class="row">
        <div class="col s3 m3">
            <h4 class="white-text">Nome</h4>
        </div>
        <div class="col s3 m3">
            <h4 class="white-text">Sobrenome</h4>
        </div>
        <div class="col s3 m3">
            <h4 class="white-text">Usuário</h4>
        </div>
        <div class="col s3 m3">
            <h4 class="white-text">Email</h4>
        </div>
      </div>
      <div class="row">
        <div class="col s3 m3">
            <h5 class="white-text"><?php echo$nome;?></h5>
        </div>
        <div class="col s3 m3">
            <h5 class="white-text"><?php echo$sobrenome;?></h5>
        </div>
        <div class="col s3 m3">
            <h5 class="white-text"><?php echo$user?></h5>
        </div>
        <div class="col s3 m3">
            <h5 class="white-text"><?php echo$email;?></h5>
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="section purple">
    <div class="row">
      <div class="col s12 m12">
        
      </div>
    </div>
  </div>

  <div class="section purple">
    <div class="row">
      <div class="col s12 m12">
        
      </div>
    </div>
  </div>

  <div class="section purple">
    <div class="row">
      <div class="col s12 m12">
        
      </div>
    </div>
  </div>

  <div class="section purple">
    <div class="row">
      <div class="col s12 m12">
        
      </div>
    </div>
  </div>

  


<!--   <div class="container mt-vh10 center-align">

    <div class="row">

       <h1>Página em Construção</h1>

    </div>

    <div class="row">

        <h2>Esta página esta sendo construida</h2>

    </div>
    <div class="row">
        <p class="h5-rd">Estamos preparando esta página, com os conteúdos nescessários, para que possa atender a demanda para qual esta foi desnvolvida</p>
    </div>


    <div class="row">

      

    </div>

  </div> -->



<!-- Esse script deve ser modificado por página que conter a nava bar -->

<script>

  let perf = document.getElementById('perf');

  perf.classList.toggle("active");

</script>



<!-- JQUERY -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--  -->

<!-- Nomes para o script são: index e indexn, editar e editarn, produtos e produtosn, perfil e perfiln, painel e paineln. -->

<!-- Fim do documento HTML -->

<?php  include './includes/PHP/fim.php'; ?>