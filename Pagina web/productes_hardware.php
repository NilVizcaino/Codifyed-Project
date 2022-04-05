<?php include("header.php") ?>
  <style>

    div#wrapp{
      display:grid;
      position:relative;
      width:70vw;
      height:300px;
      margin:-20px 110px 200px 125px;
      grid-template-columns:1fr 1fr;
      grid-column-gap:25px;
    }

    #alarmes{
      width:1050px;
      height:350px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #hardware:hover{
      width:675px;
      height:450px;
    }

    #software{
      width:425px;
      height:425px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #software:hover{
      width:450px;
      height:450px;
    }

    </style>
  </head>
  <body>
    <div id="wrapp">
      <section><img id="alarmes" src="graella_alarmes.png"/></section>
    </div>
  </body>
</html>
<?php include("footer.php") ?>
