<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="<?= PROYECTO_RECURSOS_ASSETS_ICONS ?>logoPrincipal.gif"/>
    <script src="<?= PROYECTO_RECURSOS_JSA ?>sweet-alert.min.js"></script>
    <link rel="stylesheet" href="<?= PROYECTO_RECURSOS_CSSA ?>sweet-alert.css">
    <link rel="stylesheet" href="<?= PROYECTO_RECURSOS_CSSA ?>material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= PROYECTO_RECURSOS_CSSA ?>normalize.css">
    <link rel="stylesheet" href="<?= PROYECTO_RECURSOS_CSSA ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?= PROYECTO_RECURSOS_CSSA ?>jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?= PROYECTO_RECURSOS_CSSA ?>styles.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?= PROYECTO_RECURSOS_JSA ?>jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?= PROYECTO_RECURSOS_JSA ?>modernizr.js"></script>
    <script src="<?= PROYECTO_RECURSOS_JSA ?>bootstrap.min.js"></script>
    <script src="<?= PROYECTO_RECURSOS_JSA ?>jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= PROYECTO_RECURSOS_JSA ?>main.js"></script>
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            
            <div class="logo full-reset all-tittles">
                
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;">                   
                </i> 
                 eLibris                                  
            </div>
            <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="<?= PROYECTO_RECURSOS_ASSETS_IMG ?>LogoeLibris.gif" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;"> Gestión Bibliotecaria</p>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="<?= PROYECTO_RECURSOS_ASSETS_IMG ?>usuario.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Usuario</span>
                </li>                                               
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema Biblioteca <small>Recuperación de Cuenta</small></h1>
            </div>
        </div>  
        
                  <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Verificación de Código</div>                
                <form method="POST" action="<?=RECUPERAR_CLAVE['url'] ?>" autocomplete="off" id="frm2"> 
                    <div class="row">
                         <div class="col-xs-offset-2 col-md-8 col-sm-offset-4">
                            <img src="<?= PROYECTO_RECURSOS_ASSETS_ICONS ?>informacion.png" class="material-control tooltips-general" style="width:2.5%;" data-toggle="tooltip" data-placement="top" title="Escriba el código para la recuperacion de cuenta">
                        </div>
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="number" name="codigo" id="codigo" class="material-control tooltips-general" maxlength="100" minlength="5" placeholder="Ingrese el código enviado" required >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label for="codigo">Código de verificación </label>
                            </div>                          
                       </div> 
                        <div class="col-xs-offset-2 col-md-8 col-sm-offset-4">
                            <img src="<?= PROYECTO_RECURSOS_ASSETS_ICONS ?>informacion.png" class="material-control tooltips-general" style="width:2.5%;" data-toggle="tooltip" data-placement="top" title="Escriba la nueva clave">
                        </div>
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="password" name="usu_clave" id="usu_clave" class="material-control tooltips-general" maxlength="20" minlength="5" placeholder="Ingrese la clave nueva" required regexp_password = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label for="usu_clave">Contraseña nueva</label> 
                            </div>
                           </div>
                            <div class="col-xs-offset-2 col-md-8 col-sm-offset-4">
                            <img src="<?= PROYECTO_RECURSOS_ASSETS_ICONS ?>informacion.png" class="material-control tooltips-general" style="width:2.5%;" data-toggle="tooltip" data-placement="top" title="Confirme la clave nueva">
                        </div>
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                           <div class="group-material">
                               <input type="password" id="confclave" name="confclave" class="material-control tooltips-general" maxlength="20" minlength="5" placeholder="Confirmar la clave nueva" required regexp_password = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label for="confclave">Repetir clave</label>
                            </div>
                           </div>   
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" id="btnGuardar" class="btn btn-primary" data-placement="bottom"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Enviar</button>                                                
                            </p> 
                       </div>
                          <!--<script src="<?= PROYECTO_RECURSOS_JSA ?>recuperarcontraseña.js"></script>-->
                   </div>
                </form>
            </div>
        </div>                                                                      
           <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">Función del sistema</h4>
                </div>
                <div class="modal-body">
                    Este sistema te ayudara a realizar los procesos de la Biblioteca con mayor fácilidad. 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                           Este sistema te ayudara a realizar los procesos de la Biblioteca con mayor fácilidad. 
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Leidi Johana Garzon <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2018 Tecnologo en ADSI</div>
        </footer>
    </div>
</body>
</html>
