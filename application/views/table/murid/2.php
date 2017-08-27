<div class="row">
	<div class="col s12">
		<h2 class="center">Keterangan Siswa/i</h2>
	</div>
</div>
<div class="row">
	<div class="col s6 m6 l6 xl6">
		<table>
			<colgroup style="width: 80px !important"></colgroup>
			<tr>
				<td>#ID</td>
				<td>: <?=$data['murid'][2]['id']?></td>
			</tr>
			<tr>
				<td>Panggilan</td>
				<td>: <?=$data['murid'][2]['panggilan']?></td>
			</tr>
			<tr>
				<td>Saudara</td>
				<td>: <?=$data['murid'][2]['j_saudara']?></td>
			</tr>
			<tr>
				<td>Tinggi</td>
				<td>: <?=$data['murid'][2]['tinggi']?>cm</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>: <?=$data['murid'][2]['hobby']?></td>
			</tr>
			<tr>
				<td>Tel</td>
				<td>: <?=$data['murid'][2]['hp']?></td>
			</tr>
		</table>
	</div>
	<div class="col s6 m6 l6 xl6">
		<table>
			<colgroup style="width: 80px !important"></colgroup>
			<tr>
				<td>Kegiatan</td>
				<td>: <?=$data['murid'][2]['kegiatan_diluar']?></td>
			</tr>
			<tr>
				<td>Eskul</td>
				<td>: <?=$data['murid'][2]['eskul']?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>: <?=$data['murid'][2]['status']?></td>
			</tr>
			<tr>
				<td>Berat</td>
				<td>: <?=$data['murid'][2]['berat']?>Kg</td>
			</tr>
			<tr>
				<td>Prestasi</td>
				<td>: <?=$data['murid'][2]['prestasi']?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>: <?=$data['murid'][2]['email']?></td>
			</tr>
		</table>
	</div>
</div>
<!-- .container>(.row>.col.s12>h2.center)+(.row>.col.s12.m6.l6.xl6*2>table>(tr>td*3)*5) -->
