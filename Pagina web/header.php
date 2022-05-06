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
          $(".content-menu").toggleClass("show-content")
          $(".content-menu").toggleClass("hide-content");
        });

        $(".btn-close").click(function(){
          $(".content-menu").toggleClass("hide-content");
            $(".content-menu").toggleClass("show-content")
        });

      });

    </script>
  </head>
<body>
  <a name="capçalera"></a>
  <header>
    <div class="menu-btn">
      <nav id="caixa_menu">
        <span class="tbar"></span>
        <span class="bbar"></span>
      </nav>
    </div>

    <nav>
      <button id="registrar-se"><a href="registre.php">Registrar-se</a></button>
      <button id="unoa"><a  href="login.php">Iniciar sessió</a></button>
    <div class="content-menu hide-content">
      <div class="btn-close">Tancar</div>
      <button id="qui"></button>
      <button id="inici"><b><a href="index.php">Inici</a></b></button>
      <button id="qui"><a href="qui_som.php"><b>Qui Som?</b></a></button>
      <button id="on_som"><a href="https://www.google.es/maps/@41.4035359,2.1371051,3a,75y,235.03h,85.64t/data=!3m6!1e1!3m4!1sN78Dgf8D7IZYmqCls0DaWQ!2e0!7i16384!8i8192?hl=es"><b>On Som?</b></a></button>

    </div>
    </nav>
    <img class="logo" src="logo.svg"/>
  </header>
