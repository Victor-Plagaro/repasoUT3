<?php
    //Insertamos la conexion a la database
    include('./conecta_db.php');

    //Cogemos los tags en el textarea
    $tagsTexto = $_POST['tags'];
    //Dividir el array de los tags
    $almacenarTags = explode(",", $tagsTexto);
    //Eliminar espacio entre las palabras
    $quitarEspaciosTags = trim($almacenarTags);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="nuevo_post.php" method="POST">
        <label for="fechaCreacion">Fecha de la entrada</label>
        <input type="datetime" name="fecha"  value="<?php echo date("d-m-Y");?>" disabled>

        <label for="categorias">Categorias</label>
        <?php $consulta = $conn->prepare("SELECT * FROM categorias");
            $consulta->execute();
            $categorias = $consulta->fetchAll(PDO::FETCH_ASSOC);?>
        <!--Muestra el nombre de los productos en el desplegable-->
        <?php foreach ($categorias as $categoria): ?>
            <input type="checkbox" name="" id="<?php echo $categoria['ID']?>"><?php echo $categoria['Nombre']; ?>
        <?php endforeach; ?>
        <textarea name="tags" id="tags" cols="30" rows="10">hola</textarea>
    </form>
</body>
</html>