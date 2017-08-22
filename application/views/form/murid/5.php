<div class="row">
	<div class="input-field col s12 m6 l6 xl6">
		<input id="5n" type="text" name="5[nama]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['nama']??'') : ''?>">
		<label for="5n">Nama Ibu</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="5p" type="text" name="5[pekerjaan]" class="validate" value="5<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['pekerjaan']??'') : ''?>">
		<label for="5p">Pekerjaan Ibu</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="5tempatL" type="text" name="5[tempat_l]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['tempat_l']??'') : ''?>">
		<label for="5tempatL">Tempat Lahir Ibu</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="5tanggalL" type="text" name="5[lahir]" class="validate datepicker">
		<label for="5tanggalL">Tanggal Lahir Ibu</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="5agama" type="text" name="5[agama]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['agama']??'') : ''?>">
		<label for="5agama">Agama</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="5tel" type="text" name="5[tel]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['tel']??'') : ''?>">
		<label for="5tel">Nomor Telepon</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="5negara" type="text" name="5[kewarganegaraan]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['kewarganegaraan']??'') : ''?>">
		<label for="5negara">Kewarganegaraan</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<select name="5[pendidikan_t]" id="5pT">
			<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['pendidikan_t'] === 'TK'?'selected':'') : ''?>>TK</option>
			<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['pendidikan_t'] === 'SD'?'selected':'') : ''?>>SD</option>
			<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['pendidikan_t'] === 'SMP'?'selected':'') : ''?>>SMP</option>
			<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['pendidikan_t'] === 'SMA/SMK'?'selected':'') : ''?>>SMA/SMK</option>
			<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['pendidikan_t'] === 'Kuliah'?'selected':'') : ''?>>Kuliah</option>
		</select>
		<label for="5pT">Pendidikan Terakhir</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="5ppb" type="number" name="5[p_perbulan]" class="validate" step="1000" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['p_perbulan']??'1000') : '1000'?>">
		<label for="5ppb">Penghasilan Perbulan (Rp.)</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="5KPS" type="text" name="5[kps]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['kps']??'') : ''?>">
		<label for="5KPS">Kartu Perlindungan Sosial (KPS)</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="5tkou" type="text" name="5[tempat_k]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['tempat_k']??'') : ''?>">
		<label for="5tkou">Tempat Kerja/Usaha</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<textarea id="5alamat" class="materialize-textarea" name="5[alamat]" data-length="256" maxlength="256"><?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][5]['alamat']??'') : ''?></textarea>
		<label for="5alamat">Alamat Lengkap Ibu</label>
	</div>
</div>
<div class="row">
	<div class="col right">
		<button type="button" class="btn to4">Prev</button>
		<button type="submit" class="btn">Submit</button>
	</div>
</div>