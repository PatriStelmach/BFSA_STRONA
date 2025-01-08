<?php
global $pdo;


//if (!isset($_SESSION['user_id'])) {
//    header("Location: login.php");
//    exit();
//}

?>

<html lang="">

<?php include '../includes/head.html';?>

<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <?php include '../includes/header.php'; ?>

    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="col-lg-10 col-md-11 mx-auto">
                            <div class="detail-box">
                                <div>
                                    <!-- <h5>
                                       TRENING PERSONALNY
                                     </h5>
                                     <h4>
                                       POWRÓT PO KONTUZJI
                                     </h4>
                                     <h3>
                                       PRZYGOTOWANIE MOTORYCZNE
                                     </h3>
                                     <h2>
                                       PLANY TRENINGOWE
                                     </h2> -->
                                    <h1>
                                        BFSA Nitaj Stelmach
                                    </h1>
                                    <p>
                                        Siłka dla największych koksów w jg 😎🤙
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="col-lg-10 col-md-11 mx-auto">
                            <div class="detail-box">
                                <div>
                                    <h1>
                                        BFSA Nitaj Stelmach
                                    </h1>
                                    <p>
                                        PLANY TRENINGOWE
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="col-lg-10 col-md-11 mx-auto">
                            <div class="detail-box">
                                <div>
                                    <h1>
                                        BFSA Nitaj Stelmach
                                    </h1>
                                    <p>
                                        PRZYGOTOWANIE MOTORYCZNE
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="col-lg-10 col-md-11 mx-auto">
                            <div class="detail-box">
                                <div>
                                    <h1>
                                        BFSA Nitaj Stelmach
                                    </h1>
                                    <p>
                                        POWRÓT PO KONTUZJI
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="col-lg-10 col-md-11 mx-auto">
                            <div class="detail-box">
                                <div>
                                    <h1>
                                        BFSA Nitaj Stelmach
                                    </h1>
                                    <p>
                                        TRENING PERSONALNY
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
        </div>
    </section>
    <!-- end slider section -->
</div>


<!-- Us section -->

<section class="us_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Dlaczego Mintaj?
            </h2>
        </div>

        <div class="us_container ">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="/images/u-1.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                JAKIŚ BENEFIT PRACY Z TOBĄ
                            </h5>
                            <p>
                                coś tam coś  tam
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="/images/u-4.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                JAKIŚ BENEFIT PRACY Z TOBĄ
                            </h5>
                            <p>
                                Mintaj rybka 2kg
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="/images/u-2.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                JAKIŚ BENEFIT PRACY Z TOBĄ
                            </h5>
                            <p>
                                coś tam coś  tam
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="/images/u-3.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                JAKIŚ BENEFIT PRACY Z TOBĄ
                            </h5>
                            <p>
                                coś tam coś  tam
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end us section -->


<!-- heathy section -->

<section class="heathy_section layout_padding">
    <div class="container">

        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="detail-box">
                    <h2>
                        Dlaczego warto współpracować ze mną?
                    </h2>
                    <p>
                        Jestem fajna rybka z Leszczyńca
                    </p>
                    <div class="btn-box">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end heathy section -->

<!-- trainer section -->

<section class="trainer_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Social Media
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="box">
                    <div class="name">
                        <h5>
                            Nitaj Stelmach
                        </h5>
                    </div>
                    <div class="img-box">
                        <img src="/images/nitaj_sociale.jpg" alt="">
                    </div>
                    <div class="social_box">
                        <a href="https://www.facebook.com/nitaj.trener" target="_blank">
                            <img src="/images/facebook-logo.png" alt="">
                        </a>
                        <a href="https://www.instagram.com/bfsa_nitaj_stelmach/" target="_blank">
                            <img src="/images/instagram-logo.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="box">
                    <div class="name">
                        <h5>
                            Centrum Atletyki
                        </h5>
                    </div>
                    <div class="img-box">
                        <img src="/images/centrum_tlo.jpg" alt="">
                    </div>
                    <div class="social_box">
                        <a href="https://www.facebook.com/centrum.atletyki.jg" target="_blank" >
                            <img src="/images/facebook-logo.png" alt="">
                        </a>
                        <a href="https://www.instagram.com/centrum.atletyki.jg/" target="_blank">
                            <img src="/images/instagram-logo.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end trainer section -->

<!-- contact section -->

<section class="contact_section ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0">
                <div class="img-box">
                    <img src="/images/contact-img.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
                    <div class="heading_container">
                        <h2>
                            Skontaktuj się ze mną
                        </h2>
                    </div>
                    <form action="">
                        <div>
                            <input type="text" placeholder="Imię i Nazwisko" />
                        </div>
                        <div>
                            <input type="email" placeholder="Email" />
                        </div>
                        <div>
                            <input type="text" placeholder="Numer telefonu" />
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Wiadomość" />
                        </div>
                        <div class="d-flex ">
                            <button>
                                Wyślij
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<footer>
    <?php include '../includes/footer.php'; ?>
</footer>




<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/bootstrap.js"></script>

</body>

</html>

