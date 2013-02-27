
<div class="navbar navbar-fixed-top">
 
  <div class="navbar-inner">
    
  <!--  <a class="brand" href="#">NoSugarERP</a>-->

    <ul class="nav">
  		<li class="active"><a href="index.php">Home</a></li>
	</ul>
    

<ul class="nav">

  <li class="dropdown">
   
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Inter Comerciales <b class="caret"></b></a>
    
    <ul class="dropdown-menu">
      	<li><a href="proveedores.php" >Proveedores</a></li>
    	<li class="divider"></li>
        <li><a href="clientes">Clientes</a></li>
    </ul>

  </li>

</ul>


<ul class="nav">

  <li class="dropdown">
   
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Productos <b class="caret"></b></a>
    
    <ul class="dropdown-menu">
      	<li><a href="development.php" >Articulo</a></li>
    	<li class="divider"></li>
        <li><a href="#">Categoria</a></li>
    </ul>

  </li>

</ul>


<ul class="nav">

  <li class="dropdown">
   
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Ventas Cliente <b class="caret"></b></a>
    
    <ul class="dropdown-menu">
      	<li><a href="development.php" >Ventas Mostrador</a></li>
    	<li class="divider"></li>
        <li><a href="#">Facturas</a></li>
        <li class="divider"></li>
        <li><a href="#">Remisiones</a></li>
    </ul>

  </li>

</ul>


<ul class="nav">

  <li class="dropdown">
   
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Compras <b class="caret"></b></a>
    
    <ul class="dropdown-menu">
      	<li><a href="development.php" >Factura</a></li>
    	<li class="divider"></li>
        <li><a href="#">Remisiones</a></li>
        <li class="divider"></li>
        <li><a href="#">Remisiones</a></li>
    </ul>

  </li>

</ul>


<ul class="nav">

  <li class="dropdown">
   
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Contabilidad <b class="caret"></b></a>
    
    <ul class="dropdown-menu">
      	<li><a href="development.php" >Ventas Mostrador</a></li>
    	<li class="divider"></li>
        <li><a href="#">Facturas</a></li>
        <li class="divider"></li>
        <li><a href="#">Remisiones</a></li>
    </ul>

  </li>

</ul>


<ul class="nav">

  <li class="dropdown">
   
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Mantenimieto <b class="caret"></b></a>
    
    <ul class="dropdown-menu">
      	<li><a href="development.php" >Ventas Mostrador</a></li>
    	<li class="divider"></li>
        <li><a href="#">Facturas</a></li>
        <li class="divider"></li>
        <li><a href="#">Remisiones</a></li>
    </ul>

  </li>

</ul>



	</li>	
</ul>

   <ul class="nav pull-right">
      <li>
        <a id='a-loginOff' style='cursor: pointer;' ><?php echo $_SESSION['userLogin']; ?> <i class="icon-user icon-white"></i> Login off</a>
     </ul>  

       <ul class="nav pull-right">
      <li class="divider-vertical"></li>
  </ul>

  <!--<form class="navbar-search pull-right">
        <input type="text" id='search' class="search-query" placeholder="Search">
  </form>-->
  
  <ul class="nav pull-right">
      <li class="divider-vertical"></li>
  </ul>


  </div>

</div>

<div id='contentMenu' class='span11'>
  <div id='submenu' class='span10'>
   <div id='img-top-submenu'><img src="img/user_manage.png" >Usuarios</div> 
    <ul id='ul-submenu'>
      <li id='agregar' ><img src="img/icon-menus/user_add.png" >Agregar</li>
      <li id='eliminar'><img src="img/icon-menus/user_delete.png" >Eliminar</li>
      <li id='editar'><img src="img/icon-menus/user_warning.png" >Editar</li>
      <li id='ayuda'><img src="img/icon-menus/message.png" >Ayuda</li>
    </ul>
  </div>
  <button id='btn-hide' class="btn">Menu <i class="icon-circle-arrow-up"></i></button>
</div>



<!--  <div class="modal hide" id="myModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>Thank's To...</h3>
  </div>
  <div class="modal-body">
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
  </div>
</div>-->