<!DOCTYPE html>
<html lang="ca" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JQSample01</title>
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="jquery-ui.min.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){

        $(".menu-btn").click(function(){
          $(".menu-btn").toggleClass("bgmenu");
          $(".content-menu").toggleClass("show-content");
          $(".titles").toggleClass("show");
          $(".top-bar").toggleClass("cross-top");
          $(".bottom-bar").toggleClass("cross-bottom");
        });

      });

    </script>
    <style>
      *{margin:0;
      padding:0;}

      .menu-btn{
        display:block;
        position:absolute;
        width:70px;
        height:70px;
        left:25px;
        top:25px;
        background-color:#FED003;
        cursor:pointer;
        transition:all 250ms ease;
      }

      .bgmenu{
        background-color:silver;
      }

      span{
        display:block;
        position:absolute;
        width:50px;
        height:4px;
        background-color:#393939;
        border-radius:4px;
        transition:all 250ms ease;
      }

      .top-bar{
        transform:rotate(0deg);
        left:10px;
        top:40%;}

      .bottom-bar{
        transform:rotate(0deg);
        left:10px;
        top:60%;}

      .cross-top{
        transform:rotate(35deg);
        top:50%;
      }

      .cross-bottom{
        transform:rotate(-35deg);
        top:50%;
      }

      .content-menu{
        display:flex;
        position:absolute;
        width:100%;
        height:100%;
        background-color:green;
        left:-100%;
        transition:all 250ms ease;
        flex-direction:column;
        justify-content:center;
        align-items:center;
      }

      .show-content{
        left:0%;
      }

      .titles{
        font-size:3.5rem;
        font-weight:normal;
        font-family:sans-serif;
        color:#fed003;
        padding:15px 0 0 0;
        cursor:pointer;
        filter:opacity(0);
        -moz-filter:opacity(0);
        -webkit-filter:opacity(0);
        transition:all 500ms ease;
        transition-delay:500ms;
      }

      .show{
        filter:opacity(1);
        -moz-filter:opacity(1);
        -webkit-filter:opacity(1);
      }

    </style>
  </head>
  <body>
    <div class="content-menu">
      <h1 class="titles">Home</h1>
      <h1 class="titles">Portfolio</h1>
      <h1 class="titles">Contact</h1>
    </div>
    <div class="menu-btn">
      <span class="top-bar"></span>
      <span class="bottom-bar"></span>
    </div>
  </body>
</html>
