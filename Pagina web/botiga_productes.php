<?php include("header_user.php") ?>
  <style>

    div#wrapp{
      display:grid;
      position:relative;
      width:auto;
      height:auto;
      background-color: transparent;
      margin:-20px 110px 90px 125px;
      grid-template-columns:1fr 1fr;
      grid-column-gap:25px;
    }

    #hardware{
      width:700px;
      height:425px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #hardware:hover{
      width:725px;
      height:450px;
    }

    #software{
      width:455px;
      height:425px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #software:hover{
      width:485px;
      height:440px;
    }

    </style>
  </head>
  <body>
    <div id="wrapp">
      <section><a href="productes_software.php"><img id="software" src="Software.png"/></a></section>
      <section><a href="productes_hardware.php"><img id="hardware" src="hardware_products.png"/></a></section>
    </div>
  </body>
</html>
<?php include("footer.php") ?>
