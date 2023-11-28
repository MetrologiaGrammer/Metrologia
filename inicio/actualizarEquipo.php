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
    <title>Strata by HTML5 UP</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="is-preload">

<!-- Header -->

<header id="header">

    <div class="inner">

        <center><img id="imagenEquipo" alt="" class="aln-center"/></center>

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
            <h1 class="display-4" style="text-align: center">Actualización de ubicacion</h1>
        </header>


        <br><br>
        <div class="row gtr-uniform gtr-50">
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px;">Id Referencia</label>
                <input type="text" name="demo-name" id="codigo" value="" placeholder="ID" disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px;">Tipo</label>
                <input type="text" name="demo-name" id="tipo" value="" placeholder="TIPO" disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px;">Subtipo</label>
                <input type="text" name="demo-name" id="subtipo" value="" placeholder="SUB TIPO" disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px;">Proceso</label>
                <input type="text" name="demo-name" id="procesoA" value="" placeholder="PROCESO" disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Linea</label>
                <input type="text" name="demo-name" id="lineaA" value="" placeholder="LINEA" disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Operacion</label>
                <input type="text" name="demo-name" id="OperacionA" value="" placeholder="OPERACION" disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Fecha de verificación</label>
                <input type="text" name="demo-email" id="fechacalibracion" value="" placeholder="FECHA DE VERIFICACION"
                       disabled>
            </div>
            <div class="col-6 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Prox. fecha de verificación</label>
                <input type="text" name="demo-email" id="fechavencida" value=""
                       placeholder="PROX. FECHA DE VERIFICACION" disabled>
            </div>

        </div>
        <p></p>
        <br>
        <hr>
        <br>
        <div class="row gtr-uniform gtr-50">

            <div class="col-6 col-12-xsmall">
                <label for="referencia" style="text-align: center">Proceso</label>
                <div class="col-12">
                    <select name="demo-category" id="proceso" onchange="consuktararea()">
                        <option value="">- OTRO -</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-12-xsmall">
                <label for="referencia" style="text-align: center">Ingrese linea</label>
                <div class="col-12">
                    <select name="demo-category" id="linea" onchange="consuktarOpEstacion()">
                        <option value="">- OTRO -</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-12-xsmall">
                <label for="referencia" style="text-align: center">Ingrese operacion</label>
                <div class="col-12">
                    <select name="demo-category" id="operacion">
                        <option value="">- OTRO -</option>
                    </select>
                </div>
            </div>

            <div class="col-12 col-12-xsmall">
                <label style="text-align: center;font-size: 18px">Comentarios</label>
                <input type="email" name="demo-email" id="comentario" value="" placeholder="comentarios">
            </div>

            <div class="col-12 col-12-xsmall">
                <P>¡FAVOR DE TOMAR FOTOS DE LA NUEVA UBICACION!</P>
                <input type="file" id="files" name="usuario" accept="image/*" onchange="preview_image()"
                       class="form-control" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-default">
                <br><br>
                <center><img style="display: none;" id="imagenPrevisualizacion" height="250px"></center>
                <img src="" style="display: none;" id="new">
                <img src="" style="display: none;" id="old">
            </div>

            <div class="col-12 col-12-xsmall">
                <ul class="actions stacked" style="text-align: center">
                    <li><a href="#" class="button primary" onclick="test()">Enviar</a>
                </ul>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                </button>
            </div>

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
                <li><a href="https://arketipo.mx/Metrologia/pantallaInicio/index.html" class="icon brands fa-dribbble">
                        INICIO<span class="label">Dribbble</span></a></li>
                <br>
                <li>
                    <EQUIPOS></EQUIPOS>
                    <a href="consultaEquipo.html" class="icon brands fa-dribbble"> CONSULTAR EQUIPOS <span
                                class="label">Dribbble</span></a></li>
                <br>
                <li>
                    <EQUIPOS></EQUIPOS>
                    <a href="altaEquipo.php" class="icon brands fa-dribbble"> INGRESAR EQUIPOS<span class="label">Dribbble</span></a>
                </li>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.poptrox.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="lib/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

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
                document.getElementById("imagenEquipo").src = "images/ER-100.jpg";
            } else {
                document.getElementById("imagenEquipo").src = "images/" + data.data[0].IdEquipo + ".jpg"
            }
            document.getElementById("codigo").value = data.data[0].IdEquipo;
            document.getElementById("tipo").value = data.data[0].Tipo;
            document.getElementById("subtipo").value = data.data[0].SubTipo;
            document.getElementById("procesoA").value = data.data[0].AreaProceso;
            document.getElementById("lineaA").value = data.data[0].AreaLinea;
            document.getElementById("OperacionA").value = data.data[0].AreaOperacion;
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

        $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daoconsulta.php?referencia=' + Equipo, function (data) {
            document.getElementById("codigo").value = data.data[0].IdEquipo;
            document.getElementById("referen").value = data.data[0].IdEquipo;
            document.getElementById("tipo").value = data.data[0].Tipo;


            if (data.data[0].Tipo == "ESCALA") {
                document.getElementById("imagenEquipo").src = "images/ER-100.jpg";
            } else {
                document.getElementById("imagenEquipo").src = "images/" + data.data[0].IdEquipo + ".jpg"
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
                    document.getElementById("cerrarModal").click();
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


    function ReporteActualizacion(foto) {
        var Nomina;
        var AreaProceso;
        var Linea;
        var Operacion;
        var IdEquipo;
        var IdImagen;

        const min = 1;
        const max = 1000000;
        const randomNum = Math.floor(Math.random() * (max - min + 1) + min);

        console.log(foto);

        Nomina = '<?php echo $_SESSION["nomina"];?>';
        AreaProceso = document.getElementById("proceso").value;
        Linea = document.getElementById("linea").value;
        Operacion = document.getElementById("operacion").value;
        IdEquipo = document.getElementById("codigo").value;


        IdImagen = randomNum + Nomina;


        const data = new FormData();

        data.append('nomina', Nomina);
        data.append('Proceso', AreaProceso);
        data.append('linea', Linea);
        data.append('operacion', Operacion);
        data.append('idequipo', IdEquipo);
        data.append('imagen', foto);
        data.append('Idimagen', IdImagen);

        fetch('dao/daoActualizacion.php', {
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    Reporte(Nomina, AreaProceso, Linea, Operacion, IdEquipo, IdImagen, foto)
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

    function Reporte(Nomina, AreaProceso, Linea, Operacion, IdEquipo, IdImagen) {

        const data = new FormData();

        data.append('idequipo', IdEquipo);
        data.append('nomina', Nomina);
        data.append('Proceso', AreaProceso);
        data.append('linea', Linea);
        data.append('operacion', Operacion);
        data.append('Idimagen', IdImagen);

        fetch('https://arketipo.mx/MailerMetrologiaAct.php', {
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    alert("Concluido");
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


    function consuktararea() {
        var area;
        area = document.getElementById("proceso").value;

        var selectOperacion = document.getElementById("operacion");
        selectOperacion.innerHTML = "";

        $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daoareas.php?proceso=' + area, function (data) {
            var select = document.getElementById("linea");
            select.innerHTML = "";

            var createOptionAux = document.createElement("option");
            createOptionAux.text = "Seleccione Linea";
            createOptionAux.value = "";
            select.appendChild(createOptionAux);

            for (var i = 0; i < data.data.length; i++) {

                var createOption = document.createElement("option");
                createOption.text = data.data[i].Linea;
                createOption.value = data.data[i].Linea;
                select.appendChild(createOption);

            }
        });
    }

    function consuktarOpEstacion() {
        var area, proceso;
        area = document.getElementById("linea").value;
        proceso = document.getElementById("proceso").value;
        $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daooperacion.php?linea=' + area + '&proceso=' + proceso, function (data) {
            var selectOperacion = document.getElementById("operacion");

            selectOperacion.innerHTML = "";
            for (var i = 0; i < data.data.length; i++) {

                var createOptionOperacion = document.createElement("option");
                createOptionOperacion.text = data.data[i].OpEstacion;
                createOptionOperacion.value = data.data[i].OpEstacion;
                selectOperacion.appendChild(createOptionOperacion);

            }
        });
    }

    llenarProceso();

    function llenarProceso() {
        $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daoProceso.php', function (data) {
            var select = document.getElementById("proceso");
            for (var i = 0; i < data.data.length; i++) {
                var createOption = document.createElement("option");
                createOption.text = data.data[i].Proceso;
                createOption.value = data.data[i].Proceso;
                select.appendChild(createOption);
            }
        });
    }


</script>

</body>
</html>