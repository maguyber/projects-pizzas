<?php
$product = $_POST['producto'];
$price = $_POST['precio'];
$category = $_POST['categoria'];


include_once("config_products.php");
include_once("db.php");
$link = new Db();
include_once('upload_image.php');
$path_img = $directorio . $nombre_img; //ruta completa de la imagen levantada
$sql = "insert products(product_name,image,price,id_category)values (:product,,:path_img,:price,:category)";
$stmt = $link->prepare($sql);
$stmt = $bindvalue('price,$product');
$stmt = $bindvalue('price,$price');
$stmt = $bindvalue('category,$category');
$stmt = $bindvalue('path_img',$path_img);
if($stmt->execute()){
    ?>
    <script>
    alert("producto Ingresado");
    windows.location="insert_products.php";
    </sript>
    <?php

    
}