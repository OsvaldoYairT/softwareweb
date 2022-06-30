<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM registros";
    $query=mysqli_query($con,$sql);
?>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Cecyten de Tultitlán</title>
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
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
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="event.html"> Eventos </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="course.html"> Cursos </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="becas.html"> Becas </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="CEscolar.html">
                    Control Escolar</a
                  >
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="CEscolar2.html">
                    Documentos</a
                  >
                </li>
             <li class="nav-item ">
                <a class="nav-link" href="eventos.html"> Registros</a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="contac.html">Contacto</a>
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
    <!-- Parte 1 -->
  </div>

  <!-- Parte 2 -->

  <section class="login_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              Acerca de CECYTEM de Tultitlán
            </h3>
            <p>
              El Colegio de Estudios Científicos y Tecnologicos del Estado de 
              México (CECYTEM), es una institución de principios y valores que 
              comparte la visión de que la educación dignifica a las personas y 
              es el motro del crecimiento económico y social. El CECyTEM brinda
              servicios educativos denivel medio superior, con el propósito de 
              que nuestros estudiantes desarrollen sus capacidadces científicas
              y tecnologicas. Desde sus creación en 1994, ha seguido un proceso 
              fortalecimiento y mejora continua, a la fecha contamos con 60 
              planteles ubicados estratégicamente en nuestra entidad. Con fírme
              decisión enfrentamos los retos actuales: Elevar la calidad educativa,
              ampliar la cobertura social y territorial, innovar y diversificar la 
              oferta educativa y promover la vinculación escuela-empresa para 
              fortalcer ka enpleabilidad de nuestros estudiantes. Te invitamos a 
              formar parte de nuestra comunidad estudiantil para construir un 
              Estado de México más fuerte.
            </p>
            <a href="login.html">
              INICIAR SESIÓN
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="login_form">
            <form action="insertar.php" action="login.php" method="POST" id="">
              <div class="form">
                  <h1>Inicio de Sesion</h1>
                  <div class="grupo">
                    <input type="text" class="form-control mb-3" name="Nombre" id="" ><span class="barra"></span>
                    <label for="">Nombre completo</label>
                </div>
                  <div class="grupo">
                      <input type="email" class="form-control mb-3" name="Correo" id="" ><span class="barra"></span>
                      <label for="">Correo electronico</label>
                  </div>
                  <div class="grupo">
                      <input type="password" class="form-control mb-3" name="Contraseña" id="" ><span class="barra"></span>
                      <label for="">Contraseña</label>
                  </div>
                  <div class="grupo">
                    <input type="text" class="form-control mb-3" name="Telefono"  id="" ><span class="barra"></span>
                    <label for="">Número de celular</label>
                </div>
                <div class="grupo">
                  <input type="text" class="form-control mb-3" name="Usuario" id="" ><span class="barra"></span>
                  <label for="">Nombre de usuario</label>
              </div>
              <div class="grupo">
                <input type="text" class="form-control mb-3" name="Fecha" id="" ><span class="barra"></span>
                <label for="">Fecha de registro AA/MM/DD</label>
            </div>
                  <button type="submit" class="btn btn-primary">Registrarse ahora</button>
                  <p class="warnings" id="warnings"></p>
              </div>
          </form>
          <script src="apps.js"></script>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Parte 2 -->

  <!-- Parte 3 -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_menu">
            <h5>
              QUICK LINKS
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
                <a class="nav-link" href="login.html">Iniciar sesión</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_course">
            <h5>
              CURSO MEJOR CALIFICADO
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

  <!-- Parte 3-->

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