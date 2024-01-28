<?php
$enProduccion		= true;

$raizDelSitio		= 'http://'.$_SERVER['SERVER_NAME'].'/web/urace/pregrado/estudiantes/nomina/';
$urlDelSitio		= 'http://www.poz.unexpo.edu.ve/web/urace/';
$lapsoProceso		= '2018-2';
$tLapso				= ' Lapso '.$lapsoProceso;

$laBitacora			= $_SERVER[DOCUMENT_ROOT].'/log/pregrado/estudiantes/carga_asistencia_'.date('m-Y').'_'.$lapsoProceso;
$inscHabilitada		= false;
//$inscHabilitada		= true;
$modoInscripcion	= '1'; 

$basededatos	= "CENTURA-DACE";
$usuariodb = "NIURKA";
$clavedb = "NIURKA";

$fecha_desde='01-06-2011';
$fecha_hasta='31-06-2011';

//if ($modoInscripcion == '1'){
	$tProceso	= ' Planilla Asistencias URDBEPO ';
//}
//else if ($modoInscripcion == '2'){
	//$tProceso	= 'Inclusiones y Retiros para Alumnos Regulares';
//}


//Si se requiere imprimir en planilla un mensaje extra, activar esto y colocarlo
// en inc/msgExtra.php
$mensajeExtra		= false; 
//Las distintas sedes de UNEXPO - actualizar de acuerdo a la necesidad
$sedesUNEXPO = array (	'CCS' => array('BQTO','CARORA'), 
						'CCS_'  => array('DACECCS'),
						'POZ'  => array('DACE9')
				);

//$sedeActiva = 'BQTO';
//$sedeActiva = 'CCS';
$sedeActiva = 'POZ';
$pensumPoz = '4';

$nucleos = $sedesUNEXPO[$sedeActiva];

//$vicerrectorado		= "Luis Caballero Mej&iacute;as";
//$vicerrectorado		= "Barquisimeto";
$vicerrectorado		= "Puerto Ordaz";
$nombreDependencia = 'Unidad Regional de Desarrollo y Bienestar de Estudiantil';

// * * * * * OJO OJO OJO OJO * * * * * 
// Cambiar esto manualmente de acuerdo a la jornada.
// Tipo de jornada
//	0 : deshabilitado 
//	1 : solo preinscritos en las materias preinscritas.
//	2 : solo preinscritos, pero pueden cambiar las materias.
//	3 : todos preinscritos o no preinscritos
//$tipoJornada = 0;
//$tablaOrdenInsc = 'ORDEN_INSCRIPCION';

/*Unidad Tributaria y Costo de las materias:
$unidadTributaria	= 33600;
$valorPreMateria	= 0.2*$unidadTributaria;
$valorMateria		= 89720;
// Maximo numero de depositos a presentar:
$maxDepo			= 8;*/

// Proteccion de las paginas contra boton derecho, no javascript y navegadores no soportados:
if ($enProduccion){
	$botonDerecho = 'oncontextmenu="return false"';
	$noJavaScript = '<noscript><meta http-equiv="REFRESH" content="0;URL=no-javascript.php"></noscript>';
	$noCache	  = "<meta http-equiv=\"Pragma\" content=\"no-cache\">\n";
	$noCache	 .= '<meta http-equiv="Expires" content="-1">';
	$noCacheFin	  = '<head><meta http-equiv="Pragma" content="no-cache"></head>';
}
else {
	$botonDerecho = '';
	$noJavaScript = '';
	$noCache	  = '';
	$noCacheFin	  = '';
}
?>