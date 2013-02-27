<?php 


/******************************************************************************/       
 /* ez sql includes*/
 /******************************************************************************/     

    // Include ezSQL core
       include_once "clases/ez_sql_core.php";
 
   // Include ezSQL database specific component (in this case mySQL)
       include_once "clases/ez_sql_mysql.php";
 
   // Initialise database object and establish a connection
  // at the same time - db_user / db_password / db_name / db_host
       
        $db = new ezSQL_mysql('root','','nosugar','localhost');


/******************************************************************************/       
 /* CookieLogin*/
 /******************************************************************************/  


//primero tengo que ver si el usuario está memorizado en una cookie
if (isset($_COOKIE["user_login"]) && isset($_COOKIE["marca_aleatoria_usuario_dw"])){
   //Tengo cookies memorizadas
   //además voy a comprobar que esas variables no estén vacías
   if ($_COOKIE["user_login"]!="" || $_COOKIE["marca_aleatoria_usuario_dw"]!=""){
      //Voy a ver si corresponden con algún usuario
     $sqlCookie = "SELECT * FROM nosugar_users WHERE user_login='" . $_COOKIE["user_login"] . "' AND cookie_id='" . $_COOKIE["marca_aleatoria_usuario_dw"] . "' and cookie_id<>''";
     $users = $db->get_row($sqlCookie);
      if ($users){
      	$variablePrueba=$users->user_login;
      	$variableSesion=$_COOKIE["user_pass"];
      	$checked = 'checked';
        /* echo "<script type='text/javascript'>
         	$(document).ready(function(){ 
         		$('#username').val('" .$users->user_login. "'); $('#password').val('" . $_COOKIE["user_pass"]. "'); 
         		$('#RememberMe').attr('checked','checked');
         	});
		</script>";*/
      }
   }
}

 ?>

 


