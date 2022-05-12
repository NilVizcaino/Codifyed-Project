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


        $(".menu-user-btn").click(function(){
          $(".content-user-menu").toggleClass("show-user-content")
          $(".content-user-menu").toggleClass("hide-user-content");
        });

        $(".btn-user-close").click(function(){
          $(".content-user-menu").toggleClass("hide-user-content");
            $(".content-user-menu").toggleClass("show-user-content")
        });


        $(".menu-cistella-btn").click(function(){
          $(".content-cistella-menu").toggleClass("show-cistella-content")
          $(".content-cistella-menu").toggleClass("hide-cistella-content");
        });

        $(".btn-cistella-close").click(function(){
          $(".content-cistella-menu").toggleClass("hide-cistella-content");
            $(".content-cistella-menu").toggleClass("show-cistella-content")
        });


      });

    </script>

    <style>

    #cistella{
      position: absolute;
      top:10%;
      right:140px;
      height: 75px;
      width:130px;
      font-size:1.25rem;
      font-weight:700;
      color:white;
      line-height:2rem;
      outline: none;
    }

    #perfil{
      position: absolute;
      top:10%;
      right:20px;
      height: 75px;
      width:130px;
      font-size:1.25rem;
      font-weight:700;
      color:white;
      line-height:2rem;
      outline: none;
    }

    </style>
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
      <button>
      <img id="cistella" src="cistella.svg" class="menu-cistella-btn"/>
      </button>

      <button>
      <img class="menu-user-btn" id="perfil" src="profile.svg"/>
      </button>

    <div class="content-menu hide-content">
      <div class="btn-close">Tancar</div>
      <button id="qui"></button>
      <button id="inici"><b><a href="index_user.php" style="color:white">Inici</a></b></button>
      <button id="qui"><a href="qui_som.php" style="color:white"><b>Qui Som?</b></a></button>
        <button id="on_som"><a href="https://www.google.es/maps/@41.4035359,2.1371051,3a,75y,235.03h,85.64t/data=!3m6!1e1!3m4!1sN78Dgf8D7IZYmqCls0DaWQ!2e0!7i16384!8i8192?hl=es" style="color:white"><b>On Som?</b></a></button>
    </div>

    <div class="content-user-menu hide-user-content">
      <div class="btn-user-close">Tancar</div>
      <button id="inici"><b></b></button>
      <button id="inici"><b><a href="perfil.php" style="color:white">Configuració</a></b></button>
      <button id="qui"><a href="index.php" style="color:white"><b>Tancar sesió</b></a></button>
    </div>

    <div class="content-cistella-menu hide-cistella-content">
      <div class="btn-cistella-close">Tancar</div>
      <div class="btn-comprar"><a href="comprar.php" style="color:white">Comprar</a></div>
      <div id="text_producte"><img class="relleno" src="relleno.png"/></div>
      <div id="text_producte_codex"><img class="producte_codex" src="Codex.png"/>x1 Codex</div>
      <div id="text_producte"><img class="producte_sai" src="coneptronic_sai_nobackground.png"/> x1 Conceptronic</div>

    </div>
    </nav>
    <img class="logo" src="logo.svg"/>
  </header>
