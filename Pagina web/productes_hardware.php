<?php include("header.php") ?>
  <style>

    div#wrapp{
      display:grid;
      position:relative;
      width:70vw;
      height:300px;
      margin:-20px 110px 200px 175px;
      grid-template-columns:1fr;
      grid-column-gap:25px;
    }

    #graella_alarmes{
      position: absolute;
      width:950px;
      height:350px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #alarma_home{
      position: absolute;
      left:65px;
      top:25px;
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
      top:-40px;
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
      top:-125px;
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
      <section><a href="home_alarm.php"><img id="alarma_home" src="alarma_home.png"/></a></section>
      <section><a href="somfy_one_pro.php"><img id="somfy_one_pro" src="somfy_one_pro.png"/></a></section>
      <section><a href="somfy_protexiom.php"><img id="somfy_protexiom" src="somfy_protexiom.png"/></a></section>
    </div>
  </body>
</html>
<?php include("footer.php") ?>
