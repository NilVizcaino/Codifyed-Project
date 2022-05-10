<?php include("header_user.php") ?>
<html lang="ca" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>comprar</title>
    <style>

    div#wrapp{
      display:grid;
      position:relative;
      width:70vw;
      height:auto;
      margin:0px auto 90px auto;
      background-color: var(--blau_cel);
      grid-template-columns: 30% calc(70% - 10px);
      grid-column-gap:10px;
      border-radius: 10px;
    }

    #foto-content, #contenido{
      display:flex;
      position:relative;
      height: auto;

      background-color:blue;
      margin:10px 10px 10px 10px;
      justify-content:center;
      align-items:center;
      border-radius: 10px;
    }

    #foto{
      position: absolute;
      width: 240px;
      height:330px;
    }


    </style>
  </head>
  <body>
    <div id="wrapp">
      <div id="foto-content"><img id="foto" src="codex.png"/></div>
      <div id="contenido"><h1>Body Area</h1></div>

      <div id="foto-content"><h2>Side bar</h2></div>
      <div id="contenido"><h1>Body Area</h1></div>

      <div id="foto-content"><h2>Side bar</h2></div>
      <div id="contenido"><h1>Body Area</h1></div>

    </div>

  </body>
</html>
<?php include("footer.php") ?>
