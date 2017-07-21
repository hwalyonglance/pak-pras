<div class="row">
	<div class="input-field col s12 m6 l6 xl6">
		<input id="3n" type="text" name="3[nama]" class="validate" value="<?=isset($data) ? ($data['murid'][3]['nama']??'') : ''?>">
		<label for="3n">Nama Ayah</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="3p" type="text" name="3[pekerjaan]" class="validate" value="<?=isset($data) ? ($data['murid'][3]['pekerjaan']??'') : ''?>">
		<label for="3p">Pekerjaan Ayah</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="3tempatL" type="text" name="3[tempat_l]" class="validate" value="<?=isset($data) ? ($data['murid'][3]['tempat_l']??'') : ''?>">
		<label for="3tempatL">Tempat Lahir Ayah</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="3tanggalL" type="text" name="3[lahir]" class="validate datepicker">
		<label for="3tanggalL">Tanggal Lahir Ayah</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="3agama" type="text" name="3[agama]" class="validate" value="<?=isset($data) ? ($data['murid'][3]['agama']??'') : ''?>">
		<label for="3agama">Agama</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="3tel" type="text" name="3[tel]" class="validate" value="<?=isset($data) ? ($data['murid'][3]['tel']??'') : ''?>">
		<label for="3tel">Nomor Telepon</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="3negara" type="text" name="3[kewarganegaraan]" class="validate" value="<?=isset($data) ? ($data['murid'][3]['kewarganegaraan']??'') : ''?>">
		<label for="3negara">Kewarganegaraan</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<select name="3[pendidikan_t]" id="pT">
			<option <?=isset($data) ? ($data['murid'][3]['pendidikan_t'] === 'TK'?'selected':'') : ''?>>TK</option>
			<option <?=isset($data) ? ($data['murid'][3]['pendidikan_t'] === 'SD'?'selected':'') : ''?>>SD</option>
			<option <?=isset($data) ? ($data['murid'][3]['pendidikan_t'] === 'SMP'?'selected':'') : ''?>>SMP</option>
			<option <?=isset($data) ? ($data['murid'][3]['pendidikan_t'] === 'SMA/SMK'?'selected':'') : ''?>>SMA/SMK</option>
			<option <?=isset($data) ? ($data['murid'][3]['pendidikan_t'] === 'Kuliah'?'selected':'') : ''?>>Kuliah</option>
		</select>
		<label for="3pT">Pendidikan Terakhir</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="3ppb" type="number" name="3[p_perbulan]" class="validate" step="1000" value="<?=isset($data) ? ($data['murid'][3]['p_perbulan']??'1000') : '1000'?>">
		<label for="3ppb">Penghasilan Perbulan (Rp.)</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="3KPS" type="text" name="3[kps]" class="validate" value="<?=isset($data) ? ($data['murid'][3]['kps']??'') : ''?>">
		<label for="3KPS">Kartu Perlindungan Sosial (KPS)</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="3tkou" type="text" name="3[tempat_k]" class="validate" value="<?=isset($data) ? ($data['murid'][3]['tempat_k']??''): ''?>">
		<label for="3tkou">Tempat Kerja/Usaha</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<textarea id="3alamat" class="materialize-textarea" name="3[alamat]" data-length="256" maxlength="256"><?=isset($data) ? ($data['murid'][3]['alamat']??'') : ''?></textarea>
		<label for="3alamat">Alamat Lengkap Ayah</label>
	</div>
</div>
<div class="row">
	<div class="col right">
		<button type="button" class="btn to2">Prev</button>
		<button type="button" class="btn to4">Next</button>
	</div>
</div>