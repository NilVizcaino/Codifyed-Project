<style>

  #relleno{
    position: fixed;
    display: block;
    height: 100%;
    width: 100%;
    background-color: white;
    opacity: 0;
    z-index: 10;
    top: -150vh;
    animation:fade 4s ease-in-out;
  }

   @keyframes fade{
     0%{opacity: 1;
        height: 100%;
        width: 100%;
        top:0vh;}

     50%{opacity: 1;
         height: 150%;
         width: 150%;}

     99%{opacity: 0;
         top:0vh;}

     100%{top:-150vh;}}

  #logo_box{
    display:block;
    position:fixed;
    width:560px;
    height:400px;
    background-color: transparent;
    border-radius:100px;
    transform:translate(-50%, -50%);
    left:50vw;
    top:-50vh;
    opacity: 0;
    transition: all 400ms ease;
    z-index: 11;
    animation:fade2 3s ease-in-out;
  }

  @keyframes fade2{
   0%{opacity: 0;
      top:30vh;}

  50%{opacity: 1;}

   99%{opacity: 0;
        top:50vh;}}

  100%{top:-50vh;}}

  .logo-empresa{
    position: fixed;
    transform:translate(5%, 5%);
    left:0vw;
    top:0vh;
    transition:all 1s ease;
    opacity: 1;
  }

</style>

<body>
  <div id="relleno"></div>
  <div id="logo_box">
    <img class="logo-empresa" src="logo-empresa-petit.svg" />
  </div>
</body>

<?php include("header.php") ?>
<section>
  <article>
    <?php include("body.php") ?>
  </article>
</section>
<?php include("footer.php") ?>
