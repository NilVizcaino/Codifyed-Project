<?php include("header_user.php") ?>

<style>

h1{
  position: absolute;
  top: 175px;
  right: 80px;
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

  <h1> Lapara LA-ON-10K-LCD-V.09</h1>

  <img id="foto" src="lapra.jpg"/>
  <img id="estrela1" src="estrella.png"/>
  <img id="estrela2" src="estrella.png"/>
  <img id="estrela3" src="estrella.png"/>
  <img id="estrela4" src="estrella.png"/>
  <div id="descripcio">

<p>Les sèries Lapara Online ofereixen capacitats de 1000 VA a 10000 VA (1 - 10 KVA) depenent del model, és suficient capacitat per superar les petites fallades d'energia o mantenir l'empresa funcionant durant les fallades de subministrament més prolongades, fins que recuperi la seva subministrament denergia.</p>

<p>✔ Potència entrada: 160VAC / 140VAC / 120VAC / 110VAC</p>
<p>✔ Capacitat de la batería: 12V/9Ah</p>
<p>✔ Temps de recàrrega al 90%: 4 hores</p>
<p>✔ Dimensions mm: 592 x 250 x 576 mm</p> </div>

<div id="preu">

<h8 id="pre"><b>1940€</b></h8>

</div>

<button id="carrito"><b>Afegir a la cistella</b></button>

<div id="espai"></div>


</body>

<?php include("footer.php") ?>
