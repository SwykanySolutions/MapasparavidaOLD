<?php 
$login = $_POST['Login'];
if (!str_contains('@', $login)) {
	$login = strtolower($login);
}
$pass = $_POST['Senha'];
include '../includes/conectar.php';
// cria a instrução SQL que vai selecionar os dados

$query = "SELECT * from gestao WHERE apelido = '$login' OR email = '$login'";

// executa a query

$dados = mysqli_query($conn,$query);

if($user = $dados->fetch_array()){


$passdb = $user['senha'];



if (isset($user['apelido'])) 

{

		if(password_verify($pass, $passdb))
		{

			$apelido = $user['apelido'];

			$nivel = $user['nivel'];

			$imgperfil = $user['imgperfil'];

			$email = $user['email'];

			$nomecompleto = $user['nome']." ".$user['sobrenome'];

			session_start();

			$_SESSION['user'] = $apelido;

			$_SESSION['nivel'] = $nivel;

			$_SESSION['email'] = $email;

			$_SESSION['imgperfil'] = $imgperfil;

			$_SESSION['nomecompleto'] = $nomecompleto;

			$_SESSION['reload'] = 0;


			header("Location:../inicio.php");

		}else{
				$erro = 3;
		}
	}else{
				$erro = 2;	
	}
}else{
				$erro = 1;
}
 ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<form id="formerr" class="" action="../index.php" method="POST"> 
    <div class="container hide">
        <input type="number" name="idErr" value="<?php echo$erro; ?>">
    </div>
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> $(document).ready(function(){ var erro = <?php echo$erro;?>; if (erro != 0) { $( "#formerr" ).submit(); } }); </script>