<?php 

	$cx = mysqli_connect("localhost","root","","dbzapateria");
	$cx->autocommit(FALSE);
//START TRANSACTION;
	
	try {

	    if(isset($_POST['registrar'])){
			if(strlen($_POST['marca']) >= 1 && strlen($_POST['modelo']) >= 1 && strlen($_POST['talla']) >= 1 && strlen($_POST['Can_inv']) >= 1 ){
				$marca = trim($_POST['marca']);
				$modelo = trim($_POST['modelo']);
				$talla = trim($_POST['talla']);
				$can = trim($_POST['Can_inv']);

				//$consulta = "INSERT INTO inv(marca,modelo,talla,Can_inv) VALUES ('$marca','$modelo','$talla','$can')";
				//$res = mysqli_query($conexion,$consulta);

				if($res = $cx->query("INSERT INTO inv(marca,modelo,talla,Can_inv) VALUES ('$marca','$modelo','$talla','$can')")){
					?>
						<p1> Zapato Registrado</p1>
						
					<?php			
				}else{
					?>
					<p1> Zapato No Registrado
						 Llena todos los campos
					</p1>
						$cx->rollback();
					<?php
				}
			}
		$cx->commit();
		}
	}catch (Exception $e) {
    $cx->rollback();
    echo 'Something fails: ',  $e->getMessage(), "\n";
	}
 ?>