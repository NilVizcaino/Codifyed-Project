<?php include("header_user.php") ?>
<style>

h1{
  position: absolute;
  top: 175px;
  right: 530px;
  font-size:3rem;
}

#foto{
  position: absolute;
  width: 430px;
  height:500px;
  top: 200px;
  left: 105px;
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
  top: 710px;
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
  top: 770px;
  left:140px;
  width: 300px;
  height: 50px;
}

#espai{
  height: 750px;
}

</style>



<body>

  <h1>CODEX</h1>

  <img id="foto" src="codex.png"/>
  <img id="estrela1" src="estrella.png"/>
  <img id="estrela2" src="estrella.png"/>
  <img id="estrela3" src="estrella.png"/>
  <div id="descripcio">



<p>- Actualització automática de base de dades.</p>
<p>- Escanejat de virus en temps real.</p>
<p>- Bloqueig automatic de llocs sospitosos.</p>
<p>- Eines d’asistencia remota.</p>
<p>- Métodos de recuperació de dades.</p>
<p>- Antiphishing i antifraud.</p>
</div>

<div id="preu">

<h8 id="pre"><b>15€ al mes</b></h8>

</div>

<button id="carrito"><b>Afegir a la cistella</b></button>

<div id="espai"></div>


</body>
<?php include("footer.php") ?>
