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

<p></p>
<h3>
	<i class="fa fa-<?=$table_icon;?>"></i>
	<?php echo $table_header; ?>		
</h3>

<table class="table table-hover table-striped" id="tableGeral1">
	<thead style="background-color: <?=$table_color;?>; color: white;" class="text-left">
	<tr>
        <th>PRODUCTO</th>
        <th>TIPO DE PRODUCTO</th>
        <th> LOTE </th>
        <th>PRECIO DE COMPRA</th>
		<th> CANTIDAD </th>
	</tr>
	</thead>

	<tbody>
		<?php
		    if(isset($_GET['descuento']) != null){

			foreach ($table_content as $key => $value) {
				echo '<tr>';
				
    				echo '<td>
    				    <input type="hidden" style="width:550px" class="form-control"  name="codigo[]" value="',$value['codigo'],'" readonly>
        				<input type="hidden" style="width:50px" class="form-control" name="id_producto[]" value="',$value['id_producto'],'" readonly>
        				<input type="hidden" style="width:550px" class="form-control"  name="product_name[]" value="',$value['product_name'],'" readonly>',$value['product_name'],'
        				</td>';
        				
        			echo '<td><input type="hidden" name="tipo_producto[]" class="form-control"  value="',$value['tipo_producto'],'" readonly>',$value['tipo_producto'],'</td>';
    				echo '<td><input style="width:100px" name="lote[]" class="form-control"  type="text" value=""></td>';
    				
    				$valor1 = 100 - $valor;
    				$descuento = ($value['product_price']*$valor1/100);
    				$descuento = number_format($descuento, 2, '.', ',');
    				echo '<td><input style="width:150px" name="product_price[]" class="form-control"  type="number" min="0" step="0.01" value="',$descuento,'"></td>';
    				
    				echo '<td><input style="width:100px" name="cantidad[]" class="form-control"  type="number" min="0" placeholder="0"></td>';
				echo '</tr>';
			}
		    }else{
		        foreach ($table_content as $key => $value) {
		            echo '<tr>';
		            
        				echo '<td>
        				    <input type="hidden" style="width:550px" class="form-control"  name="codigo[]" value="',$value['codigo'],'" readonly>
            				<input type="hidden" style="width:50px" class="form-control" name="id_producto[]" value="',$value['id_producto'],'" readonly>
            				<input type="hidden" style="width:550px" class="form-control"  name="product_name[]" value="',$value['product_name'],'" readonly>',$value['product_name'],'
            				</td>';
            			
            			echo '<td><input type="hidden" name="tipo_producto[]" class="form-control"  value="',$value['tipo_producto'],'" readonly>',$value['tipo_producto'],'</td>';
        				echo '<td><input style="width:100px" name="lote[]" class="form-control"  type="text" value=""></td>';
        				
        				
        				echo '<td><input style="width:150px" name="product_price[]" class="form-control"  type="number" min="0" step="0.01" value="',$value['product_price'],'"></td>';
        				
        				echo '<td><input style="width:100px" name="cantidad[]" class="form-control"  type="number" min="0" placeholder="0"></td>';
    				echo '</tr>';
			}
		    }
		?>
	</tbody>
</table>
<?php } ?>
