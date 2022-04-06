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
              <a href="http://localhost/rarnews/index.php">Inicio</a>
            </li>
            <li class="list-inline-item">
              <a href="http://localhost//rarnews/internacionales.php">Internacionales</a>
            </li>
             <li class="list-inline-item">
              <a href="http://localhost/rarnews/nacionales.php">Nacionales</a>
            </li>   
            <li class="list-inline-item">
              <a href="http://localhost/rarnews/index.php">Politica</a>
            </li> 
            <li class="list-inline-item">
              <a href="http://localhost/rarnews/index.php">Economia</a>
            </li> 
            <li class="list-inline-item">
              <a href="http://localhost/rarnews/index.php">Entretenimiento</a>
            </li>   
             <li class="list-inline-item">
              <a href="http://localhost/rarnews/tecnologia.php">Tecnologia</a>
            </li>   
          </ul>
        </nav>
      </div>		
	</header>
	
 <div id="main">
      <div class="container">
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/cascanueces.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>“El Cascanueces” y Gustavo Dudamel</h4>
            <p>Dudamel participa en la conducción en de la orquesta de la banda sonora del film de Disney</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/scarlet.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>Scarlet Linares: “Quiero grabar con Montaner”</h4>
            <p>Scarlet Linares, por segunda vez, intenta abrirse camino con un tema romántico</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/ccs.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>“Volverán los prados” en Caracas</h4>
            <p>Este domingo gratis cine-foro a las 11:00 am en el Trasnocho Cultural</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/sail.gif" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>Sail: “Cuando grabo no utilizó nada de computadoras”</h4>
            <p>Pronto lanzará su primera placa discográfica</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/diana.gif" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>Diana Silva se desmayó durante el Miss Earth 2018</h4>
            <p>La venezolana sufrió un desmayo por lo que tuvo que ser atendida de emergencia</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/monte.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>Monte Ávila presentará títulos de diversos géneros</h4>
            <p>De la colección Estudios llegarán El verdadero venezolano, mapa de la identidad nacional, de Luis Britto García, entre otros
</p>
          </div>
        </div>
        <br>
      </div>
</div>

 <footer>
    <div class="container">
         <p><strong>RAR NEWS</strong> &copy;2018 - Todos los derechos reservados. Sitio diseñado por RAR NEWS.</p> 
    </div>
 </footer>    

</body>
</html>