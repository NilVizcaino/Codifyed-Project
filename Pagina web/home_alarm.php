<?php include("header.php") ?>

<style>

h1{
  position: absolute;
  top: 175px;
  right: 175px;
  font-size:3rem;
}

#foto{
  position: absolute;
  width: 400px;
  height: 400px;
  top: 230px;
  left: 125px;
}

#estrela1{
  position: absolute;
  top: 285px;
  right: 665px;
  width: 30px;
  height: 30px;
}

#estrela2{
  position: absolute;
  top: 285px;
  right: 630px;
  width: 30px;
  height: 30px;
}

#estrela3{
  position: absolute;
  top: 285px;
  right: 595px;
  width: 30px;
  height: 30px;
}

#estrela4{
  position: absolute;
  top: 285px;
  right: 560px;
  width: 30px;
  height: 30px;
}

#estrela5{
  position: absolute;
  top: 285px;
  right: 525px;
  width: 30px;
  height: 30px;
}

#descripcio{
  position: absolute;
  top: 330px;
  right: 45px;
  width: 650px;
  height: 30px;
  font-size: 2rem;
  font-family: "Josefin Sans", sans-serif;
}

#preu{
  position: absolute;
  top: 670px;
  left:140px;
}

#pre{
  color: #FAC209;
  font-size: 3rem;
  font-family: "Josefin Sans", sans-serif;
}

#carrito{
  position: absolute;
  background-color: var(--blau_cel);
  color: white;
  font-size: 1.5rem;
  font-family: "Josefin Sans", sans-serif;
  top: 740px;
  left:140px;
  width: 300px;
  height: 50px;
}

#espai{
  height: 750px;
}

</style>



<body>

  <h1> SOMFY HOME ALARM</h1>

  <img id="foto" src="home_alarm.png"/>
  <img id="estrela1" src="estrella.png"/>
  <img id="estrela2" src="estrella.png"/>
  <img id="estrela3" src="estrella.png"/>
  <img id="estrela4" src="estrella.png"/>
  <img id="estrela5" src="estrella.png"/>

  <div id="descripcio">

<p>El sistema d'alarma per la casa Home Alarm és l'alarma connectada i sense mensualitats més versàtil i completa del mercat. Els seus 3 detectors dobertura i intrusió Intellitag juntament amb el seu sensor de moviment són capaços de detectar una intrusió.</p>

<p>✔ Compatible amb Google Home i Amazon Alexa mitjançant IFTTT.</p>
<p>✔ Desactivació automàtica mitjançant funció GPS o amb identificació del comandament Keyfob en obrir la porta.</p>
<p>✔ Notificacions de correu electrònic, Push i SMS gratuïtes en cas d'intrusió.</p> </div>

<div id="preu">

<h8 id="pre"><b>400€</b></h8>

</div>

<button id="carrito"><b>Afegir a la cistella</b></button>

<div id="espai"></div>


</body>

<?php include("footer.php") ?>
