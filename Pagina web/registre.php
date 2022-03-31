<?php include("header.php") ?>
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
<P>Correu:    <INPUT type="text" name="correu">
<P>Contraseña: <INPUT type="password" name="password">
<P>Confirmar contraseña: <INPUT type="password" name="password2">
<INPUT type="submit" value="Acceder">
</FORM>

<?php
include "controlador.php";
if (isset($_GET["correu"]))
{
  $correu =$_GET["correu"];
    $password =$_GET["password"];
    $password2 =$_GET["password2"];
    $db = new DB();
    if ($password2== $password)
      $resposta =$db->insertaUsuari($correu, $password);
    else
    echo "<alert>Les contasenyes no coincideixen";
}
?>


</body>
</html>
<?php include("footer.php") ?>
