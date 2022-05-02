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

  <h1>RGB LINK</h1>

  <img id="foto" src="rgb_link.png"/>
  <img id="estrela1" src="estrella.png"/>
  <img id="estrela2" src="estrella.png"/>
  <img id="estrela3" src="estrella.png"/>
  <img id="estrela4" src="estrella.png"/>
  <img id="estrela5" src="estrella.png"/>

  <div id="descripcio">

    <p>-Òptica fixa 2.8 mm.</p>
<p>- H.265+/H.265/H.264+/H.264</p>
<p>- Sensor CMOS 1/2.8" d'escanejat progressiu</p>
<p>- Commutació dia/nit mitjançant filtre mecànic</p>
<p>- Sensibilitat en color 0,01 Lux</p>
<p>- LEDS IR abast 30m</p>
<p>- Servidor Web integrat Internet Explorer</p>
<p>- Compatible amb ONVIF, CGI, ISAPI</p></div>

<div id="preu">

<h8 id="pre"><b>1500€</b></h8>

</div>

<button id="carrito"><b>Afegir a la cistella</b></button>

<div id="espai"></div>


</body>
<?php include("footer.php") ?>
