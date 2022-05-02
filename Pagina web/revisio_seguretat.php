<?php include("header_user.php") ?>

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
      margin-top: 5vh;
    }

    #envolcall_dades_personals{
      height: 150px;
      width: 400px;
      position: absolute;
      left:610px;
      top:46vh;
    }

    input#Num_Telèfon{
      font-size: 1.4rem;
      height: 40px;
      width: 210px;
      font-family:"Josefin Sans", sans-serif ;
      color:blue;
      border-bottom-color: black;
      border-top: none;
      border-left: none;
      border-right:  none;
      outline:none;
      margin-bottom: 20px;
    }

    input#Nom_i_Cognoms{
      font-size: 1.4rem;
      height: 40px;
      width: 200px;
      font-family:"Josefin Sans", sans-serif ;
      color:blue;
      border-bottom-color: black;
      border-top: none;
      border-left: none;
      border-right:  none;
      outline:none;
      margin-bottom: 20px;
    }

    input#asumpte{
      font-size: 1.4rem;
      height: 40px;
      width: 275px;
      font-family:"Josefin Sans", sans-serif ;
      color:blue;
      border-bottom-color: black;
      border-top: none;
      border-left: none;
      border-right:  none;
      outline:none;
      margin-bottom: 20px;
    }
    p{
      font-family:"Josefin Sans", sans-serif;
      font-size: 1.5rem;
      margin-top: 10px;
    }


    button#enviar{
      position: absolute;
      background-color:var(--verd);
      top:40vh;
      right:20px;
      height: 32px;
      width:130px;
      font-size:1.25rem;
      font-weight:700;
      color:white;
      line-height:2rem;
      outline: none;
    }

    button#enviar:hover{
      background-color: var(--turquessa);
    }

    #espai{
      height: 100px;
    }

    </style>
  </head>
  <body>
    <div id="titol">
      <h1>Revisió de seguretat </h1>
    </div>

    <div id=div_paragref_qui_som>
    <p>En aquesta secció podrás contactar amb nosaltres per explicar-nos de una forma més detallada quin problema hi ha present en els teus dispositius. Recorda adjuntar captures i descripcións detallades del problema, a part de que és necesari que omplis totes les parts importants de informació per poder enviar la solicitud de revisió.</p>

    <h2>Informació del problema:</h2>
    <textarea name="comentario" rows="14" cols="65"></textarea>

    <div id="envolcall_dades_personals">
    <h2>Dades generals:</h2>
    <P>Asumpte:  <INPUT id="asumpte" type="text" name="asumpte">
    <P>Nom i Cognoms:  <INPUT id="Nom_i_Cognoms" type="text" name="nom">
    <P>Num de telèfon:  <INPUT id="Num_Telèfon" type="text" name="telefon">
      <button type="button" id="enviar">enviar</button>
    </div>
    </div>
    <div id="espai"></div>
  </body>
</html>

<?php include("footer.php") ?>
