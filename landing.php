<?php
include 'nav.php';
session_start();
if(!isset($_SESSION['user'])){
    header('Location: index.php');
}
?>

    <!-- * landing -->
    <section class="mt-5">
        <?php echo "<h1 id='landing-h1' class='text-center px-5 pb-4 mt-5'>Welcome sa " . $_SESSION['user'] . " Relepan</h1>"; ?>
        <div class="fluid-container">
            <img id="landing-pic" src="images/men/shirts-landing-2.jpg" class=" w-100 align-content-center" alt="">
        </div>
    </section>
    <!-- *featured -->
    <section id="featured" class="my-5">
        <h2 id="featured-heading" class="text-center">Featured Outfits</h2>
        <div class="fluid-container">
            <div class="row g-0">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <img class="img-fluid" src="images/men/outfit-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <img class="img-fluid" src="images/men/outfit-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <img class="img-fluid" src="images/men/outfit-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <img class="img-fluid" src="images/men/outfit-4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- * Shirts -->
    <section class="p-md-5 p-3" id="shirts">
        <div class="fluid-container">
            <h1 id="shirts-heading" class="text-center">Chothes We Sell</h1>
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
            </div>
        </div>
        <div class="d-flex flex-column my-5">
            <a href="shop.html" class="btn btn-outline-dark align-self-center">Sign up to view more</a>
        </div>
    </section>
    <!-- * about us -->
    <section id="about" class="p-5 my-5">
        <div class="fluid-container">
            <div class="row">
                <div class="col-12 col-lg-6 h-50 text-center align-content-center">
                    <h1 class="mt-2">About Us</h1>
                </div>
                <div class="col-12 col-lg-6 h-50 d-flex flex-column text-center fluid-container text-lg-start">
                    <p class="lead w-100">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolor soluta ipsam nulla id ea voluptatem error aliquam vero cum autem
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam repellendus sequi dicta ad
                        fuga. Aliquid amet quo aliquam quia animi quod minus quisquam, rerum iste, eligendi laboriosam
                        placeat. Natus, reprehenderit error odit aspernatur animi quibusdam perferendis sapiente
                        voluptatem culpa eos amet expedita magnam. Odio ab labore eius optio, vitae voluptates!!
                    </p>
                    <a href="#about" class="btn btn-outline-dark align-self-center align-self-lg-start mt-3 mb-5">Get
                        To Know Us More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- * footer -->
    <footer class="p-5 bg-dark">
        <div class="container">
            <div class="fluid-container text-light">
                <h2 class="text-center">Relepan Ni Kym</h2>
                <p class="text-center fs-4 lead">Sign up to get notifed on our new release</p>
                <div class="input-group news-input w-lg-50 mb-3">
                    <input type="text" class="form-control" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
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
                                <a class="text-decoration-none text-white" href="#">Shipping</a>
                                <a class="text-decoration-none text-white" href="#">Return</a>
                                <a class="text-decoration-none text-white" href="#">Payment Methods</a>
                                <a class="text-decoration-none text-white" href="#">FAQ</a>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>