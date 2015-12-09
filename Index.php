<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
   
    <link rel="stylesheet" type="text/css" href="http://lipis.github.io/bootstrap-social/bootstrap-social.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript">

   function active(id) {
    // this adds the 'active' class to the classes that the element already has
    switch(id)
    	{

    	case 1:
    		var maptab1 = document.getElementById('About');
    		 maptab1.className ='active';
    		var maptab2 = document.getElementById('Areas');
   		 	maptab2.className =null;
   		 	var maptab3 = document.getElementById('Contact');
   		 	maptab3.className =null;
    	break;
    	case 2:
    		var maptab1 = document.getElementById('About');
    		maptab1.className =null;
    		var maptab2 = document.getElementById('Areas');
   		 	maptab2.className ='active';
   		 	var maptab3 = document.getElementById('Contact');
   		 	maptab3.className =null;
    	break;
    	case 3:
    		var maptab1 = document.getElementById('About');
    		maptab1.className =null;
    		var maptab2 = document.getElementById('Areas');
   		 	maptab2.className =null;
   		 	var maptab3 = document.getElementById('Contact');
   		 	maptab3.className ='active';
    	break;


   	 	}
    
	};


    </script>
  </head>
  <body>
  	<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" onClick="active(1);">CX25</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li id="About" class="active"><a href="#about" onClick="active(1);">About</a></li>
            <li id="Areas"><a href="#areas" onClick="active(2);">Areas</a></li>
            <li id="Contact"><a href="#contact" onClick="active(3);">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

   

    <div class="container-fluid">
    	<div class="row">
    		<br>
    		<br>
    		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/s1.png" alt="Antonio">
    </div>

    <div class="item">
      <img src="img/s2.png" alt="Mic">
    </div>

    <div class="item">
      <img src="img/s3.png" alt="Sword">
    </div>

    <div class="item">
      <img src="img/s4.png" alt="Pokeball">
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

    	</div>
    </div>
    <!-- container slider ends  !--> 
     <div class="container" style="color:black;" id="about">
    	<div class="row" >
    	<br>
    	<br>
      <div class="col-sm-1"></div>
    		<div class="col-sm-10">
        <h2 class="text-center" >Hola soy Jesus Antonio Almazan Guzman</h2>
        <br>
        <div class="col-sm-3"><img src="img/profile.png" class="img-responsive img-circle" /></div>

        <p class="lead text-left col-sm-9">
        	Estudiante de Ciencias Computacionales en la Universidad Autonoma de Hidalgo,
        desarrollador de software, apps, asi como maquetación y diseño web responsive,
    	también me desempeño en el área de la electrónica digital, sabiendo manejar,
    	el hardware de arduino, y algunos microcontroladores, actualmente trabajando 
    	como freelancer de sitios web.
    </p>

    </div>
    <div class="col-sm-1"></div>
      </div>
 	<br>
    </div><!-- /.container -->
    <div class="container-fluid" style="background-color:rgb(200,50,50);color:black;" id="areas">
    	<div class="container">

    		<div class="row">
    			<br>
    	<br>
    		<div class="col-sm-1"></div>
    		<div class="col-sm-10">
    		<div class="text-center"><h2>Areas de competencia</h2></div>
    		
    		<p class="">
    			<div class="col-sm-6 lead text-left">	
        <br>-Tecnico en Informatica
        <br>-Desarrollo de videojuegos 2D para Windows 8.1 con Unity
        <br>-Microsoft Office Specialist 
       		 	</div>
        		<div class="col-sm-6 lead text-left">	
        <br>-Microsoft Technology Associate: Software Development Fundamentals.
    	<br>-Lic. en Ciencias computacionales (en curso).
    			</div>
    		</p>
        	

    		</div>
    		<div class="col-sm-1"></div>
    		</div>
    		<br><br>
    	</div>

    </div>

    <div class="container-fluid" style="background-color:rgb(150,0,0); color:black;" id="contact">
    	<div class="container">
    	<div class="row">
    		<div class="col-sm-1"></div>
    		<div class="col-sm-10"><div class="text-center"><h2>Contacto</h2></div>
    		<br>
    		<div class="col-sm-3">
    		<a class="btn btn-block btn-social btn-twitter">
    			<span class="fa fa-twitter"></span> Sigueme en Twitter
  			</a>
  			</div>
  			<div class="col-sm-3">
    		<a class="btn btn-block btn-social btn-facebook">
    			<span class="fa fa-twitter"></span> Sigueme en Facebook
  			</a>
  			</div>
  			<div class="col-sm-3">
    		<a class="btn btn-block btn-social btn-google">
    			<span class="fa fa-twitter"></span> Sigueme en Google
  			</a>
  			</div>
  			<div class="col-sm-3">
    		<a class="btn btn-block btn-social btn-github">
    			<span class="fa fa-twitter"></span> Sigueme en Github
  			</a>
  			</div>
    	</div>
    	<div class="col-sm-1"></div>
    </div>
    <br>
    <br>
    	</div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>