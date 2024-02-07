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
        <img src="images/nominas/<?php echo $_SESSION["nomina"]; ?>.jpg" alt="" style="width: 30%"/>
        <h1>Nómina</h1>
        <h1><strong><?php echo $_SESSION["nomina"]; ?></strong>.</h1>
        <h1>Nombre</h1>
        <h1><strong id="nombre"></strong>.</h1>
        <h1>Área</h1>
        <h1><strong id="area"></strong>.</h1>
    </div>
</header>

<!-- Main -->
<div id="main">
    <section id="one">
        <header class="major">
            <h2 style="text-align: center">Alta De Equipos.</h2>
        </header>

        <div class="row gtr-uniform gtr-50">


            <div class="col-12 col-12-xsmall">
                <label for="referencia" style="text-align: center">Ingrese referencia</label>
                <div class="col-12">
                    <select name="demo-category" id="referencia" onchange="buscarId()">
                        <option value="">- REFERENCIA -</option>
                        <option value="ER">ER-000 Equipo de Referencia</option>
                        <option value="MAP">MAP-000 Manteminiento preventivo</option>
                        <option value="IM">IM-000 Calibración Interna</option>
                        <option value="EM">EM-000 Calibración Externa</option>
                        <option value="GA">GA-000 Gage Por Atributos</option>
                        <option value="GV">GV-000 Gage Por Variables</option>
                        <option value="HF">HF-000 Hold Fixture</option>
                        <option value="FA">FA-000 Fixture Por Atributos</option>
                        <option value="FV">FV-000 Fixture Por Variables</option>
                        <option value="FAV">FAV-000 Fixture por Variables y Atributos</option>
                        <option value="MPI">MPI-000 Master De Piel</option>
                        <option value="MAF">MAF-000 Master De Alfombra</option>
                        <option value="MCR">MCR-000 Master De Cromo</option>
                        <option value="MPL">MPL-000 Master De Plastico</option>
                        <option value="MAF">MAF-000 Master De Alfombra</option>
                        <option value="MHI">MHI-000 MAaster De Hilo</option>
                        <option value="MTE">MTE-000 Master De Tela</option>
                        <option value="MZI">MZI-000 Master De Zipper</option>
                        <option value="MVI">MVI-000 Master De Vinir</option>
                        <option value="MR">MR-000 Master De Color</option>
                        <option value="MAL">MAL-000 Master De Aluminio</option>
                        <option value="MNY">MNY-000 Master De Aluminio</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-12-xsmall">
                <label style="text-align: center">Id Referencia</label>
                <input type="text" name="demo-name" id="codigoAux" value="" placeholder="ID" >
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="referencia" style="text-align: center">Ingrese tipo</label>
                <div class="col-12">
                    <select name="demo-category" id="tipo" onchange="llenarsubtipo()">
                        <option value="">- TIPO -</option>
                    </select>
                </div>
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="referencia" style="text-align: center">Ingrese subtipo</label>
                <div class="col-12">
                    <select name="demo-category" id="subtipo">

                    </select>
                </div>
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="referencia" style="text-align: center">Proceso</label>
                <div class="col-12">
                    <select name="demo-category" id="proceso" onchange="consuktararea()">
                    </select>
                </div>
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="referencia" style="text-align: center">Ingrese linea</label>
                <div class="col-12">
                    <select name="demo-category" id="linea" onchange="consuktarOpEstacion()">
                        <option value="">- LINEA -</option>
                    </select>
                </div>
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="referencia" style="text-align: center">Ingrese operacion</label>
                <div class="col-12">
                    <select name="demo-category" id="operacion">
                        <option value="">- OPERACION -</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-12-xsmall">
                <label for="referencia" style="text-align: center">Fecha de verificación</label>
                <input type="date" name="demo-email" id="fechacalibracion" value="" placeholder="Email"/>
            </div>
            <div class="col-6 col-12-xsmall">
                <label
                        for="referencia" style="text-align: center">Proxima fecha de verificación</label>
                <input type="date" name="demo-email" id="fechavencida" value="" placeholder="Email"/>
            </div>

            <div class="col-6 col-12-xsmall">
                <label for="referencia" style="text-align: center">Frecuencia</label>
                <input type="text" name="demo-email" id="frecuencia" value="" placeholder="FRECUENCIA"/>
            </div>

            <div class="col-6 col-12-xsmall">
                <label for="referencia" style="text-align: center">Status</label>
                <div class="col-12">
                    <select name="demo-category" id="status">
                        <option value="Activo">ACTIVO</option>
                        <option value="Baja">BAJA</option>
                    </select>
                </div>
            </div>

            <br>

            <div class="col-6 col-12-xsmall" id="campoResolucion">
                <label for="referencia" style="text-align: center">Resolucion</label>
                <input type="text" name="demo-email" id="resolucion" value="" placeholder="RESOLUCION"/>
            </div>

            <div class="col-6 col-12-xsmall" id="campoRango">
                <label for="referencia" style="text-align: center">Rango</label>
                <input type="text" name="demo-email" id="rango" value="" placeholder="RANGO"/>
            </div>
            <div class="col-6 col-12-xsmall" id="campoSerie">
                <label for="referencia" style="text-align: center">Num.Serie</label>
                <input type="text" name="demo-email" id="numserie" value="" placeholder="NUM. SERIE"/>
            </div>
            <div class="col-6 col-12-xsmall" id="campoParte">
                <label for="referencia" style="text-align: center">Num.Parte</label>
                <input type="text" name="demo-email" id="numparte" value="" placeholder="NUM. PARTE"/>
            </div>

            <div class="col-6 col-12-xsmall" id="codigoColor" style="display: ">
                <label for="color" style="text-align: center">Codigo de color</label>
                <input type="text" name="demo-email" id="color" value="" placeholder="Codigo color"/>
            </div>

            <div class="col-6 col-12-xsmall" id="campoTarget" style="display: ">
                <label for="color" style="text-align: center">Codigo de color</label>
                <input type="text" name="demo-email" id="color" value="" placeholder="Codigo color"/>
            </div>

            <div class="col-6 col-12-xsmall" id="clienteMaster" style="display: ">
                <label for="color" style="text-align: center">Codigo de color</label>
                <input type="text" name="demo-email" id="color" value="" placeholder="Codigo color"/>
            </div>

            <div class="col-6 col-12-xsmall" id="plataformaMaster" style="display: ">
                <label for="color" style="text-align: center">Plataforma</label>
                <input type="text" name="demo-email" id="color" value="" placeholder="Plataforma"/>
            </div>

            <div class="col-12 col-12-xsmall">
                <label for="referencia" style="text-align: center">Observaciones</label>
                <input type="text" name="demo-email" id="observaciones" value="" placeholder="OBSERVACIONES"/>
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

            <div class="col-12 col-12-xsmall">
                <ul class="actions stacked" style="text-align: center">
                    <li><a class="button primary" onclick="testAlta()">Ingresar Nuevo Registro</a>
                </ul>
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
                <li><a href="consultaEquipo.html" class="icon brands fa-dribbble"> CONSULTA DE EQUIPOS<span
                                class="label">Dribbble</span></a></li>
        <!--        <br>
                <li><a href="https://arketipo.mx/Metrologia/inicio/actualizarEquipo.php"
                       class="icon brands fa-dribbble"> ACTUALIZAR EQUIPOS <span class="label">Dribbble</span></a></li>
                <br>
        -->
                <li><a href="https://arketipo.mx/Metrologia/estudios.html" class="icon brands fa-dribbble">
                        ESTUDIOS Y CERTIFICADOS<span class="label">Dribbble</span></a></li>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>


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


    function buscarId() {
        var tipoEquipo;
        tipoEquipo = document.getElementById("referencia").value;

        let campos = ["campoResolucion", "campoRango", "campoParte", "campoSerie", "campoTarget", "clienteMaster","codigoColor","plataformaMaster"];

        if (tipoEquipo === "MPI" || tipoEquipo === "MPL" || tipoEquipo === "MAF" || tipoEquipo === "MCR" || tipoEquipo === "MHI" || tipoEquipo === "MTE" || tipoEquipo === "MZI" || tipoEquipo === "MVI" || tipoEquipo === "MR" || tipoEquipo === "MAL" || tipoEquipo === "MNY") {
            for (let i = 0; i < campos.length; i++) {
                if (campos[i] === "codigoColor" || campos[i] === "campoTarget" || campos[i] === "clienteMaster" || campos[i] === "plataformaMaster") {
                    document.getElementById(campos[i]).style.display = 'block';
                } else {
                    document.getElementById(campos[i]).style.display = 'none';
                }
            }
        } else {
            for (let i = 0; i < campos.length; i++) {
                if (campos[i] === "codigoColor" || campos[i] === "campoTarget" || campos[i] === "clienteMaster" || campos[i] === "plataformaMaster") {
                    document.getElementById(campos[i]).style.display = 'block';
                } else {
                    document.getElementById(campos[i]).style.display = 'none';
                }
            }
        }

        console.log('https://arketipo.mx/Metrologia/inicio/dao/daoTipoEquipo.php?referencia=' + tipoEquipo)
        $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daoTipoEquipo.php?referencia=' + tipoEquipo + "-", function (data) {
            //document.getElementById("referenciaDiv").style.display='block';
            const chars = data.data[0].IdEquipo.split('-');

            var ref = chars[0];
            var numero = chars[1];

            if (ref == tipoEquipo) {
                var suma = parseInt(numero, 10) + 1;

                if (suma < 10) {
                    suma = "00" + suma;
                }
                if (suma >= 10 && suma <= 99) {
                    suma = "0" + suma;
                }

                var referencia = chars[0] + "-" + suma;
                document.getElementById("codigoAux").value = referencia;
            } else {
                var referencia = tipoEquipo + "-000";
                document.getElementById("codigoAux").value = referencia;
            }
        });
        llenarTipo();
    }
    var nominaAux = '<?php echo $_SESSION["nomina"];?>'
    $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daoUsuario.php?nomina=' + nominaAux, function (data) {
        document.getElementById("nombre").innerHTML = data.data[0].Nombre;
        document.getElementById("area").innerHTML = data.data[0].Area;
    });

    function llenarTipo() {
        var tipoEquipo;
        tipoEquipo = document.getElementById("referencia").value;
        $.getJSON('https://arketipo.mx/Metrologia/inicio/dao/daotipo.php?ref=' + tipoEquipo, function (data) {
            var select = document.getElementById("tipo");
            select.innerHTML = "";

            var createOptionAux = document.createElement("option");
            createOptionAux.text = "Seleccione Linea";
            createOptionAux.value = "";
            select.appendChild(createOptionAux);


            for (var i = 0; i < data.data.length; i++) {
                var createOption = document.createElement("option");
                createOption.text = data.data[i].Tipo;
                createOption.value = data.data[i].Tipo;
                select.appendChild(createOption);
            }
        });
    }

    function llenarsubtipo() {
        var TIPO;
        TIPO = document.getElementById("tipo").value;

        $.getJSON('https://arketipo.mx/Metrologia/dao/daosubtipo.php?subtipo=' + TIPO, function (data) {
            var select = document.getElementById("subtipo");
            select.innerHTML = "";
            for (var i = 0; i < data.data.length; i++) {
                var createOption = document.createElement("option");
                createOption.text = data.data[i].SubTipo;
                createOption.value = data.data[i].SubTipo;
                select.appendChild(createOption);
            }
        });
    }


    function Ingreso(foto) {

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
        var TARGET;
        var STATUS;
        var OBSERVACIONES;
        var IMAGEN;

        NOMINA = '<?php echo $_SESSION["nomina"];?>';
        //NOMBRE = document.getElementById("").value;
        //AREA = document.getElementById("").value;
        REFERENCIA = document.getElementById("codigoAux").value;
        TIPO = document.getElementById("tipo").value;
        SUBTIPO = document.getElementById("subtipo").value;
        PROCESO = document.getElementById("proceso").value;
        LINEA = document.getElementById("linea").value;
        OPERACION = document.getElementById("operacion").value;
        FECHACALIBRACION = document.getElementById("fechacalibracion").value;
        FECHAVENCIDA = document.getElementById("fechavencida").value;
        RESOLUCION = document.getElementById("resolucion").value;
        RANGO = document.getElementById("rango").value;
        FRECUENCIA = document.getElementById("frecuencia").value;
        NUMSERIE = document.getElementById("numserie").value;
        NUMPARTE = document.getElementById("numparte").value;
        TARGET = document.getElementById("target").value;
        STATUS = document.getElementById("status").value;
        OBSERVACIONES = document.getElementById("observaciones").value;


        console.log("INSERT INTO `Equipo`(`IdEquipo`, `Observaciones`, `Status`, `Resolucion`, `NumParte`,`FechaInspeccion`, `Frecuencia`, " +
            "`FechaVencimiento`, `AreaProceso`, `Tipo`, `SubTipo`,`NumSerie`, `AreaLinea`, `AreaOperacion`,`Rango`) VALUES " +
            "('" + REFERENCIA + "','" + OBSERVACIONES + "','" + STATUS + "','" + RESOLUCION + "','" + NUMPARTE + "','" + FECHACALIBRACION + "','" + FRECUENCIA + "','" + FECHAVENCIDA + "'," +
            "'$Proceso','$Tipo','$Subtipo','$Numparte','$Numserie','$Status','$Linea','$Operacion','$Rango')")

        if (REFERENCIA != "") {
            if (TIPO != ""){
                if (SUBTIPO != ""){
                    if (PROCESO != ""){
                        if (FECHACALIBRACION != ""){

                    const data = new FormData();

                    data.append('nomina', NOMINA);
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
                    data.append('target', TARGET);
                    data.append('status', STATUS);
                    data.append('observaciones', OBSERVACIONES);
                    data.append('imagen', foto);


                    fetch('dao/daoIngresoEquipo.php', {
                        method: 'POST',
                        body: data
                    })
                        .then(function (response) {
                            if (response.ok) {
                                alert("Se ha ingresado");
                                enviarCorreo(NOMINA, "", PROCESO, LINEA, REFERENCIA, OPERACION,OBSERVACIONES,TIPO,SUBTIPO,FECHACALIBRACION,FECHAVENCIDA,RESOLUCION,RANGO,FRECUENCIA,NUMSERIE,NUMPARTE,TARGET,STATUS);

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
                        }else{
                            Swal.fire({
                                icon: "error",
                                title: "Campo fecha de calibración vacio",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    }else{
                        Swal.fire({
                            icon: "error",
                            title: "Campo proceso vacio",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                }else{
                    Swal.fire({
                        icon: "error",
                        title: "Campo subtipo vacio",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }else{
                Swal.fire({
                    icon: "error",
                    title: "Campo tipo vacio",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        } else {
            Swal.fire({
                icon: "error",
                title: "Campo referencia vacio",
                showConfirmButton: false,
                timer: 1500
            });
        }
    }


    function enviarCorreo(nomina, Retiqueta, proceso, linea, Referencia, operacion,observaciones,tipo,subtipo,fechacalibracion,fechavencida,resolucion,rango,frecuencia,numparte,numserie,STATUS) {

        //document.getElementById("carga").style.display="block";
        //document.getElementById("contenidoReporte").style.display="none";

        const data = new FormData();

        data.append('nomina', nomina);
        data.append('idequipo', Referencia);
        data.append('Proceso', proceso);
        data.append('linea', linea);
        data.append('operacion', operacion);
        data.append('Idimagen', "");
        data.append('comentario', observaciones);
        data.append('tipo', tipo);
        data.append('subtipo', subtipo);
        data.append('fechacalibracion', fechacalibracion);
        data.append('fechavencida', fechavencida);
        data.append('resolucion', resolucion);
        data.append('rango', rango);
        data.append('frecuencia', frecuencia);
        data.append('numserie', numserie);
        data.append('numparte', numparte);
        data.append('status', STATUS);





        fetch('https://arketipo.mx//MailerMetrologiaIng.php', {
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    document.getElementById("carga").style.display = "none";
                    document.getElementById("contenidoReporte").style.display = "block";
                    document.getElementById("nomina").value = "";
                    document.getElementById("codigoAux").value=" ";
                    document.getElementById("tipo").value=" ";
                    document.getElementById("subtipo").value="";
                    document.getElementById("proceso").value="";
                    document.getElementById("linea").value=" ";
                    document.getElementById("operacion").value='';
                    document.getElementById("fechacalibracion").value=''    ;
                    document.getElementById("fechavencida").value='';
                    document.getElementById("resolucion").value='';
                    document.getElementById("rango").value='';
                    document.getElementById("frecuencia").value='';
                    document.getElementById("numserie").value='';
                    document.getElementById("numparte").value='';
                    document.getElementById("status").value='';
                    document.getElementById("observaciones").value='';

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