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
					  		echo "Fecha: " . date("d/m/Y") . "  Hora: " . date("h:m:s");
							
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
              <a href="http://localhost/rarnews/internacionales.php">Internacionales</a>
            </li>
             <li class="list-inline-item">
              <a href="http://localhost/rarnews/nacionales.php">Nacionales</a>
            </li>   
            <li class="list-inline-item">
              <a href="http://localhost/rarnews/internacionales.php">Politica</a>
            </li> 
            <li class="list-inline-item">
              <a href="http://localhost/rarnews/internacionales.php">Economia</a>
            </li> 
            <li class="list-inline-item">
              <a href="http://localhost/rarnews/internacionales.php">Entretenimiento</a>
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

<div id="slider-home" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#slider-home" data-slide-to="0" class="active"></li>
            <li data-target="#slider-home" data-slide-to="1"></li>
            <li data-target="#slider-home" data-slide-to="2"></li>
            <li data-target="#slider-home" data-slide-to="3"></li>
            <li data-target="#slider-home" data-slide-to="4"></li>
            <li data-target="#slider-home" data-slide-to="5"></li>
          </ol>

          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="imagencarrusel" src="imagenes/canada.jpg" width="100%" height="450px" alt="First slide">
                <div class="carousel-caption"> 
                <h6>INTERNACIONAL</h6> 
                  <h3>Dos aeronaves colisionan sobre Ottawa-Canadá</h3>
                  <br>
                  <p class="h5">Hasta el momento no se han determinado los modelos de los vehículos aéreos</p>
				  <center> 
                  <a href="" class="btn btn-secondary" style="text:center">Ver Noticia</a>
                </center>
				</div>
            </div>
            <div class="carousel-item">
              <img class="imagencarrusel" src="imagenes/morrocoy.jpeg" width="100%" height="450" alt="Second slide">
                <div class="carousel-caption">
                <h6>NACIONAL</h6>
                    <h3>Lanzan campaña pro Parque Morrocoy</h3>
                    <br>
                    <p class="h5">Temen que se acelere muerte de los manglares y zonas de corales</p>
                    <a href="#" class="btn btn-secondary">Ver Noticia</a>
                </div>  
            </div>
            <div class="carousel-item">
              <img class="imagencarrusel" src="imagenes/magnicidio.jpeg" width="100%" height="450" alt="Third slide">
                <div class="carousel-caption">
                <h6>POLITICA</h6>
                    <h3>Este domingo se estrenó “Crónica de un Magnicidio Frustrado”</h3>
                    <br>
                    <p class="h5">Material audiovisual devela los hechos que tuvieron lugar el pasado 4 de agosto durante el Acto de Conmemoración a los 81 Aniversarios de la creación de la GNB</p>
                    <a href="#" class="btn btn-secondary">Ver Noticia</a>
                  </div>
            </div>
             <div class="carousel-item">
              <img class="imagencarrusel" src="imagenes/ca.jpg" width="100%" height="450" alt="Quarter slide">
                <div class="carousel-caption">
                <h6>ECONOMIA</h6>
                    <h3>Este lunes es feriado bancario</h3>
                    <br>
                    <p class="h5">El acceso a las plataformas mediante Internet, puntos de venta, cajeros y vía telefónica se mantendrán activos durante el día</p>
                    <a href="#" class="btn btn-secondary">Ver Noticia</a>
             
                  </div>
            </div>
             <div class="carousel-item">
              <img class="imagencarrusel" src="imagenes/cascanueces.jpeg" width="100%" height="450" alt="Fifth slide">
                 <div class="carousel-caption">
                     <h6>ENTRETENIMIENTO</h6>
                    <h3>“El Cascanueces” y Gustavo Dudamel</h3>
                    <br>
                    <p class="h5">Dudamel participa en la conducción en de la orquesta de la banda sonora del film de Disney</p>
                    <a href="#" class="btn btn-secondary">Ver Noticia</a>
                  </div>
            </div>
             <div class="carousel-item">
              <img class="imagencarrusel" src="imagenes/tw.jpg" width="100%" height="450" alt="Sixth slide">
                 <div class="carousel-caption">
                    <h6>TECNOLOGIA</h6>
                    <h3>Conoce las diferencias entre Telegram y Whatsapp</h3>
                    <br>
                    <p class="h5">A pesar de la fama de Whatsapp, algunos han optado por utilizar Telegram gracias a la cantidad de beneficios que esta app trae consigo</p>
                    <a href="#" class="btn btn-secondary">Ver Noticia</a>
                  </div>
            </div>
             <a class="carousel-control-prev" href="#slider-home" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Anterior</span>
			  </a>
			  <a class="carousel-control-next" href="#slider-home" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Siguiente</span>
			  </a>
          </div>
        </div>

		<div class="col-md-12">
	        <div class="row margin-top-60 siddebars-zone">
	          <div class="col-sm-6">
	            <h4>Contactenos</h4>
	            <p>RARNEWS@gmail.com</p>
	            <p>Telefono: +58 4120508664</p>
	         </div>

	         <div class="col-sm-6">
	            <h4>Siguenos en las redes sociales</h4>
	            	<ul class="social-header list-inline text-xs-right">
	              	<li class="list-inline-item">
	                <a href="https://www.facebook.com/adriana.aguilarsanz"></a>
	                  <span class="fb-stack fa-3x">
	                    <i class="fab fa-facebook-square"></i>
	                  </span>
	                <a href="https://twitter.com/Jirafaax"></a>
	                  <span class="twitter-stack fa-3x">
	                    <i class="fab fa-twitter"></i>
	                  </span>
	                <a href="https://www.instagram.com/adrianafas13/?hl=es"></a>
	                  <span class="instagram-stack fa-3x">
	                    <i class="fab fa-instagram"></i>
	                  </span>
	              	</li>
	            	</ul> 
          	</div>
        	</div>
      	</div>
    </div>
 </div>
 <footer>
    <div class="container">
         <p><strong>RAR NEWS</strong> &copy;2018 - Todos los derechos reservados. Sitio diseñado por RAR NEWS.</p> 
    </div>
 </footer>    

</body>
</html>