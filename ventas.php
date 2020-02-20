<?php 

$cx = mysqli_connect("localhost","root","","dbzapateria");

if($cx){


	$cx->autocommit(FALSE);
	 
	try {
	    
		//$consulta = "SELECT * FROM ventas";
		//$res= mysqli_query($conexion,$consulta);
		if($res = $cx->query("SELECT * FROM ventas")){
			while($row = $res->fetch_array()){
				$id = $row['id_ventas'];
				$inv = $row['id_inv'];
				$preciou = $row['pre_uni'];
				$cantidad = $row['cantidad'];
				$preciot = $row['pre_total'];

				?>
					<div>
						<div>
							<p>
								<b>Venta: </b> <?php echo $id ?> <br>
								<b>Inv: </b> <?php echo $inv ?> <br>
								<b>Precio unitario: </b> <?php echo $preciou ?> <br>
								<b>Cantidad vendidas: </b> <?php echo $cantidad ?> <br>
								<b>Precio Total: </b> <?php echo $preciot ?>
							</p>
						</div>
					</div>
				<?php
			}
		$cx -> commit();
		}
	}
	catch (Exception $e) {
    $cx->rollback();
    echo 'Something fails: ',  $e->getMessage(), "\n";
	}
}

?>