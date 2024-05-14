<!DOCTYPE HTML>
<?php
session_start();
if ($_SESSION["nomina"] == "" && $_SESSION["nomina"] == null) {
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../login/indexMet.html'>";
    session_destroy();
} else {
    session_start();
}
?>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>GramEXPERT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <style>
            .zoom {
                transition: transform .2s;
            }
            .zoom:hover {
                transform: scale(1.2);
            }
        </style>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>GramExpert</h1>
						<h2> <strong>  Laboratorio de Metrología   </strong> </h2>
                        <p>¡Bienvenido! </p>

						<nav>
							<ul>

                      <!--          <li style="margin-right: 10px;" class=""><a href="https://arketipo.mx/Metrologia/inicio/consultaEquipo.html" target="_blank" ><img class="zoom" style="width: 100%" alt="" src="imagen/consulta.png"></a></li> -->
                                <li style="margin-right: 10px;" class=""><a href="https://arketipo.mx/Metrologia/inicio/altaEquipo.php" target="_blank" ><img class="zoom" style="width: 100%" alt="" src="imagen/registro.png"></a></li>
                                <li style="margin-right: 10px;" class=""><a href="https://arketipo.mx/Metrologia/inicio/editarEquipo.php" target="_blank" ><img class="zoom" style="width: 100%" alt="" src="imagen/editar.png"></a></li>
                                <li style="margin-right: 10px;" class=""><a href="https://arketipo.mx/Metrologia/estudiosMet.html" target="_blank" ><img class="zoom" style="width: 100%" alt="" src="imagen/estudios.png"></a></li>
                                <li style="margin-right: 10px;" class=""><a href="" target="_blank" ><img class="zoom" style="width: 100%" alt="" src="imagen/AreaNueva.png"></a></li>
                                <li style="margin-right: 10px;" class=""><a href="https://arketipo.mx/Metrologia/estudiosnum2.html" target="_blank" ><img class="zoom" style="width: 100%" alt="" src="imagen/costos.png"></a></li>
                                <li style="margin-right: 10px;" class=""><a href="https://arketipo.mx/Metrologia/inicio/documentacionEquipo.html" target="_blank" ><img class="zoom" style="width: 100%" alt="" src="imagen/documentos.png"></a></li>

							</ul>
						</nav>
					</header>
				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; Grammer Automotive: <a href="https://arketipo.mx/Metrologia/pantallaInicio/index.html">GramEXPERT</a>.</span>
					</footer>

			</div>
		</div>
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>