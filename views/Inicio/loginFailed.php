<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    body{ 
    background-color: #1d494a;
    }
</style>
<body>
    <div class="container">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-lg-4 col-md-4 col-sm-12 card">
                <div class="card-body">
                <img src="<?= constant('URL') ?>public/img/login.jpg" class="img-fluid d-block mx-auto">
                    <form action="<?= constant('URL') ?>Inicio/index" method="POST">
                        Usuario
                        <input type="text" class="form-control" name="txtUsuario">
                        Contraseña
                        <input type="password" class="form-control" name="txtContrasena">
                        <button class="btn btn-primary mt-2 btn-block btn-sm">Iniciar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Error",
            text: "Credenciales invalidas",
            icon: "error",
            button: "Ok",
        });
    </script>
</body>

</html>