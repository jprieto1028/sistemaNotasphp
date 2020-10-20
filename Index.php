<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Notas</title>
  </head>
  <body>
    <h1> Inicio de sesion</h1>
 <form method="post" action="Usuario/Controlador/Login.php" >
  Usuario :<br>
  <input type="text"  name="Usuario" required="" autocomplete="off"  placeholder="usuario"><br><br>
   Contraseña :<br>
   <input type="password" name="Contrasena" required="" autocomplete="off" placeholder="contrasena"><br><br>
<input type="submit" value="Iniciar">
</form>

  </body>
</html>
