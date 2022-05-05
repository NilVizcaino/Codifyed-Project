<?php include("header_user.php") ?>

<style>

  h1{
    position: absolute;
    top: 115px;
    left: 185px;
    font-size:3rem;
  }

  #espai{
    height: 750px;
  }

  #nom{
      position: absolute;
      top: 260px;
      left:185px;
      width: 650px;
      height: 30px;
      font-size: 2rem;
      font-family: "Josefin Sans", sans-serif;
   }

   #editar_nom{
       position: absolute;
       top: 260px;
       left:405px;
       width: 250px;
       height: 30px;
       border-style: solid;
       border-radius: 5px;
       padding-left: 15px;
       font-size: 2rem;
       font-family: "Josefin Sans", sans-serif;
    }

    #editar{
      display: block;
      position: absolute;
      top: 262px;
      left:625px;
      width: 30px;
      height: 30px;
    }

    #correu{
        position: absolute;
        top: 360px;
        left:185px;
        width: 650px;
        height: 30px;
        font-size: 2rem;
        font-family: "Josefin Sans", sans-serif;
     }

     #editar_correu{
         position: absolute;
         top: 360px;
         left:445px;
         width: 290px;
         height: 30px;
         border-style: solid;
         border-radius: 5px;
         padding-left: 15px;
         font-size: 2rem;
         font-family: "Josefin Sans", sans-serif;
      }

      #editar2{
        display: block;
        position: absolute;
        top: 362px;
        left:710px;
        width: 30px;
        height: 30px;
      }


</style>


<body>

  <h1>Salle1</h1>

  <div id="nom">
    <p> Nom d'usuari:</p>
  </div>

  <div id="editar_nom">
    Salle1
  </div>
  <img id="editar" src="edit.png"/>

  <div id="correu">
    <p> Correu electronic:</p>
  </div>

  <div id="editar_correu">
    salle1@gmail.com
  </div>
  <img id="editar2" src="edit.png"/>

  <div id="espai">
  </div>

</body>
<?php include("footer.php") ?>
