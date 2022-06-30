<?php

include ("tabla.php");
$usuario = "SELECT * FROM registros";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Cecyten de Tultitlán</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap"
    rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="main.css">
  <link rel="icon" href="images/galery/icono.jpg">
</head>

<!-- Parte 1 -->
<body class="sub_page">
  <div class="hero_area">
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <h3>
              Cecytem de
            </h3>
            <span> Tultitlán</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""> Eventos </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="course.html"> Cursos </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""> Becas </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="CEscolar.html"> Control Escolar</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="CEscolar2.html">
                  Documentos</a
                >
              </li>
             <li class="nav-item active">
              <a class="nav-link" href="eventos.html"> Registros</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Iniciar sesión</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
            </form>
          </div>
        </nav>
      </div>
    </header>
    <!-- Parte 1  -->
  </div><br><br><br>


  <!-- tabla -->
  
  <div class="datatable-container">
    <div class="header-tools">
      <div class="tools">
        <ul>
          <li><span><input type="checkbox"></span></li>
          <li>
          <form action="docentes.php">
            <button type="submit">
              <i class="material-icons">add_circle</i>
            </button>
            </form>
          </li>
          <li>
          <form action="docentes.php">
            <button type="submit">
              <i class="material-icons">edit</i>
            </button>
            </form>
          </li>
          <li>
          <form action="docentes.php">
            <button type="submit">
              <i class="material-icons">delete</i>
            </button>
            </form>
          </li>
          <li>
            <button>
              <i class="material-icons">share</i>
            </button>
          </li>
        </ul>
      </div>
      <div class="search">
        <input type="tect" name="" id="" class="search-input">
      </div>
    </div>
    <table class="datatable">
      <thead>
        <tr>
          <th></th>
          <th style="text-align: center">Estatus</th>
          <th style="text-align: center">N° de trabajador</th>
          <th style="text-align: center">Nombre Completo</th>
          <th style="text-align: center">Correo Electronico</th>
          <th style="text-align: center">Contraseña</th>
          <th style="text-align: center">Numero de celular</th>
          <th style="text-align: center">Numero de usuario</th>
          
          <th>Fecha de nacimiento</th>
        </tr>
      </thead>
    
      <tbody>
      <?php
        $resultado= mysqli_query($conexion, $usuario);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            
        <tr> 
        <td class="table-checkbox"><input type="checkbox" nome="" id=""></td>
          <td style="text-align: center"><?php echo $row ['Estatus'];?></td>
   <td style="text-align: center"><?php echo $row ['Numtrab'];?></td>
   <td style="text-align: center"><?php echo $row ['Nombre'];?></td>
   <td style="text-align: center"><?php echo $row ['Correo'];?></td>
   <td style="text-align: center"><?php echo $row ['Contraseña'];?></td>
   <td style="text-align: center"><?php echo $row ['Telefono'];?></td>
   <td style="text-align: center"><?php echo $row ['Usuario'];?></td>
   <td style="text-align: center"><?php echo $row ['Fecha'];?></td>
        </tr>

        <?php   
        }
    ?>
        
      </tbody>
    </table>

    <div class="footer-tools">
      <div class="list-items">
        show
        <select name="n-entries" id="n-enties" class="n-entries">
          <option value="15">5</option>
          <option value="10" selected>10</option>
          <option value="15">15</option>
        </select>
        entries
      </div>

      <div class="pages">
        <ul>
          <li><span class="active">1</span></li>
          <li><button>2</button></li>
          <li><button>3</button></li>
          <li><button>4</button></li>
          <li><span>...</span></li>
          <li><button>9</button></li>
          <li><button>10</button></li>
        </ul>
      </div>
    </div>
  </div> <br><br>
  <!-- termino de tabla -->

  <!-- Parte 2
  <section class="event_section layout_padding">
    <div class="container">
      <div class="heading_container">
      </div>
      <div class="event_container">
      </div>
      <div class="btn-box">
        <a href="">
          Leer más
        </a>
      </div>

  </section>

  -->

 <!-- Parte 3 -->
 <section class="info_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="info_menu">
          <h5>
            Menú
          </h5>
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html"> Eventos </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="course.html"> Cursos </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="event.html"> Becas </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Inisiar sesión</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info_course">
          <h5>
            CURSO MEJOR CALIDICADO
          </h5>
          <p>
            Estos son los cursos que mejor que tienes mejor calificació y 
          que pueden ayudarte en tener nuevas habilidades y conocimiento 
          para su CV y puedas conseguir nuevas habilidades para tu futuro
          de vida.
          </p>
        </div>
      </div>

      <div class="col-md-5 offset-md-1">
        <div class="info_news">
          <h5>
            PARA CUALQUIER CONSULTA, PUEDE CONTACTARNOS
          </h5>
          <div class="info_contact">
            <a href="">
              DIRECCIÓN: Constitucion 1857 Lt 82, Casitas San Pablo,
               54935 San Pablo de las Salinas, Méx.
            </a>
            <a href="">
              CORREO ELECTRONICO: cecytemtultitlan@hotmail.com
            </a>
            <a href="">
              TELEFONO : 55 5869 5338
            </a>
          </div>
          <form action="">
            <input type="text" placeholder="Enviar tu correo electronico" />
            <button>
              ENVIAR
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Parte 3 -->

<!-- Parte 4 -->
<footer class="container-fluid footer_section">
  <p>
    &copy; 2021 
    <a href="https://html.design/"></a>
  </p>
</footer>

<footer class="container-fluid footer_section">

  <p>
    Hecho por 
    <a href="https://themewagon.com/">Osvaldo Torres</a>
  </p>

</footer>
<!-- Parte 4 -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>