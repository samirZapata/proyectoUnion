<?php
include_once('conexion.php');

//1. Crear conexión a la Base de Datos
$con=mysqli_connect($host,$user,$pass,$bd) or die('Fallo la conexion');
mysqli_set_charset($con,"utf8");


if (isset($_POST['Login'])) {
	
	//VARIABLES DEL USUARIO
$usuario = $_POST['cusu'];
$pass = $_POST['cclave'];

//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
if (empty($usuario)) 
	{
		header("Location: index.php?error=Debe llenar todos los campos");
		exit();
	}elseif (empty($pass)) {
		header("Location: index.php?error=Debe llenar todos los campos");
		exit();
	}
	
//VALIDANDO EXISTENCIA DEL USUARIO

$consulta = "SELECT * from datos where usuario = '$usuario' and clave = '$pass' ";
$resultado = mysqli_query($con, $consulta);
	
	while($fila = mysqli_fetch_assoc($resultado))
    {
	 $usu=$fila['usuario'];	
	 $clav=$fila['clave'];	 
	 
	 if ($usu != 'admin') {
		session_start();
		sleep(3);
		$_SESSION['clave'] = $pass;
		header("Location: tienda.php?save=Bienvenido  cla='$pass'");
	 }else{
		session_start();
		sleep(3);
		$_SESSION['clave'] = $pass;
		header("Location: admin.php?save=Bienvenido cla='$pass'");
	 }
	 
	 /*
	 	<?php if (isset($_GET['error'])) { ?>
            <p class='error'> <?php echo $_GET['error']; ?></p>
        <?php
}?>

        <?php if (isset($_GET['save'])) { ?>
            <p class='save' align="center"> <?php echo $_GET['save']; ?></p>
        <?php
}?>
	 */


	
		/*if ($usu == 'admin') {
			header("Location: admin.php?cla='$pass'");
		} else {
			header("Location: tienda.php?cla='$pass'");
		}*/
		

	}
	
	   	
  //Valida Usuario y/Contraseña no coincidentes 
   if (($usu != $usuario))
	{
		header("Location: index.php?error=Usuario o Contraseña Incorrectos");
		exit();
	}elseif (($clav != $pass)) {
		header("Location: index.php?error=Usuario o Contraseña Incorrectos");
		exit();
	}

}
 mysqli_close($con);

?>