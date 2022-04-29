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

  <h1> SOMFY ONE PRO</h1>

  <img id="foto" src="SomfyOnePro.png"/>
  <img id="estrela1" src="estrella.png"/>
  <img id="estrela2" src="estrella.png"/>
  <img id="estrela3" src="estrella.png"/>
  <img id="estrela4" src="estrella.png"/>
  <img id="estrela5" src="estrella.png"/>

  <div id="descripcio">

<p>El Pack Somfy One Pro és el sistema d'alarma connectada ideal per a llars urbanes. Aquest sistema d'alarma també et protegeix davant d'amenaces internes com a incendis gràcies als seus 2 detectors de fum Somfy protect inclosos que es comuniquen entre si i t'alerten de qualsevol possible incident incendiari</p>

<p>✔ Camera HD amb sensor de movimient</p>
<p>✔ Sirena de 90 dB</p>
<p>✔ 2 Detectors de fum</p> </div>

<div id="preu">

<h8 id="pre"><b>520€</b></h8>

</div>

<button id="carrito"><b>Afegir a la cistella</b></button>

<div id="espai"></div>


</body>

<?php include("footer.php") ?>
