<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p>El tema aborda el análisis de los estereotipos de géneros como ente articulador en los imaginarios expuestos en la sociedad, donde a través de los medios ópticos y el fenómeno de la irradiación de luz en la cámara permita exponer lo discriminado y marginado de las ficciones de identidad.</p>

</section>
<?php include('pie.php');?>
