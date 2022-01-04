<?php
    include './models/connect.php';
    session_start();
    if(!isset($_SESSION['carritoVenta'])){
        header('location: ./index.php');
    }
    $arreglo = $_SESSION['carritoVenta'];
?>

<form name="f1" id="f1" action="<?=$GLOBALS['project_index'];?>/controllers/add_ventas.php" method="POST">
    <div class="site-wrap">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="border p-4 rounded" role="alert">
                    Regresar al carrito de venta? <a href="?option=productos-venta">Click aquí</a>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black">Detalles de la Venta</h2>
                <div class="p-3 p-lg-5 border">
                    
                        
                        <?php
                            $total = 0;
                            for($i=0;$i<count($arreglo);$i++){
                                $total = $total + ($arreglo[$i]['precio_venta']);
                            }
                        ?>
                        <input type="hidden" name="user_cpf" value="<?php echo $cpf;?>">
                        <div class="form-group row">
                            <div class="col-md-12">
                        		<label>Nombre del Cliente:</label> <br>
                                <select name="id_cliente" class="form-control">
                                <?php
                                    $consulta = "SELECT * FROM tb_clientes WHERE user_cpf = $cpf";
                                    $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
                                 foreach($ejecutar as $values): 
                                     $cliente_name = $values['cliente_name'];
                                     $id_cliente = $values['id_cliente'];
                                 ?>
                                <?php echo 
                                '<option value="'.$id_cliente.'">'.$cliente_name.'</option>';?>
                            	    
                            	<?php endforeach; ?>
                            	</select>
                            	
                    		</div>
                    	</div>	
                        <div class="form-group row">    
                            <div class="col-md-6">
                                <label  class="text-black">FECHA VENTA: </label>
                                <input type="date" name="fecha_venta" class="form-control" value="<?php echo date("Y-m-d");?>" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label  class="text-black">FECHA ENTREGA: </label>
                                <input type="date" name="fecha_entrega" class="form-control" value="<?php echo date("Y-m-d");?>" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            
                            <div class="col-md-6">
                                <label  class="text-black">DELIVERY: $</label>
                                <input type="number" step="0.01" name="delivery" placeholder="Delivery $" class="form-control txtFlete" id="flete"
                                data-total="<?php echo $total;?>"
                                required>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="text-black">IMPORTE TOTAL: </label>
                                <input type="number" step="0.01" name="precio_venta" id="f1t1" placeholder="Total $" class="form-control txtTotal" value="<?php echo number_format($total, 2, '.', '');?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                    			<label> Observaciones: </label><br>
                    			<input type="text" name="observaciones" placeholder="Observaciones" class="form-control">
                    			<br><br>
                    		</div>
                		</div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black">Lista de Productos</h2>
                        <div class="p-3 p-lg-5 border">
                            <table class="table site-block-order-table mb-5">
                                <thead>
                                    <th>Producto</th>
                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    <?php
                                        for($i=0;$i<count($arreglo);$i++){
                                    ?>
                                    <tr>
                                        <td><?php echo $arreglo[$i]['producto']?><strong class="mx-2"></td>
                                        <td>$<?php echo $arreglo[$i]['precio_venta']?></td>
                                    </tr>
                                  
                                    <?php } ?>
                                  
                                    <tr>
                                        <td class="text-black font-weight-bold"><strong>Subtotal</strong></td>
                                        <td class="text-black font-weight-bold"><strong>$<?php echo number_format($total, 2, '.', '');?></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg py-3 btn-block" >Finalizar Venta</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>