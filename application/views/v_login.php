<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Koplan - Your way to success</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta http-equiv="refresh"          content="36000">
        <meta name="viewport"               content="width=device-width, initial-scale=1">
        <meta name="keywords"               content="A fast online advisory service for academical and professional targets">
        <meta name="robots"                 content="index,follow">
        <meta name="date"                   content="September 03, 2017">
        <meta name="author"                 content="softhy.pe">
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#FFFFFF">
        <meta name="description"            content="Koplan - Your way to success">
        <link type="image/x-icon"   rel="shortcut icon" href="<?php echo RUTA_IMG?>header/koplan-favicon.ico">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-3.3.6/css/bootstrap.min.css?v=<?php echo time();?>">
		<link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/css/material.min.css?v=<?php echo time();?>">
		<link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owlCarousel/assets/owl.carousel.min.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owlCarousel/assets/owl.theme.default.min.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto_new.css?v=<?php echo time();?>">  
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome/css/font-awesome.min.css?v=<?php echo time();?>">
        <style>
            body{
            	background-color: #BDBDBD;
            }
        </style>  
    </head>
    <body>
        <section id="principal">
            <div class="mdl-card mdl-card-login">
                <div class="mdl-card__title p-b-0">
                    <img alt="" src="<?php echo RUTA_IMG?>header/logo_koplan.png">
                </div>
                <div class="mdl-card__supporting-text">
                    <div class="col-sm-12">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="txtEmail" onkeyup="login()">
                            <label class="mdl-textfield__label" for="txtEmail">Email</label>
                        </div>
                    </div>  
                    <div class="col-sm-12">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="password" id="txtPassword" onkeyup="login()">
                            <label class="mdl-textfield__label" for="txtPassword">Password</label>
                        </div>
                    </div>   
                    <div class="col-sm-12 m-t-20">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-login" onclick="logear()">Ingresar</button>
                    </div> 
                    <div class="col-sm-12 m-t-15">
                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                            <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label">Recordarme</span>
                        </label>
                    </div>
                </div>
                <div class="mdl-card__actions">
                	<div class="col-md-6" style="padding:0">
                		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="color: #fff;background-color: #1C4485;font-weight: bold;font-size: 17px;"><i class="fa fa-facebook" aria-hidden="true"></i>acebook</button>
                	</div>
                	<div class="col-md-6">
            			<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="padding: 0px;font-size: 15px;font-weight: bold;width: 100%;">Linked <i class="fa fa-linkedin" style="color: #1C4485;" aria-hidden="true"></i></button>
        			</div>
                </div>
            </div>
            <p class="text-center">&copy;2017 Koplan - Lima, Per&uacute;. All rights reserved.</p>
        </section>

        <script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-3.1.0.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-1.12.1.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>bootstrap-3.3.6/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>mdl/js/material.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>owlCarousel/owl.carousel.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" async src="<?php echo RUTA_JS?>jslogin.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    </body>
</html>
