<?php 

$cx = include("conexiondb.php");

if($cx){

	$consulta = "SELECT * FROM inv";
	$res= mysqli_query($conexion,$consulta);
	if($res){
		while($row = $res->fetch_array()){
			$id = $row['id_inv'];
			$marca = $row['marca'];
			$modelo = $row['modelo'];
			$talla = $row['talla'];
			$can = $row['Can_inv'];

			?>
				<div>
					<div>
						<p>
							<b>Id: </b> <?php echo $id ?> <br>
							<b>Marca: </b> <?php echo $marca ?> <br>
							<b>Modelo: </b> <?php echo $modelo ?> <br>
							<b>Talla: </b> <?php echo $talla ?> <br>
							<b>En Existencia: </b> <?php echo $can ?>
						</p>
					</div>
				</div>
			<?php
		}
	}
}

?>