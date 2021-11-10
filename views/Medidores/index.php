<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.css" rel="stylesheet" />  
        <title>Empleado</title>
</head>

<body>
    <?php
    require_once 'views/header.php';
    ?>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-10 mt-4">  
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                         Agregar Contador
                </button> 
                <h2 class="text-center p-3 text-primary">Contadores</h2>
                <table class="table table-hover" id="productos">
                    <thead class="thead-dark text-white text-center">
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Estado</th> 
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    require_once 'views/footer.php';
    ?>
    <script>
        var url = "<?= constant('URL') ?>";
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script src="<?= constant('URL') ?>public/js/empleado.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.min.js" 
integrity="sha512-2sjxi4MoP9Gn7QE0NhJdxOFVMK/qYsZO6JnO6pngGvck8p5UPwFX2LV5AsAMOQYgvbzMmki6sIqJ90YO3STAnA==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo contador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
            <form action="#" method="POST" id="frmcontadores">
                Servicio:
                <input type="text" class="form-control" name="txtNombre">
                Cliente:
                <select class="form-control" name="sCliente">
                    <?php
                    $datos = $this->clientes;
                    foreach ($datos as $value) {
                    ?>
                        <option value="<?= $value['id_persona'] ?>"><?= $value['nombre'] ?></option>
                    <?php
                    }
                    ?>
                </select>
                Estado
                <select class="form-control">
                    <option value="">Seleccione</option>
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                    <option value="3">Suspendido</option> 
                </select>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
</body>

</html>