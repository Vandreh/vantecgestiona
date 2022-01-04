<?php 
    $user = $_SESSION[md5("user_data")];
	$cpf = $user['user_cpf'];
	$cpf1 = array("user_cpf"  => $cpf);
    
    if(isset($_GET['venta_ano']) == null){
    $ano = date("Y");
    }else{$ano = $_GET['venta_ano'];}

    $Total_Venta = 0; $Total_Compra = 0;
    $Ano_Venta = 0; $Ano_Compra = 0;
    $Enero_Venta = 0; $Enero_Compra = 0;
    $Febrero_Venta = 0; $Febrero_Compra = 0;
    $Marzo_Venta = 0; $Marzo_Compra = 0;
    $Abril_Venta = 0; $Abril_Compra = 0;
    $Mayo_Venta = 0; $Mayo_Compra = 0;
    $Junio_Venta = 0; $Junio_Compra = 0;
    $Julio_Venta = 0; $Julio_Compra = 0;
    $Agosto_Venta = 0; $Agosto_Compra = 0;
    $Septiembre_Venta = 0; $Septiembre_Compra = 0;
    $Octubre_Venta = 0; $Octubre_Compra = 0;
    $Noviembre_Venta = 0; $Noviembre_Compra = 0;
    $Diciembre_Venta = 0; $Diciembre_Compra = 0;
    


    $ventas = select("tb_ventas", null, $cpf1, null);
    $ventasAno = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND YEAR(fecha_venta) = $ano");
    $ventas1 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 01 AND YEAR(fecha_venta) = $ano");
    $ventas2 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 02 AND YEAR(fecha_venta) = $ano");
    $ventas3 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 03 AND YEAR(fecha_venta) = $ano");
    $ventas4 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 04 AND YEAR(fecha_venta) = $ano");
    $ventas5 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 05 AND YEAR(fecha_venta) = $ano");
    $ventas6 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 06 AND YEAR(fecha_venta) = $ano");
    $ventas7 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 07 AND YEAR(fecha_venta) = $ano");
    $ventas8 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 08 AND YEAR(fecha_venta) = $ano");
    $ventas9 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 09 AND YEAR(fecha_venta) = $ano");
    $ventas10 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 10 AND YEAR(fecha_venta) = $ano");
    $ventas11 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 11 AND YEAR(fecha_venta) = $ano");
    $ventas12 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 12 AND YEAR(fecha_venta) = $ano");

    
    
    
    
    if($ventas != NULL){
		foreach ($ventas as $key => $value){
			$Total_Venta = $Total_Venta + $value['precio_venta'];	
			$Total_Compra = $Total_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventasAno != NULL){
		foreach ($ventasAno as $key => $value){
			$Ano_Venta = $Ano_Venta + $value['precio_venta'];
			$Ano_Compra = $Ano_Compra + $value['precio_compra'];	
		}
	}
    
    
    if($ventas1 != NULL){
		foreach ($ventas1 as $key => $value){
			$Enero_Venta = $Enero_Venta + $value['precio_venta'];	
			$Enero_Compra = $Enero_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas2 != NULL){
        
		foreach ($ventas2 as $key => $value){
			$Febrero_Venta = $Febrero_Venta + $value['precio_venta'];
			$Febrero_Compra = $Febrero_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas3 != NULL){
		foreach ($ventas3 as $key => $value){
			$Marzo_Venta = $Marzo_Venta + $value['precio_venta'];
			$Marzo_Compra = $Marzo_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas4 != NULL){
        
		foreach ($ventas4 as $key => $value){
			$Abril_Venta = $Abril_Venta + $value['precio_venta'];
			$Abril_Compra = $Abril_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas5 != NULL){
	    
		foreach ($ventas5 as $key => $value){
			$Mayo_Venta = $Mayo_Venta + $value['precio_venta'];
			$Mayo_Compra = $Mayo_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas6 != NULL){
	    
		foreach ($ventas6 as $key => $value){
			$Junio_Venta = $Junio_Venta + $value['precio_venta'];
			$Junio_Compra = $Junio_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas7 != NULL){
	    
		foreach ($ventas7 as $key => $value){
			$Julio_Venta = $Julio_Venta + $value['precio_venta'];
			$Julio_Compra = $Julio_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas8 != NULL){
	    
		foreach ($ventas8 as $key => $value){
			$Agosto_Venta = $Agosto_Venta + $value['precio_venta'];
			$Agosto_Compra = $Agosto_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas9 != NULL){
	    
		foreach ($ventas9 as $key => $value){
			$Septiembre_Venta = $Septiembre_Venta + $value['precio_venta'];
			$Septiembre_Compra = $Septiembre_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas10 != NULL){
	    
		foreach ($ventas10 as $key => $value){
			$Octubre_Venta = $Octubre_Venta + $value['precio_venta'];
			$Octubre_Compra = $Octubre_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas11 != NULL){
	    
		foreach ($ventas11 as $key => $value){
			$Noviembre_Venta = $Noviembre_Venta + $value['precio_venta'];
			$Noviembre_Compra = $Noviembre_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas12 != NULL){
	    
		foreach ($ventas12 as $key => $value){
			$Diciembre_Venta = $Diciembre_Venta + $value['precio_venta'];
			$Diciembre_Compra = $Diciembre_Compra + $value['precio_compra'];	
		}
	}
	
    
    $Lucro = 0; $Lucro = $Total_Venta - $Total_Compra;
    $LucroAno = 0; $LucroAno = $Ano_Venta - $Ano_Compra;
    $Lucro1 = 0; $Lucro1 = $Enero_Venta - $Enero_Compra;
    $Lucro2 = 0; $Lucro2 = $Febrero_Venta - $Febrero_Compra;
    $Lucro3 = 0; $Lucro3 = $Marzo_Venta - $Marzo_Compra;
    $Lucro4 = 0; $Lucro4 = $Abril_Venta - $Abril_Compra;
    $Lucro5 = 0; $Lucro5 = $Mayo_Venta - $Mayo_Compra;
    $Lucro6 = 0; $Lucro6 = $Junio_Venta - $Junio_Compra;
    $Lucro7 = 0; $Lucro7 = $Julio_Venta - $Julio_Compra;
    $Lucro8 = 0; $Lucro8 = $Agosto_Venta - $Agosto_Compra;
    $Lucro9 = 0; $Lucro9 = $Septiembre_Venta - $Septiembre_Compra;
    $Lucro1O = 0; $Lucro10 = $Octubre_Venta - $Octubre_Compra;
    $Lucro11 = 0; $Lucro11 = $Noviembre_Venta - $Noviembre_Compra;
    $Lucro12 = 0; $Lucro12 = $Diciembre_Venta - $Diciembre_Compra;
    
?>

<div class="row">
    <h3 class="text-black h4 text-uppercase">LUCRO BRUTO: (PRECIO DE VENTA - PRECIO DE COMPRA) DE LOS PRODUCTOS VENDIDOS</h3>
    <div class="row col-md-12 text-center border-bottom mb-3">
        
    
        <div class="col-md-3 border">
            <div class="col-md-12 text-center border-bottom mb-3">
                <h3 class="text-black h4 text-uppercase">TOTAL:</h3>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-6">
                    <span class="text-black">Total Ventas: $</span>
                </div>
                <div class="col-md-6 text-right">
                    <?php 
                        echo'<strong class="text-black">',$Total_Venta,'</strong>';
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
            <div class="row mb-3">
                <div class="col-md-6">
                    <span class="text-black">LUCRO (Venta - Compra = $)</span>
                </div>
                <div class="col-md-6 text-right">
                    <?php 
                        echo'<strong class="text-black">',$Lucro,'</strong>';
                    ?>
                </div>
            </div>
        </div>
        
        
        
        
        
        <div class="col-md-6">
            <div class="row mb-3">
                <div class="col-md-6">
                    <span class="text-black">Seleccione el año:</span>
                </div>
                
                <form id="ano" method="GET">
                    <select type="submit" name="venta_ano" method="GET">
                        <option value="<?php echo $ano; ?>">AÑO</option>
                        <?php  for($i=date("Y");$i>=1990;$i--) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                    </select>
                    
                    <button type="submit" class="btn btn-outline-success btn-block">Seleccionar</button>
                </form>
            </div>
        </div>
        
        
        <div class="col-md-3 border">
            <div class="col-md-12 text-center border-bottom mb-3">
                <h3 class="text-black h4 text-uppercase">AÑO <? echo $ano;?>:</h3>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-6">
                    <span class="text-black">Total Ventas: $</span>
                </div>
                <div class="col-md-6 text-right">
                    <?php 
                        echo'<strong class="text-black">',$Ano_Venta,'</strong>';
                    ?>
                </div>
            </div>
            
            <div class="row mb-5">
                <div class="col-md-6">
                    <span class="text-black">Total Compras: $</span>
                </div>
                <div class="col-md-6 text-right">
                    <?php 
                       echo'<strong class="text-black">',$Ano_Compra,'</strong>';
                    ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <span class="text-black">LUCRO (Venta - Compra = $)</span>
                </div>
                <div class="col-md-6 text-right">
                    <?php 
                        echo'<strong class="text-black">',$LucroAno,'</strong>';
                    ?>
                </div>
            </div>
        </div>
        
    </div>
    
    
    
    
    
    
    
    
    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">ENERO:</h3>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Ventas: $</span>
            </div>
            <div class="col-md-6 text-right">
                
                <?php 
                    echo'<strong class="text-black">',$Enero_Venta,'</strong>';
                ?>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Enero_Compra,'</strong>';
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">LUCRO (Venta - Compra = $)</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    echo'<strong class="text-black">',$Lucro1,'</strong>';
                ?>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">FEBRERO:</h3>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Ventas: $</span>
            </div>
            <div class="col-md-6 text-right">
                
                <?php 
                    echo'<strong class="text-black">',$Febrero_Venta,'</strong>';
                ?>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Febrero_Compra,'</strong>';
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">LUCRO (Venta - Compra = $)</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    echo'<strong class="text-black">',$Lucro2,'</strong>';
                ?>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">MARZO:</h3>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Ventas: $</span>
            </div>
            <div class="col-md-6 text-right">
                
                <?php 
                    echo'<strong class="text-black">',$Marzo_Venta,'</strong>';
                ?>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Marzo_Compra,'</strong>';
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">LUCRO (Venta - Compra = $)</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    echo'<strong class="text-black">',$Lucro3,'</strong>';
                ?>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">ABRIL:</h3>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Ventas: $</span>
            </div>
            <div class="col-md-6 text-right">
                
                <?php 
                    echo'<strong class="text-black">',$Abril_Venta,'</strong>';
                ?>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Abril_Compra,'</strong>';
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">LUCRO (Venta - Compra = $)</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    echo'<strong class="text-black">',$Lucro4,'</strong>';
                ?>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">MAYO:</h3>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Ventas: $</span>
            </div>
            <div class="col-md-6 text-right">
                
                <?php 
                    echo'<strong class="text-black">',$Mayo_Venta,'</strong>';
                ?>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Mayo_Compra,'</strong>';
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">LUCRO (Venta - Compra = $)</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    echo'<strong class="text-black">',$Lucro5,'</strong>';
                ?>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">JUNIO:</h3>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Ventas: $</span>
            </div>
            <div class="col-md-6 text-right">
                
                <?php 
                    echo'<strong class="text-black">',$Junio_Venta,'</strong>';
                ?>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Junio_Compra,'</strong>';
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">LUCRO (Venta - Compra = $)</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    echo'<strong class="text-black">',$Lucro6,'</strong>';
                ?>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">JULIO:</h3>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Ventas: $</span>
            </div>
            <div class="col-md-6 text-right">
                
                <?php 
                    echo'<strong class="text-black">',$Julio_Venta,'</strong>';
                ?>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Julio_Compra,'</strong>';
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">LUCRO (Venta - Compra = $)</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    echo'<strong class="text-black">',$Lucro7,'</strong>';
                ?>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">AGOSTO:</h3>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Ventas: $</span>
            </div>
            <div class="col-md-6 text-right">
                
                <?php 
                    echo'<strong class="text-black">',$Agosto_Venta,'</strong>';
                ?>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Agosto_Compra,'</strong>';
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">LUCRO (Venta - Compra = $)</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    echo'<strong class="text-black">',$Lucro8,'</strong>';
                ?>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">SEPTIEMBRE:</h3>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Ventas: $</span>
            </div>
            <div class="col-md-6 text-right">
                
                <?php 
                    echo'<strong class="text-black">',$Septiembre_Venta,'</strong>';
                ?>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Septiembre_Compra,'</strong>';
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">LUCRO (Venta - Compra = $)</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    echo'<strong class="text-black">',$Lucro9,'</strong>';
                ?>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">OCTUBRE:</h3>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Ventas: $</span>
            </div>
            <div class="col-md-6 text-right">
                
                <?php 
                    echo'<strong class="text-black">',$Octubre_Venta,'</strong>';
                ?>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Octubre_Compra,'</strong>';
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">LUCRO (Venta - Compra = $)</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    echo'<strong class="text-black">',$Lucro10,'</strong>';
                ?>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">NOVIEMBRE:</h3>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Ventas: $</span>
            </div>
            <div class="col-md-6 text-right">
                
                <?php 
                    echo'<strong class="text-black">',$Noviembre_Venta,'</strong>';
                ?>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Noviembre_Compra,'</strong>';
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">LUCRO (Venta - Compra = $)</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    echo'<strong class="text-black">',$Lucro11,'</strong>';
                ?>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">DICIEMBRE:</h3>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Ventas: $</span>
            </div>
            <div class="col-md-6 text-right">
                
                <?php 
                    echo'<strong class="text-black">',$Diciembre_Venta,'</strong>';
                ?>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Diciembre_Compra,'</strong>';
                ?>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">LUCRO (Venta - Compra = $)</span>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    echo'<strong class="text-black">',$Lucro12,'</strong>';
                ?>
            </div>
        </div>
    </div>
    
</div>