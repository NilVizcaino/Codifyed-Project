<?php include("header.php") ?>
  <style>

    #warp_alarmes{
      display:block;
      position:relative;
      width:950px;
      height:350px;
      transform:translate(-50%, -120%);
      left:50vw;
      top:50vh;
    }

    #graella_alarmes{
      position: absolute;
      width:950px;
      height:350px;
      transition: all 300ms ease;
    }

    #graella_sais{
      position: absolute;
      top:0vh;
      width:650px;
      height:350px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #warp_camares{
      display:block;
      position:relative;
      width:950px;
      height:350px;
      transform:translate(-50%, -110%);
      left:50vw;
      top:50vh;
    }

    #graella_camares{
      position: absolute;
      top:0px;
      width:650px;
      height:350px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #alarma_home{
      position: absolute;
      left:65px;
      top:13vh;
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
      top:14vh;
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
      top:12vh;
      width:195px;
      height:210px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #somfy_protexiom:hover{
      width:210px;
      height:225px;
    }

    #conceptronic{
      position: absolute;
      left:60px;
      top:15vh;
      width:195px;
      height:210px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #conceptronic:hover{
      width:210px;
      height:225px;
    }

    #lapara{
      position: absolute;
      left:375px;
      top:15vh;
      width:195px;
      height:210px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #lapara:hover{
      width:210px;
      height:225px;
    }

    #domo{
      position: absolute;
      left:70px;
      top:13vh;
      width:195px;
      height:210px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #domo:hover{
      width:210px;
      height:225px;
    }

    #rgb_link{
      position: absolute;
      left:375px;
      top:13vh;
      width:195px;
      height:210px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #rgb_link:hover{
      width:210px;
      height:225px;
    }

    #warp_sais{
      display:block;
      position:relative;
      width:950px;
      height:350px;
      transform:translate(-50%, -100%);
      left:50vw;
      top:50vh;
      margin:0px 0px 100px 0px;
    }

    </style>
  </head>
  <body>
    <div id="warp_alarmes">
      <section><img id="graella_alarmes" src="graella_alarmes.png"/></section>
      <section><a href="home_alarm.php"><img id="alarma_home" src="alarma_home.png"/></a></section>
      <section><a href="somfy_one_pro.php"><img id="somfy_one_pro" src="somfy_one_pro.png"/></a><section>
      <section><a href="somfy_protexiom.php"><img id="somfy_protexiom" src="somfy_protexiom.png"/></a><section>
    </div>

    <div id="warp_camares">
      <section><img id="graella_camares" src="graella_cameres.png"/></section>
      <section><a href="domo.php"><img id="domo" src="model_domo.png"/></a></section>
      <section><a href="rgb_link.php"><img id="rgb_link" src="model_rgblink.png"/></a></section>
    </div>

    <div id="warp_sais">
      <section><img id="graella_sais" src="graella_sais.png"/></section>
      <section><a href="conceptronic.php"><img id="conceptronic" src="sai_model1.png"/></a></section>
      <section><a href="lapara.php"><img id="lapara" src="sai_model2.png"/></a></section>
    </div>

  </body>
</html>
<?php include("footer.php") ?>
