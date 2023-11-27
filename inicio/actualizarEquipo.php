<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Strata by HTML5 UP</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body class="is-preload">

<!-- Header -->

<header id="header">

    <div class="inner">

        <center><img id="imagenEquipo" alt="" class="aln-center" /></center>

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
                <label  style="text-align: center">Ingrese referencia</label>
                <input type="text" name="emo-id" id="referencia" value="" placeholder="ID"/>
            </div>
            <div class="col-12 col-12-xsmall">
                <center><BUTTON onclick="Buscarequipo()" class="button primary"> Buscar Equipo</BUTTON></center>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px;">Id Referencia</label>
                <input type="text" name="demo-name" id="codigo" value="" placeholder="ID"disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label  style="text-align: center;font-size: 18px;">Tipo</label>
                <input type="text" name="demo-name" id="tipo" value="" placeholder="TIPO"disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px;">Subtipo</label>
                <input type="text" name="demo-name" id="subtipo" value="" placeholder="SUB TIPO"disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label  style="text-align: center;font-size: 18px;">Proceso</label>
                <input type="text" name="demo-name" id="proceso" value="" placeholder="PROCESO"disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label  style="text-align: center;font-size: 18px">Linea</label>
                <input type="text" name="demo-name" id="linea" value="" placeholder="LINEA"disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Operacion</label>
                <input type="text" name="demo-name" id="Operacion" value="" placeholder="OPERACION"disabled>
            </div>

            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Fecha de verificación</label>
                <input type="text" name="demo-email" id="fechacalibracion" value="" placeholder="FECHA DE VERIFICACION"disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Prox. fecha de verificación</label>
                <input type="text" name="demo-email" id="fechavencida" value="" placeholder="PROX. FECHA DE VERIFICACION"disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Frecuencia</label>
                <input type="text" name="demo-email" id="frecuencia" value="" placeholder="FRECUENCIA"disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Resolucion</label>
                <input type="text" name="demo-email" id="resolucion" value="" placeholder="RESOLUCION"disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Rango</label>
                <input type="email" name="demo-email" id="rango" value="" placeholder="RANGO"disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Num.Serie</label>
                <input type="email" name="demo-email" id="numserie" value="" placeholder="NUM. SERIE"disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Num.Parte</label>
                <input type="email" name="demo-email" id="numparte" value="" placeholder="NUM. PARTE"disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Status</label>
                <input type="email" name="demo-email" id="status" value="" placeholder="STATUS"disabled>
            </div>
            <div class="col-12 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Observaciones</label>
                <input type="email" name="demo-email" id="observaciones" value="" placeholder="OBSERVACIONES"disabled>
            </div>
        </div>
        <p></p>
        <div class="col-6 col-12-xsmall">
            <ul class="actions stacked" style="text-align: center">
                <li><a href="actualizarEquipo.php" class="button solid" onclick="">Crear tipos y ubicaciones</a>
            </ul>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">REPORTAR PROBLEMA</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img id="carga" src="images/carga.gif" style="display: none">
                        <div id="contenidoReporte">
                            <H6>
                                REPORTA EL PROBLEMA CON ALGUNAS SUGERENCIAS EN EL BOTON DESLIZABLE O
                                DESCRIBELO EN EL CUADRO.
                            </H6>
                            <hr>
                            <div class="input-group mb-3">
                                <span class="input-group-text" >REFERENCIA</span>
                                <input type="text" id="referen" name="usuario" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" >NOMINA</span>
                                <input type="text" id="nomina" name="usuario" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <p></p>
                            <div class="input-group mb-3">
                                <span class="input-group-text" >REPORTE DE ETIQUETA</span>
                                <select id="etiqueta" class="form-select" aria-label="Default select example">
                                    <option selected value="N/A">Open this select menu</option>
                                    <option value="ETIQUETA DAÑADA">ETIQUETA DAÑADA</option>
                                    <option value="NO TIENE ETIQUETA">NO TIENE ETIQUETA</option>
                                    <option value="NO SE LOGRA LEER EL QR">NO SE LOGRA LEER EL QR</option>
                                </select>
                            </div>
                            <p></p>
                            <div class="input-group mb-3">
                                <span class="input-group-text" >REPORTAR EQUIPO</span>
                                <select id="equipo" class="form-select" aria-label="Default select example">
                                    <option selected value="N/A">Open this select menu</option>
                                    <option value="EQUIPO DAÑADO">EQUIPO DAÑADO</option>
                                    <option value="CALIBRACION VENCIDA">CALIBRACION VENCIDA</option>
                                    <option value="EQUIPO EXTRAVIADO">EQUIPO EXTRAVIADO</option>
                                </select>
                            </div>
                            <p></p>
                            <div class="input-group mb-3">
                                <span class="input-group-text" >DESCRIPCION DEL PROBLEMA</span>
                                <input type="text" id="descproblema" name="usuario" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="cerrarModal" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="">Enviar</button>

                    </div>
                </div>
            </div>
        </div>

        <p></p>
        <div class="col-12 col-12-xsmall">
            <ul class="actions stacked" style="text-align: center">
                <li><a href="#" class="button solid" onclick="Reporte()">ENVIAR REPORTE</a>
            </ul>
        </div>

    </section>
</div>
</section>


</div>

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <center>
            <ul class="icons">
                <li><a href="https://arketipo.mx/Metrologia/pantallaInicio/index.html" class="icon brands fa-dribbble">	INICIO<span class="label">Dribbble</span></a></li><br>
                <li><EQUIPOS></EQUIPOS><a href="altaEquipo.php" class="icon brands fa-dribbble">	INGRESAR EQUIPOS<span class="label">Dribbble</span></a></li><br>
                <li><EQUIPOS></EQUIPOS><a href="https://arketipo.mx/Metrologia/estudios.html" class="icon brands fa-dribbble">	ESTUDIOS Y CERTIFICADOS<span class="label">Dribbble</span></a></li><br>
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
        $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daoconsulta.php?referencia='+id, function (data) {
            document.getElementById("codigo").value = data.data[0].IdEquipo;
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


    function Buscarequipo(){
        var Equipo;
        Equipo=document.getElementById("referencia").value;

        $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daoconsulta.php?referencia='+Equipo, function (data) {
            document.getElementById("codigo").value = data.data[0].IdEquipo;
            document.getElementById("referen").value = data.data[0].IdEquipo;
            document.getElementById("tipo").value = data.data[0].Tipo;


            if (data.data[0].Tipo == "ESCALA"){
                document.getElementById("imagenEquipo").src = "images/ER-100.jpg";
            }else{
                document.getElementById("imagenEquipo").src = "images/"+data.data[0].IdEquipo+".jpg"
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
            document.getElementById("rango").value = data.data[0].Rango;
            document.getElementById("status").value = data.data[0].Status;
            document.getElementById("observaciones").value = data.data[0].Observaciones;
            document.getElementById("frecuencia").value = data.data[0].Frecuencia;

        });
        //consultaFoto(Equipo);

    }

    function Reporte(){

        document.getElementById("carga").style.display="block";
        document.getElementById("contenidoReporte").style.display="none";

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

        data.append('nomina',nomina);
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
                    document.getElementById("cerrarModal").click();
                    document.getElementById("carga").style.display="none";
                    document.getElementById("contenidoReporte").style.display="block";
                    document.getElementById("nomina").value ="";
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