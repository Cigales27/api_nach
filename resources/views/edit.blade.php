<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link showcrateuser" href="#">Crear usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link showcreateinformation" href="#">Crear informacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link showeditinformation" href="#">Editar informacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Mensaje de error-->
    <div class="text" id="message">
        <h1 class="error"></h1>
    </div>
    <h1>Panel</h1>
    <!--Crea un formulario para editar un usuario-->
    <div class="container">
        <form id="createUser" method="POST">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="email">Area</label>
                <input type="text" class="form-control" name="area" id="area">
            </div>
            <div class="form-group">
                <label for="ocupation">Ocupacion</label>
                <input type="text" class="form-control" name="ocupation" id="ocupation">
            </div>
            <a class="btn btn-primary" id="crearUsuario">Crear</a>
        </form>
    </div>

    <!-- Informacion de usuario -->
    <div class="container">
        <form type="POST" id="createInformacion">
            <div class="form-group">
                <label for="name">Titulo</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="email">Description</label>
                <input type="text" class="form-control" name="description" id="interesting">
            </div>
            <div class="form-group">
                <!--imagen-->
                <label for="image">Imagen</label>
                <input type="text" class="form-control" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="user_id">usuario</label>
                <!--Select de usuarios-->
                <select name="user_id" id="user_id" class="form-control">
                    
                </select>
            </div>
            <a id="createInformation" class="btn btn-primary">Crear Informacion</a>
        </form>
    </div>

    <!--Editar informacion de usuario-->
    <div class="container">
        <form id="updateInformation" type="POST">
            <div class="form-group">
                <label for="name">Titulo</label>
                <input type="text" class="form-control" name="title" >
            </div>
            <div class="form-group">
                <label for="email">Description</label>
                <input type="email" class="form-control" name="description">
            </div>
            <div class="form-group">
                <!--imagen-->
                <label for="image">Imagen</label>
                <input type="password" class="form-control" name="image" >
            </div>
            <div class="form-group">
                <label for="user_id">usuario</label>
                <!--Select de usuarios-->
                <select name="user_id" id="selectionUser"  class="form-control">
                    
                </select>
            </div>
            <a id="updateInformacion" type="submit" class="btn btn-primary">Editar Informacion</a>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/edits.js') }}"></script>
</body>
</html>