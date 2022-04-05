<?php include("header.php") ?>
<!DOCTYPE html>
<html lang="ca" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  <style>

    div#wrapp{
      display:grid;
      position:relative;
      width:70vw;
      height:300px;
      margin:-20px 110px 200px 120px;
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
      <section><img id="software" src="Software.png"/></section>
      <section><img id="hardware" src="hardware_products.png"/></section>
    </div>
  </body>
</html>
<?php include("footer.php") ?>
