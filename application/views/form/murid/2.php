<div class="row">
	<div class="input-field col s12 m6 l6 xl6">
		<input id="panggilan" type="text" name="2[panggilan]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][2]['panggilan']??'') : ''?>">
		<label for="panggilan">Nama Panggilan</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<select name="2[status]" id="status">
			<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][2]['status'] === 'Lengkap'?'selected':'') : ''?>>Lengkap</option>
			<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][2]['status'] === 'Yatim'?'selected':'') : ''?>>Yatim</option>
			<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][2]['status'] === 'Piatu'?'selected':'') : ''?>>Piatu</option>
			<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][2]['status'] === 'Yatim Piatu'?'selected':'') :''?>>Yatim Piatu</option>
		</select>
		<label for="status">Status</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="jSaudara" type="number" name="2[j_saudara]" max="20" min="1" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][2]['j_saudara']??'1') : ''?>">
		<label for="jSaudara">Jumlah saudara</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="tBadan" type="number" name="2[tinggi]" min="100" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][2]['tinggi']??'100') : ''?>">
		<label for="tBadan">Tinggi badan siswa/i (cm)</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="bBadan" type="number" name="2[berat]" min="30" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][2]['berat']??'30') : ''?>">
		<label for="bBadan">Berat badan (kg)</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="hobby" type="text" name="2[hobby]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][2]['hobby']??'') : ''?>">
		<label for="hobby">Hobby</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="prestasi" type="text" name="2[prestasi]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][2]['prestasi']??'') : ''?>">
		<label for="prestasi">Prestasi yang pernah diraih</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="org" type="text" name="2[kegiatan_diluar]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][2]['kegiatan']??'') : ''?>">
		<label for="org">Kegiatan/organisasi Di Luar Sekolah</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="2hp" type="tel" name="2[hp]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][2]['hp']??'2tel') : ''?>">
		<label for="2hp">Nomor Telephone</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<textarea id="eskul" class="materialize-textarea" name="2[eskul]" data-length="256" maxlength="256"><?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][2]['eskul']??'') : ''?></textarea>
		<label for="eskul">Ekstrakulikuler Yang Ingin di Ikuti</label>
	</div>
</div>
<div class="row">
	<div class="col right">
		<button type="button" class="btn to1">Prev</button>
		<button type="button" class="btn to3">Next</button>
	</div>
</div>