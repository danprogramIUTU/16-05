<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>juego</title>
    <link rel="icon" type="image/png" href="./img/codi.png" />
    <link rel="stylesheet" href="./css/img.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-black">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-6 aling-center">
                <section>
                    <img src="./img/img1.png" alt="background" id="img1">
                </section>
            </div>
            <div class="col-6 text-center aling-center border bg-dark-subtle border border-warning-subtle rounded overflow-y-scroll "
                id="c">
                <form class="row g-3 ">
                    <div class="col-md-6 mb-4">
                        <label for="inputEmail4" class="form-label">Nombre juego</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="inputPassword4" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="inputPassword4" placeholder="$">
                    </div>
                    <div class="col-8 mb-4">
                        <label for="inputAddress" class="form-label">Creador/Distribuidor</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Red Barrels Inc">
                    </div>

                    <div class="col-4">
                        <label for="inputState" class="form-label">Tipo de juego</label>
                        <select id="inputState" class="form-select">
                            <option selected>Single player</option>
                            <option>
                                Multiplayer
                            </option>
                        </select>
                    </div>
                    <div class="col-8 mb-4">
                        <label for="inputAddress2" class="form-label">Especificaciones</label>
                        <input type="text" class="form-control" id="inputAddress2"
                            placeholder="cpu 4 nucleos 8 hilos, ram 4gb ">
                    </div>
                    <div class="col-4">
                        <label for="inputState" class="form-label">Tipo de mundo</label>
                        <select id="inputState" class="form-select">
                            <option selected>Abierto</option>
                            <option>
                                Historia Lineal
                            </option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="inputState" class="form-label">Plataforma</label>
                        <select id="inputState" class="form-select">
                            <option selected>Consola</option>
                            <option>
                                Computador
                            </option>
                            <option>
                                Gafas realidad virtual
                            </option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Genero</label>
                        <select id="inputState" class="form-select">
                            <option selected>Aventura</option>
                            <option>
                                Acción
                            </option>
                            <option>
                                Deportes
                            </option>
                            <option>
                                Simulación
                            </option>
                            <option>
                                Arcade
                            </option>
                            <option>
                                Terror
                            </option>
                        </select>
                    </div>

                    <div class="col-2 md-2 mb-4">
                        <label for="inputState" class="form-label">calificacion</label>
                        <select id="inputState" class="form-select">
                            <option selected>5</option>
                            <option>
                                4
                            </option>
                            <option>
                                3
                            </option>
                            <option>
                                2
                            </option>
                            <option>
                                1
                            </option>
                        </select>
                    </div>

                    <div class="col-4 md-4">
                        <label for="inputState" class="form-label">Compatible con mando</label>
                        <select id="inputState" class="form-select">
                            <option selected>No</option>
                            <option>
                                Si
                            </option>
                        </select>
                    </div>
                    <div class="col-4 md-4">
                        <label for="inputState" class="form-label">Compras integradas</label>
                        <select id="inputState" class="form-select">
                            <option selected>No</option>
                            <option>
                                Si
                            </option>
                        </select>
                    </div>
                    <div class="col-4 md-4">
                        <label for="inputState" class="form-label">Multiplataforma</label>
                        <select id="inputState" class="form-select">
                            <option selected>No</option>
                            <option>
                                Si
                            </option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Competitivo</label>
                        <select id="inputState" class="form-select">
                            <option selected>Si</option>
                            <option>
                                No
                            </option>
                        </select>
                    </div>

                    <div class="col-4 md-2 mb-4">
                        <label for="inputState" class="form-label">Sin conexion</label>
                        <select id="inputState" class="form-select">
                            <option selected>No</option>
                            <option>
                                Si
                            </option>
                        </select>
                    </div>


                    <div class="col-4 md-4">
                    <label for="inputAddress2" class="form-label">Año de lanzamiento</label>
                        <input type="number" class="form-control" id="inputAddress2"
                            placeholder="2005">
                    </div>

                    <div class="col-12 md-2 mb-4">
                        <label for="inputZip" class="form-label">Codigo</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>

                    <div class="col-12 mb-4">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>