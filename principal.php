<!DOCTYPE html>
<html lang="es">
<head>
    <title>Pokemon</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no ,initial-scale=1.0, maximum-scale=1.0, minumum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body background="img/mewtwo.png">

    <!--  Creacion del header -->
    <header>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-5 col-lg-4">
                    <img src="img/logo.png" alt="Pokemon"  width="250 px";   height="80px";>
                  </div>  
                  <div class="btnMenu">
                  <a href="#"class= "menu"><span></span>Menú  </a>
                  </div> 
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8"></div> 
                    <nav>
                        <ul>
                            
                            <li class=" <?php echo $pagina== 'principal' ? 'active' : '';?>">
                               <a href="?p=principal"> Home </a>
                            </li>
                           
                            <li class=" <?php echo $pagina== 'login' ? 'active' : '';?>">
                              <a href="?p=login">Iniciar Sesión</a>
                            </li>
                                                     
                            <li class=" <?php echo $pagina== 'registro' ? 'active' : '';?>">
                              <a href="?p=registro">Registrate</a>
                            </li>
                            
                        </ul>
                    </nav>
              
            </div>
        </div>
    </header>

<div class="container2">
</div>

    <script src="js/jquery.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>