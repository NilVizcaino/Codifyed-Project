<?php include("header.php") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login para 1 usuario</title>

<style>
div#caixa2{
    display:grid;
    position:relative;
    width:45vw;
    height:380px;
    margin:-40px auto 40px auto;
    background-color:var(--blau_cel) ;
    justify-content:center;
    align-items:center;
    border-radius: 25px;
    font-family:"Josefin Sans", sans-serif ;
    font-size: 1.7rem;
  }

  #loging_incorrecte{
    font-family:"Josefin Sans", sans-serif ;
    font-size: 1.7rem;
    color: red;
    height: 80px;
    width: 400px;
    transform:translate(-50%, -50%);
    left:50vw;
    top:3vh;
    background-color: transparent;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    animation:error-spawn 1s ease;}

   @keyframes error-spawn{
     0%{filter:blur(100px); height: 0px;}

     25%{left:50vw;}

     50%{left:50vw;}

     75%{left:50vw; filter:blur(0px)}

     100%{left:50vw; height: 80px;}}

</style>
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
<div id=caixa2>
<P>Correu:    <INPUT id="seis" type="text" name="correu">
<P>Contrasenya: <INPUT id="siete" type="password" name="password">
<P>Confirmar contrasenya: <INPUT  id="siete" type="password" name="password2">
<p><INPUT type="submit" value="Acceder">
</div>
</FORM>

<?php
include "controlador.php";
if (isset($_GET["correu"]))
{
  $correu =$_GET["correu"];
    $password =$_GET["password"];
    $password2 =$_GET["password2"];
    $db = new DB();
    if ($password2== $password){
      $resposta =$db->insertaUsuari($correu, $password);
      header("Location: index.php");
    }
    else
    echo "<div id=loging_incorrecte>Les contrasenyes no coincideixen</div>";
}
?>


</body>
</html>
<?php include("footer.php") ?>
