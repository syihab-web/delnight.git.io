<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Delnight-Corporation</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('images/delnight.png') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <style>
            body{
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: cover;
                overflow-x: hidden;
                background-image: url('{{ asset('images/header2.jpg') }}');
            }
            .demo-wrap {
                position: relative;
             }
            .demo-wrap:before {
                content: ' ';
                display: block;
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                opacity: 0.5;
                background-image: url('{{ asset('images/header1.jpg') }}');
                background-repeat: no-repeat;
                background-position: 50% 0;
                background-size: cover;
                }

                .demo-content {
                position: relative;
                }
                 .icon{
                    border-radius: 20px;
                    background: transparent;
                    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
                    transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
                    padding-bottom: 5%;
                    cursor: pointer;
                }

                .icon:hover{
                    border: 2px solid blue;
                    transform: scale(1.05);
                box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
                }
                .bg {
                position: relative;
             }

                .bg:before {
                content: ' ';
                display: block;
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                opacity: 0.5;
                background-color: rgb(0, 0, 0);
                background-repeat: no-repeat;
                background-position: 50% 0;
                background-size: cover;
                }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3 p-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                       <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                       <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <div class="demo-wrap">
        <header class="masthead">
            <div class="demo-content mt-5">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mt-5">
                        <h1 class="text-uppercase text-white font-weight-bold" data-aos="fade-right" data-aos-duration="1500">Raih kesuksesanmu Bersama </h1>
                        <h1 class="text-uppercase font-weight-bold" style="color: rgb(6, 8, 99)" data-aos="fade-right" data-aos-duration="1500">D<span class="text-uppercase font-weight-bold " style="color: black">elnight</span></h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5" data-aos="fade-left" data-aos-duration="1500">Bersama Delnight mari kita raih kesuksesan bersama.</p>
                        <a class="btn btn-dark btn-xl js-scroll-trigger" href="#about" data-aos="fade-left" data-aos-duration="1500">get started</a>
                    </div>
                </div>
            </div>
            </div>
        </header>
    </div>
     <!-- Services-->
     <section class="page-section bg-dark" id="services">
        <div class="container">
            <h2 class="text-center text-white" data-aos="fade-down" data-aos-duration="1500">Our Services</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-md-6 text-center icon" data-aos="fade-right" data-aos-duration="2000">
                    <div class="mt-5 ">
                        <i class="fas fa-4x fa-laptop-code text-info mb-4"></i>
                        <h3 class="h4 mb-2 text-white">Website</h3>
                        <p class="text-white mb-0"></p>
                    </div>
                </div>
                <div class="col-md-6 text-center icon" data-aos="fade-left" data-aos-duration="2000">
                    <div class="mt-5 ">
                        <i class="fas fa-4x fa-desktop text-info mb-4"></i>
                        <h3 class="h4 mb-2 text-white">Desktop</h3>
                        <p class="text-white mb-0"></p>
                    </div>
                </div>
                <div class="col-md-6 text-center icon" data-aos="fade-right" data-aos-duration="2000">
                    <div class="mt-5 ">
                        <i class="fas fa-4x fa-mobile-alt text-info mb-4"></i>
                        <h3 class="h4 mb-2 text-white">Mobile</h3>
                        <p class="text-white mb-0"></p>
                    </div>
                </div>
                <div class="col-md-6 text-center icon" data-aos="fade-left" data-aos-duration="2000">
                    <div class="mt-5 ">
                        <i class="fas fa-4x fa-cogs text-info mb-4"></i>
                        <h3 class="h4 mb-2 text-white">Maintenance</h3>
                        <p class="text-white mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- About-->
        <section class="page-section bg" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0" data-aos="fade-right" data-aos-duration="1500">About us</h2>
                        <hr class="divider my-4" />
                        <p class="text-white mb-4" data-aos="fade-right" data-aos-duration="1500">Delnight merupakan Startup pengembang website profesional, yang memiliki tenaga ahli yang muda dan kompeten. selain pembuatan dan pengembangan website, kami juga melayani pembuatan dan pengembangan Mobile dan Desktop Application.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services" data-aos="fade-up" data-aos-duration="1500">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-5 pb-3 bg-dark ">
            <h2 class="text-white text-center" data-aos="fade-right" data-aos-duration="1500">Office Location</h2>
            <hr class="divider my-4" />
        </section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.506007176245!2d107.57925611431747!3d-6.94948086996471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8b61f348431%3A0x8d3c5ce1705eb99e!2sGg.%20Adinata%2C%20Margahayu%20Utara%2C%20Kec.%20Babakan%20Ciparay%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040224!5e0!3m2!1sid!2sid!4v1617342286114!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <!-- Portfolio-->
        <section class="page-section bg-dark pt-5">
        <div id="portfolio">
            <div class="container-fluid p-0">
                <h2 class="text-center text-white" data-aos="fade-right" data-aos-duration="1500">Our Clients</h2>
                <hr class="divider my-4" />
                <div class="row no-gutters bg-light">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg">
                            <img class="img-fluid" src="{{ asset('images/smkn4.png') }}" width="100%" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">SMKN 4 Bandung</div>
                                <div class="project-name">4Lab</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-out" data-aos-duration="1500">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg">
                            <img class="img-fluid" src="{{ asset('images/jelita.png') }}" width="100%" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Jelita</div>
                                <div class="project-name">Jelita Mobile</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" >
                            <img class="img-fluid" src="{{ asset('images/slucy.png') }}" width="100%" height="100%" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Slucy</div>
                                <div class="project-name">Slucy Website</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4" data-aos="fade-right" data-aos-duration="1500">Get Your Own Application!</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <div class="card bg-dark" data-aos="fade-right" data-aos-duration="1500" style="width: 100%; height: 100%; border: 2px solid white;">
                            <div class="card-body">
                              <h3 class="card-title text-center text-white">Paket Silver</h3>
                              <h4 class="card-title text-center text-info">Rp. 2.000.000</h4>
                              <h6 class="card-subtitle mb-2 text-muted">Perpanjangan Rp. 1.500.000/Tahun</h6>
                              <hr class="divider my-4" />
                              <p class="card-text">Nama Domain .Com <br><br>
                                Kapasitas Penyimpanan Data Unlimited<br><br>
                                Bandwidth Unlimited<br><br>
                                Desain Web Sesuai Permintaan<br><br>
                                Fasilitas Halaman Admin<br><br>
                                Training Halaman Admin<br><br>
                                1 Akun Webmail<br><br>
                                Maintenance Google Ads 1 Minggu<br><br>
                                Training Optimasi Website</p><br>
                                <a href="" class="btn btn-outline-success">Order Now</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card bg-light" data-aos="zoom-out" data-aos-duration="1500" style="width: 100%; height: 100%; border: 2px solid white;">
                            <div class="card-body">
                              <h3 class="card-title text-center text-dark">Paket Diamond</h3>
                              <h4 class="card-title text-center text-info">Rp. 20.000.000</h4>
                              <h6 class="card-subtitle mb-2 text-muted">Perpanjangan Rp. 7.000.000/Tahun</h6>
                              <hr class="divider my-4" />
                              <p class="card-text text-dark">Nama Domain .Com/Co.id/Sesuai Pesanan <br><br>
                                Kapasitas Penyimpanan Data Unlimited<br><br>
                                Bandwidth Unlimited<br><br>
                                Desain Web Sesuai Permintaan<br><br>
                                Fasilitas Halaman Admin<br><br>
                                Training Halaman Admin<br><br>
                                Unlimited Akun Webmail<br><br>
                                Maintenance Google Ads 1 Bulan<br><br>
                                Training Optimasi Website dan Media Social</p><br>

                                <a href="" class="btn btn-outline-success">Order Now</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card bg-dark" data-aos="fade-left" data-aos-duration="1500" style="width: 100%; height: 100%; border: 2px solid white;">
                            <div class="card-body">
                              <h3 class="card-title text-center text-white">Paket Granite</h3>
                              <h4 class="card-title text-center text-info">Rp. 5.000.000</h4>
                              <h6 class="card-subtitle mb-2 text-muted">Perpanjangan Rp. 2.500.000/Tahun</h6>
                              <hr class="divider my-4" />
                              <p class="card-text">Nama Domain .Com <br><br>
                                Kapasitas Penyimpanan Data Unlimited<br><br>
                                Bandwidth Unlimited<br><br>
                                Desain Web Sesuai Permintaan<br><br>
                                Fasilitas Halaman Admin<br><br>
                                Training Halaman Admin<br><br>
                                Unlimited Akun Webmail<br><br>
                                Maintenance Google Ads 1 Bulan<br><br>
                                Training Optimasi Website</p><br>
                                <a href="" class="btn btn-outline-success">Order Now</a>
                            </div>
                          </div>
                    </div>
                </div>
                </div>
        </section>
        <!-- Contact-->
        <section class="page-section bg" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0 text-white" data-aos="fade-down" data-aos-duration="1500">Let's Get In Touch!</h2>
                        <hr class="divider my-4" />
                        <p class="text-white mb-5" data-aos="zoom-out" data-aos-duration="1500">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-white"></i>
                        <div class="text-white" data-aos="fade-right" data-aos-duration="1500">+62 881-0236-89072</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-white"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block text-white" href="mailto:syihabudin234@gmail.com" data-aos="fade-left" data-aos-duration="1500">syihabudin234@gmail.com</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
       <!-- Footer -->
  <footer class="footer bg-dark pb-5 pt-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#" class="text-info">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#" class="text-info">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#" class="text-info">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#" class="text-info">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Delnight Corporation {{ \Carbon\Carbon::now()->year }}. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#" class="text-info">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#" class="text-info">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="text-info">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
  <script type="text/javascript">
            (function () {
                var options = {
                    whatsapp: "62881023689072", // WhatsApp number
                    instagram: "syihab_end", // Instagram username
                    call_to_action: "Hubungi kami", // Call to action
                    button_color: "#28a745", // Color of button
                    position: "right", // Position may be 'right' or 'left'
                    order: "whatsapp,instagram", // Order of buttons
                };
                var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
        </script>
    </body>
</html>
