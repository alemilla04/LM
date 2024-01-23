<?php

libxml_use_internal_errors(true);

$xmlDocument = new DOMDocument();
$xmlDocument->load('ejer_atrib1_instituto.xml');

if($xmlDocument->validate()) {
    echo "¡Este documento es válido!\n";
}
else {
    echo "Error en la validación!\n";
}