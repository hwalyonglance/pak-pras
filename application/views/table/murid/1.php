<div class="row">
	<div class="col s12">
		<h2 class="center">Data Pribadi Siswa/i</h2>
	</div>
</div>
<div class="row">
	<div class="col s6 m6 l6 xl6">
		<table>
			<!-- <colgroup style="width: 80px !important"></colgroup> -->
			<tr>
				<td></td>
				<td>
					<img src="<?=base_url()?>uploads/murid/<?=$data['murid'][1]['foto']?>" class='img-1-foto hoverable'>
				</td>
			</tr>
			<tr>
				<td>Asal SMP</td>
				<td>: <?=$data['murid'][1]['asal']?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>: <?=$data['murid'][1]['agama']?></td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>: <?=$data['murid'][1]['tempat_l']?>, <?=$data['murid'][1]['tanggal_l']?></td>
			</tr>
		</table>
	</div>
	<div class="col s6 m6 l6 xl6">
		<table>
			<!-- <colgroup style="width: 80px !important"></colgroup> -->
			<tr>
				<td>#ID</td>
				<td>: <?=$data['murid'][1]['id']?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>: <?=$data['murid'][1]['nama']?></td>
			</tr>
			<tr>
				<td>Lulusan</td>
				<td>: <?=$data['murid'][1]['lulus']?></td>
			</tr>
			<tr>
				<td>JK</td>
				<td>: <?=$data['murid'][1]['jk']?></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td>: <?=$data['murid'][1]['nik']?></td>
			</tr>
			<tr>
				<td>Ijazah</td>
				<td>: <?=$data['murid'][1]['ijazah']?></td>
			</tr>
			<tr>
				<td>SKHU</td>
				<td>: <?=$data['murid'][1]['skhu']?></td>
			</tr>
			<tr>
				<td>NISN</td>
				<td>: <?=$data['murid'][1]['nisn']?></td>
			</tr>
			<tr>
				<td>Darah</td>
				<td>: <?=$data['murid'][1]['goldar']?></td>
			</tr>
		</table>
	</div>
</div>
<div class="row">
	<div class="col s12">
		<table>
			<!-- <colgroup style="width: 80px"></colgroup> -->
			<tr>
				<td>Alamat</td>
				<td>: <?=$data['murid'][1]['alamat']?></td>
			</tr>
		</table>
	</div>
</div>
