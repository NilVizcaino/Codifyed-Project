<!DOCTYPE html>
<html lang="ca" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css"  href="style.css" />
    <script>
      var Posició = 0;
      let submenu = document.getElmentById("submenu");
      function sumar(){
        sumar = sumar + 1;

        if(sumar == 1){
        }

        if(sumar == 2){
          Posició == 0
        }
      }
    </script>
  </head>
<body>
  <a name="capçalera"></a>
  <header>
    <nav>
      <button id="registrar-se"><a href="registre.php">Registrar-se</a></button>
      <button id="unoa"><a  href="login.php">Iniciar sessió</a></button>
      <button id="menu" onclick="sumar();">Menu</button>
      <button id="close" onclick="sumar();">Tencar</button>
    <div id="submenu">
      <button id="idioma"><b><a href="registre.php">Inici</a></b></button>
      <button id="idioma"><b>Idioma</b></button>
      <button id="qui"><b>Qui Som?</b></button>
    </div>
    </nav>
    <img class="logo" src="logo.svg"/>
  </header>
