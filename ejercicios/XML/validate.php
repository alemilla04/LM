<?php
$xmlDocument = new DOMDocument();
$xmlDocument->load('listaclientes.xml');

if($xmlDocument->validate()) {
    echo "¡Este documento es válido!\n";
}
else {
    echo "Error en la validación!\n";
}