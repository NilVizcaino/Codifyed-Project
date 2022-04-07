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
      top:-55px;
      width:175px;
      height:200px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #alarma_home:hover{
      width:190px;
      height:215px;
    }

    </style>
  </head>
  <body>
    <div id="wrapp">
      <section><img id="graella_alarmes" src="graella_alarmes.png"/></section>
      <section><a href="home_alarm.php"><img id="alarma_home" src="alarma_home.png"/></a></section>
    </div>
  </body>
</html>
<?php include("footer.php") ?>
