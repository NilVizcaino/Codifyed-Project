<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login para 1 usuario</title>
</head>

<body>
<SCRIPT  language=JavaScript>
function go(){

if (document.form.password.value=='CONTRASEÑA' && document.form.login.value=='USUARIO'){
        document.form.submit();
    }
    else{
         alert("Porfavor ingrese, nombre de usuario y contraseña correctos.");
    }
}
</SCRIPT>
<FORM name=form>
<P>Usuario:    <INPUT type="text" name="usuari">
<P>Contraseña: <INPUT type="password" name="password">
<INPUT type="submit" value="Acceder">
</FORM>

<?php
if (isset($_GET["usuari"]))
{
  $usuari =$_GET["usuari"];
    $password =$_GET["password"];
    // CONSULTA A LA BASE DE DADES
    $resposta ="";
    if ($usuari == "admin" && $password == "admin")
    echo "LOGIN CORRECETE";
    else
    echo "<alert>LOGIN INCORRECETE";
}
?>
</body>
</html>
