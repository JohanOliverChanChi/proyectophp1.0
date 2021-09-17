<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesion</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../estilos/estilosRegistro.css">

    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="signup-form">
                        <form action="" class="mt-5  p-4 bg-dark" id="cuadro">
                            <h4 class="mb-5 text-light">Crea tu cuenta</h4>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label>Nombre<span class="text-danger">*</span></label>
                                    <input type="text" name="fname" class="form-control" placeholder="Ingresa tu nombre">
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label>Apellido<span class="text-danger">*</span></label>
                                    <input type="text" name="Lname" class="form-control" placeholder="Ingresa tu apellido">
                                </div>
        
                                <div class="mb-3 col-md-12">
                                    <label>Contraseña<span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label>Confirmar Contraseña<span class="text-danger">*</span></label>
                                    <input type="password" name="confirmpassword" class="form-control" placeholder="Confirma tu contraseña">
                                </div>
                                <div class="col-md-12">
                                   <button class="btn btn-danger float-end">Crear cuenta</button>
                                </div>
                            </div>
                            <p class="text-center mt-3 text-secondary">Si ya tienes una cuenta <a href="#" style="color: crimson;">Ingresa ahora</a></p>
                        </form>
                
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
