<?php

libxml_use_internal_errors(true);

$xmlDocument = new DOMDocument();
$xmlDocument->load('error3-2_contabilidad.xml');

if($xmlDocument->validate()) {
    echo "¡Este documento es válido!\n";
}
else {
    echo "Error en la validación!\n";
}