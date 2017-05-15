<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p>El tema aborda el análisis de los estereotipos de géneros como ente articulador en los imaginarios expuestos en la sociedad, donde a través de los medios ópticos y el fenómeno de la irradiación de luz en la cámara permita exponer lo discriminado y marginado de las ficciones de identidad.
Principalmente el tema de investigación se centra en el concepto de travestismo marcado por la marginalidad y el desajuste corporal, donde se ahondará en como estos cuerpos ficcionados toman un discurso que no les es propio, como por ejemplo el de la Iglesia Católica, y a través de la performance se genera un acto de disidencia y reivindicación política por medio de la imagen. </p>

</section>
<?php include('pie.php');?>
