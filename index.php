<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Productos</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">PRODUCTOS DISPONIBLES</h1>
    <div class="row">
        <div class="col-xxl-8 col-sm-offset-1">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Agregar Producto</a>
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
 
                    unset($_SESSION['message']);
                }
            ?>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                    <th>Imagen</th>  
                    <th>Acciones</th>
                    
                </thead>
                <tbody>
                    
                </tbody>
                
                <?php
                $productos= simplexml_load_file("productos.xml");
                $num=0;
                $den=0;
                foreach($productos->producto as $mat){
                    $num+=$mat->uvs*$mat ->nota;
                    $den+=$mat->uvs;
                    
                ?>
                <tr>
                <td><?php echo $mat->codigo; ?></td>
                <td><?php echo $mat->nombre; ?></td>
                <td><?php echo $mat->descripcion; ?></td>
                <td><?php echo $mat->categoria; ?></td>
                <td><?php echo $mat->precio; ?></td>
                <td><?php echo $mat->existencias; ?></td>
                <td><?php echo $mat->image_upload; ?></td>
                <td><a href="#edit_<?php echo $mat->codigo; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>Editar</a> </td>
                <td><a href="#delete_<?php echo $mat->codigo; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span>Eliminar </a></td>
                
                </tr>
                <?php
                include('editar_modal.php');
                include('borrar_modal.php');
                }
                ?>
            </table>

        </div>
    </div>
</div>
<?php include('nueva_modal.php'); ?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>