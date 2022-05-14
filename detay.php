<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Eticaret Shop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./style/css/styles.css" rel="stylesheet" />
</head>

<body>

    <?php
    include 'config.php';
    ?>



    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Eticaret Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li> -->
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-light text-black ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <!-- <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header> -->
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="py-5 col-lg-6">
                <!-- Featured blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="./style/img/101.jpg" alt="..." /></a>
                    <div class="card-body">
                        <!-- <div class="small text-muted">January 1, 2022</div> -->
                        <h2 class="card-title">Chuck 70</h2>
                        <ul class="c-detay">
                            <li><strong>Numara</strong> <span>45</span></li>
                            <li><strong>Numara</strong> <span>46</span></li>
                            <li><strong>Numara</strong> <span>47</span></li>
                            <li><strong>Numara</strong> <span>48</span></li>
                            <li><strong>Numara</strong> <span>49</span></li>
                            <li><strong>Numara</strong> <span>50</span></li>
                            <li><strong>Numara</strong> <span>51</span></li>
                            <li><strong>Numara</strong> <span>52</span></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- Side widgets-->
            <div class="py-5 col-lg-6">




                <?php
                $sorgu = "SELECT * FROM nft, satici";
                $sorguSonucu = mysqli_query($baglanti, $sorgu) or trigger_error("Hata: " . mysqli_error($mysqli), E_USER_ERROR);
                if ($sorguSonucu) {
                    echo "<div class='card business mb-4'>";
                    while ($kayit = mysqli_fetch_assoc($sorguSonucu)) {

                        echo "<div class='c-nft'>" .
                            "<span><img src='" . $kayit['nft_img'] . "' alt=''></span>" .
                            "</div>" .
                            "<div class='c-nft-info'>".

                            "<div class='satici-img'><img src='" . $kayit['satici_img'] . "' alt=''></div>".
                            "<div class='satici-adi'>Mağaza Adı: " . $kayit['satici_name'] .  " </div>".
                            "<div class='satici-puan'>Mağaza Puanı:  ". $kayit['satici_puan'] ." </div>".
                            "<a class='satici-sat' href='urun-sorgu'>Ürün Sat</a>".
                            "</div>".
                            "</div>";
                    }
                }

                ?>

                <!-- "<div class='c-nft-info'>".
                    "<span>"."Detay:". $kayit['nft_info'] ." <br></span>". "<br> tarih:" . $kayit['nft_date'].
                    "</div>". -->


                <!-- shoping CART -->
                <div class="card mb-4">
                    <div class="card-title c-title">Chuck 70</div>
                    <div class="c-price">
                        250.00 TL
                    </div>
                    <div class="c-addcart">
                        Sepete Ekle
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Section-->
    <section class="py-0">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <a href="detay.php"><img class="card-img-top" src="./style/img/001.jpg" alt="..." /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="detay.php">View options</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <a href="detay.php"><img class="card-img-top" src="./style/img/001.jpg" alt="..." /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="detay.php">View options</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <a href="detay.php"><img class="card-img-top" src="./style/img/001.jpg" alt="..." /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="detay.php">View options</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <a href="detay.php"><img class="card-img-top" src="./style/img/001.jpg" alt="..." /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="detay.php">View options</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>