<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Grupo Nach</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <style>
      body {
        font-family: 'Lato', serif;
      }
    </style>
    <script src="https://kit.fontawesome.com/6c9783d4e5.js" crossorigin="anonymous"></script>
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
                        <a class="nav-link" href="#">Grupo Nach</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bolsa de trabajo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
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

        <section>

            <div class="container">
                <div class="row" id="usuarios">         
                </div>
            </div>
        </section>
        <div class="container">
            <header class="center">
                <h2 id="Title-information">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h2>
            </header>
            <div class="row">
                <div class="col-8">
                    <img  src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" class="w-100 h-100" alt="...">
                    <p id="text-information">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae architecto, a aliquam itaque vitae, ab minima excepturi labore beatae veniam ipsa temporibus commodi cum consectetur. Ab quas distinctio est nesciunt.</p>
                </div>
                <div class="col-4">
                    <aside>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" style="border-radius: 50%" class="card-img w-100 h-100" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title center" id="nombre">Lorena</h5>
                                        <p class="card-text" id="area">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Tambien te puede interesar:</h3>
                        <div class="d-grid gap-2" id="interes">
                            
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/functions.js') }}"></script>
    </body>
</html>
