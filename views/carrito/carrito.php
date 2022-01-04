<?php
    
    session_start();
    
    $user = $_SESSION[md5("user_data")];
    $cpf = $user['user_cpf'];
    $where = " WHERE user_cpf = $cpf AND NOT status = 'desactivado'";
    $where1 = " WHERE NOT status = 'desactivado'";
    if($_REQUEST['producto'] != false){$nombre = $_REQUEST['producto'];}else{$nombre = "";}
    if($nombre != false){$where = " WHERE user_cpf = $cpf AND (codigo LIKE '%".$nombre."%' OR product_name LIKE '%".$nombre."%' OR tipo_producto LIKE '%".$nombre."%') AND NOT status = 'desactivado'";}
    
    $resultado = select("tb_productos",null,null,$where);
	
	if(isset($_GET['descuento'])){
    $valor = $_GET["descuento"];}
    
    if(isset($_SESSION['carrito'])){
    $carritoCompra = $_SESSION['carrito'];
    foreach($carritoCompra as $carrito){$cart[] = $carrito['id_producto'];}}
?>
    
    <h5>Sessión de compras de tu orden en linea por la Boleta de Venta Eletronica de Mary Kay in touch. Lista de productos: <?php echo count($resultado); ?></h5>
    <!-- SEARCH FORM -->
    
    <form method="GET" class="form-inline ml-3">
        
        <input type="text" name="descuento" placeholder="Descuento" id="descuento" value="<?php echo $valor;?>">
        <input type="submit" value="Aplicar Descuento">
        
      <div class="input-group">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscador de Productos" aria-label="Search" name="producto" value="<?php echo $nombre; ?>">
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
                <?php
		            if(isset($_GET['descuento']) == null){
		                if(!isset($_SESSION['carrito'])){
                            foreach($resultado as $fila){
                ?>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <form action="<?=$GLOBALS['project_index'];?>/views/carrito/cart.php" method="POST">
                                        <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto'];?>">
                                        <div class="block-4-text p-4">
                                            Código: <input type="hidden" name="codigo" value="<?php echo $fila['codigo'];?>"><?php echo $fila['codigo'];?>
                                            <h4 class="text-primary"><input type="hidden" name="product_name" value="<?php echo $fila['product_name'];?>"><?php echo $fila['product_name'];?></h4>
                                            <input type="hidden" name="tipo_producto" value="<?php echo $fila['tipo_producto'];?>"><?php echo $fila['tipo_producto'];?>
                                            <p class="text-dark">Precio: $ <input style="width:100px;" name="product_price" type="number" min="0" step="0.01" value="<?php echo $fila['product_price'];?>"></p>
                                            Cantidad: <input style="width:100px;" type="number" min="0" name="cantidad">
                                            <p class="text-dark">Puntos: <input type="hidden" name="puntos" value="<?php echo $fila['puntos'];?>"><?php echo $fila['puntos'];?></p>
                                            <p class="text-dark">Lote: <input name="lote" type="text" style="text-transform:uppercase; width:100px;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"></p>
                                            <button class="btn btn-danger" type="submit"><i class="fas fa-cart-plus fa-lg mr-2"></i>Agregar Producto</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    
                        <?php } }else{foreach($resultado as $fila){ ?>
                        
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <form action="<?=$GLOBALS['project_index'];?>/views/carrito/cart.php" method="POST">
                                        <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto'];?>">
                                        <div class="block-4-text p-4">
                                            Código: <input type="hidden" name="codigo" value="<?php echo $fila['codigo'];?>"><?php echo $fila['codigo'];?>
                                            <h4 class="text-primary"><input type="hidden" name="product_name" value="<?php echo $fila['product_name'];?>"><?php echo $fila['product_name'];?></h4>
                                            <input type="hidden" name="tipo_producto" value="<?php echo $fila['tipo_producto'];?>"><?php echo $fila['tipo_producto'];?>
                                            <p class="text-dark">Precio: $ <input style="width:100px;" name="product_price" type="number" min="0" step="0.01" value="<?php echo $fila['product_price'];?>"></p>
                                            Cantidad: <input style="width:100px;" type="number" min="0" name="cantidad">
                                            <p class="text-dark">Puntos: <input type="hidden" name="puntos" value="<?php echo $fila['puntos'];?>"><?php echo $fila['puntos'];?></p>
                                            <p class="text-dark">Lote: <input name="lote" type="text" style="text-transform:uppercase; width:100px;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"></p>
                                            
                                            <?php
                                                $fila1 = $fila['id_producto'];
                                                if(in_array($fila1, $cart)) {
                                                    echo '<button class="btn btn-success" type="submit"><i class="fas fa-cart-plus fa-lg mr-2"></i>Producto Agregado</button>';
                                                }else{
                                                    echo '<button class="btn btn-danger" type="submit"><i class="fas fa-cart-plus fa-lg mr-2"></i>Agregar Producto</button>';
                                                }
                                            ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <?php } } } else{if(!isset($_SESSION['carrito'])){
                    foreach($resultado as $fila){
                        $valor1 = 100 - $valor;
        				$descuento = ($fila['product_price']*$valor1/100);
        				$descuento = number_format($descuento, 2, '.', ',');
                ?>
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <form action="<?=$GLOBALS['project_index'];?>/views/carrito/cart.php" method="POST">
                                <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto'];?>">
                                <div class="block-4-text p-4">
                                    Código: <input type="hidden" name="codigo" value="<?php echo $fila['codigo'];?>"><?php echo $fila['codigo'];?>
                                    <h4 class="text-primary"><input type="hidden" name="product_name" value="<?php echo $fila['product_name'];?>"><?php echo $fila['product_name'];?></h4>
                                    <input type="hidden" name="tipo_producto" value="<?php echo $fila['tipo_producto'];?>"><?php echo $fila['tipo_producto'];?>
                                    <p class="text-dark">Precio: $ <input style="width:100px;" name="product_price" type="number" min="0" step="0.01" value="<?php echo $descuento;?>"></p>
                                    Cantidad: <input style="width:100px;" type="number" min="0" name="cantidad">
                                    <p class="text-dark">Puntos: <input type="hidden" name="puntos" value="<?php echo $fila['puntos'];?>"><?php echo $fila['puntos'];?></p>
                                    <p class="text-dark">Lote: <input name="lote" type="text" style="text-transform:uppercase; width:100px;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"></p>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-cart-plus fa-lg mr-2"></i>Agregar Producto</button>
                                </div>
                            </form>
                        </div>
                    </div>
                
               <?php } }else{
                    foreach($resultado as $fila){
                        $valor1 = 100 - $valor;
        				$descuento = ($fila['product_price']*$valor1/100);
        				$descuento = number_format($descuento, 2, '.', ',');
        		?>
               
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <form action="<?=$GLOBALS['project_index'];?>/views/carrito/cart.php" method="POST">
                                <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto'];?>">
                                <div class="block-4-text p-4">
                                    Código: <input type="hidden" name="codigo" value="<?php echo $fila['codigo'];?>"><?php echo $fila['codigo'];?>
                                    <h4 class="text-primary"><input type="hidden" name="product_name" value="<?php echo $fila['product_name'];?>"><?php echo $fila['product_name'];?></h4>
                                    <input type="hidden" name="tipo_producto" value="<?php echo $fila['tipo_producto'];?>"><?php echo $fila['tipo_producto'];?>
                                    <p class="text-dark">Precio: $ <input style="width:100px;" name="product_price" type="number" min="0" step="0.01" value="<?php echo $descuento;?>"></p>
                                    Cantidad: <input style="width:100px;" type="number" min="0" name="cantidad">
                                    <p class="text-dark">Puntos: <input type="hidden" name="puntos" value="<?php echo $fila['puntos'];?>"><?php echo $fila['puntos'];?></p>
                                    <p class="text-dark">Lote: <input name="lote" type="text" style="text-transform:uppercase; width:100px;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"></p>
                                     <?php
                                        $fila1 = $fila['id_producto'];
                                        if(in_array($fila1, $cart)) {
                                            echo '<button class="btn btn-success" type="submit"><i class="fas fa-cart-plus fa-lg mr-2"></i>Producto Agregado</button>';
                                        }else{
                                            echo '<button class="btn btn-danger" type="submit"><i class="fas fa-cart-plus fa-lg mr-2"></i>Agregar Producto</button>';
                                        }
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>
               
               
               
               <?php } } }?>
            </div>
        </div>
    </div>
       