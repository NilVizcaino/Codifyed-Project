<!DOCTYPE html>
<html lang="en" dir="ltr">
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
      grid-template-columns:1fr 1fr 1fr;
      grid-column-gap:15px;
    }

    section{
      display:flex;
      position:relative;
      justify-content:center;
      align-items:center;
    }

    #productes{
      width:450px;
      height:450px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #productes:hover{
      width:475px;
      height:475px;
    }

    #seguretat{
      width:325px;
      height:450px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #seguretat:hover{
      width:350px;
      height:475px;
    }

    #atencio{
      width:325px;
      height:450px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #atencio:hover{
      width:350px;
      height:475px;
    }

    </style>
  </head>
  <body>
    <div id="wrapp">
      <section><a href="revisio_seguretat.php"><img id="seguretat" src="revisio_seguretat.png"  href="registre.php"/></a></section>
      <section><a href="botiga_productes.php"><img id="productes" src="productes.png"/></a></section>
      <section><a href="atencio_client.php"><img id="atencio" src="atencio_client.png"/></a></section>
    </div>
  </body>
</html>
