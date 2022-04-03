<?php
	$tituloPagina ="Burgosports";
	$pagina ="Ciclismo";
	include('inc/headertienda.php'); 
	require "php/conn.php";
?>

<div class="container-fluid bg-3 text-center">
	<div class="well" id="contenedor">
		<ol class="breadcrumb">
			<li><a href="ciclismo.php">Ciclismo</a></li>
			<li><a href="camisetasciclismo.php">Maillots</a></li>
			<li class="active"><a href="botasciclismo.php">Botas</a></li>
			<li><a href="bicisciclismo.php">Bicicletas</a></li>
			<li><a href="complementosciclismo.php">Complementos</a></li>
		</ol>
	</div>
	<div class="row content">
	
			<?php
			$sql="SELECT * FROM productos WHERE tipo='2' AND subtipo='2'";
			$r=mysqli_query($conn,$sql);
			$productos=array();
			while($row=mysqli_fetch_array($r)){
				array_push($productos, $row);
			}
			?>
			<?php 		
				$ren=0;
				for($i=0; $i < count($productos); $i++){
					if($ren==0){
					print '<div class="row">';
					}
					print '<div class="col-sm-3">';
					print '<div class="well">';
					print '<p><a href="productos.php?id='.$productos[$i]["id"].'">'.$productos[$i]["nombre"].'</a></p>';
					print '<img src="img/'.$productos[$i]["imagen"].'" class="img-responsive img-rounded" style="width:100%" alt="'.$productos[$i]["nombre"].'">';
					print '<h4>'.$productos[$i]["precio"].'&nbsp €'.'</h4>';
					
					
					print '<a href="carrito.php?id='.$productos[$i]["id"].'"" class="btn btn-success">Comprar</a>';
					
					print '<a href="productos.php?id='.$productos[$i]["id"].'" class="btn btn-info">Detalles</a>';
					print '</div>';
					
					print '<br>';
					print '</div>';
					
					$ren ++;
					if($ren==4){
						$ren=0;
						print '</div>';
					}
				}
			?>
		
	</div>
</div><br>
<?php include ('inc/footer.php'); ?>