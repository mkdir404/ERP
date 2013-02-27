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
 /* function*/
 /******************************************************************************/  

  

function pass_encypt($pass){

	$passencriptado = md5($pass);
	$passencriptado2 = crc32($passencriptado);
	$passencriptado3 = crypt($passencriptado2,'xtemp');

	return $passencriptado3;
}

function lowTrim($string){

	$string = strtolower($string);
	$string = trim($string );
	$string = str_replace(' ', '', $string);

	return $string;
}  

/******************************************************************************/       
 /* Start Code*/
 /******************************************************************************/  

$option = $_POST['option'];

switch ($option) {

	case '1':

	$query = "SELECT user_login, user_pass FROM nosugar_users where user_login = '".lowTrim($username)."' and user_pass = '".pass_encypt($password)."' ";
	$users = $db->get_row($query);

	if($users){

		session_start();
		$_SESSION['userLogin'] = $users->user_login;
		$_SESSION["autentificado"] = 'SI';

	if ($RememberMe =="1"){
      //es que pidió memorizar el usuario
      //1) creo una marca aleatoria en el registro de este usuario
      //alimentamos el generador de aleatorios
        (time());
      //generamos un número aleatorio
       $numero_aleatorio = mt_rand(1000000,999999999);
      //2) meto la marca aleatoria en la tabla de usuario
      $queryCookie = "UPDATE nosugar_users SET cookie_id='$numero_aleatorio' WHERE user_login='$users->user_login'";
      $db->query($queryCookie);
      //3) ahora meto una cookie en el ordenador del usuario con el identificador del usuario y la cookie aleatoria
      setcookie("user_login", $users->user_login , time()+(60*60*24*365));
      setcookie("user_pass", $password , time()+(60*60*24*365));
      setcookie("marca_aleatoria_usuario_dw", $numero_aleatorio, time()+(60*60*24*365));
   
   }else{

      setcookie("user_login");
      setcookie("user_pass");
      setcookie("marca_aleatoria_usuario_dw");

   }
		echo 'true';
	}else{
		echo 'false';
	}
	
	break;


	case '2':	

	$queryRegister = "SELECT user_login FROM nosugar_users where user_login = '".lowTrim($username)."'";
	$usersRegister = $db->get_results($queryRegister);

	if($usersRegister){
		echo 'false';
	
	}else{

	$queryInsert = "INSERT INTO nosugar_users VALUES (NULL,'".lowTrim($username)."','".pass_encypt($password)."','$name','$email',NULL,1,'')";
	$insertUser = $db->query($queryInsert);
	
	}

	break;

	case '3':

		session_start();
		session_destroy();
		echo 'true';

	break;

		/*Grid information*/

	case '4':

	$queryRegister = "SELECT user_login FROM nosugar_users";
	$usersRegister = $db->get_results($queryRegister);

		echo json_encode($usersRegister);	
	
	break;		

	default:
		
	break;
}


 ?>