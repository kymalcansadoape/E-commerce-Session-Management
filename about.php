<?php
include 'nav.php';
session_start();
if(!isset($_SESSION['user'])){
    header('Location: index.php');
}
?>
    <section id="about" class="my-5">
        <div class="container my-5">
            <div class="container my-5">
                <div>
                    <h1>Our Story</h1>
                </div>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum distinctio aliquid iure. Ipsum,
                    pariatur. Odio reiciendis dignissimos ipsum corporis, voluptas sapiente dolores, delectus eaque
                    laborum consectetur minima quidem! Similique eligendi magnam mollitia exercitationem facere in
                    placeat? Numquam, quos! Tempora illum aspernatur nisi? Ullam corrupti facilis accusantium,
                    voluptatibus tempore cumque iusto?
                </p>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum distinctio aliquid iure. Ipsum,
                    pariatur. Odio reiciendis dignissimos ipsum corporis, voluptas sapiente dolores, delectus eaque
                </p>
            </div>
            <div class="container my-5">
                <div>
                    <h1>Why Relepan Ni Kym?</h1>
                </div>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum distinctio aliquid iure. Ipsum,
                    pariatur. Odio reiciendis dignissimos ipsum corporis, voluptas sapiente dolores, delectus eaque
                    laborum consectetur minima quidem! Similique eligendi magnam mollitia exercitationem facere in
                    placeat? Numquam, quos! Tempora illum aspernatur nisi? Ullam corrupti facilis accusantium,
                    voluptatibus tempore cumque iusto?
                </p>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum distinctio aliquid iure. Ipsum,
                    pariatur. Odio reiciendis dignissimos ipsum corporis, voluptas sapiente dolores, delectus eaque
                </p>
            </div>
            <div class="container my-5">
                <div>
                    <h1>Privary Policy</h1>
                </div>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum distinctio aliquid iure. Ipsum,
                    pariatur. Odio reiciendis dignissimos ipsum corporis, voluptas sapiente dolores, delectus eaque
                    laborum consectetur minima quidem! Similique eligendi magnam mollitia exercitationem facere in
                    placeat? Numquam, quos! Tempora illum aspernatur nisi? Ullam corrupti facilis accusantium,
                    voluptatibus tempore cumque iusto?
                </p>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum distinctio aliquid iure. Ipsum,
                    pariatur. Odio reiciendis dignissimos ipsum corporis, voluptas sapiente dolores, delectus eaque
                </p>
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
            </div>
            <div class="mx-auto text-md-center">
            <a class="btn btn-lg btn-outline-light text-white text-decoration-none fs-5" href="destroy.php">Logout</a>
            </div>
            <p class="lead text-white text-end mt-5">Copy Right &copy; 2022</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>