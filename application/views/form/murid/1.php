<div class="row">
	<div class="col s12 m6 l6 xl6">
		<div class="row">
			<div class="file-field input-field col s12">
				<div class="btn">
					<span>Foto</span>
					<input type="file" name="1_foto" onchange="loadImageFileAsUrl(this)" class="belum" id="1_foto">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
				<?php if( in_array($_SERVER['PATH_INFO'], ['/su/murid','/murid/daftar']) ){ ?>
					<div class="red-text" id="foto-err">
						Tolong unggah foto!
					</div>
				<?php } ?>
			</div>
			<div class="col s12" style="display: flex">
				<img src="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['foto'] ? base_url().'uploads/murid/'.$data['murid'][1]['foto'] : base_url().'assets/img/samples/hitam.png') : base_url().'assets/img/samples/hitam.png'?>" id="preview" class='imgprev'>
			</div>
			<div class="input-field col s12">
				<input id="first_name" type="text" name="1[nama]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['nama']??'') : ''?>">
				<label for="first_name">Nama Lengkap</label>
			</div>
			<div class="input-field col s12">
				<select name="1[jk]" id="jk">
					<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['jk'] === 'Laki-Laki'?'selected':'') : ''?>>Laki-Laki</option>
					<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['jk'] === 'Perempuan'?'selected':'') : ''?>>Perempuan</option>
				</select>
				<label for="jk">Jenis Kelamin</label>
			</div>
			<div class="input-field col s12">
				<input id="tempat_l" type="text" name="1[tempat_l]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['tempat_l']??'') : ''?>">
				<label for="tempat_l">Tempat Lahir</label>
			</div>
			<div class="col s12">
				<label for="tanggal_l" style="color: #000">Tanggal Lahir</label>
				<input id="tanggal_l" type="text" name="1[tanggal_l]" class="datepicker" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['tanggal_l']??'') : ''?>">
			</div>
			<div class="input-field col s12">
				<input id="nik" type="text" name='1[nik]' class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['nik']??'') : ''?>">
				<label for="nik">NIK</label>
			</div>
		</div>
	</div>
	<div class="col s12 m6 l6 xl6">
		<div class="row">
			<div class="input-field col s12">
				<input id="agama" type="text" name='1[agama]' class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['agama']??'') : ''?>">
				<label for="agama">Agama</label>
			</div>
			<div class="input-field col s12">
				<input id="aSekolah" type="text" name='1[asal]' class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['asal']??'') : ''?>">
				<label for="aSekolah">Asal Sekolah</label>
			</div>
			<div class="col s12">
				<label for="tLulus" style="color: #000">Tahun Lulus SMP/MTs</label>
				<input id="tLulus" type="date" name='1[lulus]' class="datepicker">
			</div>
			<div class="input-field col s12">
				<input id="ijazah" type="text" name="1[ijazah]" class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['ijazah']??'') : ''?>">
				<label for="ijazah">Nomor Ijazah</label>
			</div>
			<div class="input-field col s12">
				<input id="skhu" type="text" name='1[skhu]' class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['skhu']??'') : ''?>">
				<label for="skhu">Nomor SKHU</label>
			</div>
			<div class="input-field col s12">
				<input id="nisn" type="text" name='1[nisn]' class="validate" value="<?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['nisn']??'') : ''?>">
				<label for="nisn">Nomor NISN</label>
			</div>
			<div class="input-field col s12">
				<select name="1[goldar]" id="goldar" class="validate">
					<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['goldar'] === 'A'?'selected':'') : ''?>>A</option>
					<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['goldar'] === 'B'?'selected':'') : ''?>>B</option>
					<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['goldar'] === 'AB'?'selected':'') : ''?>>AB</option>
					<option <?=isset($data) && $data['display'] === 'detail' ? ($data['murid'][1]['goldar'] === 'O'?'selected':'') : ''?>>O</option>
				</select>
				<label for="goldar">Golongan Darah</label>
			</div>
			<div class="input-field col s12">
				<textarea id="textarea1" class="materialize-textarea" name="1[alamat]" data-length="256" maxlength="256"><?=isset($data) ? ($data['murid'][1]['alamat']??'') : ''?></textarea>
				<label for="textarea1">Alamat Lengkap Murid</label>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col right">
		<button type="button" class="btn to2" <?= in_array($_SERVER['PATH_INFO'], ['/su/murid','/murid/daftar']) ? 'disabled="disabled"' : '' ?>>Next</button>
	</div>
</div>