<?php include("header.php") ?>
  <style>

    div#wrapp{
      display:grid;
      position:relative;
      width:70vw;
      height:160vh;
      margin:-20px 110px 200px 175px;
    }

    #graella_alarmes{
      position: absolute;
      width:950px;
      height:350px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #graella_sais{
      position: absolute;
      top:225px;
      width:700px;
      height:350px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #graella_camares{
      position: absolute;
      top:450px;
      width:700px;
      height:350px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #alarma_home{
      position: absolute;
      left:65px;
      top:-410px;
      width:175px;
      height:200px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #alarma_home:hover{
      width:190px;
      height:215px;
    }

    #somfy_one_pro{
      position: absolute;
      left:365px;
      top:-565px;
      width:195px;
      height:210px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #somfy_one_pro:hover{
      width:210px;
      height:225px;
    }

    #somfy_protexiom{
      position: absolute;
      left:685px;
      top:-745px;
      width:195px;
      height:210px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #somfy_protexiom:hover{
      width:210px;
      height:225px;
    }

    </style>
  </head>
  <body>
    <div id="wrapp">
      <section><img id="graella_alarmes" src="graella_alarmes.png"/></section>
      <section><img id="graella_sais" src="graella_sais.png"/></section>
      <section><img id="graella_camares" src="graella_cameres.png"/></section>

      <section><a href="home_alarm.php"><img id="alarma_home" src="alarma_home.png"/></a></section>
      <section><a href="somfy_one_pro.php"><img id="somfy_one_pro" src="somfy_one_pro.png"/></a></section>
      <section><a href="somfy_protexiom.php"><img id="somfy_protexiom" src="somfy_protexiom.png"/></a></section>

      <section><a href="conceptronic.php"><img id="conceptronic" src="sai_model1.png"/></a></section>
      <section><a href="lapara.php"><img id="lapara" src="sai_model2.png"/></a></section>

      <section><a href="domo.php"><img id="domo" src="model_domo.png"/></a></section>
      <section><a href="rgb_link.php"><img id="rgb_link" src="model_rgblink.png"/></a></section>
    </div>
  </body>
</html>
<?php include("footer.php") ?>
