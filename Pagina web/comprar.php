<?php include("header_user.php") ?>
<html lang="ca" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>comprar</title>
    <style>

    div#wrapp{
      display:grid;
      position:relative;
      width:50vw;
      height:auto;
      margin:0px auto 90px auto;
      background-color: var(--blau_cel);
      grid-template-columns: 30% calc(70% - 10px);
      grid-column-gap:10px;
      border-radius: 10px;
    }

    #foto-content{
      display:flex;
      position:relative;
      height: 180px;
      width: auto;
      background-color:;
      margin:10px 10px 10px 10px;
      justify-content:center;
      align-items:center;
      border-radius: 10px;
    }

    #contenido{
      display:flex;
      position:relative;
      height: auto;
      background-color:;
      margin:10px 10px 10px 10px;
      border-radius: 10px;
    }

    #foto-content-antivirus{
      display:flex;
      position:relative;
      height: 300px;
      background-color:transparent;
      margin:10px 10px 10px 10px;
      justify-content:center;
      align-items:center;
      border-radius: 10px;
    }

    #foto{
      position: absolute;
      width: 220px;
      height:300px;
    }

    #foto_sai{
      position: absolute;
      width: 220px;
      height:220px;
    }


    </style>
  </head>
  <body>
    <div id="wrapp">
      <div id="foto-content-antivirus"><img id="foto" src="codex.png"/></div>
      <div id="contenido">Body Area</div>

      <div id="foto-content"><img id="foto_sai" src="coneptronic_sai_nobackground.png"/></div>
      <div id="contenido">Body Area</div>

    </div>

  </body>
</html>
<?php include("footer.php") ?>
