<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Fontawsome -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('lp/') ?>css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">


    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .testimonial figure img {
            width: 70px;
            align-items: center;
            margin: 10px 15px;
            opacity: 0.7;
        }

        .testimonial figure img.utama {
            width: 90px;
            align-items: center;
            margin: 10px 15px;
            opacity: 1;
            margin-top: 10px;
        }

        .testimonial figure {
            text-align: center;
        }
    </style>

</head>

<body>


    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003B45  !important;">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" style="font-family: cursive;">Buah Kita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('C_Auth/loginUser') ?>">Sign In</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('C_Auth/registerUser') ?>">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="lokal object-fit-cover" style="background-image: url('<?= base_url('assets/img/buah1.jpg') ?>')">
        <div class="container px-4">
            <div class="container">
                <!-- Heading Row-->
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-lg-7 my-3"><img class="img-fluid rounded mb-4 mb-lg-0" src="assets/img/buah.webp" alt="thumbail buah" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                    </div>
                    <div class="col-lg-5 my-3" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                        <h1 class="font-weight-light fw-bold" style="font-family: cursive;">Nikmati
                            Keajaiban Rasa Buah
                            Lokal &
                            Import Tanpa Batas!
                        </h1>
                        <p>Selamat datang di Buah Kita, surganya buah-buahan segar dan lezat! Temukan kelezatan
                            alami di setiap gigitan dengan buah-buahan pilihan terbaik langsung dari kebun kami.</p>
                        <a class="btn fw-bold mx-auto mb-5 button-33 gelatine" href="<?= base_url('C_Auth/loginUser') ?>">ORDER
                            NOW !</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="" class="float bounce2" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>

    <div class="lokal color1 object-fit-cover" style="background-image: url('<?= base_url('assets/img/daun2.png') ?>')">
        <div class="container px-4 card-kategori">
            <div class="card text-white mb-5 py-4 text-left card-title-top mt-0" data-aos="fade-down" data-aos-duration="1000">
                <div class="card-body">
                    <h3 class="text-center mb-5 fw-bold" style="font-family: cursive;">Keunggulan Buah Kita</h3>
                    <div class="row text-center">
                        <div class="col-md-4 my-3 ">
                            <img src="assets/img/kualitas.png" alt="">
                            <h5 class="text-center fw-bold" style="font-family: cursive;">Kualitas Buah yang Baik</h5>
                            <p class="text-white m-0">Kami akan memilih buah-buahan yang segar, matang, dan memiliki
                                rasa yang enak. Dengan membeli buah-buahan di Buah Kita yang berkualitas, Anda dapat
                                menikmati manfaat nutrisi yang maksimal dari buah-buahan yang Anda konsumsi</p>
                        </div>
                        <div class="col-md-4 my-3">
                            <img src="assets/img/buahan.png" alt="">
                            <h5 class="text-center fw-bold" style="font-family: cursive;">Beragam Pilihan Buah</h5>
                            <p class="text-white m-0">Anda dapat menemukan berbagai jenis buah yang mungkin sulit Anda
                                temukan di tempat lain. Dengan banyaknya pilihan buah, Anda dapat mengeksplorasi dan
                                mencoba buah-buahan baru yang mungkin memiliki manfaat kesehatan yang berbeda</p>
                        </div>
                        <div class="col-md-4 my-3 ">
                            <img src="assets/img/kebersihan.png" alt="">
                            <h5 class="text-center fw-bold" style="font-family: cursive;">Kebersihan dan Keamanan</h5>
                            <p class="text-white m-0">Kami menyimpan dan memajang buah-buahan dengan cara yang
                                higienis, serta menjaga agar buah-buahan tetap segar dan tidak terkontaminasi. Ini
                                penting untuk menjaga kualitas dan kesegaran buah-buahan yang Anda beli</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5" data-aos="zoom-in" data-aos-duration="1000">
                <div class="col-md-4 mb-5 mt-5">
                </div>
            </div>
        </div>
    </div>


    <!-- Call to Action-->
    <div class="color1 lokal object-fit-cover" style="background-image: url('<?= base_url('assets/img/buah4.jpg') ?>')">
        <div class="container px-4 card-kategori" id="lokal">
            <div class="card text-white mb-5 py-4 text-left card-title-top" data-aos="fade-down" data-aos-duration="1000">
                <div class="card-body">
                    <h4 class="text-center" style="font-family: cursive;">Buah Lokal</h4>
                    <p class="text-white m-0">Selamat datang di dunia buah lokal yang menghadirkan keaslian dan
                        kelezatan buah-buahan dari tanah air. Indonesia memiliki ragam buah-buahan lokal yang kaya akan
                        rasa dan nutrisi</p>
                </div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5" data-aos="zoom-in" data-aos-duration="1000">
                <?php foreach ($barangLokal as $b) : ?>

                    <?php if ($b['stock'] == 0) { ?>

                        <div class="col-md-4 mb-5 mt-5">
                            <div class="card h-100">
                                <img src="<?= base_url('assets/img/sold.png') ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title"><?= $b['nama_barang'] ?></h2>
                                    <p class="card-text"><?= $b['deskripsi'] ?></p>
                                </div>
                                <div class="card-footer fw-bold py-3">
                                  <button class="btn btn-produk button-33 btn-sm">SOLD OUT</button>
                                </div>
                            </div>
                        </div>

                    <?php } else { ?>

                        <div class="col-md-4 mb-5 mt-5">
                            <div class="card h-100">
                                <img src="<?= base_url('assets/uploads/' . $b['img']) ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title"><?= $b['nama_barang'] ?></h2>
                                    <p class="card-text"><?= $b['deskripsi'] ?></p>
                                </div>
                                <div class="card-footer fw-bold py-3">
                                    <a href="<?= base_url('C_Auth/loginUser') ?>"> <button class="btn btn-produk button-33 btn-sm">Rp.<?= $b['harga'] ?></button></a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="color1 lokal object-fit-cover" style="background-image: url('<?= base_url('assets/img/daun2.png') ?>')">
        <div class="container px-4 card-kategori">
            <div class="card text-white mb-5 py-4 text-left card-title-top mt-0" data-aos="fade-down" data-aos-duration="1000">
                <div class="card-body">
                    <h3 class="text-center mb-5" style="font-family: cursive;">Manfaat Mengkonsumsi Buah - Buahan</h3>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <h5 class="text-center my-3" style="font-family: cursive;">Sumber Nutrisi yang Kaya</h5>
                            <p class="text-white m-0">Buah-buahan mengandung berbagai macam nutrisi penting seperti
                                vitamin, mineral, serat pangan, dan senyawa antioksidan. Nutrisi-nutrisi ini memiliki
                                peran vital dalam menjaga kesehatan tubuh</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center my-3" style="font-family: cursive;">Mencegah Penyakit Kronis</h5>
                            <p class="text-white m-0">Buah-buahan alami rendah lemak, kolesterol, dan sodium, sehingga
                                baik untuk kesehatan jantung. Mengkonsumsi buah-buahan secara teratur dapat membantu
                                menurunkan risiko penyakit jantung, stroke, dan tekanan darah tinggi</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center my-3" style="font-family: cursive;">Mendukung Pencernaan yang Sehat
                            </h5>
                            <p class="text-white m-0"> Buah-buahan kaya akan serat pangan, baik serat larut maupun serat
                                tidak larut. Serat larut membantu melambatkan penyerapan glukosa dan menurunkan
                                kolesterol LDL (kolesterol jahat) dalam tubuh</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5" data-aos="zoom-in" data-aos-duration="1000">
                <div class="col-md-4 mb-5 mt-5">
                </div>
            </div>
        </div>
    </div>

    <div class="lokal object-fit-cover" style="background-image: url('<?= base_url('assets/img/buah5.jpg') ?>')">
        <div class="container px-4 card-kategori" id="import">

            <div class="card text-white mb-5 py-4 text-left card-title-top mt-0" data-aos="fade-down" data-aos-duration="1000">
                <div class="card-body">
                    <h4 class="text-center" style="font-family: cursive;">Buah Import</h4>
                    <p class="text-white m-0">Selamat datang di dunia buah impor yang menawarkan berbagai kelezatan dan
                        keunikan dari berbagai belahan dunia. Diperkenalkan dari negara asal mereka, buah-buahan impor
                        memberikan pengalaman kuliner yang tak terlupakan</p>
                </div>
            </div>



            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5" data-aos="zoom-in" data-aos-duration="1000">
                <?php foreach ($barangImport as $b) : ?>
                    <div class="col-md-4 mb-5 mt-5">
                        <div class="card h-100">
                            <img src="<?= base_url('assets/uploads/' . $b['img']) ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title"><?= $b['nama_barang'] ?></h2>
                                <p class="card-text"><?= $b['deskripsi'] ?></p>
                            </div>
                            <div class="card-footer fw-bold py-3">
                                <a href="<?= base_url('C_Auth/loginUser') ?>"><button class="btn btn-produk button-33 btn-sm">Rp.<?= $b['harga'] ?></button></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- testimonial -->
    <div class="color1 lokal" style="background-image: url('<?= base_url('assets/img/daun2.png') ?>')">
        <div class="px-4 card-kategori">
            <h3 class="text-center text-white my-5" style="font-family: cursive;">Testimoni</h3>

            <div class="div container-fluid">
                <div class="container my-5">
                    <div id="carouselExampleIndicators" class="carousel slide">

                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner my-5">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card my-3">
                                            <img src="assets/img/img1.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Dewi</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make
                                                    up the bulk of the card's content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card my-3">
                                            <img src="assets/img/img2.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Siti</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make
                                                    up the bulk of the card's content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card my-3">
                                            <img src="assets/img/img3.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Fitri</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make
                                                    up the bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card my-3">
                                            <img src="assets/img/img2.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Indah</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make
                                                    up the bulk of the card's content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card my-3">
                                            <img src="assets/img/img3.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Dinda</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make
                                                    up the bulk of the card's content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card my-3">
                                            <img src="assets/img/img1.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Tumini</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make
                                                    up the bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- <section class="testimonial my-5">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8">
                        <h5 style="font-weight: 300; font-style: italic;">" Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Id,
                            praesentium. "</h5>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 d-flex justify-content-center">
                        <figure class="figure">
                            <img src="assets/img/img1.png" class="figure-img img-fluid rounded-circle my-3" alt="...">

                        </figure>
                        <figure class="figure">
                            <img src="assets/img/img2.png" class="figure-img img-fluid rounded-circle my-3 utama" alt="...">
                            <figcaption class="figure-caption">
                                <h5 class="fw-bold ">Tumini</h5>
                                <span class="">Ibu rumah tangga</span>
                            </figcaption>
                        </figure>
                        <figure class="figure">
                            <img src="assets/img/img3.png" class="figure-img img-fluid rounded-circle my-3" alt="...">

                        </figure>
                    </div>
                </div>
            </section> -->

        </div>





        <!-- Remove the container if you want to extend the Footer to full width. -->


        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #003B45 ">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-between p-4" style="background-color: #003B45 ">
                <!-- Left -->
                <div class="me-5">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold">Buah Kita</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                Terima kasih telah memilih Buah Kita! Kami siap melayani Anda dengan buah-buahan segar
                                dan berkualitas. Kunjungi kami lagi untuk pengalaman berbelanja yang menyegarkan!
                            </p>
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Products</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#lokal" class="text-white">Buah Buahan <?= $lokal['kategori'] ?></a>
                            </p>
                            <p>
                                <a href="#import" class="text-white">Buah Buahan <?= $import['kategori'] ?></a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->


                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Contact</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p><i class="fas fa-home mr-3"></i> Griya Mutiara Banguntapan, Bantul,Yogyakarta, Indonesia
                            </p>
                            <p><i class="fas fa-envelope mr-3"></i> buahkita@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> +62 81215953726</p>

                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © Buah Kita 2023 Copyright
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
        <!-- End of .container -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url('lp/') ?>js/scripts.js"></script>

        <script>
            AOS.init();
        </script>
</body>

</html>