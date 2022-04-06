<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<title>RAR NEWS</title>
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
	<header>
		<div class="container">
			<div class="row">
			  	<div class="col-sm-4">
			  		<img src="imagenes/logo.png" alt="RARNEWS" width="200">
			  	</div>
				<div class="col-sm-8">
					<br>
					<div style="float:right">
					  	<?php
					  		echo "Fecha: " . date("d/m/Y") . "  Hora: " . date("h:i:a");
					  	?>
				  	</div>
				  	<br>
					<img src="imagenes/horoscopo.png" alt="horoscopo">
				</div>
			</div>
		</div>

		   <div class="menu-bar text-xs-right">
        <nav class="container" role="menu">
          <ul class="menu-list list-inline">
            <li class="list-inline-item">
              <a href="http://localhost/margaritatravel/inicio.html">Internacionales</a>
            </li>
             <li class="list-inline-item">
              <a href="#">Nacionales</a>
            </li>   
            <li class="list-inline-item">
              <a href="#">Politica</a>
            </li> 
            <li class="list-inline-item">
              <a href="#">Economia</a>
            </li> 
            <li class="list-inline-item">
              <a href="#">Entretenimiento</a>
            </li>   
             <li class="list-inline-item">
              <a href="#">Tecnologia</a>
            </li>   
          </ul>
        </nav>
      </div>		
	</header>
	
 <div id="main">
      <div class="container">
      </div>
</div>

 <footer>
    <div class="container">
         <p><strong>RAR NEWS</strong> &copy;2018 - Todos los derechos reservados. Sitio diseñado por Adriana Aguilar.</p> 
    </div>
 </footer>    

</body>
</html>