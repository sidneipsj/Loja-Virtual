<?php

	echo "<div id='item-home'>";
	echo heading($produtos_categoria[0]->none_categoria,3);
	
	foreach ($produtos_categoria as $item) {
		echo "<span class='item-home'>";
		echo heading($item->nome,4);
		echo img("imgs/".$item->foto);
		echo "<a href='".base_url()."produtos/detalhe/".$item->id."'> Ver Detalhes </a>";
		echo "</span>";
		
	}
	echo "</div>";

?>