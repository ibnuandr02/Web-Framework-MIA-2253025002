<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">

    <title>Contact - Darisset</title>
</head>

<body>

    <!-- navbar -->
    <nav class="nav" id="nav">
        <div class="nav-center">
            <!-- nav header -->
            <div class="nav-header">
                <img src="./img/Logo KampusXplore.png" class="nav-logo" alt="" />
                <button class="nav-btn" id="nav-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <!-- nav links -->
            <ul class="nav-links">
                <li><a href='/'\>Beranda</a></li>
                <li><a href='/tentang'>Tentang</a></li>
                <li><a href='/contact'>Kontak</a></li>
                <div class="dropdown">
                    <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-expanded="false">
                        Universitas
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="blog.html">Universitas yang ada di Lampung</a></li>
                        <li><a class="dropdown-item" href="category.html">Kategori</a></li>
                        <li><a class="dropdown-item" href="detail.html">Detail</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="UserDropdown">
                    </ul>
                </div>
            </ul>
        </div>
    </nav>

    <!-- sidebar -->
    <aside class="sidebar" id="sidebar">
        <div>
            <button id="close-btn" class="close-btn">
                <i class="fas fa-times"></i>
            </button>
            <ul class="sidebar-links">
                <li><a href="index.html">home</a></li>
                <li><a href="about.html">about</a></li>
                <li><a href="contact.html">contact</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="category.html">Category</a></li>
                <li><a href="detail.html">Detail</a></li>
                <li><a href="user.html">user</a></li>
            </ul>
            <ul class="social-icons">
                <!-- single item -->
                <li class="pr-3">
                    <a href="https://www.twitter.com" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <!-- end of single item -->
                <!-- single item -->
                <li>
                    <a href="https://www.twitter.com" class="social-icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <!-- end of single item -->
                <!-- single item -->
                <li>
                    <a href="https://www.twitter.com" class="social-icon">
                        <i class="fab fa-squarespace"></i>
                    </a>
                </li>
                <!-- end of single item -->
                <!-- single item -->
                <li>
                    <a href="https://www.twitter.com" class="social-icon">
                        <i class="fab fa-behance"></i>
                    </a>
                </li>
                <!-- end of single item -->
                <!-- single item -->
                <li>
                    <a href="https://www.twitter.com" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <!-- end of single item -->
            </ul>
        </div>
    </aside>
    <!-- end of sidebar -->

    <div class="blog pb-5">
        <div class="container">
            <!-- contact -->
            <div class="section-title">
                <h1>Kontak Kami</h1>
                <div class="underline"></div>
            </div>
            <section class="contact p-5">
                <div class="section-center clearfix">
                    <!-- contact info -->
                    <article class="contact-info">
                        <!-- contact item -->
                        <div class="contact-item">
                            <h4 class="contact-title">
                                <span class="contact-icon">
                                    <i class="fas fa-location-arrow"></i>
                                </span>
                                Alamat
                            </h4>
                            <p class="contact-text">
                                Jl. Wan Abdurrahman <br />
                                Kemiling, Bandar Lampung
                            </p>
                        </div>
                        <!-- end of contact item -->
                        <!-- contact item -->
                        <div class="contact-item">
                            <h4 class="contact-title">
                                <span class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                email
                            </h4>
                            <p class="contact-text">
                                kampusxplore@gmail.com
                            </p>
                        </div>
                        <!-- end of contact item -->
                        <!-- contact item -->
                        <div class="contact-item">
                            <h4 class="contact-title">
                                <span class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </span>
                                telepon
                            </h4>
                            <p class="contact-text">
                                +62 888 1302 2210
                            </p>
                        </div>
                        <!-- end of contact item -->
                    </article>
                    <!-- contact form -->
                    <article class="contact-form">
                        <h3>kontak kami</h3>
                        <form>
                            <div class="form-group">
                                <!-- inputs -->
                                <input type="text" placeholder="nama" class="form-control mb-3" name="name" />
                                <input type="email" placeholder="email" class="form-control mb-3" name="email" />
                                <textarea name="message" placeholder="pesan" class="form-control mb-3"
                                    rows="5"></textarea>
                            </div>
                            <!-- button -->
                            <button type="submit" class="contact-btn btn">kirim</button>
                        </form>
                    </article>
                </div>
            </section>
            <!-- end of contact -->
        </div>
    </div>

    <!-- contact -->
    <section class="section newsletter" id="newsletter">
        <div class="container section-center newsletter-center">
            <div class="newsletter-title">
                <h3>ingin info dan pembaruan postingan terbaru?</h3>
                <p>Daftar untuk menerima publikasi dan dapatkan informasi terkini</p>
            </div>
            <form class="newsletter-form">
                <input type="email" class="form-control" placeholder="email anda" />
                <button type="submit" class="btn-submit">kirim</button>
            </form>
        </div>
    </section>
    <!-- end of contact -->

    <footer class="footer">
        <ul class="social-icons mt-5">
            <!-- single item -->
            <li class="pr-3">
                <a href="https://www.facebook.com" class="social-icon">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <!-- end of single item -->
            <!-- single item -->
            <li>
                <a href="https://www.linkedin.com" class="social-icon">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
            <!-- end of single item -->
            <!-- single item -->
            <li>
                <a href="https://www.squarespace.com" class="social-icon">
                    <i class="fab fa-squarespace"></i>
                </a>
            </li>
            <!-- end of single item -->
            <!-- single item -->
            <li>
                <a href="https://www.behance.com" class="social-icon">
                    <i class="fab fa-behance"></i>
                </a>
            </li>
            <!-- end of single item -->
            <!-- single item -->
            <li>
                <a href="https://www.instagram.com" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <!-- end of single item -->
        </ul>

        <p>&copy; <span id="date"></span> KampusXplore Lampung. All rights reserved.</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="./js/popper.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>