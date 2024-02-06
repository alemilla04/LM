<?php
// $xml = simplexml_load_file('listaclientes.xml');

// print("<h3>Listado de clientes</h3>");
// $clientes = $xml->path("//cliente");
// foreach($clientes as $cliente) {
//     print("Nombre: ".$cliente->nombre."<br>");
//     print("CIF: ".$cliente->cif."<br>");
//     if($cliente->diasentrega != "") {
//         print("diasentrega: ".$cliente->diasentrega."<br>");
//     } else {
//         print("diasentrega: SIN DIAS<br>");
//     }
//     echo "<hr>";
// }

// print("<h3>Listado de nombres de cliente</h3>");
// $resul = $xml->xpath("//nombre");

// print "<ol>";
// foreach ($resul as $nombre) {
//     print("<li>" . $nombre . "</li>");
// }
// print "</ol>";

################################################
//Para books.xml
//Libros que cuesten 30€ o más.
// $xml = simplexml_load_file('books.xml');

// print("<h3>Libros de 30€ o más</h3>");
// $libros = $xml->xpath("//book");
// foreach($libros as $libro) {
//     if($libro->price>=30) {
//         print("Title: ".$libro->title."<br>");
//         print("Author: ".$libro->author."<br>");
//         print("Price: ".$libro->price."<br>");
//         print("<hr>");
//     }
// }
// print("<pre>");
// print_r($libros);
// print("</pre>");

//Libros de la categoria "web"
// $xml = simplexml_load_file('books.xml');

// print("<h3>Libros con la categoría web</h3>");
// $libros = $xml->xpath("//book[@category='web']");
// foreach($libros as $libro) {
//     print("Title: ".$libro->title."<br>");
//     print("Author: ".$libro->author."<br>");
//     print("Price: ".$libro->price."<br>");
//     print("<hr>");
// }

// print("<pre>");
// print_r($libros);
// print("</pre>");

//Libros que tengan más de un autor
// $xml = simplexml_load_file('books.xml');
// print("<h3>Libros con la categoría web</h3>");
// $result = $xml->xpath("//book");
// foreach($result as $libro) {
//     if(count($libro->author)>1){
//         print("Title: ".$libro->title."<br>");
//     }
// }

// print("<pre>");
// print_r($result);
// print("</pre>");

//Libros de autores ordenador alfabeticamente
$xml = simplexml_load_file('books.xml');
print("<h3>Libros con la categoría web</h3>");
$authors = $xml->xpath("//author");

$author_string = [];

foreach($authors as $author) {
    array_push($author_string, (string)$author);
}
sort($author_string);

foreach($author_string as $author_string) {
    print("Author: ".$author_string."<br>");
}