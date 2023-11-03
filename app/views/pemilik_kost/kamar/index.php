<header>
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/kamar.css">
</header>
<section id="kamar" class="content">
    <div id="kamar_content" class="pt-4 px-4">
        <a href="" class="add" data-bs-toggle="modal" data-bs-target="#modal-identitas">Tambah</a>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID Kamar</th>
                    <th>Fasilitas</th>
                    <th>Ukuran</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                ini_set('display_errors', 1);
                foreach ($data['kamar'] as $item) {
                ?>
                    <tr>
                        <td><?php echo $item['id_kamar'] ?></td>
                        <td><?php echo $item['fasilitas'] ?></td>
                        <td><?php echo $item['ukuran'] ?></td>
                        <td><?php echo $item['harga'] ?></td>
                        <td>Kosong</td>
                        <td>
                            <a href="">Edit</a>
                            <a href="http://localhost/PHP-MVC/public/kamar/hapusKamar?id_kamar=<?php echo $item['id_kamar'] ?>" onclick="return confirm('Hapus data nihhh?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</section>
<!-- modal identitas -->
<div class="modal fade" id="modal-identitas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Input Data Kamar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="progress-data">
                <div id="progress-data-kamar" class="active-data actived">
                    <div class="angka">
                        <p>1</p>
                    </div>
                    <p class="title-progress">Data Kamar</p>
                </div>
                <div id="progress-foto" class="active-data">
                    <div class="angka">
                        <p>2</p>
                    </div>
                    <p class="title-progress">Foto Kamar</p>
                </div>
                <div id="progress-verifikasi" class="active-data">
                    <div class="angka">
                        <p>3</p>
                    </div>
                    <p>Verifikasi</p>
                </div>
            </div>
            <div class="modal-body">
                <div class="input mb-3">
                    <form action="http://localhost/PHP-MVC/public/kamar/tambahKamar" method="post">
                        <div class="input-group">
                            <label for="id_kamar">ID Kamar</label>
                            <input type="text" name="id_kamar" class="form-controll" placeholder="Masukan ID Kamar" id="id_kamar">
                        </div>
                        <!-- <div class="input-group">
                            <label for="id_kamar">Nama Kamar</label>
                            <input type="text" name="nama_kamar" class="form-controll" placeholder="Masukan Nama Kamar" id="nama_kamar">
                        </div> -->
                        <div class="input-group">
                            <label for="id_kamar">Fasilitas Kamar</label>
                            <input type="text" name="fasilitas_kamar" class="form-controll" placeholder="Masukan Fasilitas Kamar" id="fasilitas_kamar">
                        </div>
                        <div class="input-group">
                            <label for="id_kamar">Ukuran Kamar</label>
                            <div id="input-ukuran-kamar">
                                <input type="text" name="ukuran_kamar" class="form-controll" placeholder="Panjang" class="ukuran_kamar">
                                <!-- <p> X </p>
                                <input type="text" class="form-controll" placeholder="Lebar" class="ukuran_kamar"> -->
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="id_kamar">Harga Kamar</label>
                            <input type="text" name="harga_kamar" class="form-controll" placeholder="Masukan Harga Kamar" id="id_kamar">
                        </div>
                        <button type="submit">Tambah</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary me-auto back" data-bs-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-primary next" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal-foto">Selanjutnya</button>
            </div>
        </div>
    </div>
</div>