<?php 
    $user = $_SESSION[md5("user_data")];
	$cpf = $user['user_cpf'];
	$cpf1 = array("user_cpf"  => $cpf);
?>
    <div class="col-md-7">
        <div class="row">
            <div class="col-md-12 text-right border-bottom mb-5">
                <h3 class="text-black h4 text-uppercase">BALANCE FINANCIERO</h3>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Ventas: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php $ventas = select("tb_ventas", null, $cpf1, null);
                    $compras = select("tb_compras", null, $cpf1, null);
        
                    if($ventas != NULL){
                        $Total_Venta = 0;
            			foreach ($ventas as $key => $value){
            				$Total_Venta = $Total_Venta + $value['precio_venta'];	
            			}
            			echo'<strong class="text-black">',$Total_Venta,'</strong>';
            		}
		
            		if($compras != NULL){
                        $Total_Compra = 0;
            			foreach ($compras as $key => $value){
            				$Total_Compra = $Total_Compra + $value['precio_compra'];	
            			}
            		}
            		
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Total_Compra,'</strong>';
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">LUCRO (Venta - Compra = $)</span>
            </div>
            <div class="col-md-6 text-right">
                <?php $Lucro = 0; $Lucro = $Total_Venta - $Total_Compra;
                    echo'<strong class="text-black">',$Lucro,'</strong>';
                ?>
            </div>
        </div>
    </div>