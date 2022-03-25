<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    div#wrapp{
      display:grid;
      position:relative;
      width:70vw;
      height:300px;
      margin:-70px auto 200px auto;
      grid-template-columns:1fr 1fr 1fr;
      grid-column-gap:10px;
    }

    section{
      display:flex;
      position:relative;
      justify-content:center;
      align-items:center;
    }

    #productes{
      width:450px;
      height:450px;
      cursor:pointer;
      transition: all 300ms ease;
    }

    #productes:hover{
      width:475px;
      height:475px;
    }

    </style>
  </head>
  <body>
    <div id="wrapp">
      <section>Box 1</section>
      <section><img id="productes" src="productes.png"/>
</section>
      <section>Box 3</section>
    </div>
  </body>
</html>
