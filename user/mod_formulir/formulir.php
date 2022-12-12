<?php require "fungsi.php"; ?>
<?php if ($siswa['konfirmasi'] == 1) { ?>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Terimakasih !!!<br />
        Data Anda Telah Berhasil <button class="badge badge-danger"> Dikonfirmasi Pada Tanggal <?= $siswa['tgl_konfirmasi'] ?></button>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4">

                <div class="activities">
                    <div class="activity">
                        <div class="activity-icon bg-primary text-white shadow-primary">
                            1
                        </div>
                        <div class="activity-detail">
                            <h5>Formulir</h5>
                            <a target="_blank" href="mod_formulir/print_daftar.php?id=<?= enkripsi($siswa['id_daftar']) ?>" type="button" class="badge badge-primary"><i class="fas fa-download    "></i> Download</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">

                <div class="activities">
                    <div class="activity">
                        <div class="activity-icon bg-primary text-white shadow-primary">
                            2
                        </div>
                        <div class="activity-detail">
                            <h5>Kartu Pendaftar</h5>
                            <a href="?pg=cetakkartu" type="button" class="badge badge-success"><i class="fas fa-eye    "></i> Lihat Kartu </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">

                <div class="activities">
                    <div class="activity">
                        <div class="activity-icon bg-primary text-white shadow-primary">
                            3
                        </div>
                        <div class="activity-detail">
                            <h5>Berkas Lainnya</h5>
                            <p><span class="badge badge-warning"><i class="fas fa-download    "></i>
                                    Download</span></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>






<?php } else { ?>

    <div class="row">
        <div class="col-12 col-sm-12 col-lg-12">
            <div class="card author-box card-primary">
                <div class="card-header">
                    <h4>Formulir Pendaftaran Siswa Baru</h4>
                    <div class="card-header-action">


                    </div>
                </div>
                <div class="card-body">
                    <div class="author-box-left">
                        <div class="author-box-job">Status Pendaftaran</div>
                        <?php if ($siswa['status'] == 1) { ?>
                            <span class="badge badge-success">Diterima</span>
                        <?php } elseif ($siswa['status'] == 2) { ?>
                            <span class="badge badge-danger">Cadangan</span>
                        <?php } else { ?>
                            <span class="badge badge-info">Diverifikasi</span>
                        <?php } ?>
                    </div>

                    <div class="author-box-details">

                        <ul class="nav nav-pills" id="myTab3" role="tablist">
                            <li class="nav-item col-sm-12 col-md-2">
                                <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-user    "></i> Data Diri</a>
                            </li>
                            <li class="nav-item col-sm-12 col-md-2">
                                <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-home    "></i> Data Alamat</a>
                            </li>
                            <li class="nav-item col-sm-12 col-md-2">
                                <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-user-friends    "></i> Orang Tua</a>
                            </li>
                            <li class="nav-item col-sm-12 col-md-2">
                                <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#foto3" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-user-friends    "></i> Upload Foto</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                                <form id="form-datadiri">
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Pendaftaran</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="no" class="form-control" value="<?= $siswa['no_daftar'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="nama" class="form-control" value="<?= $siswa['nama'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="tempat" class="form-control" value="<?= $siswa['tempat_lahir'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tgl Lahir</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="date" name="tgl_lahir" class="form-control" value="<?= $siswa['tgl_lahir'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class='form-control' name='jenkel'>
                                                <option value='' hidden>Pilih Jenis Kelamin</option>";
                                                <?php foreach ($jeniskelamin as $val => $key) { ?>
                                                    <?php if ($siswa['jenkel'] == $val) { ?>
                                                        <option value='<?= $val ?>' selected><?= $key ?> </option>
                                                    <?php  } else { ?>
                                                        <option value='<?= $val ?>'><?= $key ?> </option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Anak Ke</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="anak_ke" class="form-control" value="<?= $siswa['anak_ke'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Berat Badan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="bb" class="form-control" value="<?= $siswa['bb'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tinggi Badan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="tt" class="form-control" value="<?= $siswa['tt'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Berat Badan Lahir</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="bb_lahir" class="form-control" value="<?= $siswa['bb_lahir'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Penyakit Sering Diderita</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="penyakit_sd" class="form-control" value="<?= $siswa['penyakit_sd'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Penyakit Pernah Diderita</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="penyakit_pd" class="form-control" value="<?= $siswa['penyakit_pd'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pantangan Makan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="pantangan_makan" class="form-control" value="<?= $siswa['pantangan_makan'] ?>">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <p style="color : red">*Harap isi data diri dengan sebenar-benarnya</p>
                                        <center><button id="btnsimpan" type="submit" class="btn btn-primary btn-lg mt-2">Simpan Data Diri</button></center>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                                <form id="form-alamat">
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="alamat" class="form-control" value="<?= $siswa['alamat'] ?>" placeholder="nama jalan / kampung">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">RT / RW</label>
                                        <div class="col-sm-3 col-md-3">
                                            <input type="number" name="rt" class="form-control" value="<?= $siswa['rt'] ?>" placeholder="RT">
                                        </div>
                                        <div class="col-sm-3 col-xs-3 col-md-3">
                                            <input type="number" name="rw" class="form-control" value="<?= $siswa['rw'] ?>" placeholder="RW">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kecamatan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="kecamatan" class="form-control" value="<?= $siswa['kecamatan'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kabupaten / Kota</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="kota" class="form-control" value="<?= $siswa['kota'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Provinsi</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="provinsi" class="form-control" value="<?= $siswa['provinsi'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <p style="color : red">*Harap isi data alamat dengan sebenar-benarnya</p>
                                        <center><button type="submit" class="btn btn-primary btn-lg mt-2">Simpan Data Alamat</button></center>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                                <form id="form-orangtua">
                                    <!-- AYAH -->
                                    <h5><i class="fas fa-user-check     "></i> Data Lengkap Ayah</h5>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Ayah Kandung</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="namaayah" class="form-control" value="<?= $siswa['nama_ayah'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="tempatlahirayah" class="form-control" value="<?= $siswa['tempat_lahir_ayah'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tgl Lahir</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="date" name="tahunayah" class="form-control " value="<?= $siswa['tahun_ayah'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pendidikan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class='form-control' name='pendidikan_ayah'>
                                                <option value='' hidden>Pilih Pendidikan</option>";
                                                <?php foreach ($pendidikan as $val) { ?>
                                                    <?php if ($siswa['pendidikan_ayah'] == $val) { ?>
                                                        <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                    <?php  } else { ?>
                                                        <option value='<?= $val ?>'><?= $val ?> </option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class='form-control' name='pekerjaan_ayah'>
                                                <option value='' hidden>Pilih Pekerjaan</option>";
                                                <?php foreach ($pekerjaan as $val) { ?>
                                                    <?php if ($siswa['pekerjaan_ayah'] == $val) { ?>
                                                        <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                    <?php  } else { ?>
                                                        <option value='<?= $val ?>'><?= $val ?> </option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No HP Ayah</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number" name="nohpayah" class="form-control" value="<?= $siswa['no_hp_ayah'] ?>">
                                        </div>
                                    </div>

                                    <!-- IBU -->
                                    <h5><i class="fas fa-user-check    "></i> Data Lengkap Ibu</h5>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Ibu Kandung</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="namaibu" class="form-control" value="<?= $siswa['nama_ibu'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="tempatlahiribu" class="form-control" value="<?= $siswa['tempat_lahir_ibu'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tgl Lahir</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="date" name="tahunibu" class="form-control " value="<?= $siswa['tahun_ibu'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pendidikan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class='form-control' name='pendidikan_ibu'>
                                                <option value=''>Pilih Pendidikan</option>";
                                                <?php foreach ($pendidikan as $val) { ?>
                                                    <?php if ($siswa['pendidikan_ibu'] == $val) { ?>
                                                        <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                    <?php  } else { ?>
                                                        <option value='<?= $val ?>'><?= $val ?> </option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class='form-control' name='pekerjaan_ibu'>
                                                <option value=''>Pilih Pekerjaan</option>";
                                                <?php foreach ($pekerjaan as $val) { ?>
                                                    <?php if ($siswa['pekerjaan_ibu'] == $val) { ?>
                                                        <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                    <?php  } else { ?>
                                                        <option value='<?= $val ?>'><?= $val ?> </option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Hp Ibu</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number" name="nohpibu" class="form-control" value="<?= $siswa['no_hp_ibu'] ?>">
                                        </div>
                                    </div>

                                    <!-- WALI -->
                                    <h5><i class="fas fa-user-check    "></i> Data Lengkap wali</h5>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama wali</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="namawali" class="form-control" value="<?= $siswa['nama_wali'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tahun Lahir</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="date" name="tahunwali" class="form-control" value="<?= $siswa['tahun_wali'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pendidikan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class='form-control' name='pendidikan_wali'>
                                                <option value=''>Pilih Pendidikan</option>";
                                                <?php foreach ($pendidikan as $val) { ?>
                                                    <?php if ($siswa['pendidikan_wali'] == $val) { ?>
                                                        <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                    <?php  } else { ?>
                                                        <option value='<?= $val ?>'><?= $val ?> </option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class='form-control' name='pekerjaan_wali'>
                                                <option value=''>Pilih Pekerjaan</option>";
                                                <?php foreach ($pekerjaan as $val) { ?>
                                                    <?php if ($siswa['pekerjaan_wali'] == $val) { ?>
                                                        <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                    <?php  } else { ?>
                                                        <option value='<?= $val ?>'><?= $val ?> </option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No HP wali</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number" name="nohpwali" class="form-control" value="<?= $siswa['no_hp_wali'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p style="color: red">*Harap isi data orang tua dengan sebenar-benarnya</p>
                                        <center><button id="btnsimpan" type="submit" class="btn btn-primary btn-lg mt-2">Simpan Data Orang Tua</button></center>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="foto3" role="tabpanel" aria-labelledby="profile-tab3">
                                <form id="form-setting">
                                    <div class="card" id="settings-card">

                                        <div class="card-body" <div class="form-group row align-items-center">

                                            <div class="col-sm-6 col-md-12">

                                                <div class="custom-file">
                                                    <input type="file" name="foto" class="custom-file-input" id="site-foto">
                                                    <label class="custom-file-label">Upload Foto</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer bg-whitesmoke text-md-right">
                                            <button type="submit" class="btn btn-primary" id="save-btn">Save Changes</button>
                                            <button class="btn btn-secondary" type="button">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
<?php } ?>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-setting').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_formulir/crud_upload.php?pg=foto',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Mantap! ',
                    message: 'Foto Anda berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#form-datadiri').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'mod_formulir/crud_formulir.php?pg=simpandatadiri',
                data: $(this).serialize(),
                beforeSend: function() {
                    $('#btnsimpan').prop('disabled', true);
                },
                success: function(data) {
                    var json = data;
                    $('#btnsimpan').prop('disabled', false);
                    if (json == 'ok') {
                        iziToast.success({
                            title: 'Terima Kasih!',
                            message: 'Data Diri Anda berhasil disimpan',
                            position: 'topCenter'
                        });

                    } else {
                        iziToast.error({
                            title: 'Maaf!',
                            message: json,
                            position: 'topCenter'
                        });
                    }
                    //$('#bodyreset').load(location.href + ' #bodyreset');
                }
            });
            return false;
        });
        $('#form-alamat').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'mod_formulir/crud_formulir.php?pg=simpanalamat',
                data: $(this).serialize(),
                beforeSend: function() {
                    $('#btnsimpan').prop('disabled', true);
                },
                success: function(data) {
                    var json = data;
                    $('#btnsimpan').prop('disabled', false);
                    if (json == 'ok') {
                        iziToast.success({
                            title: 'Terima Kasih!',
                            message: 'Data Alamat anda berhasil disimpan',
                            position: 'topCenter'
                        });

                    } else {
                        iziToast.error({
                            title: 'Maaf!',
                            message: json,
                            position: 'topCenter'
                        });
                    }
                    //$('#bodyreset').load(location.href + ' #bodyreset');
                }
            });
            return false;
        });
        $('#form-orangtua').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'mod_formulir/crud_formulir.php?pg=simpanortu',
                data: $(this).serialize(),
                beforeSend: function() {
                    $('#btnsimpan').prop('disabled', true);
                },
                success: function(data) {
                    var json = data;
                    $('#btnsimpan').prop('disabled', false);
                    if (json == 'ok') {
                        iziToast.success({
                            title: 'Terima Kasih!',
                            message: 'Data Orang Tua anda berhasil disimpan',
                            position: 'topCenter'
                        });

                    } else {
                        iziToast.error({
                            title: 'Maaf!',
                            message: json,
                            position: 'topCenter'
                        });
                    }
                    //$('#bodyreset').load(location.href + ' #bodyreset');
                }
            });
            return false;
        });
        // $("#form-datadiri").validate({
        //     rules: {
        //         "b[firstname]": {
        //             : true
        //         },
        //         "b[email]": {
        //             : true,
        //             email: true
        //         },
        //         "book[contact]": {
        //             : true
        //         }
        //     },
        //     submitHandler: function(form) {
        //         var formData = $(form).serialize();
        //         alert(formData); // for demo
        //         // comment out ajax for demo
        //         /*
        //         $.ajax({
        //             url: "bs_client_function.php?action=new_b",
        //             type: "post",
        //             data: formData,
        //             beforeSend: function () {

        //             },
        //             success: function (data) {

        //             }
        //         });
        //         */
        //     }
        // });

    });
</script>