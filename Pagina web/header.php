<!DOCTYPE html>
<html lang="ca" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css"  href="style.css" />
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="jquery-ui.min.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){

        $(".menu-btn").click(function(){
          $(".menu-btn").toggleClass("bgmenu");
          $(".content-menu").toggleClass("show-content");
          $(".titles").toggleClass("show");
          $(".tbar").toggleClass("tex");
          $(".bbar").toggleClass("bex");
        });

      });

    </script>
  </head>
<body>
  <a name="capçalera"></a>
  <header>
    <div class="content-menu">
    </div>
    <div class="menu-btn">
      <nav id="caixa_menu">
        <i class="fa fa-bars"></i>
      </nav>
    </div>

    <nav>
      <button id="registrar-se"><a href="registre.php">Registrar-se</a></button>
      <button id="unoa"><a  href="login.php">Iniciar sessió</a></button>
    <div class="content-menu">
      <button id="inici"><b><a href="index.php">Inici</a></b></button>
      <button id="idioma"><b>Idioma</b></button>
      <button id="qui"><a href="qui_som.php"><b>Qui Som?</b></a></button>
    </div>
    </nav>
    <img class="logo" src="logo.svg"/>
  </header>
