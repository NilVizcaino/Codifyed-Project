<?php include("header_user.php") ?>

<style>

h1{
  position: absolute;
  top: 175px;
  right: 290px;
  font-size:3rem;
}

#foto{
  position: absolute;
  width: 550px;
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

  <h1> SOMFY ONE PRO</h1>

  <img id="foto" src="Somfy_Protexiom_product.png"/>
  <img id="estrela1" src="estrella.png"/>
  <img id="estrela2" src="estrella.png"/>
  <img id="estrela3" src="estrella.png"/>
  <img id="estrela4" src="estrella.png"/>
  <img id="estrela5" src="estrella.png"/>

  <div id="descripcio">

<p>Protexiom és un sistema d'alarma sense fils per a casa i pisos. Aquest paquet conté dos detectors i una central 3 a 1 amb sirena i transmissor GSM (avís amb SMS). És fàcil d'instal·lar amb els elements pregravats.</p>

<p>✔ Frecuencia 433,42 - 433,92 MHz</p>
<p>✔ Rang máxim 200m en espai obert</p>
<p>✔ 3 sensors independents</p>
<p>✔ Sirena de 100 dB</p> </div>

<div id="preu">

<h8 id="pre"><b>370€</b></h8>

</div>

<button id="carrito"><b>Afegir a la cistella</b></button>

<div id="espai"></div>


</body>

<?php include("footer.php") ?>
