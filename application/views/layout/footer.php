<footer class="footer">
    <div class="container">
        <div class="row footer-sections">
            <!-- Map Section -->
            <div class="col-md-4">
            <div class="footer-map">
            <iframe width="100%" height="300" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d223.4441135510333!2d101.43180563546522!3d0.6067969832673759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1726152230305!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div><!-- End Google Maps -->
            <!-- About Us and Contact Section -->
            <div class="col-md-5">
                <div class="footer-about">
                    <h4>Tentang Kami</h4>
                    <p>Perusahaan Jasa Konstruksi dan Supplier yang bergerak dibidang Civil - Mekanikal - Elektrikal.</p>
                </div>
                <div class="footer-contact">
                    <h4>Kontak Kami</h4>
                    <p>Alamat: Jl. Yos Sudarso Km 12 Rumbai, Pekanbaru - Riau, Indonesia</p>
                    <p>Telepon/Fax: 0761-53093</p>
                    <p>Whatsapp No : 082173576896</p>
                    <p>Email: marketing@bestariaciptaenjinering.com <br>bce_pt@yahoo.com</p>
                </div>
            </div>
            <!-- Social Links Section -->
            <div class="col-md-3">
                <div class="footer-social">
                    <h4>Ikuti Kami</h4>
                    <a href="#" class="social-link">Facebook</a>
                    <a href="#" class="social-link">Instagram</a>
                    <a href="#" class="social-link">LinkedIn</a>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; 2024 PT Bestaria Cipta Enjinering</p>
        </div>
    </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/aos/aos.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
<script src="<?= base_url("https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"); ?>"></script>

<!-- Main JS File -->
<script src="<?= base_url('assets/js/main.js'); ?>"></script>
<style>
/* Animasi untuk fade-in dari kiri */
@keyframes fadeInLeft {
  0% {
    opacity: 0;
    transform: translateX(-100px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}

/* Terapkan animasi ini ke elemen yang diinginkan */
.fade-in-left {
  opacity: 0; /* Mulai dari tidak terlihat */
  animation: fadeInLeft 1s ease-out forwards; /* Durasi animasi 1 detik */
}

</style>
<style>
    .footer {
    background: url('<?= base_url("assets/img/footer-bg2.jpg"); ?>') no-repeat center center/cover;
    color: #fff;
    padding: 40px 0;
    position: relative;
    z-index: 1;
}

.footer:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Warna overlay tipis */
    z-index: -1;
}

.footer-sections {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-about, .footer-contact, .footer-social {
    margin-bottom: 20px;
}

.footer h4 {
    font-size: 18px;
    margin-bottom: 15px;
}

.footer p {
    margin-bottom: 10px;
}

.footer-social .social-link {
    display: inline-block;
    margin-right: 10px;
    color: #fff;
    font-size: 16px;
    text-decoration: none;
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    padding-top: 15px;
}

.footer-map iframe {
    border: 0;
    border-radius: 8px;
    overflow: hidden;
}
</style>