<?php

echo "<section class='color-4'>";

	echo "<nav class='cl-effect-8' data-aos='fade-up'>";

			//$id = 0; // Identificador

			// carregando arquivo com informações em xml
			$xml=simplexml_load_file("partials/links-2.xml") or die("Erro: Arquivo não encontrado!");
			
			// loop trazendo dados do xml
			foreach($xml->children() as $links) { 	
				//echo ++$id; // Incrementa Identificador
				// Atribuição dos elementos do XML para variável PHP
				$link_url = $links->url;
				$link_descricao =  $links->descricao;
				// Gerando o Link
				echo "<a class='link' href=\"".$link_url."\" target='_blank'><span data-hover=\"".$link_descricao."\">$link_descricao</span></a>";
			}

	echo "</nav>";

echo "</section>";

?>
