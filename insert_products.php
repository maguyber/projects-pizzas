<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">INGRESO DE PRODUCTOS</H3>
            </div>
            <div class="col-md-12">

                <form class="form-group" accept-charset="utf-8" method="post" action="multi-part">
                    <div class="form-group">
                        <br>
                        <label class="control-label" for="producto">PRODUCTO</label>
                        <input type="text" required="" placeholder="producto" class="form-control" id="producto" 
                        name="producto">
                    </div>
            </div>
            <div class="col-md-12">

                <form class="form-group" accept-charset="utf-8" method="post" action="multi-part">
                    <div class="form-group">
                        <br>
                        <label class="control-label" for="producto">PRECIO</label>
                        <input type="text" required="" placeholder="producto" class="form-control" id="producto" 
                        name="producto">
                    </div>
            </div><div class="form-group"><label class="control-label" for="categoria">CATEGORIA DEL PRODUCTO</label><select id="categoria" name="categoria" class="form-control"><option>hamburguesa</option></select></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>