<head>
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/landing_page.css">
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/data_pemesanan.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="http://localhost/PHP-MVC/public/image/project logo j-kost white 1.png">
    <title>Pemesanan Kost</title>
</head>

<body>
    <nav>
        <div class="title-navbar">
            <img src="http://localhost/PHP-MVC/public/image/logo-jkost.png" alt="">
        </div>
        <div class="link-navbar">
            <ul>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Testimoni</a>
                <a href="">Cari Kost</a>
                <a href="" class="link-login">Masuk</a>
            </ul>
        </div>
    </nav>
    <div class="halaman">
        <p><i class="ri-home-8-fill"></i>Home > Kost Marno > Kamar 3</p>
    </div>
    <section id="pemesanan">
        <div class="left-pemesanan">
            <h1>Data Pemesanan</h1>
            <p>IDP00162382</p>
            <div id="informasi-pemesanan-kost">
                <h3>Informasi Pemesanan Kost</h3>
                <div class="kumpulan-input-pemesanan">
                    <div class="input-pemesanan">
                        <label for="id_kost">ID Kost</label>
                        <input type="text" placeholder="Masukkan ID Kost" name="id_kost" id="id_kost" value="<?= $data['pemesanan']['id_kost']; ?>" readonly>
                    </div>
                    <div class="input-pemesanan">
                        <label for="id_kost">Nama Kost</label>
                        <input type="text" placeholder="Masukkan ID Kost" name="nama_kost" id="id_kost" value="<?= $data['pemesanan']['nama_kost']; ?>" readonly>
                    </div>
                    <div class="input-pemesanan">
                        <label for="id_kost">Alamat Kost</label>
                        <input type="text" placeholder="Masukkan ID Kost" name="alamat_kost" id="id_kost" value="<?= $data['pemesanan']['alamat']; ?>" readonly>
                    </div>
                    <div class="input-pemesanan">
                        <label for="id_kost">Nama Kamar</label>
                        <input type="text" placeholder="Masukkan ID Kost" name="nama_kost" id="id_kost" value="<?= $data['pemesanan']['nama_kamar']; ?>" readonly>
                    </div>
                    <div id="full-input" class="input-pemesanan">
                        <label for="id_kost">Fasilitas</label>
                        <input type="text" placeholder="Masukkan ID Kost" name="fasilitas_kost" id="id_kost" value="<?= $data['pemesanan']['fasilitas']; ?>" readonly>
                    </div>
                    <div class="input-pemesanan">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input type="date" placeholder="Masukkan ID Kost" name="tggl_masuk" id="id_kost">
                    </div>
                    <div class="input-pemesanan">
                        <label for="tanggal_keluar">Tanggal Keluar</label>
                        <input type="date" placeholder="Masukkan ID Kost" name="tggl_keluar" id="id_kost">
                    </div>
                </div>
            </div>
            <div id="informasi-pemesanan-kost">
                <h3>Informasi Calon Penghuni</h3>
                <div class="kumpulan-input-pemesanan">
                    <div class="input-pemesanan">
                        <label for="id_kost">Nama Penghuni</label>
                        <input type="text" placeholder="Masukkan ID Kost" name="nama_penghuni" id="#" value="<?= $data['penghuni']['nama_lengkap']; ?>" readonly>
                    </div>
                    <div class="input-pemesanan">
                        <label for="id_kost">Jenis Kelamin</label>
                        <input type="text" placeholder="Masukkan ID Kost" name="jenis_kelamin" id="#" value="<?= $data['penghuni']['jenis_kelamin']; ?>" readonly>
                    </div>
                    <div class="input-pemesanan">
                        <label for="id_kost">Alamat Penghuni</label>
                        <input type="text" placeholder="Masukkan ID Kost" name="alamat_penghuni" id="#" value="<?= $data['penghuni']['alamat']; ?>" readonly>
                    </div>
                    <div class="input-pemesanan">
                        <label for="id_kost">Nomor HP Aktif</label>
                        <input type="text" placeholder="Masukkan ID Kost" name="no_hp" id="#" value="<?= $data['penghuni']['no_hp']; ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-pemesanan">
            <p>Informasi Booking</p>
            <div class="detail-pemesanan">
                <p><?= $data['pemesanan']['nama_kost']; ?></p>
                <div class="sub-detail-pemesanan">
                    <p>Kategori Pembayaran : </p>
                    <p>Bulanan</p>
                </div>
                <div class="sub-detail-pemesanan">
                    <p>Harga Kost :</p>
                    <p>Rp <?= $data['detail_kamar']['harga_bulanan']; ?></p>
                </div>
                <!-- <div class="sub-detail-pemesanan">
                    <p>Biaya Admin : </p>
                    <p>Rp 2,000</p>
                </div> -->
            </div>
            <div class="total-pembayaran">
                <p>Total Pembayaran : </p>
                <p>Rp 602,000</p>
            </div>
            <div class="title-pembayaran">
                <p>Pembayaran Via :</p>
            </div>
            <div class="via-pembayaran">
                <div class="row-pembayaran">
                    <div class="opsi-pembayaran">
                        <input type="radio" name="opsi-pembayaran" id="" value="BCA">
                        <img src="http://localhost/PHP-MVC/public/image/pembayaran/BCA.png" alt="">
                    </div>
                    <div class="opsi-pembayaran">
                        <input type="radio" name="opsi-pembayaran" id="" value="BRI">
                        <img src="http://localhost/PHP-MVC/public/image/pembayaran/BRI.png" alt="">
                    </div>
                    <div class="opsi-pembayaran">
                        <input type="radio" name="opsi-pembayaran" id="" value="BNI">
                        <img src="http://localhost/PHP-MVC/public/image/pembayaran/bni.png" alt="">
                    </div>
                    <div class="opsi-pembayaran">
                        <input type="radio" name="opsi-pembayaran" id="" value="Mandiri">
                        <img src="http://localhost/PHP-MVC/public/image/pembayaran/MANDIRI.png" alt="">
                    </div>
                </div>
                <div class="row-pembayaran">
                    <div class="opsi-pembayaran">
                        <input type="radio" name="opsi-pembayaran" id="" value="Dana">
                        <img src="http://localhost/PHP-MVC/public/image/pembayaran/DANA.png" alt="">
                    </div>
                    <div class="opsi-pembayaran">
                        <input type="radio" name="opsi-pembayaran" id="" value="Gopay">
                        <img src="http://localhost/PHP-MVC/public/image/pembayaran/gopay.png" alt="">
                    </div>
                    <div class="opsi-pembayaran">
                        <input type="radio" name="opsi-pembayaran" id="" value="Shoope Pay">
                        <img src="http://localhost/PHP-MVC/public/image/pembayaran/shopeepay.png" alt="">
                    </div>
                    <div class="opsi-pembayaran">
                        <input type="radio" name="opsi-pembayaran" id="" value="OVO">
                        <img src="http://localhost/PHP-MVC/public/image/pembayaran/ovo.png" alt="">
                    </div>
                </div>

            </div>
            <a href="http://localhost/PHP-MVC/public/landing_page/pembayaran" id="btn-pesan-sekarang">Bayar Sekarang</a>
        </div>

    </section>

    <footer>
        <div class="top-footer">
            <div class="left-footer">
                <img src="http://localhost/PHP-MVC/public/image/logo-jkost.png" alt="">
                <p>Our vision is to provide convenience and help increase your sales business.</p>
                <div class="kumpulan-medsos">
                    <i class="ri-facebook-circle-fill"></i>
                    <i class="ri-facebook-circle-fill"></i>
                    <i class="ri-facebook-circle-fill"></i>
                </div>
            </div>
            <div class="right-footer">
                <div class="content-right-footer">
                    <p class="judul-right-footer">About</p>
                    <p>How it works</p>
                    <p>Featured</p>
                    <p>Partnership</p>
                    <p>Bussiness Relation</p>
                </div>
                <div class="content-right-footer">
                    <p class="judul-right-footer">Comunity</p>
                    <p>Event</p>
                    <p>Blog</p>
                    <p>Partnership</p>
                    <p>Bussiness Relation</p>
                </div>
                <div class="content-right-footer">
                    <p class="judul-right-footer">Sosial</p>
                    <p>How it works</p>
                    <p>Featured</p>
                    <p>Partnership</p>
                    <p>Bussiness Relation</p>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <p>©2023 J-Kost. All rights reserved</p>
            <div class="right-bottom-footer">
                <p>Privacy & Policy</p>
                <p>Terms & Condition</p>
            </div>
        </div>
    </footer>
</body>

</html>