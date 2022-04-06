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
            <img src="imagenes/tw.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>Conoce las diferencias entre Telegram y Whatsapp</h4>
            <p>A pesar de la fama de Whatsapp, algunos han optado por utilizar Telegram gracias a la cantidad de beneficios que esta app trae consigo</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/ipadpro.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>Apple lanzó la nueva iPad Pro</h4>
            <p>La nueva iPad Pro usará tecnología de reconocimiento facial para acceso y para autorizar compras en apps y Apple Pay</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/compu.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>Como transcribir tus audios rápida y efectivamente</h4>
            <p>Beneficios de la tecnología y las inteligencias artificiales en la transcripción de audios hoy son un éxito</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/whatsapp.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>WhatsApp ofrecerá el Modo Vacaciones</h4>
            <p>La nueva actualización silenciará los chats por un largo tiempo, según elija el usuario, y podrá archivarse para ser activada nuevamente cuando se desee</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/fm.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>Facebook Messenger permitirá eliminar mensaje enviados</h4>
            <p>La compañía había anunciado que en abril añadiría la función, luego de conocerse que Facebook había estado borrando los mensajes de su presidente ejecutivo, Mark Zuckerberg</p>
          </div>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="imagenes/Paul.jpg" width="200px" height="120px">
          </div>
          <div class="col-sm-8"><h4>Muere a los 65 años Paul Allen, cofundador de Microsoft</h4>
            <p>El multimillonario, uno de los fundadores de la empresa Microsoft, padecía cáncer</p>
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