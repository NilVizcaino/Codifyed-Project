<?php include("header_user.php") ?>
<html lang="ca" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>comprar</title>
    <link rel="stylesheet" type="text/css"  href="style.css" />
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="jquery-ui.min.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){

        $("#paypal").click(function(){
          $(".paypal-warp").toggleClass("show-content")
          $(".paypal-warp").toggleClass("hide-content");
        });
      });

    </script>

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
         top: 150px;
         left:560px;
       }

    #paysafe{
         display: block;
         position: absolute;
         width: 80px;
         height: 80px;
         top: 140px;
         left:390px;
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

    .paypal-warp{
      position: fixed;
      height: 60vh;
      width: 130vh;
      transform:translate(-50%, -50%);
      left:50vw;
      top:-50vh;
      opacity: 1;
      transition:all 1s ease;
      font-family:"Josefin Sans", sans-serif ;
      font-size: 1.7rem;
      transition:all 250ms ease;
    }

    .show-content{
      opacity: 1;
    }

    .correu{
      position: fixed;
      height: 60vh;
      width: 130vh;
      left:4vw;
      top:22vh;
      transition:all 1s ease;
      font-family:"Josefin Sans", sans-serif ;
      font-size: 1.7rem;
    }

    .constrasenya{
      position: fixed;
      height: 60vh;
      width: 130vh;
      left:4vw;
      top:33vh;
      transition:all 1s ease;
      font-family:"Josefin Sans", sans-serif ;
      font-size: 1.7rem;
    }

    .iniciar-sesio-pagar{
      position: fixed;
      height: 8vh;
      width: 50vh;
      left:3.5vw;
      top:43vh;
      border-radius: 10px;
      background-color: #3f70b6;
      transition:all 1s ease;
      font-family:"Josefin Sans", sans-serif ;
      font-size: 2rem;
      color: white;
      padding-top: 30px;
      padding-left: 100px;
      cursor: pointer;
    }

    .Paypal-window{
      height: 60vh;
      width: 130vh;
      transition:all 1s ease;
    }

    input#capcha{
      font-size: 1.4rem;
      height: 40px;
      width: 300px;
      font-family:"Josefin Sans", sans-serif ;
      color:blue;
      border-bottom-color: black;
      border-top: none;
      border-left: none;
      border-right:  none;
      outline:none;
      margin-bottom: 20px;
    }

    input#capcha2{
      font-size: 1.4rem;
      height: 40px;
      width: 235px;
      font-family:"Josefin Sans", sans-serif ;
      color:blue;
      border-bottom-color: black;
      border-top: none;
      border-left: none;
      border-right:  none;
      outline:none;
      margin-bottom: 20px;
    }

    .creu{
      display:block;
      position:absolute;
      height: 100px;
      width: 100px;
      right:2vw;
      top:3.5vh;
      border-radius: 50px;
      background-color: #3f70b6;
      cursor: pointer;
      justify-content: center;
      padding: 0;
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
      <section><a href="targeta.php"><img id="targeta" src="targeta.png"/></a></section>
      <section><a href="paysafe.php"><img id="paysafe" src="paysafe.png"/></a></section>
    </div>
    <div id="wrapp-total-prize"><b>TOTAL 215€</b></div>
    <?php include("footer.php") ?>
    <div class="paypal-warp hide-content">
      <img class="Paypal-window" src="Paypal-screen.png" />

      <div class="correu">
        <P>Correu: <INPUT id="capcha">
      </div>

      <div class="constrasenya">
        <P>Contrasenya: <INPUT id="capcha2">
      </div>
      <div class="iniciar-sesio-pagar"> Iniciar sessió i pagar</div>

      <div class="creu">
        <svg height="100" width="100">
          <path d="M25 75 L75 25 M75 75 L25 25" stroke="white" stroke-width="4" stroke-       linecap="round"/>
        </svg>
      </div>
    </div>
  </body>
</html>
