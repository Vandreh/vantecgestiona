<?php
    
    session_start();

    $user = $_SESSION[md5("user_data")];
    $cpf = $user['user_cpf'];
    $where = ";";
    if($_REQUEST['productoVenta'] != false){$nombre = $_REQUEST['productoVenta'];}else{$nombre = "";}
    if($nombre != false){$where = " AND (estoque.codigo LIKE '%".$nombre."%' OR estoque.producto LIKE '%".$nombre."%' OR estoque.tipo_producto LIKE '%".$nombre."%')";}
    
    $resultado = selectEstoque("estoque",null,null,$where);
    if(isset($_SESSION['carritoVenta'])){
    $carritoVenta = $_SESSION['carritoVenta'];
    foreach($carritoVenta as $carrito){$cart[] = $carrito['id_estoque'];}}
    
    
?>
     
    <!-- SEARCH FORM -->
    
    <form method="GET" class="form-inline ml-3">
        <h5>Lista de Stock: <?php echo count($resultado); ?> productos. Sessión de Ventas: &nbsp&nbsp</h5>
      <div class="input-group">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscador de Productos" aria-label="Search" name="productoVenta" value="<?php echo $nombre; ?>">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    
    <div class="row mb-5">
        <div class="col-md-12 order-2">
            <div class="row mb-5">
                <?php if(!isset($_SESSION['carritoVenta'])){
                    foreach($resultado as $fila){
                ?>
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <form action="<?=$GLOBALS['project_index'];?>/views/carritoVentas/cart.php" method="POST">
                                <input type="hidden" name="id_estoque" value="<?php echo $fila['id_estoque'];?>">
                                <input type="hidden" name="id_compra" value="<?php echo $fila['id_compra'];?>">
                                <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto'];?>">
                                <input type="hidden" name="fecha_compra" value="<?php echo $fila['fecha_compra'];?>">
                                <input type="hidden" name="vencimiento" value="<?php echo $fila['vencimiento'];?>">
                                <input type="hidden" name="puntos" value="<?php echo $fila['puntos'];?>">
                                <input type="hidden" name="estoque_created_in" value="<?php echo $fila['estoque_created_in'];?>">
                                <input type="hidden" name="user_cpf" value="<?php echo $fila['user_cpf'];?>">
                                <div class="block-4-text p-4">
                                    Código: <input type="hidden" name="codigo" value="<?php echo $fila['codigo'];?>"><?php echo $fila['codigo'];?>
                                    <h4 class="text-primary"><input type="hidden" name="producto" value="<?php echo $fila['producto'];?>"><?php echo $fila['producto'];?></h4>
                                    <input type="hidden" name="tipo_producto" value="<?php echo $fila['tipo_producto'];?>"><?php echo $fila['tipo_producto'];?>
                                    <p class="text-dark">Precio de Compra: $ <input  name="precio" type="hidden" min="0" step="0.01" value="<?php echo $fila['precio'];?>"><b><?php echo $fila['precio'];?></b></p>
                                    <p class="text-dark">Precio de Venta: $ <input style="width:100px;" name="precio_venta" type="number" min="0" step="0.01" value="<?php echo $fila['product_price'];?>"></p>
                                    <p class="text-dark">Lote: <input name="lote" type="hidden" value="<?php echo $fila['lote'];?>"><?php echo $fila['lote'];?></p>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-cart-plus fa-lg mr-2"></i>Agregar Producto</button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php } }else{
                    foreach($resultado as $fila){
                        
                ?>
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <form action="<?=$GLOBALS['project_index'];?>/views/carritoVentas/cart.php" method="POST">
                                <input type="hidden" name="id_estoque" value="<?php echo $fila['id_estoque'];?>">
                                <input type="hidden" name="id_compra" value="<?php echo $fila['id_compra'];?>">
                                <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto'];?>">
                                <input type="hidden" name="fecha_compra" value="<?php echo $fila['fecha_compra'];?>">
                                <input type="hidden" name="vencimiento" value="<?php echo $fila['vencimiento'];?>">
                                <input type="hidden" name="puntos" value="<?php echo $fila['puntos'];?>">
                                <input type="hidden" name="estoque_created_in" value="<?php echo $fila['estoque_created_in'];?>">
                                <input type="hidden" name="user_cpf" value="<?php echo $fila['user_cpf'];?>">
                                <div class="block-4-text p-4">
                                    Código: <input type="hidden" name="codigo" value="<?php echo $fila['codigo'];?>"><?php echo $fila['codigo'];?>
                                    <h4 class="text-primary"><input type="hidden" name="producto" value="<?php echo $fila['producto'];?>"><?php echo $fila['producto'];?></h4>
                                    <input type="hidden" name="tipo_producto" value="<?php echo $fila['tipo_producto'];?>"><?php echo $fila['tipo_producto'];?>
                                    <p class="text-dark">Precio de Compra: $ <input  name="precio" type="hidden" min="0" step="0.01" value="<?php echo $fila['precio'];?>"><b><?php echo $fila['precio'];?></b></p>
                                    <p class="text-dark">Precio de Venta: $ <input style="width:100px;" name="precio_venta" type="number" min="0" step="0.01" value="<?php echo $fila['product_price'];?>"></p>
                                    <p class="text-dark">Lote: <input name="lote" type="hidden" value="<?php echo $fila['lote'];?>"><?php echo $fila['lote'];?></p>
                                    
                                    <?php 
                                   
                                    $fila1 = $fila['id_estoque'];
                                    if(in_array($fila1, $cart)) {
                                        echo '<button class="btn btn-success"><i class="fas fa-cart-plus fa-lg mr-2"></i>Producto Agregado</button>';
                                    }else{
                                        echo '<button class="btn btn-danger" type="submit"><i class="fas fa-cart-plus fa-lg mr-2"></i>Agregar Producto</button>';
                                    }
                                    ?>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                
                <?php }} ?>
                    
            </div>
        </div>
    </div>
       

