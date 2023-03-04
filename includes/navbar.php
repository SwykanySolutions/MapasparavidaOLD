<ul id="slide-out" class="sidenav">

<li><div class="user-view" style="margin-bottom: -23px;">

  <div class="background">

    <img src="./imgs/Background.jpg">

  </div>

  <a href="#user"><img class="circle white" src=".<?php echo$_SESSION['imgperfil'];?>"></a>

  <a href="#name"><span class="white-text name"><?php echo $_SESSION['user']; ?></span></a>

  <a href="#email"><span class="white-text email"><?php echo $_SESSION['email'];?></span></a>

</div></li>
<li><div class="divider"></div></li>

<li><a class="subheader" style="margin-bottom: -10px;">Menu Principal</a></li>

<li class="" id="index"><a class="waves-effect" href="./inicio.php"><i class="purple-text material-icons">home</i>Home</a></li>

<li class="" id="crt"><a class=" waves-effect" href="./cd_frs.php"><i class="purple-text material-icons">create</i>Cadastrar Frases</a></li>

<?php if ($_SESSION['nivel'] == 3) {?>

<li class="" id="edit"><a class="waves-effect" href="./edtr_frs.php"><i class="purple-text material-icons">border_color</i>Editar Frases</a></li>

<li class="" id="prod"><a class="waves-effect" href="./prod.php"><i class="purple-text material-icons">apps</i>Numerologias</a></li>

<li class="" id="edt_pub"><a class="waves-effect" href="./editar_pub.php"><i class="purple-text material-icons">playlist_add</i>Editar Público</a></li>

<li class="" id="lst_pub"><a class="waves-effect" href="./listar_pub.php"><i class="purple-text material-icons">list
</i>Listar Público</a></li>

<li class="" id="cr_base"><a class=" waves-effect" href="./cr_base.php"><i class="purple-text material-icons">create</i>Cadastrar Base</a></li>

<li class="" id="edt_bs"><a class="waves-effect" href="./editar_base.php"><i class="purple-text material-icons">playlist_add
</i>Editar Base</a></li>
<li class="" id="cr_edt_txt_email"><a class="waves-effect" href="./txt_email.php"><i class="purple-text material-icons">email
</i>Editar/Criar Textos email</a></li>
<li class="" id="cr_edt_txt_mapa"><a class="waves-effect" href="./cr_txtmapa.php"><i class="purple-text material-icons">map
</i>Editar/Criar Textos Mapa</a></li>
<?php } ?>
<li><div class="divider"></div></li>

<li><a class="subheader" style="margin-bottom: -10px;">Menu secundário</a></li>




<!-- <li class="" id="perf"><a class="waves-effect" href="./perfil.php"><i class="purple-text material-icons">account_circle</i>Perfil</a></li> -->



<li class="" id="exit"><a class="waves-effect" href="./exit.php"><i class="purple-text material-icons">exit_to_app</i>sair</a></li>

<li><div class="divider"></div></li>
</ul>

<nav class="purple">

<div class="btn-mn">

<button title="Menu" data-target="slide-out" class=" bd-none purple sidenav-trigger">

<a href=""><img src="./imgs/menu_icone.png" width="35" height="35"></a> 

</button>

</div>

</nav>