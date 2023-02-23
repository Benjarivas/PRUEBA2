<?php
session_start();
$cod=$_GET['cod'];
$productos=simplexml_load_file("productos.xml");
$i=0;
$index=-1;
foreach($productos->producto as $mat){
    if($cod==$mat->codigo){
        $index=$i;
        break;
    }
    $i++;
}
if($index>=0){
    unset($productos->producto[$index]);
}
file_put_contents("productos.xml", $productos->asXML());

$_SESSION['message'] = 'Producto borrado correctamente';
header('location:index.php');
?>