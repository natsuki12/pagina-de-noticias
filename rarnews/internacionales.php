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
              <a href="http://localhost/margaritatravel/inicio.html">Internacionales</a>
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
            <img src="imagenes/canada.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>Dos aeronaves colisionan sobre Ottawa-Canad??</h4>
            <p>Hasta el momento no se han determinado los modelos de los veh??culos a??reos</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/sicilia.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>En Sicilia se elevan a 29 los fallecidos por fuertes lluvias</h4>
            <p>Desde hace m??s de una semana han persistido intensas lluvias en Italia, las cuales han generado inundaciones por causa del desborde de varios r??os</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/kim.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>D??az-Canel fue recibido por Kim Jong-un en Pionyang</h4>
            <p>El mandatario cubano, quien permanecer?? en la Naci??n asi??tica hasta el martes, sostuvo su primer encuentro como mandatario con Kim</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/votoeeuu.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>Dem??cratas favoritos en la C??mara de Representantes</h4>
            <p>Los candidatos del Partido Dem??crata necesitan asegurar 23 esca??os para tomar el control de la c??mara baja, que perdieron en 2010</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/fiscalia.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>Fiscal??a pide duras penas para catalanes</h4>
            <p>El Ministerio P??blico imput?? igualmente el delito de rebeli??n a Jordi S??nchez y Jordi Cuixart y a la expresidenta del parlamento catal??n Carme Forcadell</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/honduras.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>En la segunda caravana van 2.500 personas</h4>
            <p>En la ciudad de Huitxla se sumaron m??s caminantes centroamericanos</p>
          </div>
        </div>
        <br>
      </div>
</div>

 <footer>
    <div class="container">
         <p><strong>RAR NEWS</strong> &copy;2018 - Todos los derechos reservados. Sitio dise??ado por RAR NEWS.</p> 
    </div>
 </footer>    

</body>
</html>