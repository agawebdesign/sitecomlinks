<header>
	
	<img class="logo" src="logo-agawebdesign.png" alt="logo AGA Webdesign" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600">			
	
	<span data-aos="zoom-in">
	
	<?php
	
	// carregando arquivo com informações em xml
	$xml=simplexml_load_file("partials/proverbios.xml") or die("Erro: Arquivo não encontrado!");

	// gerando número aleatório a partir do total de provérbios
	$total = count($xml->texto);
	
	$numero = rand(0,( $total - 1));
	
	// echo $numero;

	// traz referência do provérbio
	$referencia = $xml->texto[$numero]->referencia;
	
	// traz a descrição do provérbio
	$descricao =  $xml->texto[$numero]->descricao;

	echo "<p class='proverbio'>$descricao <strong>$referencia</strong></p>";
	
	?>

	</span>

</header>