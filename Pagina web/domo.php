<?php include("header_user.php") ?>

<style>

h1{
  position: absolute;
  top: 175px;
  right: 485px;
  font-size:3rem;
}

#foto{
  position: absolute;
  width: 450px;
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

  <h1> DOMO IP</h1>

  <img id="foto" src="domo.png"/>
  <img id="estrela1" src="estrella.png"/>
  <img id="estrela2" src="estrella.png"/>
  <img id="estrela3" src="estrella.png"/>
  <img id="estrela4" src="estrella.png"/>
  <img id="estrela5" src="estrella.png"/>

  <div id="descripcio">

<p>Camara minidomo de tecnologia IP i resolució 4 Megapixels.</p>
<p>Sensor CMOS 1/2.8" d'escanejat progressiu.</p>
<p>Commutació dia/nit mitjançant filtre mecànic.</p>
<p>Sensibilitat de color 0,01 Lux.</p>
<p>LEDS IR abast 30m.</p>
<p>WDR digital, BLC, 3D DNR.</p>
<p>Especificacions de xarxa:</p>
<p>Sortida Ethernet 10/100M</p>
<p>Servidor Web integrat Internet Explorer</p>
<p>Compatible amb ONVIF, CGI, ISAPI.</p>
<p>Fins a 6 usuaris simultanis</p>

</div>

<div id="preu">

<h8 id="pre"><b>160€</b></h8>

</div>

<button id="carrito"><b>Afegir a la cistella</b></button>

<div id="espai"></div>


</body>

<?php include("footer.php") ?>
