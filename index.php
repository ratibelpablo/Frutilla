<!DOCTYPE html>
<html lang="en">
<head>
  <title>Frutilla</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3MpC8XaUJMEy2r-uGvD4zIm4Zhl3-b4I"></script>
    <script type="text/javascript" src="js/jquery.googlemap.js"></script>
  <script src="js/index.js"></script>
  <style>
  
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;      
    }


    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
    .container{
        margin-top:7em;
    }
    #noticiasCombo{
        height:250px;
        overflow-y: scroll;
    }
    #partner{
        margin-bottom:7em;
    }
    #googleMap{
        cursor:pointer;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" id="menuTop">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
      <a class="navbar-brand" href="#"><img src="img/FrutillaLogo.png" width=150 id="frutillaLogo"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a class="nav-link" href="#">Home</a></li>
        <li><a class="nav-link" href="#somos">¿Quienes Somos?</a></li>
        <li><a class="nav-link" href="#ubicacion">Ubicación</a></li>
        <li><a class="nav-link" href="#noticias">Noticias</a></li>
        <li><a class="nav-link" href="#marcas">Marcas</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
<div class="col-md-12">
  <div class="col-sm-12">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/FrutillaBanner2.png" alt="Image">
          <div class="carousel-caption">
            
          </div>      
        </div>
        <div class="item">
          <img src="img/FrutillaBanner3.png" alt="Image">
          <div class="carousel-caption">
            
          </div>      
        </div>
        <div class="item">
          <img src="img/FrutillaBanner4.png" alt="Image">
          <div class="carousel-caption">
            
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>      
    </div>
        <div class="col-md-6" id="somos">
            <h3>¿QUIÉNES SOMOS?</h3>
            <div class="col-sm-6">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Current Project</p>
                
            </div>
            <div class="col-sm-6" id="noticias"> 
                <img src="https://www.naranja.com/advf/imagenes/545fd5bdbebbe_800x598.jpg" class="img-responsive" style="width:100%" alt="Image">
                
                <p>Semifinalistas en <a href="https://www.naranja.com/para-tu-comercio/concurso-vidrieras/vidrieras-participantes.html" target="_blank">concurso vidrieras</a>
                  </p>
            </div>
            <p>Frutilla es un local de indumentaria para bebes, niños y adolescentes. Empresa familiar con 20 años en el mercado, gran experiencia y profesionalismo y su propuesta incluye calzado y accesorios.</p>
        </div>
        <div class="col-md-2" id="ubicacion">
            <h3>Ubicación</h3>
            
                <img src="img/maps.png" width=150 id="googleMap"/>
            
        </div>   
        <div class="col-sm-4" id="noticias">
          <h3>Noticias</h3>
          <div id="noticiasCombo">
          <p>¡Ya llegaron los días lindos para pasear y tomar sol con la mejor ropa!</p>
          <p>Nueva temporada, estamos actualizando los modelos de trajes de baño, remeras, soleros y todo lo que necesitas para estar a la moda con los mejores diseños de vanguardia.</p>
          <p>Gradualmente, el guardarropas se despide de los tapados, bufandones, y sweaters para darle la bienvenida a los géneros livianos. El amarillo lima se impone como monocrome, lo volados le brindan movimiento a las siluetas, ganan espacio las flores bordadas y las estampas vivas. Pantacourts, vestidos y la bomber son los infaltables.</p>
          <p>Lima, el tono estrella del 2018 que promete iluminar con toda su potencia la temporada de calor. En su amplia gama, tiñen las blusas, vestidos, pantalones y accesorios.</p>
          <p>No todo es monocrome, las estampas también reinarán. El clásico atemporal se fusiona con piezas de uso diurno y ligeras. Un look elegante y refinado que adopta amplias versiones.</p>
          </div> 
        </div>  
  </div>
  
  </div>
</div>
<hr>
</div>

<!--div class="container text-center">    
  
  <div class="row">
    
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>  
  </div>
  <hr>
</div-->

<div class="container text-center" id="marcas">    
  <div class="row">
    <div class="col-sm-2"> 
      <img src="img/chapatitoLogo.png" class="img-responsive" style="width:100%" alt="Image">
    </div> 
    <div class="col-sm-2">
      <img src="img/combustionLogo.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-2"> 
      <img src="img/elementoLogo.png" class="img-responsive" style="width:100%" alt="Image">
    </div>   
    <div class="col-sm-2"> 
      <img src="img/facheritosLogo.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-2">
      <img src="img/flirtyLogo.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-2"> 
      <img src="img/gadiLogo.png" class="img-responsive" style="width:100%" alt="Image">
    </div> 
  </div>
  <br>
  <div class="row">
    <div class="col-sm-2"> 
      <img src="img/jazzyLogo.png" class="img-responsive" style="width:100%" alt="Image">  
    </div>
    <div class="col-sm-2">
      <img src="img/LuzDeEstrellitaLogo.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-2">
      <img src="img/OsitosYOsitasLogo.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-2">
      <img src="img/WildCherryLogo.png" class="img-responsive" style="width:100%" alt="Image">
    </div>   
  </div>
</div>

<footer class="container-fluid text-center" id="footContacto">
    <div class="row">
        <div class="col-md-12">
            <h3>Venta al público  Las Heras 197 - Ituzaingo Centro</h3>
            <h6>LU-VI de 9:00 a 13:00 y 15:30 a 20:30 / SA de 9:00 a 13:30 y 16:00 a 20:30</h6>
            <h5>frutillaituzaingo@hotmail.com</h5>
            
        </div>

    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $('.nav-link').on('click', function (e) {
            e.preventDefault();
            var hash = this.hash;
            $('html, body').animate({ scrollTop: $(hash).offset().top}, 1000, function () {window.location.hash = hash })
        })
    });
    
</script>
</body>
</html>
