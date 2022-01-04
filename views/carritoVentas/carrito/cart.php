<?php

    include_once '../../models/config.php';
?>


<div class="site-wrap">
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th class="product-thumbnail">Producto</th>
                                <th class="product-name">Código</th>
                                <th class="product-price">Precio de Compra</th>
                                <th class="product-quantity">Precio de Venta</th>
                                <th class="product-remove">Remove</th>
                              </tr>
                            </thead>
                            <tbody>
                                
                              <?php
                                $total = 0;
                                if(isset($_SESSION['carritoVenta'])){
                                    $arregloCarrito = $_SESSION['carritoVenta'];
                                    for($i=0; $i < count($arregloCarrito); $i++){
                                        $total = $total + ($arregloCarrito[$i]['precio_venta']);
                              ?>
                                
                                <tr>
                                    <td class="product-name">
                                        <h2 class="h5 text-black"><?php echo $arregloCarrito[$i]['producto']; ?></h2>
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black"><?php echo $arregloCarrito[$i]['codigo']; ?></h2>
                                    </td>
                                    <td>$<?php echo $arregloCarrito[$i]['precio']; ?></td>
                                    <td>$<?php echo $arregloCarrito[$i]['precio_venta']; ?></td>
                                    <td><a href="#" class="btn btn-primary btn-sm btnEliminarVenta" data-id="<?php echo $arregloCarrito[$i]['id_estoque']; ?>">X</a></td>
                                </tr>
                              
                              <?php } } ?>
                              
                            </tbody>
                        </table>
                    </div>
              </form>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <a href="?option=add_ventas" class="btn btn-outline-primary btn-sm btn-block">Continuar Vendiendo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">Subtotal</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <span class="text-black">Subtotal</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">$<?php echo $total;?></strong>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-primary btn-lg py-3 btn-block" href="?option=checkoutVenta">Proceder la Venta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>