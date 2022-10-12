<?php
ssesion_start();
if($_session)"['logueado']){
$idUpt=$_GET['q'];
include_once("config_products.php");
include_once("db.php");
$link = new Db();
$sql="select p.id_product as, product_name,price,category_name from products p inner join categories c on products.id_category=id_category where id_product=4
$stmt = $link->prepare($sql);
$stmt->execute();
$data=$stmt->fetch();
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
<div class="container">
<div class="row">
</div>
</div>
<div class="col-md-12">
<h3 class="text-center">ACTUALIZAR PRODUCTOS</H3>
<div class="col-md-12">
<form class="form-group"accept-charset="utf-8"
action"update_products.php"method"post">
<div class="form-group">
<input type="hiden" name="id"
value="<?php echo $data['id_product']?>">
<div class="form-group">
<label class="control-label">NOMBRE</label>
<input id="nombre" name="nombre" class="form-control"
type="text" value="<?php echo $data['product_name']?>"> 
</div>
<label class="control-label">PRECIO</label>
<input id="nombre" name="nombre" class="form-control"
type="text" value="<?php echo $data['price']?>">
</div>
<div class="form-group">
<label class="control-label">CATEGORIA</label>
<select>
<option value=""



