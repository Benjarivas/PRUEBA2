<?php
function vacio($var){
    return empty(trim($var));
}
function esTexto($var){
    return preg_match('/^[a-zA-Z ]+$/', $var);
}
function esCodigo($var){
    return preg_match('/^[A-Z]{4}[0-9]{5}/', $var);
}
function esNumero($var){
    return preg_match('/[0-9]/', $var);
}
?>