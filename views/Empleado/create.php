<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once 'views/header.php';
    ?>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-6 mt-4">
                <h2 class="text-center pt-3">Nuevo producto</h2>
                <form action="<?= constant('URL') ?>producto/agregar" method="POST" id="frmProductos">
                    Nombre
                    <input type="text" class="form-control" name="txtNombre">
                    Marca
                    <select class="form-control" name="sMarca">
                        <?php
                        $datos = $this->marcas;
                        foreach ($datos as $value) {
                        ?>
                            <option value="<?= $value['codigo'] ?>"><?= $value['nombre'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    Precio
                    <input type="text" class="form-control" name="txtPrecio">
                    <button class="btn btn-primary mt-2 btn-block btn-sm" id="btnAdd">Agregar</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    require_once 'views/footer.php';
    ?>
    <script>
        var url = "<?= constant('URL') ?>";
    </script>
    <script src="<?= constant('URL') ?>public/js/jquery-3.6.0.min.js"></script>
    <script src="<?= constant('URL') ?>public/js/productos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>