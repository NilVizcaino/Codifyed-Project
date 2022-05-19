<?php include("header_user.php") ?>

<style>

#targeta{
  position:absolute;
  display: block;
  top: 180px;
  left: 500px;
}

#a{
  height: 600px;
}

#pagar{
  position: absolute;
  background-color:var(--verd);
  top:650px;
  left:540px;
  height:32px;
  width:130px;
  font-size:1.25rem;
  font-weight:700;
  color:white;
  line-height:2rem;
}

</style>

<body>

  <img id="targeta" src="pagar_targeta.png"/>

  <button id="pagar">Pagar</button>

  <div id="a"></div>

</body>


<?php include("footer.php") ?>
