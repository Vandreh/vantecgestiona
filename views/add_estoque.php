<meta charset="utf-8">
<?php
	/**
	*	@author: Vandreh Esmeraldo;
	*	@package: /view/list_common.php
	*
	* 	Este arquivo controla a criação e a 
	*   visualização de dados
	* 	em uma tabela. 
	*
	***/


	//Testar se existe conteúdo!
	#Se não existir, ele mostra a label 
	if($table_content == false){
		echo '<button class="btn btn-warning">';
			 echo ' <i class="fa fa-thumbs-down"></i>';
			 echo ' No existen resultados';
		echo '</button><br><br>';
		#se existir conteúdo, ele cria a tabela
	}else{
?>

<h3>
	<i class="fa fa-<?=$table_icon;?>"></i>
	<?php echo $table_header; ?>		
</h3>

<table class="table table-hover table-striped" id="tableGeral1">
	<thead style="background-color: <?=$table_color;?>; color: white;" class="text-left">
	<?php
		//Imprimindo os títulos
		echo '<tr>';
			foreach ($table_titles as $key => $value) {
				echo '<th>',$value,'</th>';
			}
	?>
			<th> PRECIO DE VENTA</th>
		</tr>
	</thead>

	<tbody>
		<?php
            foreach ($table_content as $key => $value) {
			    echo '<tr>';
    			    
			    	echo '<td>
			    	    <input type="hidden" name="id_estoque[]" value="',$value['id_estoque'],'">
			    	    <input type="hidden" name="id_producto[]" value="',$value['id_producto'],'">
			    	    <input type="hidden" name="codigo[]" value="',$value['codigo'],'">
			    	    <input type="hidden" name="lote[]" value="',$value['lote'],'">
			    	    <input type="hidden" name="vencimiento[]" value="',$value['vencimiento'],'">
			    	    
			    	    <input type="hidden" name="producto_venta[]" value="',$value['producto'],'">',$value['producto'],'</td>';
			    	    
			    	echo '<td><input type="hidden" name="fecha_compra[]" class="form-control"  value="',$value['fecha_compra'],'">',$value['fecha_compra'],'</td>';
			    	echo '<td><input type="hidden" name="tipo_producto[]" class="form-control"  value="',$value['tipo_producto'],'">',$value['tipo_producto'],'</td>';
			    	echo '<td><input type="hidden" name="precio_compra[]" class="form-control"  value="',$value['precio'],'">',$value['precio'],'</td>';
        			echo '<td><input type="number" name="precio_venta[]" step="0.01" min="0" class="form-control"></td>';
			    echo '</tr>';
			}
		?>
	</tbody>
</table>
<?php } ?>
