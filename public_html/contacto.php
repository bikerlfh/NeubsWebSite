<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Neubs</title>
        <meta charset="UTF-8"> <!--Tipo de caracteres-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="img/icon/iconoNeubs.ico" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/toastr.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/toastr.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/cargaAnimacion.js"></script>
        <script type="text/javascript" src="js/script.js" ></script>
        <script type="text/javascript">
            $(document).ready(function()
            {
                if($.get("msg") != null)
                {
                    showMessageSuccess("Neubs",$.get("msg"));
                }
            });
        </script>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>  
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img class="logo" alt="Brand" src="img/icon/logoNeubs.png" >
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li onclick="$(location).attr('href', 'index.html');"><a href="#">Inicio</a></li>
                         <li onclick="$(location).attr('href', 'nosotros.html');"><a href="#">Nosotros</a></li>
                        <li onclick="$(location).attr('href', 'servicios.html');"><a href="#">Servicios</a></li>
                        <li onclick="$(location).attr('href', 'contacto.php');"><a href="#">Contáctenos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotronContacto jumbotron-fluid">
            <div class="container">
                <h1 class="display-3 text-center">CONTÁCTANOS</h1> 
                <p class="lead"></p>    
            </div>
        </div>
        <div class="container-principal">
            <div class="row  bg-grey">
                <div class="container-fluid">
                    <hr>
                    <div class='bg-grey-solid'>
                        <p class="titulo-secundario">Puede enviar un mensaje usando el siguiente formulario de contacto</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 containerpanel">
                        <img src="img/imgContactenos.png " class=" img-responsive center-block anim-rotate-360">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                        <form class="formulario anim-right-to-left" method="POST" action="./controller/enviarContacto.php">
                            <div class="form-group center-block">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label for="nombre" class="texto-principal">Su Nombre: *</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" class="form-control" id="nombre" name="nombre" required="required">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label for="email" class="texto-principal">Correo electrónico: *</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="email" class="form-control" id="email" name="email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label for="asunto" class="texto-principal">Asunto: *</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" class="form-control" id="asunto" name="asunto" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label for="descripcion" class="texto-principal">Mensaje: *</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <textarea class="form-control" id="descripcion" name="descripcion" required="required"  rows="8" ></textarea>
                                </div>
                            </div>
                            <div class=" form-group col-xs-12 col-sm-12 col-md-12">
                                <br>
                                <button type="submit" class="btn btn-success pull-right">Enviar</button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
        <footer> 
            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                        <p class="text-center"><b>Contáctenos </b></p>
                        <span class="glyphicon-envelope "> contacto@neubs.com.co</span><br>
                        <span class="glyphicon-phone "> (+57) 3222709439 - (+57) 3222331893</span>
                    </div>
                    <div align="center"  class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <br>
                        <p class="text-center"><b>Síguenos</b></p>
                        <table class="table table-icon-social ">
                            <tr>
                                <td><a href="https://www.facebook.com/NeubsOficial" target="_blank"><img class="icono-social anim-botton-to-top" src="img/icon/iconoFacebook.png"></a>Facebook</td>
                                <td><a href="https://twitter.com/NeubsOficial" target="_blank"><img class="icono-social anim-botton-to-top" src="img/icon/iconoTwiter.png"></a>Twiter</td>
                            </tr> 
                         </table>                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1">
          
                    </div>
                    <div class=" col-lg-10 col-md-10">
                        <p style="font-size: 10px">© 2016 Neubs S.A.S. Todos los Derechos Reservados</p>
                    </div>
                    <div class="to-top col-lg-1 col-md-1 ">
                        <a href="#myPage" title="To Top" class="ico-to-top">
                            <span class="glyphicon glyphicon-chevron-up" ></span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>

