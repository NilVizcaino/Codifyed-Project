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

    #hardware{
      width:650px;
      height:425px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #hardware:hover{
      width:665px;
      height:440px;
    }

    #software{
      width:425px;
      height:425px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #software:hover{
      width:440px;
      height:440px;
    }

    </style>
  </head>
  <body>
    <div id="wrapp">
      <section><img id="software" src="Software.png"/></section>
      <section><a href="productes_hardware.php"><img id="hardware" src="hardware_products.png"/></a></section>
    </div>
  </body>
</html>
<?php include("footer.php") ?>
