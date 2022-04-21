<?php
include 'nav.php';
session_start();
if(!isset($_SESSION['user'])){
    header('Location: index.php');
}
?>
    <section class="pt-3 mt-5">
        <div class="container-fluid">
            <img class="img-fluid" src="images/men/shop-landing.jpg" alt="">
        </div>
    </section>
    <section class="py-5 px-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-3">
                    <h1 id="category">Caterogy</h1>
                    <div id="shop-category" class="d-flex flex-md-column justify-content-evenly">
                        <a class=" my-3 text-decoration-none text-dark" href="#">Men</a>
                        <a class=" my-3 text-decoration-none text-dark" href="#">Women</a>
                        <a class=" my-3 text-decoration-none text-dark" href="#">Kids</a>
                    </div>
                </div>
                <div class="col-md-9 mt-3">
                    <div>
                        <h1 id="products">Products</h1>
                    </div>
                    <div class="row text-center text-lg-start gy-3">
                        <div class="col-lg-3 col-6">
                            <div class="card h-100">
                                <div class="card-body p-0 text-center">
                                    <img class="img-fluid" src="images/men/jeans-1.jpg" alt="">
                                </div>
                                <div class="p-3 px-lg-5">
                                    <h3 class="card-title">Jeans</h3>
                                    <h4 class="card-text">ABC Brand</h4>
                                    <p class="card-text lead">PHP 100.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card h-100">
                                <div class="card-body p-0 text-center">
                                    <img class="img-fluid" src="images/men/shoe-1.jfif" alt="">
                                </div>
                                <div class="p-3 px-lg-5">
                                    <h3 class="card-title">Highcut Shoe</h3>
                                    <h4 class="card-text">XYZ Brand</h4>
                                    <p class="card-text lead"> PHP 150.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card h-100">
                                <div class="card-body p-0 text-center">
                                    <img class="img-fluid" src="images/men/tshirt-3.jpg" alt="">
                                </div>
                                <div class="p-3 px-lg-5">
                                    <h3 class="card-title">Tshirt</h3>
                                    <h4 class="card-text">CDE Brand</h4>
                                    <p class="card-text lead">PHP 80.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card h-100">
                                <div class="card-body p-0 text-center">
                                    <img class="img-fluid" src="images/men/tshirt-4.jpg" alt="">
                                </div>
                                <div class="p-3 px-lg-5">
                                    <h3 class="card-title">Long Sleeves</h3>
                                    <h4 class="card-text">CDE Brand</h4>
                                    <p class="card-text lead">PHP 80.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card h-100">
                                <div class="card-body p-0 text-center">
                                    <img class="img-fluid" src="images/men/jeans-1.jpg" alt="">
                                </div>
                                <div class="p-3 px-lg-5">
                                    <h3 class="card-title">Jeans</h3>
                                    <h4 class="card-text">ABC Brand</h4>
                                    <p class="card-text lead">PHP 100.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card h-100">
                                <div class="card-body p-0 text-center">
                                    <img class="img-fluid" src="images/men/shoe-1.jfif" alt="">
                                </div>
                                <div class="p-3 px-lg-5">
                                    <h3 class="card-title">Highcut Shoe</h3>
                                    <h4 class="card-text">XYZ Brand</h4>
                                    <p class="card-text lead"> PHP 150.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card h-100">
                                <div class="card-body p-0 text-center">
                                    <img class="img-fluid" src="images/men/tshirt-3.jpg" alt="">
                                </div>
                                <div class="p-3 px-lg-5">
                                    <h3 class="card-title">Tshirt</h3>
                                    <h4 class="card-text">CDE Brand</h4>
                                    <p class="card-text lead">PHP 80.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card h-100">
                                <div class="card-body p-0 text-center">
                                    <img class="img-fluid" src="images/men/tshirt-4.jpg" alt="">
                                </div>
                                <div class="p-3 px-lg-5">
                                    <h3 class="card-title">Long Sleeves</h3>
                                    <h4 class="card-text">CDE Brand</h4>
                                    <p class="card-text lead">PHP 80.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card h-100">
                                <div class="card-body p-0 text-center">
                                    <img class="img-fluid" src="images/men/jeans-1.jpg" alt="">
                                </div>
                                <div class="p-3 px-lg-5">
                                    <h3 class="card-title">Jeans</h3>
                                    <h4 class="card-text">ABC Brand</h4>
                                    <p class="card-text lead">PHP 100.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card h-100">
                                <div class="card-body p-0 text-center">
                                    <img class="img-fluid" src="images/men/shoe-1.jfif" alt="">
                                </div>
                                <div class="p-3 px-lg-5">
                                    <h3 class="card-title">Highcut Shoe</h3>
                                    <h4 class="card-text">XYZ Brand</h4>
                                    <p class="card-text lead"> PHP 150.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card h-100">
                                <div class="card-body p-0 text-center">
                                    <img class="img-fluid" src="images/men/tshirt-3.jpg" alt="">
                                </div>
                                <div class="p-3 px-lg-5">
                                    <h3 class="card-title">Tshirt</h3>
                                    <h4 class="card-text">CDE Brand</h4>
                                    <p class="card-text lead">PHP 80.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card h-100">
                                <div class="card-body p-0 text-center">
                                    <img class="img-fluid" src="images/men/tshirt-4.jpg" alt="">
                                </div>
                                <div class="p-3 px-lg-5">
                                    <h3 class="card-title">Long Sleeves</h3>
                                    <h4 class="card-text">CDE Brand</h4>
                                    <p class="card-text lead">PHP 80.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="container my-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center fs-6">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

   <!--! footer -->
   <footer class="p-5 bg-dark mt-5">
        <div class="container">
            <div class="fluid-container text-light">
                <h2 class="text-center">Relepan Ni Kym</h2>
                <p class="text-center fs-4 lead">Sign up to get notifed on our new release</p>
                <div class="input-group news-input w-lg-50 mb-3">
                    <input type="text" class="form-control" placeholder="Enter Email" aria-label="Enter Email"
                        aria-describedby="button-addon2">
                    <button class="btn btn-secondary" type="button" id="button-addon2">Sign up</button>
                </div>
                <div class="row text-md-center fs-5">
                    <div class="col-md-4 my-3">
                        <h1>About Us</h1>
                        <div class="d-flex flex-column fs-4">
                            <a class="text-decoration-none text-white" href="">Our Story</a>
                            <a class="text-decoration-none text-white" href="">Why Relepan Ni Kym?</a>
                            <a class="text-decoration-none text-white" href="">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <h1>Customer Care</h3>
                            <div class=" d-flex flex-column fs-4">
                                <a class="text-decoration-none text-white" href="">Shipping</a>
                                <a class="text-decoration-none text-white" href="">Return</a>
                                <a class="text-decoration-none text-white" href="">Payment Methods</a>
                                <a class="text-decoration-none text-white" href="">FAQ</a>
                            </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <h1>Contact</h1>
                        <div class=" d-flex flex-column fs-4">
                            <p class="text-decoration-none">Relepannikym@gmail.com</p>
                        </div>
                        <div>
                            <a href="#"><i class="bi bi-twitter text-white mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-white mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-white mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto text-md-center">
            <a class="btn btn-lg btn-outline-light text-white text-decoration-none fs-5" href="destroy.php">Logout</a>
            </div>
            <p class="lead text-white text-end mt-5">Copy Right &copy; 2022</p>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
</body>

</html>