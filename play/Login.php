<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="icon" type="image/png" href="./img/codi.png" />
    <link rel="stylesheet" href="./css/img.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-black">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-6">
                <img src="./img/banner.webp" alt="bcakground" id="i">
            </div>

            <div class="col-6 text-center aling-center border bg-dark-subtle border border-warning-subtle rounded overflow-y-scroll" id="s">

                <form action="./config/Process.php" name="" method="POST">
                    <!-- Email input -->
                    <div class="form-outline mb-4 ">

                        <p class="text-danger">Enter mail</p>
                        <input type="email" name="email" id="form2Example1" class="form-control" />
                        <label class="form-label" for="form2Example1">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <p class="text-danger">Enter password</p>
                        <input type="password" name="pass" id="form2Example2" class="form-control" />
                        <label class="form-label" for="form2Example2">Password</label>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>

                    <!-- Register buttons 
                    <div class="text-center">
                        <p>Not a member? <a href="#!">Register</a></p>

                    </div>
                    -->
                </form>

            </div>

        </div>
    </div>

    <div class="container-fluid bg-black text-center text-light aling-center">

        <div class="row">
            <div class="col-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h3>Easy</h3>
                        </div>
                        <div class="carousel-item">
                            <h3>Fast</h3>
                        </div>
                        <div class="carousel-item">
                            <h3>Good</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-black text-center text-danger  aling-center">
            <div class="row">
                <div class="col-12">
                    <p>Bydanprogram <br> Daniel Franco</p>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
</body>

</html>