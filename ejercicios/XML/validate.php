<?php
<<<<<<< HEAD

libxml_use_internal_errors(true);

$xmlDocument = new DOMDocument();
$xmlDocument->load('ejerc4_listaventas.xml');
=======
$xmlDocument = new DOMDocument();
$xmlDocument->load('listaclientes.xml');
>>>>>>> 119a435cbb78f228f30194c3c9a8c71bba8f7007

if($xmlDocument->validate()) {
    echo "¡Este documento es válido!\n";
}
else {
    echo "Error en la validación!\n";
}