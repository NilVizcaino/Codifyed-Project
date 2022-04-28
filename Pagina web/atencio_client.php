<?php include("header.php") ?>

<style>

#titol_atencio{
  position: absolute;
  top: 170px;
  left: 75px;
}

section{
  display:grid;
  position:relative;
  width:480px;
  height:350px;
  transform:translate(10%, -33%);
  margin-top:40vh;
  margin-left:50vw;
  grid-template-rows: 1fr 1fr;
}

article{
  display:flex;
  position:relative;
  background-color:var(--blau_cel);
  font-size: 1.5rem;
  justify-content:center;
  align-items:center;
}

#chat{
  position: absolute;
  top: 300px;
  left: 75px;
}

body {
    font:12px arial;
    color: #222;
    text-align:center;
   }

form, p, span {
    margin:0;
    padding:0; }

input { font:12px arial; }

a {
    color:#0000FF;
    text-decoration:none; }

    a:hover { text-decoration:underline; }

#wrapper, #loginform {
    margin:0 auto;
    padding-bottom:25px;
    background:#EBF4FB;
    width:504px;
    border:1px solid #ACD8F0; }

#loginform { padding-top:18px; }

    #loginform p { margin: 5px; }

#chatbox {
    text-align:left;
    margin:0 auto;
    margin-bottom:25px;
    padding:10px;
    background:#fff;
    height:270px;
    width:430px;
    border:1px solid #ACD8F0;
    overflow:auto; }

#usermsg {
    width:395px;
    border:1px solid #ACD8F0; }

#submit { width: 60px; }

.error { color: #ff0000; }

#menu { padding:12.5px 25px 12.5px 25px; }

.welcome { float:left; }

.logout { float:right; }

.msgln { margin:0 0 2px 0; }

</style>


<body>

<div id="titol_atencio"><h6>Atenció al client</h6></div>

<section>
  <article>Contacta amb nosaltres telefon: 927 396 223</article>
  <article>Contacta amb nosaltres correu: CStaffSuport@service.com</article>
</section>

<div id="chat">
<div id="wrapper">
<div id="menu">
    <p class="welcome">Chat en directe <b></b></p>
    <p class="logout"><a id="exit" href="#">Surt del chat</a></p>
    <div style="clear:both"></div>
</div>

<div id="chatbox"></div>

<form name="message" action="">
    <input name="usermsg" type="text" id="usermsg" size="63" />
    <input name="submitmsg" type="submit"  id="submitmsg" value="Envia" />
</form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){

});
</script>
</div>


</body>

<?php include("footer.php") ?>
