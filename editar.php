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
		
	
		if(!isset($descripcion)||vacio($descripcion)){
			array_push($errores, "Debe ingresar la descripcion del producto");
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
		if(isset($_POST['edit'])){
		$productos = simplexml_load_file('productos.xml');
		foreach($productos->producto as $mat){
			if($mat->codigo == $_POST['codigo']){
				$mat->nombre = $_POST['nombre'];
				$mat->descripcion = $_POST['descripcion'];
				$mat->categoria = $_POST['categoria'];
				$mat->precio = $_POST['precio'];
				$mat->existencias = $_POST['existencias'];
				break;
			}
		}
		file_put_contents('productos.xml', $productos->asXML());
		$_SESSION['message'] = 'Producto actualizada exitosamente';
		header('location: index.php');
	}
	}
	else{
		var_dump($errores);
	}
}
?>