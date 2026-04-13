<?php include 'header.php'; ?>


<!-- Start Breadcrumb Section -->
<!-- ========================================== -->
<section class="breadcrumb-section">
    <div class="bg bg-image" style="background-image: url(assets/images/bg-img/breadcrumb.jpg)"></div>
    <div class="container">
        <div class="title-outer">
            <div class="page-title">
                <h2 class="title">İletişim</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">Ana Sayfa</a></li>
                    <li>İletişim</li>
                </ul>
            </div>
            <div class="text">
                <div class="icon"><i class="icon-arrow-up-right"></i></div>
                <p>Her işletmenin ihtiyacının farklı olduğunu biliyor, iş süreçlerinize özel çözümler tasarlayarak verimliliği artıran güçlü sistemler kuruyoruz.</p>
            </div>
        </div>
    </div>
</section>
<!-- ========================================== -->
<!-- End Breadcrumb Section -->

<!--==============================
        Contact Section Two
        ==============================-->
<section class="contact-section style-2 space bg-theme3">
    <div class="container">
        <div class="row gy-30">
            <div class="col-lg-5">
                <div class="contact-content-wrap">
                    <div class="title-area twoT">
                        <div class="sub-title"><span><i class="asterisk"></i></span>İLETİŞİM</div>
                        <h2 class="sec-title">Bizimle İrtibatta Kalın<br> <span class="bold">İletişim</span> Bilgileri</h2>
                        <p class="sec-text text-gray">İşletmenize yardımcı olmak için her zaman hazırız. Bizimle görüşelim.</p>
                    </div>
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fa-sharp fa-regular fa-location-dot"></i>
                            </div>
                            <div class="info">
                                <h4 class="title">Adresimiz</h4>
                                <p>BARIŞ MAH. 1806/2. SK. Kapı No:10 <br>Daire No:10 GEBZE/KOCAELİ</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fa-light fa-circle-phone"></i>
                            </div>
                            <div class="info">
                                <h4 class="title">Bizi her zaman arayın</h4>
                                <div class="content">
                                    İletişim: <a href="tel:+905069122388">+90 506 912 23 88</a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fa-light fa-envelope"></i>
                            </div>
                            <div class="info">
                                <h4 class="title">Email Gönderin</h4>
                                <div class="content">
                                    <a href="mailto:info@lotdanismanlik.com">info@lotdanismanlik.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#">
                            <span class="link-effect">
                                <span class="effect-1">Facebook</span>
                                <span class="effect-1">Facebook</span>
                            </span>
                        </a>
                        <a href="#">
                            <span class="link-effect">
                                <span class="effect-1">Twitter/X</span>
                                <span class="effect-1">Twitter/X</span>
                            </span>
                        </a>
                        <a href="#">
                            <span class="link-effect">
                                <span class="effect-1">LinkedIn</span>
                                <span class="effect-1">LinkedIn</span>
                            </span>
                        </a>
                        <a href="#">
                            <span class="link-effect">
                                <span class="effect-1">Instagram</span>
                                <span class="effect-1">Instagram</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form">
                    <h2 class="title mt--5 mb-35">Bir Kahve İçmeye Bekleriz</h2>
                    <form id="contact_form" class="contact_form" action="https://formspree.io/f/mzbnjrnb" method="post">
                        <div class="form-grid">
                            <div class="form-group">
                                <span class="icon"><i class="fa-solid fa-user"></i></span>
                                <input type="text" id="fullName" name="name" placeholder="Adınız Soyadınız" required autocomplete="on">
                            </div>
                            <div class="form-group">
                                <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                <input type="email" id="userEmail" name="email" placeholder="Email Adresiniz" required autocomplete="on">
                            </div>
                        </div>
                        <div class="form-grid">
                            <div class="form-group">
                                <span class="icon"><i class="fa-solid fa-phone"></i></span>
                                <input type="text" id="phone" name="phone" placeholder="Telefon No" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <select class="custom-select" id="service" name="service" autocomplete="off">
                                    <option value="" disabled selected>Hizmet Seçin</option>
                                    <option value="air">Proje Yönetimi ve Danışmanlık</option>
                                    <option value="ocean">Uygulama Danışmanlığı</option>
                                    <option value="rail">Yazılım Geliştirme</option>
                                    <option value="cargo">Destek ve Eğitim Hizmetleri</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea id="msg" name="msg" placeholder="Mesajınız" required></textarea>
                        </div>
                        <div class="form-group terms">
                            <input type="checkbox" id="terms" required>
                            <label for="terms">Tüm şart ve koşulları kabul ediyorum.</label>
                        </div>
                        <button type="submit" class="theme-btn bg-dark mt-35" data-loading-text="Lütfen Bekleyiniz...">
                            <span class="link-effect">
                                <span class="btn-title">Gönder</span>
                            </span><i class="fa-regular fa-arrow-right-long"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!--==============================
        Contact Map
        ==============================-->
<div class="contact-map">
    <div class="container-fluid p-0">
        <div class="row">
            <!--Map-->
            <div class="map-box">
                <iframe class="map-canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.138555758991!2d29.3852655!3d40.758977200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cae1aaa03996d9%3A0xc8f5b7badc6e10dc!2spixtwin!5e0!3m2!1str!2str!4v1765198574807!5m2!1str!2str" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>