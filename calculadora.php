<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="green">
<?php 
    require ('components/navbar.php');
?>

<div class="container">
<div class="row">
        <div class="col m4">
        <ul class="collection with-header">
        <li class="collection-header"><h4>OPTIONS</h4></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
      </ul>
        </div>
         <div class="col m8">
        <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <form action="./proceso.php" method="POST">
                        <div class="form-group mt-3">
                                <label for="">OPERACION</label>
                                <select name="operacion" id="" class="form-select" required>
                                    <option value="" disabled selected>SELECCIONE OPERACION...</option>
                                    <option value="suma">SUMAR +</option>
                                    <option value="resta">RESTAR -</option>
                                    <option value="multiplicacion">MULTIPLICAR *</option>
                                    <option value="division">DIVIDIR /</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">NÚMERO 1</label>
                                <input type="text" name="numero_1" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">NÚMERO 2</label>
                                <input type="text" name="numero_2" class="form-control" required>
                            </div>
                            <button class="btn btn-success w-100 mt-4">OPERAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>
    </div>
</div>
<?php
    require('components/footer.php')
?>
</body>
</html>