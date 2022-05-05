<?php include("header_user.php") ?>

<style>

  #perfil_nom{
    position: absolute;
    top: 145px;
    left: 180px;
    height: 75px;
    width:75px;
    font-size:3rem;
  }

  h1{
    position: absolute;
    top: 115px;
    left: 275px;
    font-size:3rem;
  }

  #espai{
    height: 550px;
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

      #contrasenya{
          position: absolute;
          top: 460px;
          left:185px;
          width: 650px;
          height: 30px;
          font-size: 2rem;
          font-family: "Josefin Sans", sans-serif;
       }

       #editar_contrasenya{
           position: absolute;
           top: 460px;
           left:390px;
           width: 190px;
           height: 30px;
           border-style: solid;
           border-radius: 5px;
           padding-left: 15px;
           font-size: 2rem;
           font-family: "Josefin Sans", sans-serif;
        }

        #editar3{
          display: block;
          position: absolute;
          top: 462px;
          left:560px;
          width: 30px;
          height: 30px;
        }

        #punts{
          display: block;
          position: absolute;
          top: 462px;
          left:410px;
          width: 30px;
          height: 30px;
        }

        #punts1{
          display: block;
          position: absolute;
          top: 462px;
          left:445px;
          width: 30px;
          height: 30px;
        }

        #punts2{
          display: block;
          position: absolute;
          top: 462px;
          left:480px;
          width: 30px;
          height: 30px;
        }

        #guardar{
          position: absolute;
          background-color:var(--verd);
          top:560px;
          left:185px;
          height: 32px;
          width:130px;
          font-size:1.25rem;
          font-weight:700;
          color:white;
          line-height:2rem;
          outline: none;
        }

        #cancelar{
          position: absolute;
          background-color:var(--verd);
          top:560px;
          left:335px;
          height: 32px;
          width:130px;
          font-size:1.25rem;
          font-weight:700;
          color:white;
          line-height:2rem;
          outline: none;
        }


</style>


<body>

  <h1>Salle1</h1>

  <img id="perfil_nom" src="profile.svg"/>

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

  <div id="contrasenya">
    <p> Contrasenya:</p>
  </div>

  <div id="editar_contrasenya">
  </div>
  <img id="editar3" src="edit.png"/>
  <img id="punts" src="punts.png"/>
  <img id="punts1" src="punts.png"/>
  <img id="punts2" src="punts.png"/>

  <button id="guardar">Guardar</button>
  <button id="cancelar">Cancelar</button>

  <div id="espai">
  </div>

</body>
<?php include("footer.php") ?>
