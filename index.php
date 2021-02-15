<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <title>Practica 2</title>
    </head>

    <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <p class="navbar-brand mb-0 h1">Practica 2</p>

        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Inicio</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Salir</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Almacen</a>
            </li>
          </ul>
        </div>

      </nav>

      <div class="container text-justify">
          <!-- Formulario de Bienvenida -->
          <form class="container-fluid  col-md-4 bg-light p-4 mb-2 mt-5" action="#" method="post">

            <h2 class="display-6">Ingresa</h2>

            <div class="form-group mt-3">
              <label class="col-form-label" for="nickname">Nickname</label>
              <input type="text" class="form-control" id="nickname" name="" placeholder="Coloca tu nick">
              <small class="form-text text-muted">Digite su Nickname</small>
            </div>

            <div class="form-group row">
              <div class="col-sm-10 mt-4">
                <button type="submit" class="btn btn-primary btn-block" name="button">Iniciar Sesión</button>
              </div>
            </div>

          </form>
      </div>

      <footer class="container-fluid b-0 fixed-bottom bg-dark p-3">
        <div class="container col-md-3 text-secondary">
          <p>Integrantes</p>
          <ul>
            <li>Cesar Gonzales Castillo</li>
            <li>Alberto Gallardo Hernández</li>
            <li>Víctor Hernández Álvarez</li>
          </ul>
        </div>

      </footer>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>
