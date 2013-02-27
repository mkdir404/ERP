<?php
session_start();

if(isset($_SESSION["autentificado"]) && $_SESSION["autentificado"]=='SI' ){

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minates ago
    session_unset();     // unset $_SESSION variable for the runtime 
    session_destroy();   // destroy session data in storage
?> 

<script type='text/javascript'>alert('Se ha vencido el tiempo de uso de su sesión');</script>   
<script type='text/javascript'> location.href='index.php?sessionEx=1';</script>

<?php
}else{
 $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
}
}else{ ?>

<script type='text/javascript'>location.href='index.php?sessionEx=1';</script>";

<?php } ?>