<style>
  <?php include '../index.css'; ?>
</style>
<?php




$username = $_POST['uname'];
$password = $_POST['psw'];
if (empty($resultado)) {
  echo 'La combinación de usuario y contraseña es incorrecta.';

}
//print_r (array_values($resultado));

foreach ($resultado as $fila) {
  if (($fila['Usuario'] == $username) and password_verify($password, $fila['Contraseña'])==True) {

    echo '¡Bienvenido!';

  } else {
        echo 'La combinación de usuario y contraseña es incorrecta.';
  }

  include_once __DIR__.'/../Vista/Vista_Main_Page.php';
}

