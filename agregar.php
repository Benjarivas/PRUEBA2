
<?php
require 'validaciones.php';
if(isset($_POST)){

    extract($_POST);
    $errores=array();

    if(!isset($codigo)||vacio($codigo)){
        array_push($errores, "Debe ingresar el codigo");
    }
    else if(!esCodigo($codigo)){
        array_push($errores, "En el codigo los primeros 4 digitos son letras mayusculas y los ultimos 5 numeros");
    }

    if(!isset($nombre)||vacio($nombre)){
        array_push($errores, "Debe ingresar el nombre");
    }
    else if(!esTexto($nombre)){
        array_push($errores, "El nombre debe contener unicamente letras");
    }

    if(!isset($descripcion)||vacio($descripcion)){
        array_push($errores, "Debe ingresar la descripcion del producto");
    }
    else if(!esTexto($descripcion)){
        array_push($errores, "La descripción debe contener unicamente letras");
    }

    if(!isset($categoria)||vacio($categoria)){
        array_push($errores, "Debe ingresar la categoria");
    }
    else if(!esTexto($categoria)){
        array_push($errores, "La categoria debe contener unicamente letras");
    }

    if(!isset($precio)||vacio($precio)){
        array_push($errores, "Debe ingresar el precio");
    }
    else if(!esNumero($precio)){
        array_push($errores, "El precio debe tener unicamente numeros");
    }

    if(!isset($existencias)||vacio($existencias)){
        array_push($errores, "Debe ingresar las existencias del producto");
    }
    else if(!esNumero($existencias)){
        array_push($errores, "Las existencias debe contener unicamente numeros");
    }

    if(empty($errores)){
        session_start();
        
		$img_name=$_FILES['img_upload']['name'];
		$tmp_img_name=$_FILES['img_upload']['tmp_name'];
		$folder='img/';
		move_uploaded_file($tmp_img_name,$folder.$img_name);

    $productos=simplexml_load_file("productos.xml");
    $producto=$productos->addChild("producto");
    $producto->addChild('codigo',$_POST['codigo']);
    $producto->addChild('nombre',$_POST['nombre']);
    $producto->addChild('descripcion',$_POST['descripcion']);
    $producto->addChild('categoria',$_POST['categoria']);
    $producto->addChild('precio',$_POST['precio']);
    $producto->addChild('existencias',$_POST['existencias']);
    $producto->addChild('imagen', $_POST['img/image_upload']);

    file_put_contents("productos.xml", $productos->asXML());
    $_SESSION['message'] = 'producto agregado exitosamente';
    header('location:index.php');

    }
    else{
        var_dump($errores);

    }


     


}
?>