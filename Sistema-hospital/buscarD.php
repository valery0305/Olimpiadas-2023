
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Doctores</title>
    <link rel="icon" href="img/2.png">
    <link rel="stylesheet" href="css/pacientes.css">
    <link rel="stylesheet" href="css/nav-home.css">
    <link rel="stylesheet" href="css/altaZ.css">

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
       .opciones{
            font-size: 0.9em;
  color: grey;
  font-weight: 100;
  width: 100%;
  display: block;
  text-decoration: underline;
  border: none;
  padding: 0.8em;
  border: solid 1px black;
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background-position: -800px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
       }
   
      body{
        
    overflow-y: scroll; /* Agrega una barra de desplazamiento vertical si es necesario */
    height: 400px; 
      }
 
      </style>
    <script src="js/pacientes.js"></script>
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
        <i class='bx bx-plus-medical' undefined ></i>
      <span class="logo_name">HospitalSistem</span>
    </div>
    

    <ul class="nav-links">
      <li>
        <a href="pacientes.php">
            <i class='bx bx-user'></i>
          <span class="link_name">Pacientes</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="pacientes.php">Pacientes</a></li>
          
          
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="doctores.php">
            <i class='bx bx-spreadsheet'></i>
            <span class="link_name">Doctores</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="doctores.php">Doctores</a></li>
          <li><a href="altaDoctores.php">Alta de doctores</a></li>
          <li><a href="bajaD.php">Baja de doctores</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
            <a href="enfermeros.php">
                <i class='bx bx-spreadsheet'></i>
                <span class="link_name">Enfermeros</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="enfermeros.php">Enfermeros</a></li>
              <li><a href="altaE.php">Alta de enfermeros</a></li>
              <li><a href="bajaE.php">Baja de enfermeros</a></li>
        </ul>
      </li>
      <li>
      <li>
        <div class="iocn-link">
          <a href="turnos.php">
            <i class='bx bx-spreadsheet'></i>
            <span class="link_name">Turnos</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="turnos.php">Turnos</a></li>
          <li><a href="altaT.php">Alta de turnos</a></li>
          <li><a href="bajaT.php">Baja de turnos</a></li>
          <li><a href="modificarT.html">Modificar turno</a></li>
        </ul>
      </li>
    
      </li>
      <li>
        <div class="iocn-link">
          <a href="internaciones.php">
            <i class='bx bx-spreadsheet'></i>
            <span class="link_name">Internaciones</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="internaciones.php">Internaciones</a></li>
          <li><a href="altaI.php">Alta de internaciones</a></li>
          <li><a href="bajaI.php">Baja de internaciones</a></li>
          <li><a href="modificarI.html">Modificar internaciones</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="zonas.php">
            <i class='bx bx-spreadsheet'></i>
            <span class="link_name">Zonas</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="zonas.php">Zonas</a></li>
          <li><a href="altaZ.php">Alta de zonas</a></li>
         
        </ul>
      </li>
     
      <li>
    <div class="profile-details">
      <div class="profile-content">
        
      </div>
      <div class="name-job">
        <div class="profile_name">Salir</div>
      </div>
     <a href="index.php"> <i class='bx bx-log-out' ></i></a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
  <nav>
        <div class="nav-bar"> 
          <div class="home-content">
          <i class='bx bx-menu' ></i>

            <div class="menu">
                <div class="logo-toggle">
                  
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="doctores.php">Doctores</a></li>
                    <li><a href="altaDoctores.php">Agregar</a></li>
                    <li><a href="bajaD.php">Eliminar</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                
                </div>

                <div class="searchBox">
                   <div class="searchToggle">
                 
                   </div>

                    <div class="search-field">
                        <input type="text" placeholder="busca doctores">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </div>

  
    <br>
    <center>
 
    <div class="wrapper">
      <h2>Busqueda de doctoress</h2>
      <form method="GET" action="buscarDoctor.php">
        <div class="input-box">
          <input type="int" name="consulta" placeholder="ingrese el DNI del doctor" required>
        </div>
      
     <br>
        <div class="input-box button"> 
          <input type="submit" value="Buscar">
        </div>
     
      </form>
    </div>
</center>
    </div>
  </section> 
  <script src="js/nav.js"></script>
  <script src="js/nav-home.js"></script>
</body>
</html>