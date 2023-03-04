<?php
$idPub = $_POST['idPub'];
$nome = $_POST['nome'];
$sucesso = 0;
$erro = 0;
include '../includes/conectar.php';
$nomepub = strtolower($nome);
$file1 = $_FILES['img1'];
$file2 = $_FILES['img2'];
if (empty($_FILES['img1']['name']) && empty($_FILES['img2']['name'])) {

	$sqlupdt = "UPDATE publico SET nomePub = '$nome' WHERE idPub = '$idPub'";
	$queryupdt = mysqli_query($conn,$sqlupdt);
	if ($queryupdt) {
													$sucesso = 1;
	}else{
													$erro = 1;
	}
}
else{
	$tipo_arquivo1 = $file1['name'];
	$tipo_arquivo2 = $file2['name'];
	$tamanho1 = $file1['size'];
	$tamanho2 = $file2['size'];
	$ext1 = strtolower(pathinfo($tipo_arquivo1,PATHINFO_EXTENSION));
	$ext2 = strtolower(pathinfo($tipo_arquivo2,PATHINFO_EXTENSION));
		if ($ext1 == "jpg" or $ext1 == "png" or $ext1 == "jpeg") {

	        if ($ext2 == "jpg" or $ext2 == "png" or $ext2 == "jpeg") {

	            if ($tamanho1 <= 4194304) {

	                if ($tamanho2 <= 4194304) {

	                	$dir1 = "/imgs/num/".$idPub."/";
	                	$dirsave = "http://192.168.2.2/Mapasparavida".$dir1; //"https://app.mapaparaavida.com.br"
	                	$mkdir1 = "..".$dir1;
	                	if (!file_exists($mkdir1)) {
	                        mkdir($mkdir1, 0777, true);
	                    }
	                    $filename1 = "img1".$idPub.".".$ext1;
	                    $filename2 = "img2".$idPub.".".$ext2;

	                    $locationimg1 = $dirsave.$filename1;
	                    $lacationimg2 = $dirsave.$filename2;
	                    
	                    $arquivoimg1 = $mkdir1.$filename1;
	                    $arquivoimg2 = $mkdir1.$filename2;

	                    if (file_exists($arquivoimg1)) {
	                    		unlink($arquivoimg1);
	                    }
	                    if(file_exists($arquivoimg2)){
	                    		unlink($arquivoimg2);
	                    }
	                    $upload1 = move_uploaded_file($file1['tmp_name'], $mkdir1.$filename1);
	                    $upload2 = move_uploaded_file($file2['tmp_name'], $mkdir1.$filename2);
	                    
	                    if ($upload1) {
	                    	
	                    	if ($upload2) {
	                    		
	                    		$sqlupd = "UPDATE publico SET nomePub = '$nome', dir1 = '$locationimg1', dir2 = '$lacationimg2' WHERE idPub = '$idPub'";
	                    		$queryupd = mysqli_query($conn,$sqlupd);
	                    		if ($queryupd) {
	                    							$sucesso = 1;
	                    		}else{
	                    							$erro = 1;
	                    		}
	                    	}else{
	                    							$erro = 2;
	                    	}
	                    }else{
														$erro = 3;
	                    }
	                }else{
	                								$erro = 4;
	                }
	            }else{
	            									$erro = 5;
	            }
	        }else{
	        											$erro = 6;
	        }
	}else{
														$erro = 7;
	}
}
 ?>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <form id="formsucesso" class="" action="../listar_pub.php" method="POST"> 
    <div class="container hide">
        <input type="number" name="idattscss" value="<?php echo$sucesso; ?>">
    </div>
</form>
 <form id="formerro" class="" action="../editar_pub.php" method="POST"> 
    <div class="container hide">
        <input type="number" name="iderro" value="<?php echo$erro;?>">
        <input type="number" name="idedt" value="<?php echo$idPub;?>">
    </div>
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	var sucesso = <?php echo$sucesso;?>;

	if (sucesso = 1) {
	 $( "#formsucesso" ).submit();
	}
    var vld = <?php echo$erro;?>;
    if (vld > 0) {
     $( "#formerro" ).submit();
    }
});
</script>