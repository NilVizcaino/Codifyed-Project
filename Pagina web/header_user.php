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
      <img id="cistella" src="cistella.svg"/>
      </button>

      <button>
      <img class="menu-user-btn" id="perfil" src="profile.svg"/>
      </button>

    <div class="content-menu hide-content">
      <div class="btn-close">Tancar</div>
      <button id="qui"></button>
      <button id="inici"><b><a href="index.php">Inici</a></b></button>
      <button id="qui"><a href="qui_som.php"><b>Qui Som?</b></a></button>
    </div>

    <div class="content-user-menu hide-user-content">
      <div class="btn-user-close">Tancar</div>
      <button id="inici"><b></b></button>
      <button id="inici"><b><a href="index.php">Configuració</a></b></button>
      <button id="qui"><a href="qui_som.php"><b>Tancar sesió</b></a></button>
    </div>
    </nav>
    <img class="logo" src="logo.svg"/>
  </header>
