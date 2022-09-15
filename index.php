<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel='stylesheet' href="css/estilos.css">
    <title>Login</title>
</head>

<body class="text-center">

    <style>
    .error {
        background: #E2867D;
        color: white;
        padding: 10px;
        border-radius: 4px;
        font-size: 18px;
        width: 350px;
        margin: 0 auto;
        position: relative;
        top: 80px;
    }

    .save {
        background: #2bda1f;
        color: white;
        padding: 10px;
        border-radius: 4px;
        font-size: 18px;
        width: 350px;
        margin: 0 auto;
        position: relative;
        top: 600px;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <?php if (isset($_GET['error'])) { ?>
    <p class='error'> <?php echo $_GET['error']; ?></p>
    <?php
        }?>

    <?php if (isset($_GET['save'])) { ?>
    <p class='save' align="center"> <?php echo $_GET['save']; ?></p>
    <?php
        }?>
    
    
    <!-- <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
        <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="validarLogin.php" class="p-4 p-md-5 border rounded-3 bg-light formulario" method="post">
        <div class="contenedor">
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="">
                <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating mb-3 inputContenedor">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="cusu">
                <label for="floatingPassword">Password</label>
            </div>
            
            <button class="w-100 btn btn-lg btn-outline-primary button" type="submit" value="Login" name="Login">Iniciar Sesion</button>
            
            <div class="checkbox mb-3">
                
                <p>¿No tienes cuenta? <a class="link" href="registro.php">Crear Cuenta</a></p>
            </div>
            <hr class="my-4">
            <small class="text-muted"><label>
                <input type="checkbox" value="remember-me"> Acepto los terminos y condiciones
                </label></small>
        </div>
        </form>

      </div>
    </div>
  </div> -->


  
    <form action="validarLogin.php" method="post" class="formulario">
        <h1>Login</h1>
        <div class="contenedor">

            <div class="inputContenedor">
                <i class='bx bxs-id-card'></i>
                <input type="text" placeholder="Usuario" name="cusu">
            </div>

            <div class="inputContenedor">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Contraseña" name="cclave">
            </div>

            <input type="submit" value="Login" class="button" name="Login">
            <p>¿No tienes cuenta? <a class="link" href="registro.php">Crear Cuenta</a></p>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>