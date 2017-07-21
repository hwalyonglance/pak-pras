<div class="row">
	<div class="col s12">
		<h2 class="center">Data Wali</h2>
	</div>
</div>
<div class="row">
	<div class="col s12 m12 l6 xl6">
		<table>
			<colgroup style="width: 20% !important"></colgroup>
			<colgroup style="width: 80% !important"></colgroup>
			<tr>
				<td>#ID</td>
				<td>: <?=$data['murid'][5]['id']?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>: <?=$data['murid'][5]['nama']?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>: <?=$data['murid'][5]['pekerjaan']?></td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>: <?=$data['murid'][5]['tempat_l']?>, <?=$data['murid'][5]['lahir']?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>: <?=$data['murid'][5]['agama']?></td>
			</tr>
			<tr>
				<td>Tel</td>
				<td>: <?=$data['murid'][5]['tel']?></td>
			</tr>
		</table>
	</div>
	<div class="col s12 m12 l6 xl6">
		<table>
			<colgroup style="width: 20% !important"></colgroup>
			<colgroup style="width: 80% !important"></colgroup>
			<tr>
				<td>Negara</td>
				<td>: <?=$data['murid'][5]['kewarganegaraan']?></td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>: <?=$data['murid'][5]['pendidikan_t']?></td>
			</tr>
			<tr>
				<td>Penghasilan</td>
				<td>: Rp.<?=number_format($data['murid'][5]['p_perbulan'],0,',',' ')?>/bulan</td>
			</tr>
			<tr>
				<td>KPS</td>
				<td>: <?=$data['murid'][5]['kps']?></td>
			</tr>
			<tr>
				<td>Bekerja di</td>
				<td>: <?=$data['murid'][5]['tempat_k']?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>: <?=$data['murid'][5]['alamat']?></td>
			</tr>
		</table>
	</div>
</div>