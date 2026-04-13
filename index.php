<?php include 'header.php'; ?>

<?php include 'slider.php'; ?>

<?php include 'component/hakkimizda.php'; ?>

<?php include 'component/hizmetlerimiz.php'; ?>

<?php include 'component/neden-biz.php'; ?>

<?php include 'component/marque.php'; ?>

<?php include 'component/urunlerimiz.php'; ?>

<!--==============================
        Process Section five
        ==============================-->
<section class="process-section space bg-theme3 overflow-hidden style-5">
    <div class="container">
        <div class="title-area three text-center">
            <div class="sub-title"><span><i class="asterisk"></i></span>PROJE SÜRECİ</div>
            <h2 class="sec-title">Tamamlanan görev sürecini
                <span class="bold">takip edin</span>
            </h2>
        </div>
        <div class="row gy-30">
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft">
                <div class="process-single-box br-10">
                    <div class="inner-box">
                        <div class="header">
                            <div class="icon"><i class="icon-comercial"></i></div>
                            <h4 class="title m-0">İşletmeler için Ticari<span class="fw-normal"> Planlama</span>
                            </h4>
                        </div>
                        <p class="text">İşletmelerin mevcut durumunu analiz ederek satış, üretim, maliyet ve
                            operasyon süreçlerini stratejik bir çerçevede planlamayı sağlar. Ticari planlama ile
                            kaynaklar daha verimli kullanılır, riskler minimize edilir ve işletmenin
                            sürdürülebilir büyümesi için güçlü bir yol haritası oluşturulur.</p>
                        <div class="box-footer">
                            <div class="box-count">
                                <span>01</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInRight">
                <div class="process-single-box br-10 current">
                    <div class="inner-box">
                        <div class="header">
                            <div class="icon"><i class="icon-infomsg"></i></div>
                            <h4 class="title m-0">Bilgi toplama ve<span class="fw-normal"> Güvenlik</span>
                            </h4>
                        </div>
                        <p class="text">İşletmenin operasyonlarında kullanılan tüm verilerin güvenli bir şekilde
                            toplanmasını, saklanmasını ve yönetilmesini sağlar. Bilgi güvenliği çözümleri ile
                            veri kaybı, yetkisiz erişim ve siber tehditler önlenir; kritik bilgiler korunarak iş
                            sürekliliği sağlanır.</p>
                        <div class="box-footer">
                            <div class="box-count">
                                <span>02</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft">
                <div class="process-single-box br-10">
                    <div class="inner-box">
                        <div class="header">
                            <div class="icon"><i class="icon-finished"></i></div>
                            <h4 class="title m-0">Tamamlanmış İşlemler<span class="fw-normal"> maksimum
                                    etki</span></h4>
                        </div>
                        <p class="text">İş süreçlerinde gerçekleştirilen tüm işlemlerin doğru, hızlı ve sorunsuz
                            bir şekilde sonuçlanmasını amaçlar. Tamamlanmış işlemler sayesinde hem operasyonel
                            verimlilik artar hem de müşteri memnuniyeti yükselir. Böylece işletmenin genel
                            performansı maksimum seviyeye taşınır.</p>
                        <div class="box-footer">
                            <div class="box-count">
                                <span>03</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="wrapper-section br-20 overflow-hidden mx-30 lg-mx-0">

    <!--==============================
                Contact Section Three
                ==============================-->
    <section class="contact-section style-3 overflow-hidden space-top">
        <div class="bg image"><img src="assets/images/contact/hm6-bg01.jpg" alt=""></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-end">
                <div class=" col-xl-7 col-lg-6">
                    <div class="contact-content mb-120">
                        <div class="title-area white two">
                            <div class="sub-title">
                                <span><i class="asterisk"></i></span>RANDEVU ALIN
                            </div>
                            <h2 class="sec-title">Ücretsiz <br> <span class="bold text-theme2">Müşteri
                                    Danışmanlığı</span> Alın
                            </h2>
                            <div class="text">
                                <div class="icon"><i class="fa-solid fa-check"></i></div>
                                <p>Size her zaman yardımcı olmaya hazırız.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="appointment-area">
                        <div class="header">
                            <h2 class="title">İRTİBATA GEÇİN</h2>
                            <span class="availability mb-25">Size her zaman yardımcı olmaya hazırız.</span>
                        </div>
                        <form id="appointment_form" class="appointment-form"
                            action="https://formspree.io/f/mzbnjrnb" method="post">
                            <div class="form-group">
                                <span class="icon"><i class="fa-solid fa-user"></i></span>
                                <input type="text" id="fullName" name="name" placeholder="Adınız Soyadınız"
                                    required autocomplete="on">
                            </div>
                            <div class="form-group">
                                <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                <input type="email" id="userEmail" name="email" placeholder="E Posta Adresi"
                                    required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <select class="custom-select" id="service" name="service" autocomplete="off">
                                    <option value="" disabled selected>Hizmet Seçin</option>
                                    <option value="air">Proje Yönetimi ve Danışmanlık</option>
                                    <option value="ocean">Uygulama Danışmanlığı</option>
                                    <option value="rail">Yazılım Geliştirme</option>
                                    <option value="cargo">Destek & Eğitim Hizmetleri</option>
                                </select>
                            </div>
                            <div class="form-group mb-15">
                                <textarea id="msg" placeholder="Mesajınız..." required></textarea>
                            </div>
                            <div class="form-group terms">
                                <input type="checkbox" id="terms" required>
                                <label for="terms">Tüm şart ve koşulları kabul ediyorum.</label>
                            </div>
                            <button type="submit" class="theme-btn bg-theme"
                                data-loading-text="Lütfen Bekleyiniz...">
                                <span class="link-effect">
                                    <span class="btn-title">GÖNDER</span>
                                </span><i class="fa-regular fa-arrow-right-long"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--==============================
                Brands Section
                ==============================-->
    <div class="brands-section space bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sponsors-outer">
                        <div class="trusted-partners mt--15"><span class="bg-white pr-10">Güvenilir
                                Ortaklarımız</span></div>
                        <div class="brands-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a class="image" href="#">
                                            <img src="assets/images//brands/01.png" alt="Brand 01">
                                            <img src="assets/images//brands/01.png" alt="Brand 01">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a class="image" href="#">
                                            <img src="assets/images/brands/02.png" alt="Brand 02">
                                            <img src="assets/images/brands/02.png" alt="Brand 02">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a class="image" href="#">
                                            <img src="assets/images/brands/03.png" alt="Brand  03">
                                            <img src="assets/images/brands/03.png" alt="Brand  03">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a class="image" href="#">
                                            <img src="assets/images/brands/04.png" alt="Brand 04">
                                            <img src="assets/images/brands/04.png" alt="Brand 04">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a class="image" href="#">
                                            <img src="assets/images/brands/05.png" alt="Brand 05">
                                            <img src="assets/images/brands/05.png" alt="Brand 05">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a class="image" href="#">
                                            <img src="assets/images/brands/06.png" alt="Brand 06">
                                            <img src="assets/images/brands/06.png" alt="Brand 06">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a class="image" href="#">
                                            <img src="assets/images/brands/06.png" alt="Brand 06">
                                            <img src="assets/images/brands/06.png" alt="Brand 06">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>




<?php include 'footer.php'; ?>