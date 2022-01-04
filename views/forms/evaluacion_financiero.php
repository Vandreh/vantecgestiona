<?php 
    $user = $_SESSION[md5("user_data")];
	$cpf = $user['user_cpf'];
	$cpf1 = array("user_cpf"  => $cpf);
    
    if(isset($_GET['evaluacion_ano']) == null){
    $ano = date("Y");
    }else{$ano = $_GET['evaluacion_ano'];}

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
    
    $Total_Compra_Venta = 0;
    $Ano_Compra_Venta = 0;
    $Enero_Compra_Venta = 0;
    $Febrero_Compra_Venta = 0;
    $Marzo_Compra_Venta = 0;
    $Abril_Compra_Venta = 0;
    $Mayo_Compra_Venta = 0;
    $Junio_Compra_Venta = 0;
    $Julio_Compra_Venta = 0;
    $Agosto_Compra_Venta = 0;
    $Septiembre_Compra_Venta = 0;
    $Octubre_Compra_Venta = 0;
    $Noviembre_Compra_Venta = 0;
    $Diciembre_Compra_Venta = 0;
    


    $ventas = select("tb_ventas", null, $cpf1, null);
    $compras = select("tb_compras", null, $cpf1, null);
    
    $ventasAno = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND YEAR(fecha_venta) = $ano");
    $comprasAno = select("tb_compras", null, null, " WHERE user_cpf = $cpf AND YEAR(fecha_compra) = $ano");

    $ventas1 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 01 AND YEAR(fecha_venta) = $ano");
    $compras1 = select("tb_compras", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_compra) = 01 AND YEAR(fecha_compra) = $ano");
    $ventas2 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 02 AND YEAR(fecha_venta) = $ano");
    $compras2 = select("tb_compras", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_compra) = 02 AND YEAR(fecha_compra) = $ano");
    $ventas3 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 03 AND YEAR(fecha_venta) = $ano");
    $compras3 = select("tb_compras", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_compra) = 03 AND YEAR(fecha_compra) = $ano");
    $ventas4 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 04 AND YEAR(fecha_venta) = $ano");
    $compras4 = select("tb_compras", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_compra) = 04 AND YEAR(fecha_compra) = $ano");
    $ventas5 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 05 AND YEAR(fecha_venta) = $ano");
    $compras5 = select("tb_compras", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_compra) = 05 AND YEAR(fecha_compra) = $ano");
    $ventas6 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 06 AND YEAR(fecha_venta) = $ano");
    $compras6 = select("tb_compras", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_compra) = 06 AND YEAR(fecha_compra) = $ano");
    $ventas7 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 07 AND YEAR(fecha_venta) = $ano");
    $compras7 = select("tb_compras", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_compra) = 07 AND YEAR(fecha_compra) = $ano");
    $ventas8 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 08 AND YEAR(fecha_venta) = $ano");
    $compras8 = select("tb_compras", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_compra) = 08 AND YEAR(fecha_compra) = $ano");
    $ventas9 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 09 AND YEAR(fecha_venta) = $ano");
    $compras9 = select("tb_compras", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_compra) = 09 AND YEAR(fecha_compra) = $ano");
    $ventas10 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 10 AND YEAR(fecha_venta) = $ano");
    $compras10 = select("tb_compras", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_compra) = 10 AND YEAR(fecha_compra) = $ano");
    $ventas11 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 11 AND YEAR(fecha_venta) = $ano");
    $compras11 = select("tb_compras", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_compra) = 11 AND YEAR(fecha_compra) = $ano");
    $ventas12 = select("tb_ventas", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_venta) = 12 AND YEAR(fecha_venta) = $ano");
    $compras12 = select("tb_compras", null, null, " WHERE user_cpf = $cpf AND MONTH(fecha_compra) = 12 AND YEAR(fecha_compra) = $ano");
    
    
    
    
    
    if($ventas != NULL){
        
		foreach ($ventas as $key => $value){
			$Total_Venta = $Total_Venta + $value['precio_venta'];
			$Total_Compra_Venta = $Total_Compra + $value['precio_compra'];
		}
		
	}
	if($compras != NULL){
	    
		foreach ($compras as $key => $value){
			$Total_Compra = $Total_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventasAno != NULL){
        
		foreach ($ventasAno as $key => $value){
			$Ano_Venta = $Ano_Venta + $value['precio_venta'];
			$Ano_Compra_Venta = $Ano_Compra + $value['precio_compra'];
		}
		
	}
	if($comprasAno != NULL){
	    
		foreach ($comprasAno as $key => $value){
			$Ano_Compra = $Ano_Compra + $value['precio_compra'];	
		}
	}
    
    
    if($ventas1 != NULL){
        
		foreach ($ventas1 as $key => $value){
			$Enero_Venta = $Enero_Venta + $value['precio_venta'];
			$Enero_Compra_Venta = $Enero_Compra + $value['precio_compra'];
		}
		
	}
	if($compras1 != NULL){
	    
		foreach ($compras1 as $key => $value){
			$Enero_Compra = $Enero_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas2 != NULL){
        
		foreach ($ventas2 as $key => $value){
			$Febrero_Venta = $Febrero_Venta + $value['precio_venta'];
			$Febrero_Compra_Venta = $Febrero_Compra + $value['precio_compra'];
		}
		
	}
	if($compras2 != NULL){
	    
		foreach ($compras2 as $key => $value){
			$Febrero_Compra = $Febrero_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas3 != NULL){
        
		foreach ($ventas3 as $key => $value){
			$Marzo_Venta = $Marzo_Venta + $value['precio_venta'];
			$Marzo_Compra_Venta = $Marzo_Compra + $value['precio_compra'];
		}
		
	}
	if($compras3 != NULL){
	    
		foreach ($compras3 as $key => $value){
			$Marzo_Compra = $Marzo_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas4 != NULL){
        
		foreach ($ventas4 as $key => $value){
			$Abril_Venta = $Abril_Venta + $value['precio_venta'];
			$Abril_Compra_Venta = $Abril_Compra + $value['precio_compra'];
		}
		
	}
	if($compras4 != NULL){
	    
		foreach ($compras4 as $key => $value){
			$Abril_Compra = $Abril_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas5 != NULL){
	    
		foreach ($ventas5 as $key => $value){
			$Mayo_Venta = $Mayo_Venta + $value['precio_venta'];
			$Mayo_Compra_Venta = $Mayo_Compra + $value['precio_compra'];
		}
		
	}
	if($compras5 != NULL){
	    
		foreach ($compras5 as $key => $value){
			$Mayo_Compra = $Mayo_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas6 != NULL){
	    
		foreach ($ventas6 as $key => $value){
			$Junio_Venta = $Junio_Venta + $value['precio_venta'];
			$Junio_Compra_Venta = $Junio_Compra + $value['precio_compra'];
		}
		
	}
	if($compras6 != NULL){
	    
		foreach ($compras6 as $key => $value){
			$Junio_Compra = $Junio_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas7 != NULL){
	    
		foreach ($ventas7 as $key => $value){
			$Julio_Venta = $Julio_Venta + $value['precio_venta'];
			$Julio_Compra_Venta = $Julio_Compra + $value['precio_compra'];
		}
		
	}
	if($compras7 != NULL){
	    
		foreach ($compras7 as $key => $value){
			$Julio_Compra = $Julio_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas8 != NULL){
	    
		foreach ($ventas8 as $key => $value){
			$Agosto_Venta = $Agosto_Venta + $value['precio_venta'];
			$Agosto_Compra_Venta = $Agosto_Compra + $value['precio_compra'];
		}
		
	}
	if($compras8 != NULL){
	    
		foreach ($compras8 as $key => $value){
			$Agosto_Compra = $Agosto_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas9 != NULL){
	    
		foreach ($ventas9 as $key => $value){
			$Septiembre_Venta = $Septiembre_Venta + $value['precio_venta'];
			$Septiembre_Compra_Venta = $Septiembre_Compra + $value['precio_compra'];
		}
		
	}
	if($compras9 != NULL){
	    
		foreach ($compras9 as $key => $value){
			$Septiembre_Compra = $Septiembre_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas10 != NULL){
	    
		foreach ($ventas10 as $key => $value){
			$Octubre_Venta = $Octubre_Venta + $value['precio_venta'];
			$Octubre_Compra_Venta = $Octubre_Compra + $value['precio_compra'];
		}
		
	}
	if($compras10 != NULL){
	    
		foreach ($compras10 as $key => $value){
			$Octubre_Compra = $Octubre_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas11 != NULL){
	    
		foreach ($ventas11 as $key => $value){
			$Noviembre_Venta = $Noviembre_Venta + $value['precio_venta'];
			$Noviembre_Compra_Venta = $Noviembre_Compra + $value['precio_compra'];
		}
		
	}
	if($compras11 != NULL){
	    
		foreach ($compras11 as $key => $value){
			$Noviembre_Compra = $Noviembre_Compra + $value['precio_compra'];	
		}
	}
	
	if($ventas12 != NULL){
	    
		foreach ($ventas12 as $key => $value){
			$Diciembre_Venta = $Diciembre_Venta + $value['precio_venta'];
			$Diciembre_Compra_venta = $Diciembre_Compra + $value['precio_compra'];
		}
		
	}
	if($compras12 != NULL){
	    
		foreach ($compras12 as $key => $value){
			$Diciembre_Compra = $Diciembre_Compra + $value['precio_compra'];	
		}
	}
	
    
    $Lucro = 0; $Lucro = $Total_Compra_Venta*10000/$Total_Compra;
    $Lucro = number_format($Lucro, 2, ',', '.');
    
    $LucroAno = 0; $LucroAno = $Ano_Compra_Venta*10000/ $Ano_Compra;
    $LucroAno = number_format($LucroAno, 2, ',', '.');
    
    $Lucro1 = 0; $Lucro1 = $Enero_Compra_Venta*10000/$Enero_Compra;
    $Lucro1 = number_format($Lucro1, 2, ',', '.');
    
    $Lucro2 = 0; $Lucro2 = $Febrero_Compra_Venta*10000/$Febrero_Compra;
    $Lucro2 = number_format($Lucro2, 2, ',', '.');
    
    $Lucro3 = 0; $Lucro3 = $Marzo_Compra_Venta*10000/$Marzo_Compra;
    $Lucro3 = number_format($Lucro3, 2, ',', '.');
    
    $Lucro4 = 0; $Lucro4 = $Abril_Compra_Venta*10000/$Abril_Compra;
    $Lucro4 = number_format($Lucro4, 2, ',', '.');
    
    $Lucro5 = 0; $Lucro5 = $Mayo_Compra_Venta*10000/$Mayo_Compra;
    $Lucro5 = number_format($Lucro5, 2, ',', '.');
    
    $Lucro6 = 0; $Lucro6 = $Junio_Compra_Venta*10000/$Junio_Compra;
    $Lucro6 = number_format($Lucro6, 2, ',', '.');
    
    $Lucro7 = 0; $Lucro7 = $Julio_Compra_Venta*10000/$Julio_Compra;
    $Lucro7 = number_format($Lucro7, 2, ',', '.');
    
    $Lucro8 = 0; $Lucro8 = $Agosto_Compra_Venta*10000/$Agosto_Compra;
    $Lucro8 = number_format($Lucro8, 2, ',', '.');
    
    $Lucro9 = 0; $Lucro9 = $Septiembre_Compra_Venta*10000/$Septiembre_Compra;
    $Lucro9 = number_format($Lucro9, 2, ',', '.');
    
    $Lucro1O = 0; $Lucro10 = $Octubre_Compra_Venta*10000/$Octubre_Compra;
    $Lucro1O = number_format($Lucro1O, 2, ',', '.');
    
    $Lucro11 = 0; $Lucro11 = $Noviembre_Compra_Venta*10000/$Noviembre_Compra;
    $Lucro11 = number_format($Lucro11, 2, ',', '.');
    
    $Lucro12 = 0; $Lucro12 = $Diciembre_Compra_Venta*10000/$Diciembre_Compra;
    $Lucro12 = number_format($Lucro12, 2, ',', '.');
    
    
?>

<div class="row">
    <h3 class="text-black h4 text-uppercase">EVALUACION FINANCIERA</h3>
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
                    <select type="submit" name="ano" method="GET">
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
                        echo'<span class="text-black">Vendiste ',$LucroAno,'% de lo que compraste!</span>';
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
                    echo'<strong class="text-black">',$Lucro1,' %</strong>';
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