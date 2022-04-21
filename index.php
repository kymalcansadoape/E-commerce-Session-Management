<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Login | Relepan Ni Kym</title>
</head>

<body>
    <nav class="nav navbar bg-dark text-white bg-danger w-100">
        <h1 class="navbar-brand my-3 mx-3">Relepan Ni Kym</h1>
    </nav>
    <section id="form" class="p-4 pt-md-3 p-md-5 mt-4 ">
        <div class="container">
            <form
                class=" col-12 col-md-8 col-lg-5 mx-auto px-lg-4 py-lg-4 px-3 border border-1 rounded-3 shadow bg-white rounded"
                action="logic.php" method="post">
                <h1 class="text-center">Login</h1>
                <div class="form-group">
                    <label for="email">Username:</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="form-control" type="password" name="password" id="password"
                        placeholder="Enter Password">
                </div>
                <div class="d-flex justify-content-between">
                    <label for="checkBox1"><input type="checkbox" name="checkBox1" id="checkBox1">Remember me</label>
                    <a class="text-black" href="#">Forgot Password?</a>
                </div>
                <div class="text-center">
                    <button class="btn btn-outline-dark w-50 mx-auto form-control mt-3" type="submit">Login</button>
                </div>
                <h6 class="text-center my-3">or</h6>
                <div class="d-flex justify-content-center fs-4">
                    <a class="text-black mx-2" href="">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a class="text-black mx-2 " href="">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a class="text-black mx-2" href="">
                        <i class="bi bi-google"></i>
                    </a>
                </div>
                <div class="text-center mt-3 mb-0">
                    <p>Don't have an account? <a class="text-black" href="#">Click here</a></p>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>