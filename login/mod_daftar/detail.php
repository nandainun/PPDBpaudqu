<!-- <div class="section-header">
    <h3>Detail Pendaftar</h3>
</div> -->
<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<?php $siswa = fetch($koneksi, 'daftar', ['id_daftar' => dekripsi($_GET['id'])]); ?>
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card author-box card-primary">
            <div class="card-header">
                <h4>Data Pendaftar</h4>
                <div class="card-header-action">
                    <a target="_blank" href="mod_daftar/print_daftar.php?id=<?= $_GET['id'] ?>" type="button" class="btn btn-success"><i class="fas fa-print    "></i> Cetak Form</a>
                    <a target="_blank" href="mod_daftar/pernyataan.php?id=<?= $_GET['id'] ?>" type="button" class="btn btn-success"><i class="fas fa-print    "></i> Surat Pernyataan</a>
                </div>

            </div>
            <div class="card-body">
                <div class="author-box-left">
                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle author-box-picture">
                    <div class="clearfix"></div>
                    <br>
                    <div class="author-box-job">Status Pendaftaran</div>
                    <?php if ($siswa['status'] == 1) { ?>
                        <span class="badge badge-success">Diterima</span>
                    <?php } else { ?>
                        <span class="badge badge-success">Diverifikasi</span>
                    <?php } ?>
                </div>
                <div class="author-box-details">

                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-user    "></i> Data Diri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-user-friends    "></i> Orang Tua</a>
                        </li>
                        <!--   <li class="nav-item">
                            <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-history    "></i> Histori</a>
                        </li> -->
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                            <div class="table-responsiv">
                                <table class="table table-striped table-sm ">
                                    <tbody>
                                        <tr>
                                            <td align="left"><b>Nama Lengkap</b></td>
                                            <td align="left"><?= $siswa['nama'] ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Tempat Tgl Lahir</b></td>
                                            <td align="left"><?= $siswa['tempat_lahir'] ?>, <?= $siswa['tgl_lahir'] ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Umur</b></td>
                                            <td align="left">
                                                <?php
                                                $lahir    = new DateTime($siswa['tgl_lahir']);
                                                $today        = new DateTime();
                                                $umur = $today->diff($lahir);
                                                echo $umur->y;
                                                echo " Tahun";
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Kelas</b></td>
                                            <td align="left">
                                                <?php
                                                $lahir    = new DateTime($siswa['tgl_lahir']);
                                                $today        = new DateTime();
                                                $umur = $today->diff($lahir);

                                                switch ($umur) {
                                                    case ($umur->y == '3'):
                                                        echo 'Play Grup';
                                                        break;
                                                    case ($umur->y == '4'):
                                                        echo 'Kelas A';
                                                        break;
                                                    case ($umur->y == '5'):
                                                        echo 'Kelas B';
                                                        break;
                                                    default:
                                                        echo 'tidak ditemukan';
                                                }

                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Jenis Kelamin</b></td>
                                            <td align="left"><?= ($siswa['jenkel'] == 'L') ? "Laki-Laki" : "Perempuan"; ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Anak Ke</b></td>
                                            <td align="left"><?= $siswa['anak_ke'] ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Berat Badan</b></td>
                                            <td align="left"> <?= $siswa['bb']  ?> KG</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Tinggi Badan</b></td>
                                            <td align="left"><?= $siswa['tt']  ?> CM</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Berat Badan Lahir</b></td>
                                            <td align="left"><?= $siswa['bb_lahir']  ?> KG</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Penyakit Sering Diderita</b></td>
                                            <td align="left"><?= $siswa['penyakit_sd']  ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Penyakit Pernah Diderita</b></td>
                                            <td align="left"><?= $siswa['penyakit_pd']  ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pantangan Makan</b></td>
                                            <td align="left"><?= $siswa['pantangan_makan']  ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                            <div class="table-responsiv">
                                <table class="table table-striped table-sm ">
                                    <tbody>
                                        <tr>
                                            <td align="center"><b>Ayah</b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Nama Lengkap Ayah</b></td>
                                            <td align="left"><?= $siswa['nama_ayah'] ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Tempat Tgl Lahir</b></td>
                                            <td align="left"><?= $siswa['tempat_lahir_ayah'] ?>, <?= $siswa['tahun_ayah'] ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pendidikan Ayah</b></td>
                                            <td align="left"><?= $siswa['pendidikan_ayah']  ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pekerjaan Ayah</b></td>
                                            <td align="left"> <?= $siswa['pekerjaan_ayah']  ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>No Hp Ayah</b></td>
                                            <td align="left"><i class="fab fa-whatsapp text-success"></i> <?= $siswa['no_hp_ayah']  ?></td>
                                        </tr>
                                        <!-- DATA LENGKAP IBU -->
                                        <tr>
                                            <td align="center"><b>Ibu</b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Nama Lengkap Ibu</b></td>
                                            <td align="left"><?= $siswa['nama_ibu'] ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Tempat Tgl Lahir</b></td>
                                            <td align="left"><?= $siswa['tempat_lahir_ibu'] ?>, <?= $siswa['tahun_ibu'] ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pendidikan Ibu</b></td>
                                            <td align="left"><?= $siswa['pendidikan_ibu']  ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pekerjaan Ibu</b></td>
                                            <td align="left"> <?= $siswa['pekerjaan_ibu']  ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>No Hp Ibu</b></td>
                                            <td align="left"><i class="fab fa-whatsapp text-success"></i> <?= $siswa['no_hp_ibu']  ?></td>
                                        </tr>

                                        <!-- DATA LENGKAP WALI -->
                                        <tr>
                                            <td align="center"><b>Wali</b></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Nama Lengkap Wali</b></td>
                                            <td align="left"><?= $siswa['nama_wali'] ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b> Tempat Tgl Lahir</b></td>
                                            <td align="left"><?= $siswa['tempat_lahir_wali'] ?>, <?= $siswa['tahun_wali'] ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pendidikan Wali</b></td>
                                            <td align="left"><?= $siswa['pendidikan_wali']  ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>Pekerjaan Wali</b></td>
                                            <td align="left"> <?= $siswa['pekerjaan_wali']  ?></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><b>No Hp Wali</b></td>
                                            <td align="left"><i class="fab fa-whatsapp text-success"></i> <?= $siswa['no_hp_wali']  ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 d-sm-none"></div>
                    <div class="float-right mt-sm-0 mt-3">
                        <a href="#" class="btn">View Posts <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>