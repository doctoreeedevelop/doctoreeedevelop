<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo media(); ?>/images/favicon.ico">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>/admin/vali-admin-master/docs/css/mainadmin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>/admin/vali-admin-master/docs/css/styleadmin.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $data['page_tag']; ?></title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Admin Doctoreee Develop</h1>
      </div>
      <div class="login-box">

        
        <form id="formLogin" name="formLogin" class="login-form" action="">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INICIAR SESION</h3>
          <div class="form-group">
            <label class="control-label">CORREO</label>
            <input id="txtEmail" name="txtEmail" class="form-control" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">CONTRASEÑA</label>
            <input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <div class="utility">
              <!-- <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div> -->
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Olvidaste la contraseña ?</a></p>
            </div>
          </div>
          <div id="alertLogin" class="text-center"></div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>INICIAR SESION</button>
          </div>

          <div class="container mt-5 text-center">
            <a class="btn btn-primary btn-sm" href="http://localhost/doctoreeedevelop/dashboard">
            <i class="fa fa-reply" aria-hidden="true"></i>Admin</a>
          
         
            <a class="btn btn-primary btn-sm" href="http://localhost/doctoreeedevelop/">
            DoctoreeeDevelop</a>
          </div>
        </form>
        
        
        



        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Olvidaste la contraseña ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input id="txtEmailReset" class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button typt="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>REINICIAR</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> REGRESAR A LOGIN</a></p>
          </div>
        </form>

        
      </div>
    </section>


    <script>
      const base_url = "<?= base_url(); ?>";
    </script>


    <!-- Essential javascripts for application to work-->
    <script src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/popper.min.js"></script>
    <script src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/bootstrap.min.js"></script>
    <script src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/main.js"></script>
    
    
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/plugins/sweetalert.min.js"></script>
    <script src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/<?= $data['page_functions_js'] ?>"></script>


    
  </body>
</html>