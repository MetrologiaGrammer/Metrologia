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
            <h2 style="text-align: center">Editar Datos</h2>
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
                <input type="text" name="demo-email" id="fechavencida" value="" placeholder="PROX. FECHA DE VERIFICACION">
            </div>
            <div id="filaFrecuencia" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Frecuencia</label>
                <input type="text" name="demo-email" id="frecuencia" value="" placeholder="FRECUENCIA">
            </div>
            <div id="filaResolucion" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Resolucion</label>
                <input type="text" name="demo-email" id="resolucion" value="" placeholder="RESOLUCION">
            </div>


            <div id="filaNominal" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Especificación</label>
                <input type="text" name="demo-email" id="nominal" value="" placeholder="ESPECIFICACION">
            </div>
            <div id="filaEspMax" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Especificación Máxima</label>
                <input type="text" name="demo-email" id="maxima" value="" placeholder="MAXIMA">
            </div>

            <div id="filaEspMin" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Especificación Minima</label>
                <input type="text" name="demo-email" id="minima" value="" placeholder="MINIMA">
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
            <div id="fileCentrocosto" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Centro de costos</label>
                <input type="email" name="demo-email" id="centrocosto" value="" placeholder="Centro de costos">
            </div>
            <div id="fileCodigocosto" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Código de costos</label>
                <input type="email" name="demo-email" id="codigocosto" value="" placeholder="Codigo de costos">
            </div>

            <div id="filaTarget" class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Numero de Target</label>
                <input type="text" name="demo-email" id="target" value="" placeholder="Num. Target">
            </div>

            <!--
                        <div id="filaCodigocolor" class="col-6 col-12-xsmall">
                            <label style="text-align: center;font-size: 18px">Codigo de color</label>
                            <input type="text" name="demo-email" id="codigoColor" value="" placeholder="Cod. Color">
                        </div>
                        <div id="filaCliente" class="col-6 col-12-xsmall">
                            <label style="text-align: center;font-size: 18px">Cliente</label>
                            <input type="text" name="demo-email" id="cliente" value="" placeholder="Cliente">
                        </div>
                        <div id="filaPlataforma" class="col-6 col-12-xsmall">
                            <label style="text-align: center;font-size: 18px">Plataforma</label>
                            <input type="text" name="demo-email" id="plataforma" value="" placeholder="plataforma">
                        </div>
                        <div id="filaVendedormaster" class="col-6 col-12-xsmall">
                            <label style="text-align: center;font-size: 18px">Vendedor del Master</label>
                            <input type="text" name="demo-email" id="vendedor" value="" placeholder="Vendedor">
                        </div>
                        <div id="filaColormaster" class="col-6 col-12-xsmall">
                            <label style="text-align: center;font-size: 18px">Color del Master</label>
                            <input type="text" name="demo-email" id="color" value="" placeholder="color del master">
                        </div>
                        <div id="filaNumcolor" class="col-6 col-12-xsmall">
                            <label style="text-align: center;font-size: 18px">Numero del Color</label>
                            <input type="text" name="demo-email" id="numColor" value="" placeholder="Numero de color">
                        </div>
            -->
            <div id="fileObservaciones" class="col-12 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Observaciones</label>
                <input type="email" name="demo-email" id="observaciones" value="" placeholder="OBSERVACIONES">
            </div>

            <div id="fileStatuscalibracion" class="col-12 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Estatus de calibracion</label>
                <input type="email" name="demo-email" id="estatuscalibracion" value="" placeholder="ESTATUS">
            </div>
                    </div>
                    <!---->
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
                    <center><img id="imagenUbicacion" src="images/" alt="" style="width: 70%"/></center>

        <div class="col-6 col-12-xsmall">
            <ul class="actions stacked" style="text-align: center">
                <li><a class="button solid" onclick="testActualizacion()">Guardar Cambio</a></li>
                <li><a class="button solid" onclick="eliminarequipo()">Eliminar equipo</a></li>
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
                    <a href="https://arketipo.mx/Metrologia/estudios.html" class="icon brands fa-dribbble"> ESTUDIOS Y CERTIFICADOS<span class="label">Dribbble</span></a></li>
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
    function desocultar() {
        document.getElementById('contenidoReporte').style.display = 'block';
    }

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


        // console.log('https://arketipo.mx/Metrologia/inicio/dao/daoconsulta.php?referencia='+id);
        $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daoconsulta.php?referencia='+id, function (data) {


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
            document.getElementById("subtipo").value = data.data[0].SubTipo;
            document.getElementById("proceso").value = data.data[0].AreaProceso;
            document.getElementById("linea").value = data.data[0].AreaLinea;
            document.getElementById("Operacion").value = data.data[0].AreaOperacion;
            document.getElementById("fechacalibracion").value = data.data[0].FechaInspeccion;
            document.getElementById("fechavencida").value = data.data[0].FechaVencimiento;
            document.getElementById("numserie").value = data.data[0].NumSerie;
            document.getElementById("numparte").value = data.data[0].NumParte;
            document.getElementById("resolucion").value = data.data[0].Resolucion;
            document.getElementById("nominal").value = data.data[0].Nominal;
            document.getElementById("minima").value = data.data[0].EspMin;
            document.getElementById("maxima").value = data.data[0].EspMax;
            document.getElementById("rango").value = data.data[0].Rango;
            document.getElementById("status").value = data.data[0].Status;
            document.getElementById("centrocosto").value = data.data[0].CentroCosto;
            document.getElementById("codigocosto").value = data.data[0].CodigoCosto;
            document.getElementById("observaciones").value = data.data[0].Observaciones;
            document.getElementById("frecuencia").value = data.data[0].Frecuencia;
            document.getElementById("nominal").value = data.data[0].Nominal;
            document.getElementById("target").value = data.data[0].Ntarget;
            document.getElementById("estatuscalibracion").value = data.data[0].EstadoCalibracion;
            <!--
               document.getElementById("codigoColor").value = data.data[0].CodColor;
               document.getElementById("cliente").value = data.data[0].ClienteMaster;
               document.getElementById("plataforma").value = data.data[0].PlataformaMaster;
               document.getElementById("vendedor").value = data.data[0].VendedorMaster;
               document.getElementById("color").value = data.data[0].NombreColorMaster;
               document.getElementById("numColor").value = data.data[0].NumColorMaster;
   -->

        });
        consultaFoto(id);
    }

    var fechaVerificacion,fechaInspeccion;

    function Buscarequipo() {
        var Equipo;
        Equipo = document.getElementById("referencia").value;

        const chars = Equipo.split('-');


     //    console.log('https://arketipo.mx/Metrologia/inicio/dao/daoconsulta.php?referencia=' + Equipo)
            $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daoconsulta.php?referencia=' + Equipo, function (data) {
                document.getElementById("codigo").value = data.data[0].IdEquipo;
                //document.getElementById("referen").value = data.data[0].IdEquipo;


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


                document.getElementById("subtipo").value = data.data[0].SubTipo;
                document.getElementById("proceso").value = data.data[0].AreaProceso;
                document.getElementById("linea").value = data.data[0].AreaLinea;
                document.getElementById("Operacion").value = data.data[0].AreaOperacion;

                document.getElementById("fechacalibracion").value = data.data[0].FechaInspeccion;
                document.getElementById("fechavencida").value = data.data[0].FechaVencimiento;

                fechaVerificacion = data.data[0].FechaInspeccion;
                fechaInspeccion = data.data[0].FechaVencimiento;

                document.getElementById("numserie").value = data.data[0].NumSerie;
                document.getElementById("numparte").value = data.data[0].NumParte;
                document.getElementById("rango").value = data.data[0].Rango;
                document.getElementById("status").value = data.data[0].Status;
                document.getElementById("centrocosto").value = data.data[0].CentroCosto;
                document.getElementById("codigocosto").value = data.data[0].CodigoCosto;
                document.getElementById("observaciones").value = data.data[0].Observaciones;
                document.getElementById("frecuencia").value = data.data[0].Frecuencia;
                document.getElementById("resolucion").value = data.data[0].Resolucion;
                document.getElementById("nominal").value = data.data[0].Nominal;
                document.getElementById("minima").value = data.data[0].EspMin;
                document.getElementById("maxima").value = data.data[0].EspMax;
                document.getElementById("target").value = data.data[0].Ntarget;
                document.getElementById("estatuscalibracion").value = data.data[0].EstadoCalibracion;



                  <!--
                     document.getElementById("codigoColor").value = data.data[0].CodColor;
                     document.getElementById("cliente").value = data.data[0].ClienteMaster;
                     document.getElementById("plataforma").value = data.data[0].PlataformaMaster;
                     document.getElementById("vendedor").value = data.data[0].VendedorMaster;
                     document.getElementById("color").value = data.data[0].NombreColorMaster;
                     document.getElementById("numColor").value = data.data[0].NumColorMaster;
         -->







            });

        consultaFoto(Equipo);

    }

    function consultaFoto(Equipo) {
        console.log('https://arketipo.mx/Metrologia/inicio/dao/daoConsultafoto.php?idreferencia='+Equipo);
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

    function guardarBitacora(fechaV,fechaI,referencia) {

        const data = new FormData();

        data.append('idEquipo', referencia);
        data.append('fechaVerificacion', fechaV);
        data.append('fechaInspeccion', fechaI);

        fetch('dao/daoGuardarBitacora.php', {
            method: 'POST',
            body: data
        }).then(function (response) {
                if (response.ok) {
                    alert("Se actualizo bitacora.");
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
        var NOMINAL;
        var MAXIMA;
        var MINIMA;
        var RANGO;
        var FRECUENCIA;
        var NUMSERIE;
        var NUMPARTE;
        var TARGET;
    /*
        var COLOR;
        var CLIENTE;
        var PLATAFORMA;
        var VENDEDOR;
        var COLORM;
        var NUMCOLOR;*/
        var STATUS;
        var OBSERVACIONES;
        var ESTADOCALIBRACION;



        REFERENCIA = document.getElementById("codigo").value;
        TIPO = document.getElementById("tipo").value;
        SUBTIPO = document.getElementById("subtipo").value;
        PROCESO = document.getElementById("proceso").value;
        LINEA = document.getElementById("linea").value;
        OPERACION = document.getElementById("Operacion").value;
        FECHACALIBRACION = document.getElementById("fechacalibracion").value;
        FECHAVENCIDA = document.getElementById("fechavencida").value;
        NOMINAL = document.getElementById("nominal").value;
        MAXIMA = document.getElementById("maxima").value;
        MINIMA = document.getElementById("minima").value;
        RESOLUCION = document.getElementById("resolucion").value;
        RANGO = document.getElementById("rango").value;
        FRECUENCIA = document.getElementById("frecuencia").value;
        NUMSERIE = document.getElementById("numserie").value;
        NUMPARTE = document.getElementById("numparte").value;
        TARGET = document.getElementById("target").value;
       /*
        COLOR = document.getElementById("color").value;
        CLIENTE = document.getElementById("cliente").value;
        PLATAFORMA= document.getElementById("plataforma").value;
        VENDEDOR= document.getElementById("vendedor").value;
        COLORM= document.getElementById("colormaster").value;
        NUMCOLOR= document.getElementById("numColor").value;*/
        STATUS = document.getElementById("status").value;
        OBSERVACIONES = document.getElementById("observaciones").value;
        ESTADOCALIBRACION = document.getElementById("estatuscalibracion").value;

        if (fechaVerificacion!=FECHACALIBRACION.value || fechaInspeccion!=FECHAVENCIDA.value){
            guardarBitacora(fechaVerificacion,fechaInspeccion,REFERENCIA);
        }

        const data = new FormData();

        data.append('nomina', "");
        data.append('nombre', "");
        data.append('area', "");
        data.append('codigo', REFERENCIA);
        data.append('tipo', TIPO);
        data.append('subtipo', SUBTIPO);
        data.append('proceso', PROCESO);
        data.append('linea', LINEA);
        data.append('operacion', OPERACION);
        data.append('fechacalibracion', FECHACALIBRACION);
        data.append('fechavencida', FECHAVENCIDA);
        data.append('resolucion', RESOLUCION);
        data.append('nominal', NOMINAL);
        data.append('maxima', MAXIMA);
        data.append('minima', MINIMA);
        data.append('rango', RANGO);
        data.append('frecuencia', FRECUENCIA);
        data.append('numserie', NUMSERIE);
        data.append('numparte', NUMPARTE);
        data.append('target', TARGET);

      /*
        data.append('color', COLOR);
        data.append('cliente', CLIENTE);
        data.append('plataforma', PLATAFORMA);
        data.append('vendedor', VENDEDOR);
        data.append('colormaster', COLORM);
        data.append('numColor', NUMCOLOR);*/
        data.append('status', STATUS);
        data.append('observaciones', OBSERVACIONES);
        data.append('estatuscalibracion', ESTADOCALIBRACION);
        data.append('imagen', foto);



        fetch('dao/daoguardarEquipo.php', {
            method: 'POST',
            body: data
        })

            .then(function (response) {
                if (response.ok) {
                    alert("actualizado");
                    location.reload();
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
    function eliminarequipo() {

        var ID;
        ID = document.getElementById("referencia").value;

        const data = new FormData();

        data.append('id', ID);

        fetch('dao/daoBorrarequipo.php', {
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    location.reload();
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