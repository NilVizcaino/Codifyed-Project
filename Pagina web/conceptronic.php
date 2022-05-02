<?php include("header_user.php") ?>

<style>

h1{
  position: absolute;
  top: 175px;
  right: 225px;
  font-size:3rem;
}

#foto{
  position: absolute;
  width: 500px;
  height:500px;
  top: 170px;
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

  <h1> CONCEPTRONIC UPS</h1>

  <img id="foto" src="coneptronic_sai.png"/>
  <img id="estrela1" src="estrella.png"/>
  <img id="estrela2" src="estrella.png"/>
  <img id="estrela3" src="estrella.png"/>
  <img id="estrela4" src="estrella.png"/>
  <div id="descripcio">

<p>Conceptronic UPS proporciona bateria de recanvi fiable i duradora per a la llar o la petita oficina. La unitat és fàcil d'instal·lar i utilitzar</p>

<p>✔ Connectors i cablejat: IEC Socket</p>
<p>✔  Potència sortida: 2200VA/1320W</p>
<p>✔  Potència entrada: 220-240VAC</p>
<p>✔  Temps de recàrrega al 90%: 8 hores</p> </div>

<div id="preu">

<h8 id="pre"><b>200€</b></h8>

</div>

<button id="carrito"><b>Afegir a la cistella</b></button>

<div id="espai"></div>


</body>

<?php include("footer.php") ?>
