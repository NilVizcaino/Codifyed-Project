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
      height:600px;
      margin:0px auto 200px auto;
      background-color: var(--blau_cel);
      grid-template-columns: 30% calc(70% - 10px);
      grid-column-gap:10px;
      border-radius: 10px;
    }

    div#wrapp-total-prize{
      display:block;
      position:relative;
      width:9vw;
      height:25px;
      top:-190px;
      margin:0px auto 20px auto;
      background-color:  var(--verd);
      justify-content: center;
      align-items: center;
      border-radius: 10px;
      color: white;
      font-size: 1.5rem;
      font-family: "Josefin Sans", sans-serif;
      padding:30px;
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
      background-color:transparent;
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

    #paypal{
      display: block;
      position: absolute;
      width: 50px;
      height: 50px;
      top: 725px;
      left:500px;
    }

    #targeta{
      display: block;
      position: absolute;
      width: 50px;
      height: 50px;
      top: 725px;
      left:560px;
    }

    #paysafe{
      display: block;
      position: absolute;
      width: 80px;
      height: 80px;
      top: 712px;
      left:620px;
    }

    h11{
      display: block;
      position: absolute;
      top: 732px;
      font-size: 2rem;
      font-family: "Josefin Sans", sans-serif;
    }

    #Titol_Producte{
      display:block;
      position:absolute;
      width:400px;
      height:60px;
      color:var(--verd);
      left:0vw;
      top:2vh;
      font-size: 2rem;
      font-family: "Josefin Sans", sans-serif;
    }

    #Preu_Producte{
      display:block;
      position:absolute;
      width:400px;
      height:60px;
      left:0vw;
      top:8vh;
      color: white;
      font-size: 1.5rem;
      font-family: "Josefin Sans", sans-serif;
    }


    </style>
  </head>
  <body>

    <div id="wrapp">
      <div id="foto-content-antivirus"><img id="foto" src="codex.png"/></div>
      <div id="contenido">
        <div id="Titol_Producte"><b>CODEX</b></div>
        <div id="Preu_Producte"><b>15€ al mes</b></div>
      </div>

      <div id="foto-content"><img id="foto_sai" src="coneptronic_sai_nobackground.png"/></div>
      <div id="contenido">
        <div id="Titol_Producte"><b>CONCEPTRONIC</b></div>
        <div id="Preu_Producte"><b>200€</b></div>
      </div>

      <h11><b>Seleccioni un metode de pagament:</b></h11>

      <img id="paypal" src="paypal.png">
      <img id="targeta" src="targeta.png">
      <img id="paysafe" src="paysafe.png">
    </div>
    <div id="wrapp-total-prize"><b>TOTAL 215€</b></div>
  </body>
</html>
<?php include("footer.php") ?>
