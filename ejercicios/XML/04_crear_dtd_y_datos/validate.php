<?php

libxml_use_internal_errors(true);

$xmlDocument = new DOMDocument();
$xmlDocument->load('crear4-2_mayoristalibros.xml');

if($xmlDocument->validate()) {
    echo "¡Este documento es válido!\n";
}
else {
    echo "Error en la validación!\n";
}