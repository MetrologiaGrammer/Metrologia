<!DOCTYPE HTML>
<?php
session_start();
if ($_SESSION["nomina"] == "" && $_SESSION["nomina"] == null) {
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../login/index.html'>";
    session_destroy();
} else {
    session_start();
    }
?>
<html>
<head>
    <title>GramEXPERT</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>

</head>
<body class="is-preload">

<!-- Header -->

<header id="header">

    <div class="inner">

        <center><img id="imagenEquipo" style="width: 80%" alt="" class="aln-center"/></center>

        <!--
        <h1>Nomina</h1>
        <h1><strong>000034234</strong>.</h1>
        <h1>Nombre</h1>
        <h1><strong>Adrian Aragon</strong>.</h1>
        <h1>Area</h1>
        <h1><strong>Metrologia</strong>.</h1>
        -->
    </div>
</header>

<!-- Main -->
<div id="main">

    <!-- One -->
    <section id="one">
        <header class="major">
            <h2 style="text-align: center">Consulta De Equipos</h2>
        </header>


        <div class="row gtr-uniform gtr-50">

            <div class="col-12 col-12-xsmall">
                <label style="text-align: center">Ingrese referencia</label>
                <input type="text" name="emo-id" id="referencia" value="" placeholder="ID"/>
            </div>
            <div class="col-12 col-12-xsmall">
                <center>
                    <BUTTON onclick="Buscarequipo()" class="button primary"> Buscar Equipo</BUTTON>
                </center>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px;">Id Referencia</label>
                <input type="text" name="demo-name" id="codigo" value="" placeholder="ID">
            </div>
            <div id="filaTipo" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px;">Tipo</label>
                <input type="text" name="demo-name" id="tipo" value="" placeholder="TIPO">
            </div>
            <div id="filaSubtipo" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px;">Subtipo</label>
                <input type="text" name="demo-name" id="subtipo" value="" placeholder="SUB TIPO">
            </div>
            <div id="filaProceso" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px;">Proceso</label>
                <input type="text" name="demo-name" id="proceso" value="" placeholder="PROCESO">
            </div>
            <div id="filaLinea" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Linea</label>
                <input type="text" name="demo-name" id="linea" value="" placeholder="LINEA">
            </div>
            <div id="filaOperacion" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Operacion</label>
                <input type="text" name="demo-name" id="Operacion" value="" placeholder="OPERACION">
            </div>

            <div id="filaFechaverificacion" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Fecha de verificación</label>
                <input type="text" name="demo-email" id="fechacalibracion" value="" placeholder="FECHA DE VERIFICACION">
            </div>
            <div id="filaFechavencida" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Prox. fecha de verificación</label>
                <input type="text" name="demo-email" id="fechavencida" value=""
                       placeholder="PROX. FECHA DE VERIFICACION">
            </div>
            <div id="filaFrecuencia" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Frecuencia</label>
                <input type="text" name="demo-email" id="frecuencia" value="" placeholder="FRECUENCIA">
            </div>
            <div id="filaResolucion" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Resolucion</label>
                <input type="text" name="demo-email" id="resolucion" value="" placeholder="RESOLUCION">
            </div>
            <div id="filaRango" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Rango</label>
                <input type="email" name="demo-email" id="rango" value="" placeholder="RANGO">
            </div>
            <div id="filaSerie" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Num.Serie</label>
                <input type="email" name="demo-email" id="numserie" value="" placeholder="NUM. SERIE">
            </div>
            <div id="filaParte" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Num.Parte</label>
                <input type="email" name="demo-email" id="numparte" value="" placeholder="NUM. PARTE">
            </div>
            <div id="fileStatus" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Status</label>
                <input type="email" name="demo-email" id="status" value="" placeholder="STATUS">
            </div>
            <div id="fileObservaciones" class="col-12 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Observaciones</label>
                <input type="email" name="demo-email" id="observaciones" value="" placeholder="OBSERVACIONES">
            </div>
        </div>
        <div class="col-12 col-12-xsmall">
            <label for="referencia" style="text-align: center">Ingrese imagen del equipo</label>
            <input type="file" id="files" name="usuario" accept="image/*" onchange="preview_image()"
                   class="form-control" aria-label="Sizing example input"
                   aria-describedby="inputGroup-sizing-default">
            <br><br>
            <center><img style="display: none;" id="imagenPrevisualizacion" height="250px"></center>
            <img src="" style="display: none;" id="new">
            <img src="" style="display: none;" id="old">
        </div>
        <H2>REFERENCIA DE LA UBICACION EN FOTOS</H2>
        <center><img id="imagenUbicacion" src="images/pic2.jpg" alt="" style="width: 70%"/></center>
        <p></p>
        <div class="col-6 col-12-xsmall">
            <ul class="actions stacked" style="text-align: center">
                <li><a class="button solid" onclick="testActualizacion()">Guardar Cambio</a></li>
            </ul>
        </div>

        <center><img id="carga" src="images/carga.gif" style="display: none;width: 50%;"></center>


    </section>
