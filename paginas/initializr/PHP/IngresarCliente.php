<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="../apple-touch-icon.png">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script>
            $(function () {
                $("#datepicker").datepicker({
                    dateFormat: 'yy-mm-dd',
                    changeMonth: true,
                    changeYear: true
                });
            });
        </script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.html">Inicio</a>
                    <a class="navbar-brand" href="IngresarCliente.php">Ingresar Cliente</a>
                    <a class="navbar-brand" href="IngresarJuego.php">Ingresar Juego</a>
                    <a class="navbar-brand" href="IngresarArriendo.php">Arrendar Juego</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form">
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
        <div class="container-fluid jumbotron" style="margin-top: 60px; height: auto; width : 60%; border-radius: 30px;">
            <form class="form-horizontal" method="POST" action="../../../Archivos PHP/ingresarCliente.php">
                <div class="form-group">
                    <label for="inputNombre" class="control-label col-xs-2">Nombre</label>
                    <div class="col-xs-3">
                        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="txbNombre">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputRut" class="control-label col-xs-2">Rut</label>
                    <div class="col-xs-3">
                        <input type="text" class="form-control" id="inputRut" placeholder="Rut" name="txnRut">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputNacimiento" class="control-label col-xs-2">Fecha de nacimiento</label>
                    <div class="col-xs-3">
                        <input type="text" name="txbFecha"  class="form-control" id="datepicker" placeholder="Fecha"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-3">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
