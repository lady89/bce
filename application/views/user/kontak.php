<div class="page-title dark-background" style="background-image: url('<?php echo base_url('assets/img/alat10.jpg'); ?>');">
    <div class="overlay-gradient"></div>
    <div class="container position-relative text-center">
        <h1 class="text-white animate__animated animate__fadeInDown">Kontak</h1>
        <p class="subtitle text-light animate__animated animate__fadeInUp">Mitra Terpercaya di Sektor Konstruksi</p>
    </div>
</div>

<body>
    
    <div class="container">
        <h2 class="mt-5">Hubungi Kami</h2>

        <!-- Menampilkan Pesan Sukses atau Error -->
        <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success mt-4">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger mt-4">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

        <!-- Form Kontak -->
        <form action="<?php echo base_url('kontak/submit'); ?>" method="post" class="mt-4">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>">
                <?php echo form_error('name', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>">
                <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group mt-3">
                <label for="subject">Subjek:</label>
                <input type="text" class="form-control" id="subject" name="subject" value="<?php echo set_value('subject'); ?>">
                <?php echo form_error('subject', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group mt-3">
                <label for="message">Pesan:</label>
                <textarea class="form-control" id="message" name="message" rows="5"><?php echo set_value('message'); ?></textarea>
                <?php echo form_error('message', '<small class="text-danger">', '</small>'); ?>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Kirim Pesan</button>
        </form>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <br>
</body>
</main>
</div>
        </div>
    </section>
    <!-- End Visi Misi Section -->

</main>
<!-- End Main Section -->