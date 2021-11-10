<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <a class="navbar-brand" href="#"> APP CATASTRO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= constant('URL') ?>inicio/index">Inicio</a>
        </li> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ingresos Diarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Activar recibos anulados</a> </li>
            <li> <a class="dropdown-item" href="#">Movimientos</a> </li> 
            <li><a class="dropdown-item" href="#s">Realizar pagos anticipados</a> </li>
            <li> <a class="dropdown-item" href="#">Reporte de ingresos diarios</a> </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Control de Agua
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li> <a class="dropdown-item" href="<?= constant('URL') ?>contadores/index">Activar contadores</a>  </li>
            <li>   <a class="dropdown-item" href="#">Registro de medidas de agua</a> </li> 
            <li> <a class="dropdown-item" href="#">Listado de contadores</a></li> 
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Avisos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li> <a class="dropdown-item" href="#">G. avisos individuales de cobro</a>  </li>
            <li> <a class="dropdown-item" href="#">G. avisos grupales de cobro</a>  </li> 
            <li><a class="dropdown-item" href="#">Reportes</a>  </li>
            <li> <a class="dropdown-item" href="#">Ultimos avisos inviduales</a>  </li>
            <li> <a class="dropdown-item" href="#">Ultimos avisos grupales</a>  </li>
            <li> <a class="dropdown-item" href="#">Reporte general de avisos</a>  </li>
          </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= constant('URL') ?>inicio/logout">Salir</a>
        </li>
      </ul>
     
    </div>
  </div> 
</nav>