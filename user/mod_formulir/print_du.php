<?php ob_start();
require "../../config/database.php";
require "../../config/function.php";
require "../../config/functions.crud.php";
include "../../assets/modules/phpqrcode/qrlib.php";
session_start();
if (!isset($_SESSION['id_daftar'])) {
	die('Anda tidak diijinkan mengakses langsung');
}
$siswa = fetch($koneksi, 'daftar', ['id_daftar' => dekripsi($_GET['id'])]);
$tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
if (!file_exists($tempdir)) //Buat folder bername temp
	mkdir($tempdir);

//isi qrcode jika di scan
$codeContents = $siswa['nisn'] . '-' . $siswa['nama'];

//simpan file kedalam temp
//nilai konfigurasi Frame di bawah 4 tidak direkomendasikan

QRcode::png($codeContents, $tempdir . $siswa['nisn'] . '.png', QR_ECLEVEL_M, 4);

?>
<!-- General CSS Files -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<link rel="stylesheet" href="../../assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="shortcut icon" href="https://www.mr-ell.com/media_library/images/7c751732ad0e716986752287a3861548.png">

<!DOCTYPE html>

<html>

<head>
	<title>Formulir_Daftar Ulang<?= $siswa['nama'] ?></title>
</head>

<body>
	<img src="../../<?= $setting['kop'] ?>" width="100%" />

	<body>

		<hr>
		<b>
			<center>Formulir Daftar Ulang Peserta Didik Baru Tahun 2022</center>
		</b>
		<br>

		<table width="100%" style="font-size: 13px" cellpadding="1" cellspacing="0" style="border-bottom:1px solid #a5a5a5;">
			<tbody>
				<tr>
					<td colspan="1" align="left"><b>1.</b></td>
					<td colspan="4" align="left"><b>Registrasi Peserta Didik</b></td>

				</tr>
				<tr>
					<td width="5%"></td>
					<td align="">Nomor Pendaftaran</td>
					<td align="center">:</td>
					<td align="left"><?= $siswa['no_daftar'] ?> (Diisi Panitia)</td>
				</tr>

				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Kelas</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left">
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
					<td colspan="3"></td>
				</tr>
			</tbody>
		</table>


		<table width="100%" style="font-size: 13px" cellpadding="1" cellspacing="0" style="border-bottom:1px solid #a5a5a5;">
			<tbody>
				<tr>
					<td colspan="1" align="left"><b>2.</b></td>
					<td colspan="4" align="left"><b>Biodata Peserta Didik</b></td>

				</tr>

				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Nama Lengkap</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['nama'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Umur</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left">
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
					<td width="5%"></td>
					<td align="">Jenis Kelamin</td>
					<td align="center">:</td>
					<td align="left"><?= ($siswa['jenkel'] == 'L') ? "Laki-Laki" : "Perempuan"; ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td align="">Tempat Lahir</td>
					<td align="center">:</td>
					<td align="left"><?= $siswa['tempat_lahir'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td align="">Tanggal Lahir</td>
					<td align="center">:</td>
					<td align="left"><?= $siswa['tgl_lahir'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td align="">Anak Ke</td>
					<td align="center">:</td>
					<td align="left"><?= $siswa['anak_ke'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td align="">Berat Badan</td>
					<td align="center">:</td>
					<td align="left"><?= $siswa['bb'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td align="">Tinggi Badan</td>
					<td align="center">:</td>
					<td align="left"><?= $siswa['tt'] ?></td>
				</tr>
			</tbody>
		</table>

		<table width="100%" style="font-size: 13px" cellpadding="1" cellspacing="0" style="border-bottom:1px solid #a5a5a5;">
			<tbody>
				<tr>
					<td colspan="1" align="left"><b>3.</b></td>
					<td colspan="4" align="left"><b>Kondisi Anak</b></td>

				</tr>

				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Berat Badan Lahir</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['bb_lahir'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Penyakit yang Sering Diderita</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['penyakit_sd'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Penyakit yang Pernah Diderita</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['penyakit_pd'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Pantangan Makan</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['pantangan_makan'] ?></td>
				</tr>
			</tbody>
		</table>


		<table width="100%" style="font-size: 13px" cellpadding="1" cellspacing="0" style="border-bottom:1px solid #a5a5a5;">
			<tbody>
				<tr>
					<td colspan="1" align="left"><b>4.</b></td>
					<td colspan="3" align="left"><b>Alamat Peserta Didik</b></td>

				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Alamat Jalan</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['alamat'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td align="">RT/RW</td>
					<td align="center">:</td>
					<td align="left"><?= $siswa['rt'] ?>/<?= $siswa['rw'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td align="">Kecamatan</td>
					<td align="center">:</td>
					<td align="left"><?= $siswa['kecamatan'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td align="">Kabupaten</td>
					<td align="center">:</td>
					<td align="left"><?= $siswa['kota'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td align="">Provinsi</td>
					<td align="center">:</td>
					<td align="left"><?= $siswa['provinsi'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td align="">No. Hp</td>
					<td align="center">:</td>
					<td align="left"><?= $siswa['no_hp'] ?></td>
				</tr>

			</tbody>
		</table>
		<table width="100%" style="font-size: 13px" cellpadding="1" cellspacing="0" style="border-bottom:1px solid #a5a5a5;">
			<tbody>
				<tr>
					<td colspan="1" align="left"><b>5.</b></td>
					<td colspan="3" align="left"><b>Identitas Orang Tua</b></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align=""><b>Ayah</b></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Nama Ayah</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['nama_ayah'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Tempat, Tanggal Lahir</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['tempat_lahir_ayah'] ?>, <?= $siswa['tahun_ayah'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Pendidikan</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['pendidikan_ayah'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Pekerjaan</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['pekerjaan_ayah'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">No Telepon</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['no_hp_ayah'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align=""><b>Ibu</b></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Nama Ibu</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['nama_ibu'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Tempat, Tanggal Lahir</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['tempat_lahir_ibu'] ?>, <?= $siswa['tahun_ibu'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Pendidikan</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['pendidikan_ibu'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Pekerjaan</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['pekerjaan_ibu'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">No Telepon</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['no_hp_ibu'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align=""><b>Wali</b></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Nama wali</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['nama_wali'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Tempat, Tanggal Lahir</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['tempat_lahir_wali'] ?>, <?= $siswa['tahun_wali'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Pendidikan</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['pendidikan_wali'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">Pekerjaan</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['pekerjaan_wali'] ?></td>
				</tr>
				<tr>
					<td width="5%"></td>
					<td width="35%" align="">No Telepon</td>
					<td width="5%" align="center">:</td>
					<td width="60%" align="left"><?= $siswa['no_hp_wali'] ?></td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
		<table>
			<tr width="30%">
				<td>
					<font size="13px">

						<p>__________</p>, <?= date('d-M-Y ') ?>
						<p>Orang Tua</p>
						<br></br>
						<p>__________________
						<p>

					</font>
			</tr>
		</table>













	</body>

</html>


<?php

$html = ob_get_clean();
require_once '../../vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("PPDB2021_" . $siswa['nama'] . ".pdf", array("Attachment" => false));
exit(0);
?>