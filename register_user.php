<?php include 'header.php'; ?>
<?php include 'header_nav.php'; ?>

  <div id='form-Contenido'>
  
</div>

 <div class='row span10 displaynone' id='warp-login' >

  <form class="form-horizontal windowsLogin" name='formRegister' id='formRegister' method = 'POST'>

    <div id='div-left'>
        <span>Nombre *</span> <input type="text" id='name' name='name'  placeholder="Name">
        <span>Correo Electronico *</span> <input type="text" id='email' name='email'  placeholder="Email">
        <span>Nombre de Usuario *</span> <input type="text" id='username' name='username'  placeholder="User Name">
    </div>

  
    <div id='div-right'>
        <span>Contraseña * </span> <input type="password" id='password' name ='password' placeholder="Password">
        <span>Repitir Contraseña *</span> <input type="password" id='repassword' name ='repassword' placeholder="Re-write Password">
        <span>Roll del Usuario * </span> <select name='role' id='role'><option value=''>Seleccion</option><option value=''>hola</option></select>
    </div>
    
  </form> 
<div id='dialogo'>  </div>
<button type='button' class="btn btn-primary " id='btn-register' style='clear: both;float:right;margin-right:180px;' data-loading-text="Loading...">Register <i class="icon-circle-arrow-right icon-white"></i></button>
</div>




 <div class='row span10' id='warp-table' >
   <!--  <table>
  <thead>
    <tr><td>nombre</td></tr>
  </thead>
  <tbody>
    <tr><td>ricardo</td></tr>
  </tbody>
</table>-->

  </div>

<?php include 'footer.php'; ?>  

