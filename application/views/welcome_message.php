<?php defined('BASEPATH') OR exit('No direct script access allowed');
	$this->load->view('_atas');
	$this->load->view('_nav');
?>
<div class="container" style="margin-top: 32px">
	<div class="row">
		<div class="col s12 m12 l8 xl8" style="border: 1px solid red">
			<h3>Visi</h3>
			<p>
				Menjadi Lembaga Pendidikan yag bermutu dan berwawasan Internasional dengan
				lulusan yang mantap dalam imtaq, unggul dalam iptek, berprestasi serta siap
				bersaing dalam menghadapi tantangan Global.
			</p>
			<h3>Misi</h3>
			<p>
				<ol>
					<li>
						Menghasilkan tamatan yang memiliki ketaqwaan yang tinggi kepada tuhan
						yang maha esa dan memiliki kesadaran yang tinggi terhadap keharmonisan
						lingkungannya.
					</li>
					<li>
						Menghasilkan tamatan yang memiliki kompetensi tinggi, mampu bersaing
						di pasar tenaga kerja Nasional dan Internasional.
					</li>
					<li>
						Menghasilkan tamatan yang mampu memenuhi tuntutan ilmu Pengetahuan
						dan Teknologi sebagai bekal untuk mengembangkan dirinya.
					</li>
					<li>
						Menyelenggarakan Pendidikan Dan Pelatihan di bidang Teknologi bagi Masyarakat.
					</li>
				</ol>
			</p>
			<table>
				<tr>
					<td>Nama Sekolah</td>
					<td>: SMK Bakti Nusantara 666</td>
				</tr>
				<tr>
					<td>NISS</td>
					<td>: 4020 2083 5076</td>
				</tr>
				<tr>
					<td>NPSN</td>
					<td>: 20267919</td>
				</tr>
				<tr>
					<td>Status Sekolah</td>
					<td>: Swasta</td>
				</tr>
				<tr>
					<td>No/Tahun SK Pendirian</td>
					<td>: 421.3/1972 Didikbud 2009</td>
				</tr>
				<tr>
					<td>Tanggal SK Pendirian</td>
					<td>: 20 November 2009</td>
				</tr>
				<tr>
					<td>PBM</td>
					<td>: Pagi</td>
				</tr>
				<tr>
					<td>Akreditasi Jurusan</td>
					<td>: RPL A (2013), DKV A (2013), Animasi A (2013)</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>: Jl Percobaan Km. 17, 1 No. 65 Cileunyi Kab. Bandung-jawa Barat 40393</td>
				</tr>
				<tr>
					<td>No. Telepon/Fax</td>
					<td>: 022-70721934</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>: baknus_666@yahoo.co.id , workshopbn666@gmail.com</td>
				</tr>
			</table>
		</div>
		<div class="col s12 m12 l4 xl4" style="border: 1px solid green">
			<div class="row">
				<div class="col s12">
					<?php $this->load->view('post/_newest') ?>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<?php $this->load->view('post/_most_popular') ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	$this->load->view('_footer');
