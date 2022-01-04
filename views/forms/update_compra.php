<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/update_compra.php" method="POST">
    
    <input type="hidden" name="id_compra" value="<?php echo $compra_r['id_compra'];?>">
	<div class="row">	
		<div class="col-md-4">
			<label> Fecha Compra: </label><br>
			<input type="date" name="fecha_compra" placeholder="Digite la fecha de compra" required class="form-control" value="<?=$compra_r['fecha_compra'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Fecha Recepcion: </label><br>
			<input type="date" name="fecha_recepcion" placeholder="Digite la fecha de recepcion" required class="form-control" value="<?=$compra_r['fecha_recepcion'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Descuento: % </label><br>
			<input type="number" name="descuento_compra" placeholder="Digite el descuento" required class="form-control" value="<?=$compra_r['descuento_compra'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Precio Compra: </label><br>
			<input type="number" name="precio_compra" placeholder="Digite el descuento" required class="form-control" value="<?=$compra_r['precio_compra'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Flete: </label><br>
			<input type="number" name="flete" placeholder="Digite el descuento" required class="form-control" value="<?=$compra_r['flete'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Impuesto: </label><br>
			<input type="number" name="impuesto" placeholder="Digite el descuento" required class="form-control" value="<?=$compra_r['impuesto'];?>">
			<br><br>
		</div>
		
		<div class="col-md-12">
		<h3><i class="fa fa-plus"></i> Lista de Productos </h3>
        
        <table class="table table-hover table-striped">
        	<thead style="background-color: #FF69B4; color: white;" class="text-left">
		    <tr>
		        <th>Código</th>
		        <th>Productos</th>
		        <th>Tipo de Producto</th>
		        <th>Lote</th>
		        <th>Precio de compra</th>
		        <th>Cantidad</th>
		    </tr>
		    </thead>
		    <tbody>
		<?php
		    
	        $data1 = explode(', ',$compra_r['codigo']);
		    $data2 = explode(', ',$compra_r['product_name']);
		    $data3 = explode(', ',$compra_r['tipo_producto']);
		    $data4 = explode(', ',$compra_r['lote']);
		    $data5 = explode(', ',$compra_r['product_price']);
		    $data6 = explode(', ',$compra_r['cantidad']);

            for ($i=0; $i < count($data4); $i++) { 
            	
            	echo '<tr>';
            	echo '<td>';echo $data1[$i];echo '</td>';
            	echo '<td>';echo $data2[$i];echo '</td>';
            	echo '<td>';echo $data3[$i];echo '</td>';
            	echo '<td>';echo $data4[$i];echo '</td>';
            	echo '<td>$ ';echo $data5[$i];echo '</td>';
            	echo '<td>';echo $data6[$i];echo '</td>';
            	echo '</tr>';
}
		
		?>
		
		</tbody>
        </table>
        </div>
		
		
		
		
		<hr>			
		<div class="col-md-12">
			<p class="text-right">
			<button class="btn btn-primary"> 
				<i class="fa fa-thumbs-up"></i>
				 Actualizar Compra 
			</button>
			</p>
		</div>	
	</div>
</form>