<div class='row'>
    <div class="col-lg-6">
        <div class="small-box bg-blue">
            <div class="inner">
                <h3> <?= rowcount($koneksi, 'daftar') ?></h3>
                <p>Jumlah Pendaftar</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="?pg=daftar" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= rowcount($koneksi, 'jurusan') ?></h3>
                <p>Data Kelas</p>
            </div>
            <div class="icon">
                <i class="fa fa-flask"></i>
            </div>
            <a href="?pg=jurusan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<div style='float:right; margin-top:-220px'>
    <button class='btn  btn-flat  bg-purple'><i class='fa fa-calendar'></i> <?= buat_tanggal('D, d M Y') ?></button>

    <button class='btn btn-flat bg-red'><i class='fa fa-clock'></i> <span id='timestamp' style="font-family:'OCR A Extended'"><?= date('h:i:s') ?> </span></button>
</div>
<?php if ($setting['ppdb'] == "0") { ?>
    <div class="section-body" id="form-setting">
        <h2 class="section-title">PPDB <?= date('Y') ?> Belum Aktif</h2>
        <p class="section-lead">
            Silahkan Setting di Pengaturan PPDB Untuk Mengaktifkan

    </div>
<?php } ?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="alert alert-info alert-has-icon">
                <div class="alert-icon"><i class=""></i></div>
                <div class="alert-body">
                    <div class="alert-body">Data Sekolah </div>

                </div>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab5" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home" aria-selected="true">
                            <i class="fas fa-home"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile" aria-selected="false">
                            <i class="fas fa-id-card"></i> Alamat Lembaga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab5" data-toggle="tab" href="#contact5" role="tab" aria-controls="contact" aria-selected="false">
                            <i class="fas fa-mail-bulk"></i> Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="kepala-tab5" data-toggle="tab" href="#kepala5" role="tab" aria-controls="kepala" aria-selected="false">
                            <i class="fas fa-user"></i> Kepala Sekolah</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent5">
                    <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5">
                        <form id="form-setting1">
                            <div class="card" id="settings-card">
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama Sekolah</label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['nama_sekolah'] ?>
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label for="site-description" class="form-control-label col-sm-3 text-md-right">Status Sekolah</label>
                                    <div class="col-sm-6 col-md-9">

                                        <?= $setting['status'] ?>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>

                    <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
                        <form id="form-setting2">
                            <div class="card" id="settings-card">

                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Alamat Lengkap</label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['alamat'] ?>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Provinsi </label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['provinsi'] ?>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Kabupaten</label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['kab'] ?>
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label for="site-description" class="form-control-label col-sm-3 text-md-right">Kecamatan</label>
                                    <div class="col-sm-6 col-md-9">

                                        <?= $setting['kec'] ?>

                                    </div>
                                </div>

                            </div>


                        </form>
                        </form>
                    </div>


                    <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="contact-tab5">
                        <form id="form-setting3">
                            <div class="card" id="settings-card">

                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">No Telpon</label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['no_telp'] ?>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Email </label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['email'] ?>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Website</label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['web'] ?>
                                    </div>
                                </div>
                            </div>

                        </form>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="kepala5" role="tabpanel" aria-labelledby="kepala-tab5">
                        <form id="form-setting3">
                            <div class="card" id="settings-card">

                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Kepala Madrasah</label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['kepala'] ?>
                                    </div>
                                </div>

                            </div>

                        </form>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <a class="twPc-bg twPc-block"></a>
        <div>
            <div class="twPc-button">

                <span class="badge badge-info"><?= $setting['nsm'] ?></span>




            </div>
            <a title="" href="" class="twPc-avatarLink">
                <img alt="" src="../<?= $setting['logo'] ?>" class="twPc-avatarImg">
            </a>
            <br>
            <div class="twPc-divUser">
                <div class="twPc-divName">
                    <a href=""><b><?= $setting['npsn'] ?></b></a>
                </div>

            </div>

        </div>
        <div class="box box-solid">
            <!-- /.box-header -->
            <div class="box-body">
                <div id='infoweb'></div>
                <p><b></b></p>
                <ul class="list-group">
                    <li class="list-group-item"><img src="../dist/img/support.png" width="45" alt="">
                        <a href="https://<?= $setting['web'] ?>" target="_BLANK" class="btn btn-success">
                            <i class="fas fa-globe    "></i> Website Sekolah
                        </a>
                    </li>
                    <li class="list-group-item"><img src="../dist/img/support.png" width="45" alt="">
                        <a href="https://api.whatsapp.com/send?phone=+62<?= $setting['nolivechat'] ?>&text=<?= $setting['livechat'] ?>" target="_blank" class="btn btn-primary">
                            <i class="fab fa-whatsapp"></i> <?= $setting['nolivechat'] ?>

                        </a>
                    </li>
                    <li class="list-group-item"><img src="../dist/img/support.png" width="45" alt="">
                        <a href="#" class="btn btn-danger">
                            <i class="fas fa-home"></i> <?= $setting['kab'] ?>
                        </a>
                    </li>
                </ul>

            </div>
            <!-- /.box -->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="form-tambah">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Pendaftar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nis Lokal</label>
                            <input type="text" name="nis" class="form-control nis" required="">
                        </div>
                        <div class="form-group">
                            <label>NISN</label>
                            <input type="text" name="nisn" class="form-control nisn" required="">
                        </div>
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input type="text" name="nama" class="form-control" required="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>