<?php
    session_start();
    if(!isset($_SESSION['carrito'])){
        header('location: ./index.php');
    }
    $arreglo = $_SESSION['carrito'];
?>

<form name="f1" id="f1" action="<?=$GLOBALS['project_index'];?>/controllers/add_compras.php" method="POST">
    <div class="site-wrap">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="border p-4 rounded" role="alert">
                    Regresar al carrito? <a href="?option=productos-carrito">Click aquí</a>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black">Detalles de la Compra</h2>
                <div class="p-3 p-lg-5 border">
                    
                        
                        <?php
                            $total = 0;
                            for($i=0;$i<count($arreglo);$i++){
                                $total = $total + ($arreglo[$i]['product_price'] * $arreglo[$i]['cantidad']);
                            }
                        ?>
                        <input type="hidden" name="user_cpf" value="<?php echo $cpf;?>">
                        <input type="hidden" name="vencimiento" class="form-control" value="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+ 1 year"));?>" required>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label  class="text-black">FECHA COMPRA: </label>
                                <input type="date" name="fecha_compra" class="form-control" value="<?php echo date("Y-m-d");?>" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label  class="text-black">FECHA RECEPCION: </label>
                                <input type="date" name="fecha_recepcion" class="form-control" value="<?php echo date("Y-m-d");?>" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label  class="text-black">DESCUENTO: % </label>
                                <input step="0.01" type="number" name="descuento_compra" placeholder="Descuento %" value="<? echo $arreglo['descuento']; ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label  class="text-black">FLETE: $</label>
                                <input type="number" step="0.01" name="flete" placeholder="Flete $" class="form-control txtFlete" id="flete"
                                data-total="<?php echo $total;?>"
                                required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="text-black">IMPUESTO: </label>
                                <input type="number" step="0.01" name="impuesto" placeholder="Impuesto $" class="form-control txtImpuesto" id="impuesto"
                                data-total="<?php echo $total;?>"
                                required>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="text-black">IMPORTE TOTAL: </label>
                                <input type="number" step="0.01" name="precio_compra" id="f1t1" placeholder="Total $" class="form-control txtTotal" value="<?php echo number_format($total, 2, '.', '');?>" required>
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
                                        <td><?php echo $arreglo[$i]['product_name']?><strong class="mx-2">x</strong> <?php echo $arreglo[$i]['cantidad']?></td>
                                        <td>$<?php echo $arreglo[$i]['product_price']?></td>
                                    </tr>
                                  
                                    <?php } ?>
                                  
                                    <tr>
                                        <td class="text-black font-weight-bold"><strong>Subtotal</strong></td>
                                        <td class="text-black font-weight-bold"><strong>$<?php echo number_format($total, 2, '.', '');?></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg py-3 btn-block" >Finalizar Compra</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>