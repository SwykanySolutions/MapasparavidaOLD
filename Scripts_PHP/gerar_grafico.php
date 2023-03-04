<?php 
function gerargrafico($arcanos, $nomecompleto, $idPub, $idmp, $idped)
{
	$dest = "Arcano";
	$title = "Representação da sua vida com base em seus arcanos";
	$tot = count($arcanos);
    $nome = "";
    $dados = "";
    for ($i=0; $i < $tot; $i++) {
        $n = $i+1;
        if ($i == 0) {
            $nome .= "['Arcano ".$n."', ";
            $dados .= "[".$arcanos[$i].", ";
        }elseif ($i == $tot-1) {
            $nome .= "'Arcano ".$n."']";
            $dados .= $arcanos[$i]."]";
        }else{
            $nome .= "'Arcano ".$n."', ";
            $dados .= $arcanos[$i].", ";
        }
    }

?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<canvas id="myChart"></canvas>
    <script type="text/javascript">
    const sleep = time => new Promise(resolve => {
      setTimeout(resolve, time)
    })
      function convertToImage() {
      	const idPub = <?php echo$idPub;?>,
      	idmp = <?php echo$idmp;?>,
      	nomecompleto = '<?php echo$nomecompleto; ?>',
      	idped = <?php echo$idped;?>;
        const canvas = document.getElementById("myChart");
        const image = canvas.toDataURL();
        const imgElement = document.createElement("img");
        imgElement.src = image;
        document.body.appendChild(imgElement);
        $.post('./salvar_grafico.php', { img: image, idPub: idpub, idmp: idmp, nomecompleto: nomecompleto, idped: idped});

        // const linkElement = document.createElement("a");
        // linkElement.download = "minha-imagem.png";
        // linkElement.href = image;
        // linkElement.innerText = "Download";
        // document.body.appendChild(linkElement);
      }
    window.onload = sleep(1000).then( () => convertToImage())
    </script>
	<script type= "text/javascript" src="./start.js"></script>
	<script type= "text/javascript">
		const labels = <?php echo$nome;?>;
		const data = {
		  labels: labels,
		  datasets: [{
		    label: '<?php echo$dest;?>',
		    data: <?php echo$dados; ?>,
		    fill: false,
		    borderColor: 'rgb(75, 192, 192)',
		    tension: 0.1
		  }]
		};

		const config = {
		  type: 'line',
		  data: data,
		  options: {
		        plugins: {
		            title: {
		                display: true,
		                text: 'Sua vida com base nos seus arcanos',
		                padding: {
		                    top: 10,
		                    bottom: 30
		                }
		            }
		        }
		    },
		};
		var myChart = new Chart(document.getElementById('myChart'), config);
	</script>
<?php 
}
?>