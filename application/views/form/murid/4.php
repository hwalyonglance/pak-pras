<div class="row">
	<div class="input-field col s12 m6 l6 xl6">
		<input id="4n" type="text" name="4[nama]" class="validate" value="<?=isset($data) ? ($data['murid'][4]['nama']??'') : ''?>">
		<label for="4n">Nama Ibu</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="4p" type="text" name="4[pekerjaan]" class="validate" value="<?=isset($data) ? ($data['murid'][4]['pekerjaan']??'') : ''?>">
		<label for="4p">Pekerjaan Ibu</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="4tempatL" type="text" name="4[tempat_l]" class="validate" value="<?=isset($data) ? ($data['murid'][4]['tempat_l']??'') : ''?>">
		<label for="4tempatL">Tempat Lahir Ibu</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="4tanggalL" type="text" name="4[lahir]" class="validate datepicker" >
		<label for="4tanggalL">Tanggal Lahir Ibu</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="4agama" type="text" name="4[agama]" class="validate" value="<?=isset($data) ? ($data['murid'][4]['agama']??'') : ''?>">
		<label for="4agama">Agama</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="4tel" type="text" name="4[tel]" class="validate" value="<?=isset($data) ? ($data['murid'][4]['tel']??'') : ''?>">
		<label for="4tel">Nomor Telepon</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="4negara" type="text" name="4[kewarganegaraan]" class="validate" value="<?=isset($data) ? ($data['murid'][4]['kewarganegaraan']??'') : ''?>">
		<label for="4negara">Kewarganegaraan</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<select name="4[pendidikan_t]" id="pT">
			<option <?=isset($data) ? ($data['murid'][4]['pendidikan_t'] === 'TK'?'selected':'') : ''?>>TK</option>
			<option <?=isset($data) ? ($data['murid'][4]['pendidikan_t'] === 'SD'?'selected':'') : ''?>>SD</option>
			<option <?=isset($data) ? ($data['murid'][4]['pendidikan_t'] === 'SMP'?'selected':'') : ''?>>SMP</option>
			<option <?=isset($data) ? ($data['murid'][4]['pendidikan_t'] === 'SMA/SMK'?'selected':'') : ''?>>SMA/SMK</option>
			<option <?=isset($data) ? ($data['murid'][4]['pendidikan_t'] === 'Kuliah'?'selected':'') : ''?>>Kuliah</option>
		</select>
		<label for="4pT">Pendidikan Terakhir</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="4ppb" type="number" name="4[p_perbulan]" class="validate" step="1000" value="<?=isset($data) ? ($data['murid'][4]['p_perbulan']??'1000') : '1000'?>">
		<label for="4ppb">Penghasilan Perbulan (Rp.)</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="4KPS" type="text" name="4[kps]" class="validate" value="<?=isset($data) ? ($data['murid'][4]['kps']??'') : ''?>">
		<label for="4KPS">Kartu Perlindungan Sosial (KPS)</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<input id="4tkou" type="text" name="4[tempat_k]" class="validate" value="<?=isset($data) ? ($data['murid'][4]['tempat_k']??'') : ''?>">
		<label for="4tkou">Tempat Kerja/Usaha</label>
	</div>
	<div class="input-field col s12 m6 l6 xl6">
		<textarea id="4alamat" class="materialize-textarea" name="4[alamat]" data-length="256" maxlength="256"><?=isset($data) ? ($data['murid'][4]['alamat']??'') : ''?></textarea>
		<label for="4alamat">Alamat Lengkap Ibu</label>
	</div>
</div>
<div class="row">
	<div class="col right">
		<button type="button" class="btn to3">Prev</button>
		<button type="button" class="btn to5">Next</button>
	</div>
</div>