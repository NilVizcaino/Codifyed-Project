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
      justify-content: center;
      margin:-70px 110px 200px 70px;
      grid-template-columns:1fr 1fr;
      grid-column-gap:25px;
    }

    section{
      display:flex;
      position:relative;
      justify-content:center;
      align-items:center;
    }

    #productes{
      width:650px;
      height:425px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #productes:hover{
      width:700px;
      height:450px;
    }

    #seguretat{
      width:425px;
      height:425px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #seguretat:hover{
      width:450px;
      height:450px;
    }

    </style>
  </head>
  <body>
    <div id="wrapp">
      <section><img id="seguretat" src="Software.png"/></section>
      <section><img id="productes" src="hardware_products.png"/></section>
    </div>
  </body>
</html>
