<?php include("header_user.php") ?>

<style>

  #wrapp{
    display:grid;
    position:relative;
    width:70vw;
    height:300px;
    margin:-20px 110px 200px 125px;
    grid-template-columns:1fr 1fr 1fr;
    grid-column-gap:25px;
    transition: all 300ms ease
  }


  #codex:hover{
    width:370px;
    height:470px;
  }

  #codex_premium:hover{
    width:370px;
    height:470px;
  }


  #codex_reforced:hover{
    width:370px;
    height:470px;
  }

  </style>
</head>
<body>
  <div id="wrapp">
    <section><a href="codex.php"><img id="codex" src="codex.png"/></a></section>
    <section><a href="codex_premium.php"><img id="codex_premium" src="codex_premium.png"/></a></section>
    <section><a href="codex_reforced.php"><img id="codex_reforced" src="codex_reforced.png"/></a></section>
  </div>
</body>
</html>

<?php include("footer.php") ?>
