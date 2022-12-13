<?php
require("../../config/database.php");
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_pendaftarDiterima.xls");
session_start();
if (!isset($_SESSION['id_user'])) {
	die('Anda tidak diijinkan mengakses langsung');
}
?>
<style>
	.str {
		mso-number-format: \@;
	}
</style>

<center>
	<h3>DATA PENDAFTAR DI TERIMA</h3>
</center>
<table border="1">
	<thead>
		<tr>
			<th class="text-left">
				No
			</th>
			<th>NO DAFTAR</th>
			<th>Nama Pendaftar</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Anak Ke</th>
			<th>Umur</th>
			<th>Kelas</th>
			<th>Berat Badan</th>
			<th>Tinggi Badan</th>
			<th>Berat Badan Lahir</th>
			<th>Penyakit Sering Diderita</th>
			<th>Penyakit Pernah Diderita</th>
			<th>Pantangan Makan</th>
			<th>Alamat</th>
			<th>Provinsi</th>
			<th>Kota</th>
			<th>Kecamatan</th>
			<th>Nama Ayah</th>
			<th>Tahun Lahir Ayah</th>
			<th>Pendidikan Ayah</th>
			<th>Pekerjaan Ayah</th>
			<th>No HP Ayah</th>
			<th>Nama Ibu</th>
			<th>Tahun Lahir Ibu</th>
			<th>Pendidikan Ibu</th>
			<th>Pekerjaan Ibu</th>
			<th>No HP Ibu</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$query = mysqli_query($koneksi, "select * from daftar");
		$no = 0;
		while ($daftar = mysqli_fetch_array($query)) {
			$no++;
		?>
			<tr>
				<td><?= $no; ?></td>
				<td class="str"><?= $daftar['no_daftar'] ?></td>
				<td><?= $daftar['nama'] ?></td>
				<td><?= $daftar['jenkel'] ?></td>
				<td><?= $daftar['tempat_lahir'] ?></td>
				<td class="date"><?= $daftar['tgl_lahir'] ?></td>
				<td class="str"><?= $daftar['anak_ke'] ?></td>
				<td>
					<?php
					$lahir    = new DateTime($daftar['tgl_lahir']);
					$today        = new DateTime();
					$umur = $today->diff($lahir);
					echo $umur->y;
					echo " Tahun";
					?>
				</td>
				<td>
					<?php
					$lahir    = new DateTime($daftar['tgl_lahir']);
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
				<td class="str"><?= $daftar['bb'] ?></td>
				<td class="str"><?= $daftar['tt'] ?></td>
				<td class="str"><?= $daftar['bb_lahir'] ?></td>
				<td><?= $daftar['penyakit_sd'] ?></td>
				<td><?= $daftar['penyakit_pd'] ?></td>
				<td><?= $daftar['pantangan_makan'] ?></td>
				<td><?= $daftar['alamat'] ?></td>
				<td><?= $daftar['provinsi'] ?></td>
				<td><?= $daftar['kota'] ?></td>
				<td><?= $daftar['kecamatan'] ?></td>
				<td><?= $daftar['nama_ayah'] ?></td>
				<td class="str"><?= $daftar['tahun_ayah'] ?></td>
				<td><?= $daftar['pendidikan_ayah'] ?></td>
				<td><?= $daftar['pekerjaan_ayah'] ?></td>
				<td><?= $daftar['no_hp_ayah'] ?></td>
				<td><?= $daftar['nama_ibu'] ?></td>
				<td class="str"><?= $daftar['tahun_ibu'] ?></td>
				<td><?= $daftar['pendidikan_ibu'] ?></td>
				<td><?= $daftar['pekerjaan_ibu'] ?></td>
				<td><?= $daftar['no_hp_ibu'] ?></td>
			</tr>

		<?php }
		?>


	</tbody>
</table>