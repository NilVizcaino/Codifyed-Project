<?php include("header.php") ?>

<html lang="ca" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

    h1{
      font-size:3.4rem;
      font-weight:700;
      font-family:"Josefin Sans", sans-serif;
      color:var(--verd);
      line-height:1.5rem;
    }

    #titol{
      padding-left:3vh;
      margin-top: -80px;
    }

    h2{
      font-size:1.6rem;
      font-weight:700;
      font-family: "Josefin Sans", sans-serif;
      color:var(--verd);
      line-height:2.2rem;
    }

    </style>
  </head>
  <body>
    <div id="titol">
      <h1>Revisió de seguretat</h1>
    </div>

    <div id=div_paragref_qui_som>
    <p>En aquesta secció podrás contactar amb nosaltres per explicar-nos de una forma més detallada quin problema hi ha present en els teus dispositius. Recorda adjuntar captures i descripcións detallades del problema, a part de que és necesari que omplis totes les parts importants de informació per poder enviar la solicitud de revisió</p>

    <h2>Informació del problema:</h2>
    
    <textarea name="comentario" rows="14" cols="50"></textarea>
    </div>
  </body>
</html>

<?php include("footer.php") ?>