</div>
</section>


</div>

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <center>
            <ul class="icons">
                <li><a href="https://arketipo.mx/Metrologia/pantallaInicio/index.html" class="icon brands fa-dribbble">
                    INICIO<span class="label">Dribbble</span></a></li>
                <br>
                <li>
                    <EQUIPOS></EQUIPOS>
                    <a href="altaEquipo.php" class="icon brands fa-dribbble"> INGRESAR EQUIPOS<span class="label">Dribbble</span></a>
                </li>
                <br>
                <li>
                    <EQUIPOS></EQUIPOS>
                    <a href="https://arketipo.mx/Metrologia/estudios.html" class="icon brands fa-dribbble"> ESTUDIOS Y
                        CERTIFICADOS<span class="label">Dribbble</span></a></li>
                <br>
            </ul>
        </center>
    </div>
</footer>


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.poptrox.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="lib/main.js"></script>

<script>


    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        var cadena = results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        var arrTerminos = cadena.split(',');
        return arrTerminos[0];
    }


    buscarQR(getParameterByName("ID"));

    function buscarQR(id) {
        $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daoconsulta.php?referencia=' + id, function (data) {

            if (data.data[0].Tipo == "ESCALA") {
                document.getElementById("imagenEquipo").src = "images/ER-001.jpg";
            } else {
                document.getElementById("imagenEquipo").src = "images/" + data.data[0].IdEquipo + ".jpg"
            }

            document.getElementById("codigo").value = data.data[0].IdEquipo;
            document.getElementById("referen").value = data.data[0].IdEquipo;
            document.getElementById("tipo").value = data.data[0].Tipo;
            document.getElementById("subtipo").value = data.data[0].SubTipo;
            document.getElementById("proceso").value = data.data[0].AreaProceso;
            document.getElementById("linea").value = data.data[0].AreaLinea;
            document.getElementById("Operacion").value = data.data[0].AreaOperacion;
            document.getElementById("fechacalibracion").value = data.data[0].FechaInspeccion;
            document.getElementById("fechavencida").value = data.data[0].FechaVencimiento;
            document.getElementById("numserie").value = data.data[0].NumSerie;
            document.getElementById("numparte").value = data.data[0].NumParte;
            document.getElementById("resolucion").value = data.data[0].Resolucion;
            document.getElementById("rango").value = data.data[0].Rango;
            document.getElementById("status").value = data.data[0].Status;
            document.getElementById("frecuencia").value = data.data[0].Frecuencia;
            document.getElementById("observaciones").value = data.data[0].Observaciones;
        });
    }


    function Buscarequipo() {
        var Equipo;
        Equipo = document.getElementById("referencia").value;

        const chars = Equipo.split('-');

        var ref = chars[0];

        if (ref == "MPI" || ref == "MPL") {
            alert("Master");
        } else {
            $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daoconsulta.php?referencia=' + Equipo, function (data) {
                document.getElementById("codigo").value = data.data[0].IdEquipo;


                if (data.data[0].Tipo == "") {
                    document.getElementById("filaTipo").style.display = 'none';
                } else {
                    document.getElementById("tipo").value = data.data[0].Tipo;

                    if (data.data[0].Tipo == "ESCALA") {
                        document.getElementById("imagenEquipo").src = "images/ER-001.jpg";
                    } else {
                        document.getElementById("imagenEquipo").src = "images/" + data.data[0].IdEquipo + ".jpg"
                    }

                }


                if (data.data[0].SubTipo == "") {
                    document.getElementById("filaSerie").style.display = 'none';
                } else {
                    document.getElementById("subtipo").value = data.data[0].SubTipo;
                }


                if (data.data[0].AreaProceso == "") {
                    document.getElementById("filaProceso").style.display = 'none';
                } else {
                    document.getElementById("proceso").value = data.data[0].AreaProceso;
                }


                if (data.data[0].AreaLinea == "") {
                    document.getElementById("filaLinea").style.display = 'none';
                } else {
                    document.getElementById("linea").value = data.data[0].AreaLinea;
                }


                if (data.data[0].AreaOperacion == "") {
                    document.getElementById("filaOperacion").style.display = 'none';
                } else {
                    document.getElementById("Operacion").value = data.data[0].AreaOperacion;
                }

                if (data.data[0].FechaInspeccion == "") {
                    document.getElementById("filaFechaverificacion").style.display = 'none';
                } else {
                    document.getElementById("fechacalibracion").value = data.data[0].FechaInspeccion;
                }


                if (data.data[0].FechaVencimiento == "") {
                    document.getElementById("filaFechavencida").style.display = 'none';
                } else {
                    document.getElementById("fechavencida").value = data.data[0].FechaVencimiento;
                }


                if (data.data[0].NumSerie == "") {
                    document.getElementById("filaSerie").style.display = 'none';
                } else {
                    document.getElementById("numserie").value = data.data[0].NumSerie;
                }

                if (data.data[0].NumParte == "") {
                    document.getElementById("filaParte").style.display = 'none';
                } else {
                    document.getElementById("numparte").value = data.data[0].NumParte;
                }

                if (data.data[0].Resolucion == "") {
                    document.getElementById("filaResolucion").style.display = 'none';
                } else {
                    document.getElementById("resolucion").value = data.data[0].Resolucion;
                }

                if (data.data[0].Rango == "") {
                    document.getElementById("filaRango").style.display = 'none';
                } else {
                    document.getElementById("rango").value = data.data[0].Rango;
                }

                if (data.data[0].Status == "") {
                    document.getElementById("filaStatus").style.display = 'none';
                } else {
                    document.getElementById("status").value = data.data[0].Status;
                }

                if (data.data[0].Observaciones == "") {
                    document.getElementById("filaObservaciones").style.display = 'none';
                } else {
                    document.getElementById("observaciones").value = data.data[0].Observaciones;
                }

                if (data.data[0].Frecuencia == "") {
                    document.getElementById("filaFrecuencia").style.display = 'none';
                } else {
                    document.getElementById("frecuencia").value = data.data[0].Frecuencia;
                }


            });
        }
        consultaFoto(Equipo);


    }

    function consultaFoto(Equipo) {
        $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daoConsultafoto.php?idreferencia=' + Equipo, function (data) {
            document.getElementById("imagenUbicacion").src = "dao/imagenActualizacion/" + data.data[0].IdImagen + ".png";
            document.getElementById("proceso").value = data.data[0].AreaProceso;
            document.getElementById("linea").value = data.data[0].Linea;
            //document.getElementById("operacion").value = data.data[0].Operacion;
        });
    }


    function mandar() {
        window.location = "https://arketipo.mx/Metrologia/inicio/actualizarEquipo.php?ID=" + document.getElementById("codigo").value;
    }

    function Actualizar(foto) {

        var NOMINA;
        var NOMBRE;
        var AREA;
        var REFERENCIA;
        var TIPO;
        var SUBTIPO;
        var PROCESO;
        var LINEA;
        var OPERACION;
        var FECHACALIBRACION;
        var FECHAVENCIDA;
        var RESOLUCION;
        var RANGO;
        var FRECUENCIA;
        var NUMSERIE;
        var NUMPARTE;
        var STATUS;
        var OBSERVACIONES;


        REFERENCIA = document.getElementById("referencia").value;
        TIPO = document.getElementById("tipo").value;
        SUBTIPO = document.getElementById("subtipo").value;
        PROCESO = document.getElementById("proceso").value;
        LINEA = document.getElementById("linea").value;
        OPERACION = document.getElementById("Operacion").value;
        FECHACALIBRACION = document.getElementById("fechacalibracion").value;
        FECHAVENCIDA = document.getElementById("fechavencida").value;
        RESOLUCION = document.getElementById("resolucion").value;
        RANGO = document.getElementById("rango").value;
        FRECUENCIA = document.getElementById("frecuencia").value;
        NUMSERIE = document.getElementById("numserie").value;
        NUMPARTE = document.getElementById("numparte").value;
        STATUS = document.getElementById("status").value;
        OBSERVACIONES = document.getElementById("observaciones").value;


        const data = new FormData();

        data.append('nomina', "");
        data.append('nombre', "");
        data.append('area', "");
        data.append('referencia', REFERENCIA);
        data.append('tipo', TIPO);
        data.append('subtipo', SUBTIPO);
        data.append('proceso', PROCESO);
        data.append('linea', LINEA);
        data.append('operacion', OPERACION);
        data.append('fechacalibracion', FECHACALIBRACION);
        data.append('fechavencida', FECHAVENCIDA);
        data.append('resolucion', RESOLUCION);
        data.append('rango', RANGO);
        data.append('frecuencia', FRECUENCIA);
        data.append('numserie', NUMSERIE);
        data.append('numparte', NUMPARTE);
        data.append('status', STATUS);
        data.append('observaciones', OBSERVACIONES);
        data.append('imagen', foto);


        fetch('dao/daoguardarEquipo.php', {
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    alert("actualizado");
                    //enviarCorreo("","",PROCESO,LINEA,REFERENCIA,OPERACION);
                } else {
                    throw "Error";
                }
            })
            .then(function (texto) {
                console.log(texto);
            })
            .catch(function (err) {
                console.log(err);
            });
    }

    function Reporte() {

        document.getElementById("carga").style.display = "block";
        document.getElementById("contenidoReporte").style.display = "none";

        var nomina;
        var Retiqueta;
        var Requipo;
        var Descripcion;
        var Referencia;

        nomina = document.getElementById("nomina").value;
        Retiqueta = document.getElementById("etiqueta").value;
        Requipo = document.getElementById("equipo").value;
        Descripcion = document.getElementById("descproblema").value;
        Referencia = document.getElementById("referencia").value;


        const data = new FormData();

        data.append('nomina', nomina);
        data.append('Retiqueta', Retiqueta);
        data.append('Requipo', Requipo);
        data.append('Descripcion', Descripcion);
        data.append('Referencia', Referencia);

        fetch('https://arketipo.mx//MailerMetrologia.php', {
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    document.getElementById("carga").style.display = "none";
                    document.getElementById("contenidoReporte").style.display = "block";
                    document.getElementById("nomina").value = "";
                } else {
                    throw "Error";
                }
            })
            .then(function (texto) {
                console.log(texto);
            })
            .catch(function (err) {
                console.log(err);
            });
    }


</script>

</body>
</html>