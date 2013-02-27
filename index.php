<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>NoSugarERP</title>

    <!--JQuery Started -->
  
   <script type="text/javascript" src="js/jquery-1.7.1.js"></script>

    <!--Own Script -->
   
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <script type="text/javascript" src="js/main.js"></script>

   <!--Boostrap Started -->
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <script type="text/javascript" src="js/bootstrap.js"></script> 

    <!--Jquery UI -->

  <link type="text/css" href="css/custom-theme/jquery-ui-1.8.23.custom.css" rel="Stylesheet" /> 
  <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script> 
    
</head>
  
  <body>

    <?php include 'cookieslogin.php' ?>

        <div class='container'>

          <img src="img/logo_nonsugar.png" style='margin-top:40px;  margin-bottom:-90px; margin-left:20%;'>

            <div class='row span6 offset3' id='warp-login' >

        <form class="form-horizontal windowsLogin " id='formLogin' method = 'POST'>

            <img src="img/security_keyandlock.png">
            
              <div class="control-group">
                <div class="controls">
                  <input type="text" name='username' id='username' placeholder="User Name" value="<?= $variablePrueba ?>">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="password" name ='password' id='password' placeholder="Password" value="<?= $variableSesion?>">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <label class="checkbox">
                    <input  type="checkbox" name='RememberMe' id='RememberMe' <?php echo $checked ?>   value='1' > Remember me
                  </label>
                  <label id='lb-lostPassword'>Lost Password</label>
                  <button type='button' class="btn btn-primary" id='btn-login' data-loading-text="Loading...">Logear <i class="icon-circle-arrow-right icon-white"></i></button>
                </div>
              </div>
    </form> 
          <input type="hidden" id='sessionEx' value='<?=$sessionEx;?>'>
    <div id='alert'></div>

        </div>  

            </div><!--end container-->

    <?php include 'footer.php'; ?> 

 